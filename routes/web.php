<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'home'])
    ->name('home');
Route::get('/movies', [MainController::class, 'movies'])
    ->name('movies');
Route::get('/create', [MainController::class, 'create'])
    ->name('create');
Route::post('/create', [MainController::class, 'store'])
    ->name('store');
Route::get('/movies/{id}', [MainController::class, 'movie'])
    ->name('movie');
Route::get('/movies/delete/{movie}', [MainController::class, 'delete'])
    ->name('delete');
Route::get('/edit/{movie}', [MainController::class, 'edit'])
    ->name('edit');
Route::post('/edit/{movie}', [MainController::class, 'update'])
    ->name('update');


Route::get('/api/v1/test', [ApiController::class, 'test']);
Route::get('/api/v1/make', [ApiController::class, 'createMovie']);