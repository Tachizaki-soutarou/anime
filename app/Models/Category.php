<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'category_name'
    ];
    
    protected $guarded = [
        'created_at',
        'updated_at'
    ];
    
    public function animes(){
        return $this->belongsToMany(Anime::class, 'anime_category');
    }
}
