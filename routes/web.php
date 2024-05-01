<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;

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
    return view('welcome',[
        'isi_data' => 'Halaman Awal'
    ]);
});
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('index');
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('create');
Route::post('/mahasiswa/store', [MahasiswaController::class, 'store'])->name('store');
Route::get('/mahasiswa/edit/{id_mahasiswa}', [MahasiswaController::class, 'edit'])->name('edit');
Route::put('/mahasiswa/update/{id_mahasiswa}', [MahasiswaController::class, 'update'])->name('update');
Route::delete('/mahasiswa/delete/{id_mahasiswa}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.delete');

Route::get('/dosen', [DosenController::class, 'index2'])->name('index2');
Route::get('/dosen/create2', [DosenController::class, 'create2'])->name('create2');
Route::post('/dosen/store2', [DosenController::class, 'store2'])->name('store2');
Route::get('/dosen/edit2/{id_dosen}', [DosenController::class, 'edit2'])->name('edit2');
Route::put('/dosen/update2/{id_dosen}', [DosenController::class, 'update2'])->name('update2');
// web.php
Route::delete('/dosen/delete/{id_dosen}', [DosenController::class, 'destroy2'])->name('delete');

