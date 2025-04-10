<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\produkController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\AuthenController;


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

// Routing halaman logout
Route::get('/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout')->middleware('auth');

// Routing halaman templating_login (Master Template untuk login/register)
Route::get('/templating_login', [TemplateController::class, 'templating_login']);

// Routing halaman master template
Route::get('/master', [TemplateController::class, 'master']);

// Routing halaman beranda (Hanya bisa diakses jika login)
Route::get('/', [TemplateController::class, 'index']);

// Routing halaman data produk (Harus login)
Route::get('/data_kue', [ProdukController::class, 'index']);

// Routing tambah produk (Harus login)
Route::get('/tambah_kue', [ProdukController::class, 'create']);
Route::post('/tambah_kue', [ProdukController::class, 'store']);

// Routing hapus produk (Harus login)
Route::get('/hapus_kue/{id}', [ProdukController::class, 'destroy']);

// Routing ubah produk (Harus login)
Route::get('/ubah_kue/{id}', [ProdukController::class, 'edit']);
Route::post('/ubah_kue/{id}', [ProdukController::class, 'update']);

Route::controller(AuthenController::class)->group(function(){
    Route::get('/register', [RegistrasiController::class, 'create'])->name('register');
    Route::post('/register', [RegistrasiController::class, 'store'])->name('register.submit');

    // Routing halaman login
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login.submit');
});







