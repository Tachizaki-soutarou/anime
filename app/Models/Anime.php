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
    
    // public static $categoryId;
    // public static $originalId;
    // public static $BroadStartSortAscFlg;
    // public static $BroadStartSortDescFlg;
    // public static $JapaneseOrderSortFlg;
    // public static $escapeWord;
    
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
    
    // ページタイトルの変更
    public static function pageTitle(
        $categoryId = null,
        $originalId = null,
        $BroadStartSortAscFlg = null,
        $BroadStartSortDescFlg = null,
        $JapaneseOrderSortFlg = null,
        $escapeWord = null,
        ){
        if ($categoryId !== null) {
            $pageTitle = "カテゴリー検索ページ";
        } else if ($originalId !== null) {
            $pageTitle = "原作検索ページ";
        } else if ($escapeWord !== null){
            $pageTitle = "タイトル検索ページ";
        } else if ($BroadStartSortAscFlg !== null) {
            $pageTitle = "放送日古い順ページ";
        } else if ($BroadStartSortDescFlg !== null){
            $pageTitle = "放送日新しい順ページ";
        } else if ($JapaneseOrderSortFlg !== null){
            $pageTitle = "50音順ページ";
        }else {
            $pageTitle = "アニメ TOPランキング";
        }
        return $pageTitle;
    }
    
    // 特定の検索の場合に順位を非表示
    // public static function RankingSearchPageTitleFlag(
    //     $categoryId = null,
    //     $originalId = null,
    //     $BroadStartSortAscFlg = null,
    //     $BroadStartSortDescFlg = null,
    //     $JapaneseOrderSortFlg = null,
    //     $escapeWord = null,
    //     ){
    //     $pageTitle = self::pageTitle(
    //         $categoryId,
    //         $originalId,
    //         $BroadStartSortAscFlg,
    //         $BroadStartSortDescFlg,
    //         $JapaneseOrderSortFlg,
    //         $escapeWord
    //         );
    //     if($pageTitle === "放送日古い順ページ" || $pageTitle === "放送日新しい順ページ" || $pageTitle === "50音順ページ"){
    //         $pageTitleFlg = true;
    //     } else {
    //         $pageTitleFlg = false;
    //     }
    //     return $pageTitleFlg;
    // }
    
    // アニメカテゴリー絞り込み
    public static function filteredByCategoryAndOriginalOrderedByAverageStars(
        $categoryId = null,
        $originalId = null,
        $BroadStartSortAscFlg = null,
        $BroadStartSortDescFlg = null,
        $JapaneseOrderSortFlg = null,
        $escapeWord = null,
        $perPage = 10
        ){
        $query = self::query();
        if ($BroadStartSortAscFlg !== null) {
            $query->orderBy('first_broadcast_start_date');
        } else if ($BroadStartSortDescFlg !== null){
            $query->orderBy('first_broadcast_start_date','DESC');
        } else if ($JapaneseOrderSortFlg !== null){
            $query->orderBy('Hiragana_title');
        } else {
            $query->withAvg('reviews', 'star')->orderByDesc('reviews_avg_star');
        }
        // カテゴリー、原作の絞り込み
        if ($categoryId !== null) {
            $query->where('category_id', $categoryId);
        }
        if ($originalId !== null) {
            $query->where('original_id', $originalId);
        }
        if ($escapeWord !== null){
            $query->where('title', 'like', '%' . $escapeWord . '%')
                    ->orWhere('Hiragana_title', 'like', '%' . $escapeWord . '%')
                    ->orWhere('Latin_alphabet_title', 'like', '%' . $escapeWord . '%');
        }
        return $query->paginate($perPage);
    }
}
