<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anime;
use App\Models\Category;
use App\Models\Original;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class AnimeController extends Controller{
    
    public function __construct(){
        $this->middleware('auth');
    }
    
    // アニメ一覧表示
    public function index (Anime $anime,Category $category,Original $original,Request $request){
        // リクエストから 'category' パラメータを取得し、nullでなければその値を使用します
        $categoryId = $request->filled('category_id') ? $request->category_id : null;
        // リクエストから 'original' パラメータを取得し、nullでなければその値を使用します
        $originalId = $request->filled('original_id') ? $request->original_id : null;
        // リクエストから 'orderByControl' パラメータを取得し、nullでなければその値を使用します
        $orderByFlg = $request->filled('orderByControl') ? $request->orderByControl : null;
        // 各並び替え順のフラグを定義
        $animeReviewStarsFlag = null;   // 星の数順
        $BroadStartSortAscFlg = null;   // 放送開始日古い順
        $BroadStartSortDescFlg = null;  // 放送開始日新しい順
        $JapaneseOrderSortFlg = null;   // 50音順
        $favoriteOrderSortFlg = null;   // お気に入り数順
        $commentOrderSortFlg = null;    // コメント数順
        // $orderByFlgの値によって、並び替えの条件分岐
        switch($orderByFlg){
            case 1 :
            // 星の数順からパラメーターを取得し、nullでなければその値を使用します
                $animeReviewStarsFlag = $request->orderByControl;
            break;
            case 2 :
            // 放送開始日古い順からパラメーターを取得し、nullでなければその値を使用します
                $BroadStartSortAscFlg = $request->orderByControl;
            break;
            case 3 :
            // 放送開始日新しい順からパラメーターを取得し、nullでなければその値を使用します
                $BroadStartSortDescFlg = $request->orderByControl;
            break;
            case 4 :
            // 50音順からパラメーターを取得し、nullでなければその値を使用します
                $JapaneseOrderSortFlg = $request->orderByControl;
            break;
            case 5 :
            // お気に入り数順からパラメーターを取得し、nullでなければその値を使用します
                $favoriteOrderSortFlg = $request->orderByControl;
            break;
            case 6 :
            // コメント数順からパラメーターを取得し、nullでなければその値を使用します
                $commentOrderSortFlg = $request->orderByControl;
            break;
        }
        // 曖昧検索からパラメーターを取得し、nullでなければその値を使用します
        $escapeWord = $request->filled('animesWord') ? $request->animesWord : null;
        // モデルからフィルタリングとページネーションを行うメソッドを呼び出します
        $animes = Anime::filteredByCategoryAndOriginalOrderedByAverageStars(
            $categoryId,
            $originalId,
            $animeReviewStarsFlag,
            $BroadStartSortAscFlg,
            $BroadStartSortDescFlg,
            $JapaneseOrderSortFlg,
            $favoriteOrderSortFlg,
            $commentOrderSortFlg,
            $escapeWord
        );
        
        // ページネーションの値をセッションに保持
        session(['last_page_type' => 'index', 'last_page_number' => $request->page]);
        
        return view('anime.index')->with([
            'category_id' => $categoryId,
            'original_id' => $originalId,
            'orderByControl' => $orderByFlg,
            'animesWord' => $escapeWord,
            'animes' => $animes,
            // カテゴリー、原作検索のドロップダウン
            'dropDownCategories' => $category->get(),
            'dropDownOriginals' => $original->get()
        ]);
    }
    
    // アニメ詳細表示
    public function show (Anime $anime){
        // favoritesテーブルにアニメがあるか判定を行います
        $user = auth()->user();
        $isFavorite = $user->favoriteAnimes()->where('anime_id', $anime->id)->exists();
        
        return view('anime.show')->with([
            'anime' => $anime,
            'favoriteFlg' => $isFavorite,
            'reviews' => $anime->reviews,
            'star_average' => $anime->averageReviewStar()
        ]);
    }
     
    // アニメお気に入り処理
    public function toggleFavorite(Request $request, Anime $anime){
        $user = auth()->user();
        $isFavorite = $user->favoriteAnimes()->where('anime_id', $anime->id)->exists();
        if ($isFavorite) {
            // お気に入り解除
            $user->favoriteAnimes()->detach($anime);
        } else {
            // お気に入り
            $user->favoriteAnimes()->attach($anime);
        }
        return redirect('/animes/' . $anime->id);
    }
    
    // 管理者専用アニメ追加画面へ遷移
    public function create (Anime $anime, Category $category, Original $original){
        return view('anime.create')->with([
            'anime' => $anime,
            // カテゴリー、原作検索のドロップダウン
            'dropDownCategories' => $category->get(),
            'dropDownOriginals' => $original->get()
        ]);
    }
    
    // 管理者専用アニメ追加処理
    public function store (Anime $anime, Category $category, Original $original, Request $request){
        // アニメ情報保存処理
        $anime_data = $request->input('anime', []);
        $categories = $request->input('anime_category.category_id', []);
        
        // 画像保存処理
        if($request->has('image')){
            $image = $request->file('image');
            $imageName = time().'.'.$request->image->extension();
            // $path = Storage::disk('public')->putFile('images', $image);
            $request->image->move(public_path('images'), $imageName);
            $anime_data['image'] = $imageName;
        }
        // lightsailの不具合により、S3への画像保存処理ができなかった。
        // $path = Storage::disk('s3')->put('images', $image);
        // $anime_data['image'] = Storage::disk('s3')->url($path);
        $anime->fill($anime_data)->save();
        $anime->categories()->sync($categories);
        
        return redirect('/');
    } 
    
    // 管理者専用アニメカテゴリー追加画面へ遷移
    public function createCategory (Category $category, Request $request){
        return view('anime.createCategory')->with([
            'allCategories' => $category->get()
            ]);
    }
    
    // 管理者専用アニメカテゴリー追加処理
    public function storeCategory (Category $category, Request $request){
        $category->category_name = $request->category_name;
        $category->save();
        return redirect('/');
    }
    
    // 管理者専用アニメ編集画面へ遷移
    public function edit (Anime $anime, Category $category, Original $original){
        return view('anime.edit')->with([
            'anime' => $anime,
            // カテゴリー、原作検索のドロップダウン
            'dropDownCategories' => $category->get(),
            'dropDownOriginals' => $original->get()
        ]);
    }
    
    // 管理者専用アニメ編集処理
    public function update (Anime $anime, Request $request){
        // アニメ情報編集の保存処理
        $anime_data = $request->input('anime', []);
        $categories = $request->input('anime_category.category_id', []);
        // 画像保存処理
        $oldImagePath = $anime->image;
        $requestImage = $request->has('image');
        if($requestImage){
            $image = $request->file('image');
            $imageName = time().'.'.$request->image->extension();
            // $path = Storage::disk('public')->putFile('images', $image);
            $request->image->move(public_path('images'), $imageName);
            $anime_data['image'] = $imageName;
        }
        // lightsailの不具合により、S3への画像保存処理ができなかった。
        // $path = Storage::disk('s3')->put('images', $image);
        // $anime_data['image'] = Storage::disk('s3')->url($path);
        $anime->fill($anime_data)->save();
        $anime->categories()->sync($categories);
        
        if($requestImage){
            if (File::exists(public_path('images/' . $oldImagePath))) {
                File::delete(public_path('images/' . $oldImagePath));
            }
        }
        return redirect('/animes/' . $anime->id);
    }
    
    // お気に入りリスト画面へ遷移
    public function favoriteList (Anime $anime, Request $request){
        $perPage = 6;
        $user = auth()->user();
        $favorites = $user->favoriteAnimes()->with('reviews')->paginate($perPage);
        // お気に入りリストのページネーションの値をセッションに保存
        session(['last_page_type' => 'favoriteList', 'last_page_number' => $request->page]);
        
        return view('anime.favoriteList')->with([
            'animes' => $favorites
        ]);
    }
    
    // セッションに保存されているページの値を付与
    public function backToIndex(){
        $lastPageType = session('last_page_type');
        $lastPageNumber = session('last_page_number', 1); // デフォルトは1ページ目
        if ($lastPageType === 'favoriteList') {
            // お気に入り一覧画面に戻る
            return redirect()->route('favoriteList', ['page' => $lastPageNumber]);
        } else {
            // 一般の一覧画面に戻る
            return redirect()->route('index', ['page' => $lastPageNumber]);
        }
    }
}