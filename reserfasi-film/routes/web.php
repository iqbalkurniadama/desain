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
    return view('welcome');
});

// users
Route::get('/index', function () {
    return view('index');
});

Route::get('/form', function () {
    return view('form');
});

// dashboard admin
Route::get('/dasboard', function () {
    return view('admin/app');
});
// form film
Route::get('/pesanfilm', function () {
    return view('admin/tambah-data/formFilm');
});
//  form bioskop
Route::get('/pesanbioskop', function () {
    return view('admin/tambah-data/formBioskop');
});
// form kursi
Route::get('/pesankursi', function () {
    return view('admin/tambah-data/formKursi');
});
// tabel film
Route::get('/tabelfilm', function () {
    return view('admin/tabelFilm');
});
// tabel bioskop
Route::get('/tabelbioskop', function () {
    return view('admin/tabelBioskop');
});
// tabel kursi
Route::get('/tabelkursi', function () {
    return view('admin/tabelKursi');
});
