<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('auth')->group(function () {

    // TOP画面、検索後の画面遷移
    Route::get('/', [AnimeController::class, 'index'])->name('index');
    
    // ページネーション保持遷移
    Route::get('/back', [AnimeController::class, 'backToIndex'])->name('backToIndex');
    
    // アニメの詳細情報へ遷移
    Route::get('/animes/{anime}', [AnimeController::class, 'show']);
    
    // アニメの口コミ画面へ遷移
    Route::get('/animes/{anime}/create', [ReviewController::class, 'create']);
    
    // アニメの口コミ登録処理
    Route::post('/animes/{anime}/create_review', [ReviewController::class, 'store']);
    
    // 口コミ編集画面へ遷移
    Route::get('/edit/{anime}/{review}', [ReviewController::class, 'reviewEdit']);
    
    // 口コミ編集処理
    Route::put('/update/{anime}/{review}', [ReviewController::class, 'reviewUpdate']);
    
    // アニメのお気に入り登録処理
    Route::post('/animes/{anime}/favorite', [AnimeController::class, 'toggleFavorite']);
    
    // 管理者専用アニメ追加登録画面へ遷移
    Route::get('/anime/create', [AnimeController::class, 'create']);
    
    // 管理者専用アニメ追加登録処理
    Route::Post('/anime/store', [AnimeController::class, 'store']);
    
    // 管理者専用アニメカテゴリー追加登録画面へ遷移
    Route::get('/category/create', [AnimeController::class, 'createCategory']);
    
    // 管理者専用アニメカテゴリー追加登録処理
    Route::Post('/category/store', [AnimeController::class, 'storeCategory']);
    
    // 管理者専用アニメ編集画面へ遷移
    Route::get('/edit/{anime}', [AnimeController::class, 'edit']);
    
    // 管理者専用アニメ編集処理
    Route::put('/update/{anime}', [AnimeController::class, 'update']);
    
    // 一般用口コミ削除処理
    Route::post('/delete/{anime}/{review}', [ReviewController::class, 'reviewDelete']);
    
    // 管理者専用口コミ削除処理
    Route::post('/adminDelete/{anime}/{review}', [ReviewController::class, 'reviewDelete']);
    
    // お気に入りリスト画面へ遷移
    Route::get('/favoriteList', [AnimeController::class, 'favoriteList'])->name('favoriteList');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Language Switcher Route 言語切替用ルートだよ
Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);

    return redirect()->back();
});