<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormbukuController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\GuruController; 

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

//source code 2
Route::get('/formulir', [GuruController::class, 'formulir']);
Route::post('/formulir/proses', [GuruController::class, 'formulir_proses']);


//tugas pertemuan 6
Route::get('/pesan', [BukuController::class, 'pesan']);
Route::post('/pesan/proses', [BukuController::class, 'nota']); 
