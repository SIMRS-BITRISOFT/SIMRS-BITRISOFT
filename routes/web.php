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

Route::get('/medical-recordy', function () {
    return view('content.modul.medical-recordy');
})->name('medical-recordy');

Route::get('/radiologi', function (){
    return view('content.modul.radiologi');
})->name('radiologi');

Route::get('/farmasi', function (){
    return view('content.modul.farmasi');
})->name('farmasi');

Route::get('/keuangan', function (){
    return view('content.modul.keuangan');
})->name('keuangan');

Route::get('/kasir', function (){
    return view('content.modul.kasir');
})->name('kasir');

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

Route::get('/modul/radiologi', function () {
    return view('content.modul.radiologi');
})->name('modul.radiologi');

Route::get('/modul/farmasi', function () {
    return view('content.modul.farmasi');
})->name('modul.farmasi');

Route::get('/modul/keuangan', function () {
    return view('content.modul.keuangan');
})->name('modul.keuangan');

Route::get('/modul/kasir', function () {
    return view('content.modul.kasir');
})->name('modul.kasir');


Route::get('/modul/medical-recordy', function () {
    return view('content.modul.medical-recordy');
})->name('modul.medical-recordy');

Route::get('/modul/rawat-jalan', function () {
    return view('content.modul.rawat-jalan');
})->name('modul.rawat-jalan');

Route::get('/modul/rawat-inap', function () {
    return view('content.modul.rawat-inap');
})->name('modul.rawat-inap');

Route::get('/modul/laboratorium', function () {
    return view('content.modul.laboratorium');
})->name('modul.laboratorium');


