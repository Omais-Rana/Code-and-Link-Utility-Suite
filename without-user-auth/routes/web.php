<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\QRCodeController;
use App\Http\Controllers\BarcodeController;
use App\Http\Controllers\URLShortenerController;

//Barcode Routes
Route::get('/barcode', [BarcodeController::class, 'index'])->name('barcode.index');
Route::post('/barcode/generate', [BarcodeController::class, 'generate'])->name('barcode.generate');
Route::get('/download/barcodes/{filename}', [BarcodeController::class, 'downloadBarcode'])->name('barcode.download');

//QRcode Routes
Route::get('/showForm/{form}', 'QRCodeController@index')->name('showForm');
Route::post('/generate', [QRCodeController::class, 'generate'])->name('qrcode.generate');
Route::get('/download/qrcodes/{filename}', [QRCodeController::class, 'downloadFile'])->name('qrcode.download.file');
Route::get('/check-auth', 'YourController@checkAuth')->middleware('auth');

// Link Shortener Routes
Route::post('/shorten-url', [URLShortenerController::class, 'shorten'])->name('url.shorten');
Route::get('/sori.ic/{shortenedURL}', [URLShortenerController::class, 'redirect']);


//Homepage options
Route::get('/form/{form}', [FormController::class, 'showForm'])->name('showForm');

Route::get('/', function () {
    return view('index');
});
