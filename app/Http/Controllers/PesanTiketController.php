<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tiket_penerbangan;


class PesanTiketController extends Controller
{
    public function index()
    {
        $tiket_penerbangan = tiket_penerbangan::all();
        return view(('pesan_tiket'),['kamar_hotels'=>$tiket_penerbangan]);
    }

    public function detail($id)
    {
        $tiket_penerbangan =  tiket_penerbangan::find($id);
        return view(('pesan_tiket'),['kamar_hotels'=>$tiket_penerbangan]);
    }
}