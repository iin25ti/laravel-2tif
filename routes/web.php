<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController; // Ditambahkan

// Route dari latihan sebelumnya
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
=======
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
>>>>>>> ab16aded446eadb41929dc46d4e25c0798ace2a9

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
// Route baru untuk HomeController
Route::get('/home', [HomeController::class, 'index']);
=======
Route::get('/home', [HomeController::class, 'index']);

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');
>>>>>>> ab16aded446eadb41929dc46d4e25c0798ace2a9
