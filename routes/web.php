<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sinilah Anda bisa mendaftarkan rute web untuk aplikasi Anda.
|
*/

// Ini adalah rute utama yang akan menampilkan halaman portofolio kita.
Route::get('/', function () {
    return view('portfolio');
});
