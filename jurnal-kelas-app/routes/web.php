<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
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
    return view('welcome');
});

Route::get('/prodi', [ProdiController::class, 'index']);
Route::get('/prodi/tambah', [ProdiController::class, 'tambah']);
Route::get('/prodi/edit/{prodi_id}', [ProdiController::class, 'edit']);
Route::post('/prodi/simpan', [ProdiController::class, 'simpan']);
Route::post('/prodi/update/{prodi_id}', [ProdiController::class, 'update']);

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa/tambah', [MahasiswaController::class, 'tambah']);
Route::post('/mahasiswa/simpan', [MahasiswaController::class, 'simpan']);