<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\LogbookController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\RegisterController;
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

Route::get('/admin',[AdminController::class,'index'])->name('/admin');
// Route::get('/admin', function () {
//     return view('pages.admin');
// })->name('/admin');

// Route::get('/register', function () {
//     return view('pages.register');
// });


// Route::get('/mahasiswa', function () {
//     return view('pages.mahasiswa');
// });
Route::resource('/mahasiswa', MahasiswaController::class);
Route::resource('/dosen', DosenController::class);
Route::resource('/logbook', LogbookController::class);

Route::resource('/register', RegisterController::class);

// Route::get('/dosen', function () {
//     return view('pages.dosen');
// });

Route::get('/mahasiswa_create', function () {
    return view('pages.mahasiswa_create');
});

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/signup', function () {
    return view('pages.signup');
});