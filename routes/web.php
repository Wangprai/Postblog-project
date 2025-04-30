<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/home', [PostController::class, 'home'])->name('homePage');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/create',[PostController::class, 'create'])->name('create');
Route::post('/store', [PostController::class, 'store'])->name('store');

Route::get('/post/{post}',[PostController::class, 'show'])->name('show');
Route::get('/edit/{post}',[PostController::class, 'edit'])->name('edit');
Route::put('/update/{post}',[PostController::class, 'update'])->name('update');
Route::delete('/delete/{post}', [PostController::class, 'destroy'])->name('delete');

// route::get('/likedpost')->name('likedPost');