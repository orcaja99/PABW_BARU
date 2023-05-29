<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tiket_penerbangan;


class PesanTiketController extends Controller
{
    public function index()
    {
        $tiket_penerbangans = tiket_penerbangan::all();
        return view(('pesan_penerbangan'),['tiket_penerbangans'=>$tiket_penerbangans]);
    }

    public function detail($id)
    {
        $tiket_penerbangans =  tiket_penerbangan::find($id);
        return view(('pesan_penerbangan'),['tiket_penerbangans'=>$tiket_penerbangans]);
    }
}