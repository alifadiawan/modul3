<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(AdminMiddleware::class);

Route::resource('buku', BukuController::class);
Route::resource('kategori', KategoriController::class);


Route::get('/', [LoginController::class, 'index']);
Route::POST('/auth', [LoginController::class, 'auth']);
Route::GET('/logout', [LoginController::class, 'logout']);

Route::get('/register', function() {
    return view('register');
});
Route::post('/cekregis', [RegisterController::class, 'registrasi']);
