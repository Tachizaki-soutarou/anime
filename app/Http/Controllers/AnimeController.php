<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anime;

class AnimeController extends Controller{
    
    public function __construct(){
        $this->middleware('auth');
    }
    
    // アニメ一覧表示
    public function index (Anime $anime){
        return view('anime.index')->with(['animes' => $anime->get()]);
    }
    
    // アニメ詳細表示
    public function show (Anime $anime){
        return view('anime.show')->with([
            'anime' => $anime,
            'reviews' => $anime->reviews
        ]);
    }
}