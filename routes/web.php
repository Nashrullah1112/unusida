<?php

use App\Http\Controllers\MahasiswaController;
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

Route::get('/registrasi', [MahasiswaController::class,'index']);
Route::get("/",[MahasiswaController::class,'index']);
Route::get("/logbook",[MahasiswaController::class,'index']);


Route::get('/logbook_mhs', function () {
    return view('pages.logbook_mhs');
});


Route::get('/monitoring', function () {
    return view('pages.monitoring');
});

Route::get('/admin', function () {
    return view('pages.admin');
});

Route::get('/register', function () {
    return view('pages.register');
});


Route::get('/mahasiswa', function () {
    return view('pages.mahasiswa');
});

Route::get('/dosen', function () {
    return view('pages.dosen');
});