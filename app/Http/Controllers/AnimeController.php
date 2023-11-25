<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anime;
use App\Models\Category;
use App\Models\Original;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;

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
            $escapeWord
        );
        
        // dd($animes);
        
        return view('anime.index')->with([
            'category_id' => $categoryId,
            'original_id' => $originalId,
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
    public function adminAnimeCreate (Anime $anime, Category $category, Original $original, Request $request){
        return view('anime.create')->with([
            'anime' => $anime,
            // カテゴリー、原作検索のドロップダウン
            'dropDownCategories' => $category->get(),
            'dropDownOriginals' => $original->get()
        ]);
    }
    
    // 管理者専用アニメ追加処理
    public function adminAnimeStore (Anime $anime, Category $category, Original $original, Request $request){
        // // リクエストから 'title' パラメータを取得します
        // $title = $request->filled('title');
        // // リクエストから 'Hiragana_title' パラメータを取得します
        // $HiraganaTitle = $request->filled('Hiragana_title');
        // // リクエストから 'Latin_alphabet_title' パラメータを取得します
        // $LatinAlphabetTitle = $request->filled('Latin_alphabet_title');
        // // リクエストから 'first_broadcast_start_date' パラメータを取得します
        // $firstBroadcastStartDate = $request->filled('first_broadcast_start_date');
        // // リクエストから 'second_broadcast_start_date' パラメータを取得します
        // $secondBroadcastStartDate = $request->filled('second_broadcast_start_date') ? $request->second_broadcast_start_date : null;
        // // リクエストから 'third_broadcast_start_date' パラメータを取得します
        // $thirdBroadcastStartDate = $request->filled('third_broadcast_start_date') ? $request->third_broadcast_start_date : null;
        // // リクエストから 'fourth_broadcast_start_date' パラメータを取得します
        // $fourthBroadcastStartDate = $request->filled('fourth_broadcast_start_date') ? $request->fourth_broadcast_start_date : null;
        // // リクエストから 'synopsis' パラメータを取得します
        // $synopsis = $request->filled('synopsis');
        // // リクエストから 'category' パラメータを取得します
        // $categoryId = $request->filled('category_id');
        // // リクエストから 'original' パラメータを取得します
        // $originalId = $request->filled('original_id');
        
        $input = $request['anime'];
        $anime->fill($input)->save();
        return redirect('/');
    }
    
    // 管理者専用アニメ編集画面へ遷移
    public function adminAnimeEdit (Anime $anime){
        return view('anime.edit')->with([
            'anime' => $anime,
        ]);
    }
}