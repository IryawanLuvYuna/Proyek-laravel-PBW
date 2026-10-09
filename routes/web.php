<?php

use App\Http\Controllers\PublikasiController;
use App\Http\Controllers\insertController;
use App\Http\Controllers\Requests\StoreNoteRequest;

Route::get('/', function () {
    return redirect()->route('beranda');
});

Route::get('/publikasi', [PublikasiController::class, 'index'])->name('index');
Route::delete('/publikasi/{publikasi}', [PublikasiController::class, 'destroy'])->name('publikasi.destroy');

Route::get('/form', [PublikasiController::class, 'form'])->name('form');
Route::post('/form/store', [PublikasiController::class, 'store'])->name('form.store');

Route::get('/beranda', [PublikasiController::class, 'beranda'])->name('beranda');