<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenghapusController extends Controller
{
    public function penghapus()
    {
        $this->log('/penghapus');

        $penghapus = DB::table('penghapus')->paginate(10);
        return view('penghapus', ['penghapus' => $penghapus]);
    }

    public function tambah()
    {
        $this->log('/penghapus/tambah');
        return view('tambahpenghapus');
    }

    public function store(Request $request)
    {
        $this->log('/penghapus/store');

        DB::table('penghapus')->insert([
            'merkpenghapus'   => $request->merkpenghapus,
            'hargapenghapus'  => $request->hargapenghapus,
            'tersedia'        => $request->tersedia,
            'berat'           => $request->berat
        ]);
        return redirect('/penghapus');
    }

    public function edit($id)
    {
        $this->log('/penghapus/edit/' . $id);

        $penghapus = DB::table('penghapus')->where('ID', $id)->get();
        return view('editpenghapus', ['penghapus' => $penghapus]);
    }

    public function update(Request $request)
    {
        $this->log('/penghapus/update');

        DB::table('penghapus')->where('ID', $request->id)->update([
            'merkpenghapus'   => $request->merkpenghapus,
            'hargapenghapus'  => $request->hargapenghapus,
            'tersedia'        => $request->tersedia,
            'berat'           => $request->berat
        ]);
        return redirect('/penghapus');
    }

    public function hapus($id)
    {
        $this->log('/penghapus/delete/' . $id);

        DB::table('penghapus')->where('ID', $id)->delete();
        return redirect('/penghapus');
    }

    public function cari(Request $request)
    {
        $this->log('/penghapus/cari');

        $penghapus = DB::table('penghapus')
            ->where('merkpenghapus', 'like', "%" . $request->cari . "%")
            ->paginate();

        return view('penghapus', ['penghapus' => $penghapus]);
    }

    // Fungsi untuk menyimpan log
    public function log($route)
    {
        DB::table('logactivity')->insert([
            'namaroute' => $route,
        ]);
    }
}
