<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MentorshipController;
use App\Http\Controllers\Dosen\DosenController;
use App\Http\Controllers\Dosen\MonitoringController;
use App\Http\Controllers\Dosen\LogbookController as DosenLogbookController;
use App\Http\Controllers\Mahasiswa\MahasiswaController;
use App\Http\Controllers\Mahasiswa\LogbookController as MahasiswaLogbookController;
// use App\Http\Controllers\AdminController;
// use App\Http\Controllers\DosenController;
// use App\Http\Controllers\MahasiswaController;
// use App\Http\Controllers\LogbookController;
// use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::prefix('admin')->name('admin.')->middleware('role:admin')->group(function () {
        // Routes accessible only to admins
        Route::get('/', [AdminController::class, 'index'])->name('dashboard');
        Route::prefix('mentorship')->name('mentorship.')->group(function () {
            Route::get('/', [MentorshipController::class, 'index'])->name('index');
            Route::get('/{id}', [MentorshipController::class, 'show'])->name('show');
            Route::put('/{id}', [MentorshipController::class, 'update'])->name('update');
        });
        Route::put('/verify/{id}', [AdminController::class, 'verify'])->name('verify');
    });

    Route::prefix('dosen')->name('dosen.')->middleware('role:dosen')->group(function () {
        // Routes accessible only to lecturers (dosen)
        Route::get('/', [DosenController::class, 'index'])->name('dashboard');
        Route::prefix('monitoring')->name('monitoring.')->group(function () {
            Route::get('/', [MonitoringController::class, 'index'])->name('index');
            Route::get('/{id}', [MonitoringController::class, 'show'])->name('show');
            Route::prefix('logbook')->name('logbook.')->group(function () {
                Route::get('/{id}', [DosenLogbookController::class, 'show'])->name('show');
                Route::put('/{id}', [DosenLogbookController::class, 'update'])->name('update');
            });
        });
        Route::put('/profile/{id}', [DosenController::class, 'profile'])->name('profile');
    });

    Route::prefix('mahasiswa')->name('mahasiswa.')->middleware('role:mahasiswa')->group(function () {
        // Routes accessible only to students (mahasiswa)
        Route::get('/', [MahasiswaController::class, 'index'])->name('dashboard');
        Route::prefix('logbook')->name('logbook.')->group(function () {
            Route::get('/', [MahasiswaLogbookController::class, 'index'])->name('index');
            Route::get('/create', [MahasiswaLogbookController::class, 'create'])->name('create');
            Route::get('/{id}', [MahasiswaLogbookController::class, 'show'])->name('show');
            Route::post('/insert', [MahasiswaLogbookController::class, 'insert'])->name('insert');
            Route::put('/{id}', [MahasiswaLogbookController::class, 'update'])->name('update');
        });
        Route::put('/profile/{id}', [MahasiswaController::class, 'profile'])->name('profile');
    });
});
