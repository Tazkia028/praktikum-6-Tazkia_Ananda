<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormbukuController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BukuController;

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

Route::get('/tampil_mahasiswa', function () {
    return view('datamahasiswa');
});

Route::get('/menumasakan', function () {
    return view('menumasakan');
});



Route::get('/daftar_mahasiswa', [MahasiswaController::class, 'index']);
// routing form dan list buku
Route::get('/form-buku', [FormbukuController::class, 'index']);
Route::get('/list-buku', [ListController::class, 'index']);

//routing data barang
route::get('/databarang', function() {
    return view('databarang');
});
    
route::get('/databarang',
    [BarangController::class, 'data_barang']);

//tugas  pertemuan 7
Route::get('/pesan', [BukuController::class, 'pesan']);
Route::post('/pesan/proses', [BukuController::class, 'nota']);