<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', [App\Http\Controllers\PostController::class, 'index']);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\ProfileController::class, 'index'])->name('home');

Route::resource('profile', App\Http\Controllers\ProfileController::class);

Route::resource('p', App\Http\Controllers\PostController::class);

Route::post('follow/{id}', [App\Http\Controllers\FollowController::class, 'store']);
