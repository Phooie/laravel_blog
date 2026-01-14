<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\ScoreController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
    Route::post('/articles/store', [ArticleController::class, 'store']);
    Route::get('/articles/example', [ArticleController::class, 'article_ex'])->name('articles');

    // Route::get('/scores/input', [ScoreController::class, 'input']);
    // Route::post('/scores/save', [ScoreController::class, 'save']);
    Route::get('/scores', [ScoreController::class, 'scores'])->name('scores');

    Route::get('/articles/edit/{id}', [ArticleController::class, 'edit']);
    Route::put('/articles/update/{id}', [ArticleController::class, 'update']);//put method
    Route::delete('/articles/{id}', [ArticleController::class, 'destroy']);

});

Route::get('/food/index', [ArticleController::class, 'index']);//view dynamic blade
Route::get('/food/booking', [ArticleController::class, 'booking']);//view static blade
Route::get('/food', [ArticleController::class, 'index1']);
Route::get('/food/detail/{id}', [ArticleController::class, 'detail']);
Route::get('/food/test', [ArticleController::class, 'test']);
Route::get('/sample', [ArticleController::class, 'sample']);


Route::get('/test-relation', [UserController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/post-list', [UserController::class, 'postList']);
Route::get('/post-user', [PostController::class, 'postedUser']);
Route::get('/user/likes', [LikeController::class, 'showLikedPosts']);
Route::get('/post/likers', [LikeController::class, 'showPostLikers']);
Route::get('/user/{id}/latest-comment', [UserController::class, 'showLatestComment']);
Route::get('/user/{id}/comments', [UserController::class, 'showUserComments']);


require __DIR__.'/auth.php';

//SAVE TO BACKUP BEFORE BREEZE
