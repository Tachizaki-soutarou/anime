<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anime;

class AnimeController extends Controller
{
    public function animes (Anime $anime)
    {
        
        return view('anime/index')->with(['animes' => $anime->get()]);  
    }
}