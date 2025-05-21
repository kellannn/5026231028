<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index'); // untuk index.blade.php
});

//semua tugas sampai ets beserta latihan-latihannya
Route::get('/bootstrap-template', function () {
    return view('bootstrap_template');
});

Route::get('/bootstrap1', function () {
    return view('bootstrap1');
});

Route::get('/css-imageshape', function () {
    return view('css_imageshape');
});

Route::get('/css-outline', function () {
    return view('css_outline');
});

Route::get('/formulir', function () {
    return view('formulir');
});

Route::get('/js2', function () {
    return view('js2');
});

Route::get('/latihan-kode2', function () {
    return view('latihan_kode2');
});

Route::get('/linktree-mercedes', function () {
    return view('linktree_mercedes');
});

Route::get('/my-its', function () {
    return view('my_its');
});

Route::get('/pineapple', function () {
    return view('pineapple');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/tutorial', function () {
    return view('tutorial');
});

Route::get('/tutoriall', function () {
    return view('tutoriall');
});

Route::get('/about', function () {
    return view('about'); // untuk about.blade.php
});

Route::get('/contact', function () {
    return view('contact'); // untuk contact.blade.php
});

Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang',[BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);