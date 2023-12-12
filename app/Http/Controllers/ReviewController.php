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
    
    // 口コミ投稿処理
    public function store(Request $request, Anime $anime, Review $review){
        // レビュー用バリデーション
        $request->validate([
        "review.star" => "required|integer|between:1,5",  
        "review.comment_title" => "required|string|between:2,25",
        "review.comment" => "required|string|between:2,200"
        ]);
        
        $input = $request['review'];
        $input['anime_id'] = $anime->id;
        $input['user_id'] = Auth::id();
        $review->fill($input)->save();
        // 登録に成功したレビューに紐づくアニメ詳細画面に遷移
        return redirect('/animes/' . $anime->id);
    }
    
    // 口コミ編集画面へ遷移
    public function reviewEdit(Anime $anime, Review $review){
        return view('reviews.edit')->with([
            'anime' => $anime,
            'review' => $review
        ]);
    }
    
    // 口コミ編集処理
    public function reviewUpdate(Request $request, Anime $anime, Review $review){
        // レビュー用バリデーション
        $request->validate([
        "review.star" => "required|integer|between:1,5",  
        "review.comment_title" => "required|string|between:2,25",
        "review.comment" => "required|string|between:2,200"
        ]);
        
        $input = $request['review'];
        $input['anime_id'] = $anime->id;
        $input['user_id'] = Auth::id();
        $review->fill($input)->save();
        return redirect('/animes/' . $anime->id);
    }
    
    // 口コミ削除処理
    public function reviewDelete(Anime $anime, Review $review){
        Review::where([
          ['anime_id', '=', $anime->id],
          ['id', '=', $review->id],
        ])->delete();
        return redirect('/animes/' . $anime->id);
    }
}
