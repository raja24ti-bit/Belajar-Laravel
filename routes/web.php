<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;

use App\Http\Controllers\UserController;

Route::get('/pcr', function () {
    return 'Selamat datang di website PCR!';
});

Route::get('/mahasiswa', function () {
    return 'Hello Mahasisswsada';
});

Route::get('/nama/{param1}', function ($param1) {
    return 'Hello Mahasiswa: '.$param1;
});


// ? setelah param agar menjadi optional
Route::get('/nim/{param1?}', function ($param1 = '-') {
    return 'Nim saya: '.$param1;
});


Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/matakuliah/show/{param1?}', [MatakuliahController::class, 'show']);
Route::get('/matakuliah', [MatakuliahController::class, 'show']);

Route::post('question/store', [QuestionController::class, 'store'])
        ->name('question.store');

Route::get('/home', [HomeController::class, 'index']);

Route::get('/auth', [AuthController::class, 'index']);
Route::post('/auth/login', [AuthController::class, 'login']);
Route::get('/success', function () {
    return "Selamat datang, login berhasil!";
});


Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::resource('pelanggan', PelangganController::class);
Route::resource('user', UserController::class);
Route::resource('profile', ProfileController::class);