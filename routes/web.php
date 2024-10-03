<?php

use App\Http\Controllers\ChartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\PilihanController;


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

Route::get('/', [PilihanController::class, 'pilihan']);
Route::get('/daftar', [DaftarController::class, 'daftar']);
Route::post('/daftar', [DaftarController::class, 'store']);
Route::get('/hasil', [HasilController::class, 'hasil']);
Route::get('/chart', [ChartController::class, 'chart']);

