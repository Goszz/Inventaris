<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\RuangController;
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

Route::get('/', [DashboardController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/petugas', [PetugasController::class, 'index']);
Route::get('/tambahpetugas', [PetugasController::class, 'create']);
Route::post('/storepetugas', [PetugasController::class, 'store']);
Route::get('/editpetugas{id_petugas}', [PetugasController::class, 'edit']);
Route::post('/updatepetugas', [PetugasController::class, 'update']);
Route::get('/hapuspetugas{id_petugas}', [PetugasController::class, 'destroy']);

/* RUANG */
Route::get('/ruang', [RuangController::class, 'index']);
Route::get('/createruang', [RuangController::class, 'create']);
Route::post('/storeruang', [RuangController::class, 'store']);
Route::get('/hapusruang{id_ruang}', [RuangController::class, 'destroy']);
Route::get('/editruang{id_ruang}', [RuangController::class, 'edit']);
Route::post('updateruang', [RuangController::class, 'update']);

/* JENIS */
Route::get('/jenis', [JenisController::class, 'index']);
Route::get('/tambahjenis', [JenisController::class, 'create']);
Route::post('/storejenis', [JenisController::class, 'store']);
Route::get('/editjenis{id_jenis}', [JenisController::class, 'edit']);
Route::post('/updatejenis', [JenisController::class, 'update']);
Route::get('/hapusjenis{id_jenis}', [JenisController::class, 'destroy']);

/* PEGAWAI */
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/tambahpegawai', [PegawaiController::class, 'create']);
Route::post('/storepegawai', [PegawaiController::class, 'store']);
Route::get('/editpegawai{id_pegawai}', [PegawaiController::class, 'edit']);
Route::post('/updatepegawai', [PegawaiController::class, 'update']);
Route::get('/hapuspegawai{id_pegawai}', [PegawaiController::class, 'destroy']);

/* INVENTARIS */
Route::get('/inventaris', [InventarisController::class, 'index']);
Route::get('/tambahinventaris', [InventarisController::class, 'create']);
Route::post('/storeinventaris', [InventarisController::class, 'store']);
Route::get('/editinventaris{id_inventaris}', [InventarisController::class, 'edit']);
Route::post('/updateinventaris', [InventarisController::class, 'update']);
Route::get('/hapusinventaris{id_inventaris}', [InventarisController::class, 'destroy']);

//Chart