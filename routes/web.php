<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/menu', function () {
//  return 'List of food';
// });
// Route::get('/menu/detail', function () {
//  return 'Details of each food item';
// });

// Route::get('/menu/detail/{id}', function ( $id ) {
//  return "Detail of food item - $id";
// });

// Route::get('/menu/more', function() {
//  return redirect('/menu/detail');
// });

// Route::get('/menu/detail', function () {
//  return 'Detail of each food item';
// })->name('menu.detail');

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;



Route::get('/food/index', [ArticleController::class, 'index']);//view dynamic blade
Route::get('/food/booking', [ArticleController::class, 'booking']);//view static blade
Route::get('/food', [ArticleController::class, 'index1']);
Route::get('/food/detail/{id}', [ArticleController::class, 'detail']);
Route::get('/food/test', [ArticleController::class, 'test']);
Route::get('/test-relation', [UserController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
