<?php

use Illuminate\Support\Facades\Route;

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
    return view('layout.main');
});

Route::get('/home', function () {
    return view('layout.main');
});

Route::get('kas/form', [\App\Http\Controllers\KasController::class, 'form']);
Route::resource('kas', \App\Http\Controllers\KasController::class);

Route::get('pengajian/form', [\App\Http\Controllers\PengajianController::class, 'form']);
Route::resource('pengajian', \App\Http\Controllers\PengajianController::class);

Route::get('qurban/form', [\App\Http\Controllers\QurbanController::class, 'form']);
Route::resource('qurban', \App\Http\Controllers\QurbanController::class);

Route::get('zakat/form', [\App\Http\Controllers\ZakatController::class, 'form']);
Route::resource('zakat', \App\Http\Controllers\ZakatController::class);
