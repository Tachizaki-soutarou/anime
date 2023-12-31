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
        'english_title',
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
    
    // コメント数取得
    public function reviewCount(){
        return $this->reviews()->count();
    }
    
    // 星の数平均取得
    public function averageRating(){
        return $this->reviews()->avg('star');
    }
    
    // お気に入りユーザー数取得
    public function favoriteCount(){
        return $this->favoredByUsers()->count();
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
    public static function filteredByCategoryAndOriginalOrderedByAverageStars(
        $categoryId = null,
        $originalId = null,
        $animeReviewStarsFlag = null,
        $BroadStartSortAscFlg = null,
        $BroadStartSortDescFlg = null,
        $JapaneseOrderSortFlg = null,
        $favoriteOrderSortFlg = null,
        $commentOrderSortFlg = null,
        $escapeWord = null,
        $perPage = 9
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
        // 放送開始日古い順
        $query->orderBy('first_broadcast_start_date');
    } else if ($BroadStartSortDescFlg !== null){
        // 放送開始日新しい順
        $query->orderBy('first_broadcast_start_date','DESC');
    } else if ($JapaneseOrderSortFlg !== null){
        // 50音順
        $query->orderBy('Hiragana_title');
    } else if ($animeReviewStarsFlag  !== null){
        // 星の数順
        $query->orderByDesc('reviews_avg_star');
    } else if ($favoriteOrderSortFlg  !== null){
        // お気に入り数順
        $query->orderByDesc('favored_by_users_count');
    } else if ($commentOrderSortFlg  !== null){
        // コメント数順
        $query->orderByDesc('reviews_count');
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
                ->orWhere('Latin_alphabet_title', 'like', '%' . $escapeWord . '%')
                ->orWhere('english_title', 'like', '%' . $escapeWord . '%');
    }
    return $query->paginate($perPage);
    }
}
