<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anime;
use App\Models\Category;
use App\Models\Original;

class AnimeController extends Controller{
    
    public function __construct(){
        $this->middleware('auth');
    }
    
    // アニメ一覧表示
    public function index (Anime $anime,Category $category,Original $original,Request $request){
        $pageTitle = '';
        $pageTitleFlg = false;
        if(!$request->has('from_form')){
            $pageTitle = "アニメ TOPランキング";
            $pageTitleFlg = true;
        }
        // リクエストから 'category' パラメータを取得し、nullでなければその値を使用します
        $categoryId = $request->filled('category_id') ? $request->category_id : null;
        // リクエストから 'original' パラメータを取得し、nullでなければその値を使用します
        $originalId = $request->filled('original_id') ? $request->original_id : null;
        // 放送開始日順表示ボタン（古い順）からパラメーターを取得し、nullでなければその値を使用します
        $BroadStartSortAscFlg = null;
        if($request->filled('BroadStartSortAsc')){
            $BroadStartSortAscFlg = $request->BroadStartSortAs;
            $pageTitle = "放送日古い順ページ";
        }
        // 放送開始日順表示ボタン（新しい順）からパラメーターを取得し、nullでなければその値を使用します
        $BroadStartSortDescFlg = null;
        if($request->filled('BroadStartSortDesc')){
            $BroadStartSortDescFlg = $request->BroadStartSortDesc;
            $pageTitle = "放送日新しい順ページ";
        }
        // 50音順表示ボタンからパラメーターを取得し、nullでなければその値を使用します
        $JapaneseOrderSortFlg = null;
        if($request->filled('JapaneseOrderSort')){
            $JapaneseOrderSortFlg = $request->JapaneseOrderSort;
            $pageTitle = "50音順ページ";
        }
        // 曖昧検索からパラメーターを取得し、nullでなければその値を使用します
        $escapeWord = $request->filled('animesWord') ? $request->animesWord : null;
        // モデルからフィルタリングとページネーションを行うメソッドを呼び出します
        $animes = Anime::filteredByCategoryAndOriginalOrderedByAverageStars(
            $categoryId,
            $originalId,
            $BroadStartSortAscFlg,
            $BroadStartSortDescFlg,
            $JapaneseOrderSortFlg,
            $escapeWord
        );
        
        return view('anime.index')->with([
            'category_id' => $categoryId,
            'original_id' => $originalId,
            'animesWord' => $escapeWord,
            'pageTitle' => $pageTitle,
            'pageTitleFlg' => $pageTitleFlg,
            'animes' => $animes,
            'dropDownCategories' => $category->get(),
            'dropDownOriginals' => $original->get()
        ]);
    }
    
    // アニメ詳細表示
    public function show (Anime $anime){
        return view('anime.show')->with([
            'anime' => $anime,
            'reviews' => $anime->reviews,
            'star_average' => $anime->averageReviewStar()
        ]);
    }
}