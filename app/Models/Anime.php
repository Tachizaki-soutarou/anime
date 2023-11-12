<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    use HasFactory;
    
    // protected $fillable = [
    //     'title',
    //     'first_broadcast_start_date',
    //     'second_broadcast_start_date',
    //     'synopsis'
    // ];
    
    
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
    
    public function category(){
        //Categoryモデルのデータを取得する
        return $this->belongsTo(Category::class);
    }
    
    public function reviews(){
        //Reviewモデルのデータを取得する
        return $this->hasMany(Review::class);
    }
    
     public function original(){
        //Reviewモデルのデータを取得する
        return $this->belongsTo(Original::class);
    }
    
    // 総評価の計算
    public function averageReviewStar(){
        $star = $this->reviews()->avg('star');
        $star = floor($star * 10) / 10;
        return $star;
    }
    
    // 50音順並び替え
    public static function OrderByJapaneseOrder($JapaneseOrderSortId = null, $perPage = 10){
        $query = self::query();
        if($JapaneseOrderSortId !== null){
            return $query->orderBy('Hiragana_title')->get();
        }
        return $query->paginate($perPage);
    }
    
    // 放送日順並び替え
    public static function OrderByBroadcastStart($BroadStartSortAscId = null, $BroadStartSortDescId = null, $perPage = 10){
        $query = self::query();
        if ($BroadStartSortAscId !== null) {
            return $query->orderBy('first_broadcast_start_date')->get();
        } else if($BroadStartSortDescId !== null){
            return $query->orderBy('first_broadcast_start_date','DESC')->get();
        }
        return $query->paginate($perPage);
    }
    
    // アニメカテゴリー絞り込み
    public static function filteredByCategoryAndOriginalIdOrderedByAverageStars($categoryId = null, $originalId = null, $perPage = 10)
    {
        $query = self::query();
        $animes = $query->withAvg('reviews', 'star')->orderByDesc('reviews_avg_star');
         if ($categoryId !== null) {
            $query->where('category_id', $categoryId);
        }
        if ($originalId !== null) {
            $query->where('original_id', $originalId);
        }
        return $query->paginate($perPage);
    }
    
    // public static function OrderByBroadcastStartAndJapaneseOrder($BroadStartSortAscId = null, $BroadStartSortDescId = null, $JapaneseOrderSortId = null, $perPage = 10){
    //     $query = self::query();
    //     if ($BroadStartSortAscId !== null) {
    //         return $query->orderBy('first_broadcast_start_date')->get();
    //     } else if($BroadStartSortDescId !== null){
    //         return $query->orderBy('first_broadcast_start_date','DESC')->get();
    //     } else if($JapaneseOrderSortId !== null){
    //         return $query->orderBy('Hiragana_title')->get();
    //     }
    //     return $query->paginate($perPage);
    // }
}
