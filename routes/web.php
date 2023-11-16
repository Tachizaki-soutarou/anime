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

// Route::get('/', function () {
//     return view('welcome');
// });