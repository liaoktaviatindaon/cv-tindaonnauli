<?php

use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\BarangController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('data-user',[PenggunaController::class,'index']);
Route::post('simpan-data-pengguna',[PenggunaController::class,'store']);
Route::delete('hapus-data-pengguna/{id}',[PenggunaController::class,'hapusPengguna']);
Route::put('ubah-data-pengguna/{id}',[PenggunaController::class,'ubahPengguna']);

Route::get('data-jenis',[JenisController::class,'index']);
Route::post('simpan-data-jenis',[JenisController::class,'store']);
Route::delete('hapus-data-jenis/{id}',[JenisController::class,'hapusDataJenis']);
Route::put('ubah-data-jenis/{id}',[JenisController::class,'ubahDataJenis']);

Route::get('data-barang',[BarangController::class,'index']);
Route::post('simpan-data-barang',[BarangController::class,'store']);

Route::delete('hapus-data-barang/{id}',[BarangController::class,'hapusDataBarang']);
Route::put('ubah-data-barang/{id}',[BarangController::class,'ubahDataBarang']);