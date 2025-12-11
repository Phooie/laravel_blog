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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu', function () {
 return 'List of food';
});
Route::get('/menu/detail', function () {
 return 'Details of each food item';
});

Route::get('/menu/detail/{id}', function ( $id ) {
 return "Detail of food item - $id";
});

Route::get('/menu/more', function() {
 return redirect('/menu/detail');
});

Route::get('/menu/detail', function () {
 return 'Detail of each food item';
})->name('menu.detail');