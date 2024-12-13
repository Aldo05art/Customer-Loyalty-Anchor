<?php

use App\Http\Controllers\PdfController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('indexx');

Route::resource('sales',SalesController::class);
Route::resource('transaksi',TransaksiController::class);

Route::get('cetak-pdf', [PdfController::class, 'pdf'])->name('cetak-pdf');