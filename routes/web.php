<?php

use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LapanganController;
use App\Http\Controllers\AuthController;

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


Route::get('/', [AuthController::class, 'index']);
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('proses_login', [AuthController::class, 'proses_login'])->name('proses_login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::group(['middleware' => ['auth']], function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
    // lapangan
    Route::get('/lapangan', [LapanganController::class, 'index']);
    Route::get('/lapangan/tambah', [LapanganController::class, 'tambah']);
    Route::post('/lapangan/proses_tambah', [LapanganController::class, 'proses_tambah']);
    Route::get('/lapangan/edit/{id}', [LapanganController::class, 'edit']);
    Route::put('/lapangan/update/{id}', [LapanganController::class, 'update']);
    Route::delete('/lapangan/hapus/{id}', [LapanganController::class, 'hapus']);
    // booking
    Route::get('/booking', [BookingController::class, 'index']);
    Route::get('/booking/tambah', [BookingController::class, 'tambah']);
    Route::post('/booking/proses_tambah', [BookingController::class, 'proses_tambah']);
    Route::get('/booking/edit/{id}', [BookingController::class, 'edit']);
    Route::put('/booking/update/{id}', [BookingController::class, 'update']);
    Route::delete('/booking/hapus/{id}', [BookingController::class, 'hapus']);
    // Profil
    Route::get('/profil', function () {
        return view('profil');
    });
    Route::group(['middleware' => ['cek_login:superadmin']], function () {
        // Users
        Route::get('/users', [UserController::class, 'index']);
        Route::get('/users/tambah', [UserController::class, 'tambah']);
        Route::post('/users/proses_tambah', [UserController::class, 'proses_tambah']);
        Route::get('/users/edit/{id}', [UserController::class, 'edit']);
        Route::put('/users/update/{id}', [UserController::class, 'update']);
        Route::delete('/users/hapus/{id}', [UserController::class, 'hapus']);
    });
});
// // Users
// Route::get('/users', [UserController::class, 'index']);
// Route::get('/users/tambah', [UserController::class, 'tambah']);
// Route::post('/users/proses_tambah', [UserController::class, 'proses_tambah']);
// Route::get('/users/edit/{id}', [UserController::class, 'edit']);
// Route::put('/users/update/{id}', [UserController::class, 'update']);
// Route::delete('/users/hapus/{id}', [UserController::class, 'hapus']);

// // lapangan
// Route::get('/lapangan', [LapanganController::class, 'index']);
// Route::get('/lapangan/tambah', [LapanganController::class, 'tambah']);
// Route::post('/lapangan/proses_tambah', [LapanganController::class, 'proses_tambah']);
// Route::get('/lapangan/edit/{id}', [LapanganController::class, 'edit']);
// Route::put('/lapangan/update/{id}', [LapanganController::class, 'update']);
// Route::delete('/lapangan/hapus/{id}', [LapanganController::class, 'hapus']);

// // booking
// Route::get('/booking', [BookingController::class, 'index']);
// Route::get('/booking/tambah', [BookingController::class, 'tambah']);
// Route::post('/booking/proses_tambah', [BookingController::class, 'proses_tambah']);
// Route::get('/booking/edit/{id}', [BookingController::class, 'edit']);
// Route::put('/booking/update/{id}', [BookingController::class, 'update']);
// Route::delete('/booking/hapus/{id}', [BookingController::class, 'hapus']);
