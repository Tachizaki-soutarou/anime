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
        'second_broadcast_start_date'
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
    
    public function OrderedByAverageStars(){
        $query = self::query();
        $query->withAvg('reviews', 'star')->orderByDesc('reviews_avg_star');
        return $query;
    }
    
    // アニメカテゴリー絞り込み
    public static function filteredCategoryAndOrderedByAverageStars($categoryId = null, $perPage = 10)
    {
        $query = self::query();
        $query->withAvg('reviews', 'star')->orderByDesc('reviews_avg_star');
        if ($categoryId !== null) {
            $query->where('category_id', $categoryId);
        }
        return $query->paginate($perPage);
    }
    
    public static function filteredOriginalAndOrderedByAverageStars($originalId = null, $perPage = 10)
    {
        $query = self::query();
        $query->withAvg('reviews', 'star')->orderByDesc('reviews_avg_star');
        if($originalId !== null){
            $query->where('original_id', $originalId);
        }
        return $query->paginate($perPage);
    }
    
    // public static function filteredAndOrderedByAverageStars($categoryId = null, $originalId = null, $perPage = 10)
    // {
    //     $query = self::query();
    //     $query->withAvg('reviews', 'star')->orderByDesc('reviews_avg_star');
    //     if ($categoryId !== null && $originalId == null) {
    //         $query->where('category_id', $categoryId);
    //     }else if($categoryId == null && $originalId !== null){
    //         $query->where('original_id', $originalId);
    //     }
    //     return $query->paginate($perPage);
    // }
}
