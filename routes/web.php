<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PenghapusController;
use App\Http\Controllers\KaryawanController;

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

Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

// route blog   
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang',[BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

Route::get('/pegawai',[PegawaiController::class,'index']);
Route::get('/pegawai/tambah',[PegawaiController::class,'tambah']);
Route::post('/pegawai/store',[PegawaiController::class,'store']);
Route::get('/pegawai/edit/{id}',[PegawaiController::class,'edit']);
Route::post('/pegawai/update',[PegawaiController::class,'update']);
Route::get('/pegawai/hapus/{id}',[PegawaiController::class,'hapus']);
Route::get('/pegawai/cari',[PegawaiDBController::class,'cari']);

Route::get('/penghapus',[PenghapusController::class,'penghapus']);
Route::get('/penghapus/tambah',[PenghapusController::class,'tambah']);
Route::post('/penghapus/store',[PenghapusController::class,'store']);
Route::get('/penghapus/edit/{id}',[PenghapusController::class,'edit']);
Route::post('/penghapus/update',[PenghapusController::class,'update']);
Route::get('/penghapus/hapus/{id}',[PenghapusController::class,'hapus']);
Route::get('/penghapus/cari',[PenghapusController::class,'cari']);

Route::get('/karyawan',[KaryawanController::class,'karyawan']);
Route::get('/karyawan/tambah',[KaryawanController::class,'tambah']);
Route::post('/karyawan/store',[KaryawanController::class,'store']);
Route::get('/karyawan/edit/{id}',[KaryawanController::class,'edit']);
Route::post('/karyawan/update',[KaryawanController::class,'update']);
Route::get('/karyawan/hapus/{id}',[KaryawanController::class,'hapus']);
Route::get('/karyawan/cari',[KaryawanController::class,'cari']);