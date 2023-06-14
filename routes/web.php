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
    });
});

// Route::get('/registrasi', [MahasiswaController::class,'index']);
// Route::get("/",[MahasiswaController::class,'index']);
// Route::get("/logbook",[MahasiswaController::class,'index']);


// Route::get('/logbook_mhs', function () {
//     return view('pages.logbook_mhs');
// });


// Route::get('/monitoring', function () {
//     return view('pages.monitoring');
// });

// Route::get('/admin',[AdminController::class,'index'])->name('/admin');
// // Route::get('/admin', function () {
// //     return view('pages.admin');
// // })->name('/admin');

// // Route::get('/register', function () {
// //     return view('pages.register');
// // });


// // Route::get('/mahasiswa', function () {
// //     return view('pages.mahasiswa');
// // });
// Route::resource('/mahasiswa', MahasiswaController::class);
// Route::resource('/dosen', DosenController::class);
// Route::resource('/logbook', LogbookController::class);

// Route::resource('/register_program', RegisterController::class);

// // Route::get('/dosen', function () {
// //     return view('pages.dosen');
// // });

// Route::get('/mahasiswa_create', function () {
//     return view('pages.mahasiswa_create');
// });

// Route::get('/login', function () {
//     return view('pages.login');
// });

// Route::get('/signup', function () {
//     return view('pages.signup');
// });

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
