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

Route::group(['middleware' => ['auth']], function(){

// TOP画面、検索後の画面遷移
Route::get('/', [AnimeController::class, 'index'])->name('index');

// アニメの詳細情報へ遷移
Route::get('/animes/{anime}', [AnimeController::class, 'show']);

// アニメの口コミ画面へ遷移
Route::get('/animes/{anime}/create', [ReviewController::class, 'create']);

// アニメの口コミ登録処理
Route::post('/animes/{anime}/create_review', [ReviewController::class, 'store']);

// アニメのお気に入り登録処理
Route::post('/animes/{anime}/favorite', [AnimeController::class, 'toggleFavorite']);

// 管理者専用アニメ追加登録画面へ遷移
Route::get('/admin/create', [AnimeController::class, 'adminAnimeCreate']);

// 管理者専用アニメ追加登録処理
Route::Post('/admin/store', [AnimeController::class, 'adminAnimeStore']);

// 管理者専用アニメ編集画面へ遷移
Route::get('/admin/edit', [AnimeController::class, 'adminAnimeEdit']);

// ニックネームクリック時にマイページ画面へ遷移
Route::get('users/mypage', [UserController::class, 'showMyPage']);

Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

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
