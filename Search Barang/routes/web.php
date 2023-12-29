<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

Route::get('/barang', [BarangController::class, 'index']);
Route::get('/barang/search', [BarangController::class, 'search'])->name('barang.search');
Route::get('/barang/{id}', [BarangController::class, 'detail'])->name('barang.detail');
