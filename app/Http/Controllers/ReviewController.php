<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Anime;
use App\Models\Review;

class ReviewController extends Controller{
    
    public function create(Anime $anime){
        return view('reviews.create')->with(['anime' => $anime]);
    }
    
    public function store(Request $request, Anime $anime, Review $review){
        
        $request->validate([
        "review.star" => "required|integer|between:1,5",  
        "review.comment" => "required|string|between:2,200"
        ]);  
        
        $input = $request['review'];
        $input['anime_id'] = $anime->id;
        $input['user_id'] = Auth::id();
        // reviewsテーブルにレビューを登録する処理
        $review->fill($input)->save();
        // 登録に成功したレビューに紐づくアニメ詳細画面に遷移
        return redirect('/animes/' . $anime->id);
    }
}
