<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class insertController extends Controller
{
    function form(){
        return view('form');
    }

    function insert(Request $req){
        $judul=$req->judul;
        $tgl=$req->tanggal_rilis;
        $sampul=$req->sampul;

        return $tgl;
    }
}
