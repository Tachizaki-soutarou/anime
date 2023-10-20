<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'first_broadcast_start_date',
        'second_broadcast_start_date',
        'synopsis'
    ];
    
    protected $guarded = [
        'created_at',
        'updated_at'
    ];
}
