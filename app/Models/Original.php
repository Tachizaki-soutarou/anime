<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Original extends Model{
    
    use HasFactory;
    
    protected $guarded = [
        'created_at',
        'updated_at'
    ];
    
    public function animes(){
        //Reviewモデルのデータを取得する
        return $this->hasMany(Anime::class);
    }
}
