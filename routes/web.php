<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DashboardController; // Route untuk tugas baru
use App\Http\Controllers\PelangganController;

Route::get('/', function () {
    return view('welcome');
});

// Route dari PostController (Gambar 1 & 2)
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

// Route untuk HomeController
Route::get('/home', [HomeController::class, 'index']);

// Route POST question/store
Route::post('/question/store', [QuestionController::class, 'store'])->name('question.store');

// Route untuk MahasiswaController (Gambar 1 & 2)
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');

// Route untuk DashboardController (Tugas Praktikum Baru)
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Route untuk PelangganController
Route::resource('pelanggan', PelangganController::class);