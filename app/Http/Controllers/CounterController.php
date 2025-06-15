<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CounterController extends Controller
{
    public function latihan2()
    {
        DB::table('pagecounter')->where('ID', 1)->increment('Jumlah');

        $jumlah = DB::table('pagecounter')->where('ID', 1)->value('Jumlah');

        return view('latihan2', ['jumlah' => $jumlah]);
    }
}
