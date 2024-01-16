<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\LapanganController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Routing\Route as RoutingRoute;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('/lapangan', LapanganController::class);
Route::resource('/customer', CustomerController::class);
Route::resource('/transaksi', TransaksiController::class);
Route::resource('/halaman', HalamanController::class);
Route::get('/halaman', [HalamanController::class, 'index'])->name('halaman-index');
Route::get('login', [LoginController::class, 'index'])->name('login'); // Menampilkan formulir login
Route::post('login-post', [LoginController::class, 'authenticate'])->name('login.post'); // Proses autentikasi
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
