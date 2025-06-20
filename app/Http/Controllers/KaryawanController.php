<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function karyawan()
    {
    	// mengambil data dari table karyawan
    	 $karyawan = DB::table('karyawan')->get();
 
    	// mengirim data karyawan ke view index
    	return view('karyawan',['karyawan' => $karyawan]);   
 
    }

    public function tambah()
    {
	return view('tambahkaryawan');

    }

    public function store(Request $request)
    {
        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen,
        ]);

        return redirect('/karyawan');
    }

    public function edit($kodepegawai)
{
    $karyawan = DB::table('karyawan')
        ->where('kodepegawai', $kodepegawai)
        ->get();

    return view('karyawan.edit', ['karyawan' => $karyawan]);
}

    public function update(Request $request)
{
    DB::table('karyawan')->where('kodepegawai', $request->kodepegawai)->update([
        'namalengkap' => $request->namalengkap,
        'divisi' => $request->divisi,
        'departemen' => $request->departemen
    ]);

    return redirect('/karyawan');
}

    public function hapus($kodepegawai)
{
    DB::table('karyawan')->where('kodepegawai', $kodepegawai)->delete();
    return redirect('/karyawan');
}

    public function cari(Request $request)
{
    $karyawan = DB::table('karyawan')
        ->where('namalengkap', 'like', "%" . $request->cari . "%")
        ->get();

    return view('karyawan.index', ['karyawan' => $karyawan]);
}

}
