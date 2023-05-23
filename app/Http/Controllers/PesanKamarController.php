<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kamar_hotel;


class PesanKamarController extends Controller
{


    public function index()
    {
        $kamar_hotels = kamar_hotel::all();
        return view(('pesan_kamar'),['kamar_hotels'=>$kamar_hotels]);
    }

    public function detail($id)
    {
        $kamar_hotels =  kamar_hotel::find($id);
        return view(('pesan_kamar'),['kamar_hotels'=>$kamar_hotels]);
    }
}
