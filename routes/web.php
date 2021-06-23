<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PeriodeController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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



Route::get('/master', function () {
    return view('layout.master');
});
Route::get('/master2', function () {
    return view('layout.master2');
});

Route::get('/', [AdminController::class, 'index']);
Route::get('/dashboard', [PeriodeController::class, 'index']);
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/periode', [PeriodeController::class, 'index']);
Route::get('/tambah-pegawai', [PegawaiController::class, 'tambah']);
Route::post('/simpan-pegawai', [PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
//Route::get('/pegawai/ubah',[PegawaiController::class, 'ubah']);
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);
Route::post('/pegawai/update', [PegawaiController::class, 'update']);
Route::get('/pegawai/exportpdf', [PegawaiController::class, 'exportPDF']);
Route::get('/pegawai/tester', [PegawaiController::class, 'tester']);
Route::get('/periode/tambah', [PeriodeController::class, 'tambah']);
Route::post('/periode/store', [PeriodeController::class, 'store']);
Route::get('/periode/edit/{id}', [PeriodeController::class, 'edit']);
Route::put('/periode/update/{id}', [PeriodeController::class, 'update']);
Route::get('/periode/hapus/{id}', [PeriodeController::class, 'delete']);