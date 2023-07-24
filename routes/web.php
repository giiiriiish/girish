<?php

use App\Http\Controllers\BlogController;
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

Route::get('/', [BlogController::class, 'home']);

Route::get('/blog', [BlogController::class, 'index']);

Route::get('/table', [BlogController::class, 'tabel']);


Route::post('/save', [BlogController::class, 'store']);

Route::get('/edit/{id}', [BlogController::class, 'edit']);
Route::post('/update/{id}', [BlogController::class, 'update']);

Route::get('/delete/{id}', [BlogController::class, 'destroy']);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
