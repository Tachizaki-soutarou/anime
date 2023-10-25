<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'star',
        'comment',
        'user_id',
        'anime_id'
    ];
    
    protected $guarded = [
        'created_at',
        'updated_at'
    ];
    
    public function anime(){
        return $this->belongsTo(Anime::class);
    }
    
}
