<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Prakerja\PrakerjaController;

Route::get('/',[HomeController::class, 'home'])->name('home');

Route::get('prakerja',[PrakerjaController::class, 'index'])->name('prakerja');
Route::get('tambah',[PrakerjaController::class, 'tambah'])->name('tambah');
Route::post('tambah-prakerja',[PrakerjaController::class, 'tambahPrakerja'])->name('tambah-prakerja');
Route::get('edit-prakerja/{id?}',[PrakerjaController::class, 'editPrakerja'])->name('edit-prakerja');
Route::get('hapus-prakerja/{id?}',[PrakerjaController::class, 'hapusPrakerja'])->name('hapus-prakerja');
Route::post('update-prakerja/{id}',[PrakerjaController::class, 'updatePrakerja'])->name('update-prakerja');