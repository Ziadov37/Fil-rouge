<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\UserPostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;



// Route::get('/', function () {
//     return view('home');
// })->name('home');

Route::get('/home', [HomeController::class, 'index'])
    ->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')->middleware('auth');
Route::get('/delete/{id}', [DashboardController::class, 'delete'])
    ->name('delete');

Route::get('/users/{user:username}/posts', [UserPostController::class, 'index'])->name('users.posts');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);


Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/posts', [PostController::class, 'index'])->name('posts')->middleware('auth');
Route::post('/posts', [PostController::class, 'store'])->middleware('auth');

Route::get('/category', [CategoryController::class, 'index'])->name('category')->middleware('auth');
Route::post('/category', [CategoryController::class, 'store'])->middleware('auth');


Route::post('/posts/{post}/likes', [PostLikeController::class, 'store'])->name('posts.likes');
Route::delete('/posts/{post}/likes', [PostLikeController::class, 'destroy'])->name('posts.likes');