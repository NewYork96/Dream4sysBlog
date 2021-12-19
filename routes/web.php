<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('post', PostController::class);
Route::get('search', [SearchController::class, 'search'])->name('search');
Route::get('login', [SessionController::class, 'create']) -> name('login');
Route::post('store', [SessionController::class, 'store']) -> name('store');
