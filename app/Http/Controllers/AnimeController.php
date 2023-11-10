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
        // モデルからフィルタリングとページネーションを行うメソッドを呼び出します
        if($categoryId == null && $originalId == null){
            $animes = $anime->OrderedByAverageStars()->get();
        }else if($categoryId !== null || $originalId !== null){
            if($categoryId !== null){
                $animes = Anime::filteredCategoryAndOrderedByAverageStars($categoryId);
            }else if($originalId !== null){
                $animes = Anime::filteredOriginalAndOrderedByAverageStars($originalId);   
            }
        }
        return view('anime.index')->with([
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