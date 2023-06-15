<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MentorshipController;
use App\Http\Controllers\Dosen\DosenController;
use App\Http\Controllers\Dosen\MonitoringController;
use App\Http\Controllers\Dosen\LogbookController as DosenLogbookController;
use App\Http\Controllers\Mahasiswa\MahasiswaController;
use App\Http\Controllers\Mahasiswa\LogbookController as MahasiswaDosenLogbookController;
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
        // Routes accessible only to staff
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
            Route::get('/', [MahasiswaDosenLogbookController::class, 'index'])->name('index');
            Route::get('/create', [MahasiswaDosenLogbookController::class, 'create'])->name('create');
            Route::get('/{id}', [MahasiswaDosenLogbookController::class, 'show'])->name('show');
            Route::post('/insert', [MahasiswaDosenLogbookController::class, 'insert'])->name('insert');
            Route::put('/{id}', [MahasiswaDosenLogbookController::class, 'update'])->name('update');
        });
        Route::put('/profile/{id}', [MahasiswaController::class, 'profile'])->name('profile');
    });
});

// Route::get('/dashboard_admin', function () {
//     return view('pages.dashboard_admin');
// });
// Route::get('/pilih_mentor', function () {
//     return view('pages.pilih_mentor');
// });
// Route::get('/pilih_dosen', function () {
//     return view('pages.pilih_dosen');
// });

// Route::get('/login_new', function () {
//     return view('pages.login_new');
// });

// Route::get('/signup_new', function () {
//     return view('pages.signup_new');
// });

// Route::get('/profile', function () {
//     return view('pages.profile');
// });
// Route::get('/monitoring', function () {
//     return view('pages.monitoring');
// });
// Route::get('/monitoring_1', function () {
//     return view('pages.monitoring_1');
// });
// Route::get('/monitoring_2', function () {
//     return view('pages.monitoring_2');
// });
// Route::get('/logbook_mhs', function () {
//     return view('pages.logbook_mhs');
// });
// Route::get('/logbook_mhs2', function () {
//     return view('pages.logbook_mhs2');
// });
// Route::get('/profile_mhs', function () {
//     return view('pages.profile_mhs');
// });
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
