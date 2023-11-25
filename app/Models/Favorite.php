<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'anime_id',
    ];
    
    public function Anime(){
        //Animeモデルのデータを取得する
        return $this->belongsTo(Anime::class);
    }
    
    public function User(){
        //Userモデルのデータを取得する
        return $this->belongsTo(User::class);
    }
    
    public function AnimeFavorites(){
        //Animeモデルのデータを取得する
        return $this->belongsTo(Anime::class);
    }
}
