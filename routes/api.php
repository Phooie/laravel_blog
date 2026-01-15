<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

use App\Http\Controllers\Api\ArticleApiController;

//Route::apiResource('articles', ArticleApiController::class);

Route::get('/articles', [ArticleApiController::class, 'index']);
Route::get('/articles/{id}', [ArticleApiController::class, 'show']);
Route::post('/articles', [ArticleApiController::class, 'store']);
Route::put('/articles/{id}', [ArticleApiController::class, 'update']);
// Route::patch('/articles/{id}', [ArticleApiController::class, 'update']);
Route::delete('/articles/{id}', [ArticleApiController::class, 'destroy']);
