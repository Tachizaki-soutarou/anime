<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Favorite;

class Anime extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'Hiragana_title',
        'Latin_alphabet_title',
        'image',
        'first_broadcast_start_date',
        'second_broadcast_start_date',
        'third_broadcast_start_date',
        'fourth_broadcast_start_date',
        'first_movie',
        'second_movie',
        'third_movie',
        'fourth_movie',
        'synopsis',
        'original_id',
        'category_id',
        'synopsis'
    ];
    
    
    protected $dates = [
        'first_broadcast_start_date',
        'second_broadcast_start_date',
        'third_broadcast_start_date',
        'fourth_broadcast_start_date'
        ];
    
    protected $guarded = [
        'created_at',
        'updated_at'
    ];
    
    public function reviews(){
        //Reviewモデルのデータを取得する
        return $this->hasMany(Review::class);
    }
    
    public function original(){
        //Reviewモデルのデータを取得する
        return $this->belongsTo(Original::class);
    }
    
    public function favoredByUsers(){
        return $this->belongsToMany(User::class, 'favorites');
    }
    
    public function categories(){
        return $this->belongsToMany(Category::class, 'anime_category');
    }
    
    // 総評価の計算
    public function averageReviewStar(){
        $star = $this->reviews()->avg('star');
        $star = floor($star * 10) / 10;
        return $star;
    }
    
    // アニメカテゴリー絞り込み
    // public static function filteredByCategoryAndOriginalOrderedByAverageStars(
    //     $categoryId = null,
    //     $originalId = null,
    //     $animeReviewStarsFlag = null,
    //     $BroadStartSortAscFlg = null,
    //     $BroadStartSortDescFlg = null,
    //     $JapaneseOrderSortFlg = null,
    //     $escapeWord = null,
    //     $perPage = 10
    // ){
    //     $query = self::query();
    //     // お気に入りの合計数をカウントする
    //     $query->withCount('favoredByUsers');
    //     // コメントの合計をカウントする
    //     $query->withCount('reviews');
    //     // 星の数を表示させる
    //     $query->withAvg('reviews', 'star')->get();
    //     if ($BroadStartSortAscFlg !== null) {
    //         $query->orderBy('first_broadcast_start_date');
    //     } else if ($BroadStartSortDescFlg !== null){
    //         $query->orderBy('first_broadcast_start_date','DESC');
    //     } else if ($JapaneseOrderSortFlg !== null){
    //         $query->orderBy('Hiragana_title');
    //     } else if ($animeReviewStarsFlag  !== null){
    //         $query->withAvg('reviews', 'star')->orderByDesc('reviews_avg_star');
    //     }
    //     // カテゴリー、原作の絞り込み
    //     if ($categoryId !== null) {
    //         $query->with('categories')->where('category_id', $categoryId);
    //     }
    //     if ($originalId !== null) {
    //         $query->where('original_id', $originalId);
    //     }
    //     if ($escapeWord !== null){
    //         $query->where('title', 'like', '%' . $escapeWord . '%')
    //                 ->orWhere('Hiragana_title', 'like', '%' . $escapeWord . '%')
    //                 ->orWhere('Latin_alphabet_title', 'like', '%' . $escapeWord . '%');
    //     }
    //     return $query->paginate($perPage);
    // }
    
    public static function filteredByCategoryAndOriginalOrderedByAverageStars(
    $categoryId = null,
    $originalId = null,
    $animeReviewStarsFlag = null,
    $BroadStartSortAscFlg = null,
    $BroadStartSortDescFlg = null,
    $JapaneseOrderSortFlg = null,
    $escapeWord = null,
    $perPage = 10
){
    $query = self::query();
    // お気に入りの合計数をカウントする
    $query->withCount('favoredByUsers');
    // コメントの合計をカウントする
    $query->withCount('reviews');
    // 星の数を表示させる
    $query->withAvg('reviews', 'star');
    // 並び順の処理
    if ($BroadStartSortAscFlg !== null) {
        $query->orderBy('first_broadcast_start_date');
    } else if ($BroadStartSortDescFlg !== null){
        $query->orderBy('first_broadcast_start_date','DESC');
    } else if ($JapaneseOrderSortFlg !== null){
        $query->orderBy('Hiragana_title');
    } else if ($animeReviewStarsFlag  !== null){
        $query->orderByDesc('reviews_avg_star');
    }
    // カテゴリーでの絞り込み
    if ($categoryId !== null) {
        $query->whereHas('categories', function ($q) use ($categoryId) {
            $q->where('categories.id', $categoryId);
        });
    }
    // 原作での絞り込み
    if ($originalId !== null) {
        $query->where('original_id', $originalId);
    }
    // 検索ワードでの絞り込み
    if ($escapeWord !== null){
        $query->where('title', 'like', '%' . $escapeWord . '%')
                ->orWhere('Hiragana_title', 'like', '%' . $escapeWord . '%')
                ->orWhere('Latin_alphabet_title', 'like', '%' . $escapeWord . '%');
    }
    return $query->paginate($perPage);
    }
}
