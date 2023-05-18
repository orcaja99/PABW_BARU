<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\kamar_hotel;

class homepageController extends Controller
{
    public function index(){
        $kamar_hotels = kamar_hotel::latest()->paginate(5);
        return view('homepage',compact('kamar_hotels'));
        }
}

