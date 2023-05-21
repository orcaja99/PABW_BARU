<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\kamar_hotel;
use App\Models\tiket_penerbangan;

class homepageController extends Controller
{
    public function index(){
        $tiket_penerbangans = tiket_penerbangan::latest()->paginate(5);
   
        $kamar_hotels = kamar_hotel::latest()->paginate(5);
        return view('homepage',compact('kamar_hotels','tiket_penerbangans'));

    }

    
}

