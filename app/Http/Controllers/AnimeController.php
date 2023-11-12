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
        // リクエストから 'category' パラメータを取得し、nullでなければその値を使用します
        $categoryId = $request->filled('category_id') ? $request->category_id : null;
        // リクエストから 'original' パラメータを取得し、nullでなければその値を使用します
        $originalId = $request->filled('original_id') ? $request->original_id : null;
        // 放送開始日順表示ボタン（古い順）からパラメーターを取得し、nullでなければその値を使用します
        $BroadStartSortAscId = $request->filled('BroadStartSortAsc') ? $request->BroadStartSortAsc : null;
        // 放送開始日順表示ボタン（新しい順）からパラメーターを取得し、nullでなければその値を使用します
        $BroadStartSortDescId = $request->filled('BroadStartSortDesc') ? $request->BroadStartSortDesc : null;
        // 50音順表示ボタンからパラメーターを取得し、nullでなければその値を使用します
        $JapaneseOrderSortId = $request->filled('JapaneseOrderSort') ? $request->JapaneseOrderSort : null;
        if($categoryId !== null || $originalId !== null){
            // モデルからフィルタリングとページネーションを行うメソッドを呼び出します
            $animes = Anime::filteredByCategoryAndOriginalIdOrderedByAverageStars($categoryId, $originalId);
            $pageTitle = "カテゴリー、原作検索ページ";
        }else if($JapaneseOrderSortId !== null){
            // モデルからフィルタリングを行う50音順並び替えメソッドを呼び出します
            $animes = Anime::OrderByJapaneseOrder($JapaneseOrderSortId);
            $pageTitle = "50音順ページ";
        }else if($BroadStartSortAscId !== null || $BroadStartSortDescId !== null){
            // モデルからフィルタリングを行う放送日順並び替えメソッドを呼び出します
            $animes = Anime::OrderByBroadcastStart($BroadStartSortAscId,$BroadStartSortDescId);
            $pageTitle = "放送開始日順ページ";
        }else{
            // TOPページ（ランキング順）の並び替え
            $animes = $anime->withAvg('reviews', 'star')->orderByDesc('reviews_avg_star')->get();
            $pageTitle = "TOP アニメランキング";
        }
        return view('anime.index')->with([
            'pageTitle' => $pageTitle,
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