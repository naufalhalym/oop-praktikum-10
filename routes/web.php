<?php

use Illuminate\Support\Facades\Route;


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/Mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'index']);
Route::get('/Mahasiswa/create', [App\Http\Controllers\MahasiswaController::class, 'create']);
Route::get('/Mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'store']);