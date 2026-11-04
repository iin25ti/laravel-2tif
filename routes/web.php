<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController; // Import class controller

Route::get('/', function () {
    return view('welcome');
});

// Route dari latihan sebelumnya (PostController)
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

// Route untuk HomeController
Route::get('/home', [HomeController::class, 'index']);

// Route POST question/store sesuai gambar tugas Anda
Route::post('question/store', [QuestionController::class, 'store'])
    ->name('question.store');