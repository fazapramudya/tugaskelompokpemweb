<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RiwayatPembelianController;
use App\Http\Controllers\barangController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\updatebarangcontroller;
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

Route::get('/', function () {
    return view('login/login');
});
Route::get('/register', [LoginController::class, 'index']);
Route::post('/register', [LoginController::class, 'store']);
Route::get('/dashboard', [DashboardController::class, 'index2']);
Route::post('/dashboard', [DashboardController::class, 'authenticate']); 
Route::get('/riwayatpembelian', [RiwayatPembelianController::class, 'index4']);
Route::post('/riwayatpembelian', [RiwayatPembelianController::class, 'store']);
Route::get('/barang', [barangController::class, 'index']);
Route::post('/barang', [barangController::class, 'destroy']);
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/edit-barang/{id}', [barangController::class, 'edit']);
Route::post('/update-barang/{id}', [barangController::class, 'update']);



Route::delete('/pegawai/{id}', [PegawaiController::class, 'destroy']);
Route::delete('/barang/{id}', [barangController::class, 'destroy']);





