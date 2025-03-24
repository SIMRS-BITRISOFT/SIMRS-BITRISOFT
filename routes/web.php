<?php

use Illuminate\Support\Facades\Route;

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

// Halaman Utama
Route::get('/', function () {
    return view('content.home');
})->name('home');

// Fitur Unggulan
Route::get('/fitur-unggulan', function () {
    return view('content.feature');
})->name('fitur-unggulan');

// Fitur Lainnya
Route::get('/fitur-lainnya', function () {
    return view('content.feature');
})->name('fitur-lainnya');

// Modul
Route::get('/modul', function () {
    return view('content.modul');
})->name('modul');

// Produk Lain
Route::get('/aplikasi-hrd', function () {
    return view('content.aplikasi');
})->name('aplikasi-hrd');

Route::get('/aplikasi-absen', function () {
    return view('content.aplikasi');
})->name('aplikasi-absen');

Route::get('/aplikasi-satu-sehat', function () {
    return view('content.aplikasi');
})->name('aplikasi-satu-sehat');

// Route untuk modul
Route::get('/modul/manajemen', function () {
    return view('content.modul.manajemen');
})->name('modul.manajemen');

Route::get('/modul/gizi', function () {
    return view('content.modul.gizi');
})->name('modul.gizi');

Route::get('/modul/coding', function () {
    return view('content.modul.coding');
})->name('modul.coding');

Route::get('/modul/laporan', function () {
    return view('content.modul.laporan');
})->name('modul.laporan');
