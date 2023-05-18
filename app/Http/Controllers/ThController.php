<?php

namespace App\Http\Controllers;

use App\Models\kamar_hotel;
use Illuminate\Http\Request;

class ThController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $kamar_hotels = kamar_hotel::latest()->paginate(5);
        return view('kamar_hotel.index_kamar_hotel',compact('kamar_hotels'))->with('i', (request()->input('page', 1) - 1) * 5);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kamar_hotel.tambah_kamar_hotel');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {
            $request->validate([
                'nama_kamar' => 'required',
                'hotel' => 'required',
                'tanggal' => 'required',
                'harga' => 'required',
            ]);
      
            kamar_hotel::create($request->all());
       
            return redirect('/kamar_hotels')->with('success','Product created successfully.');

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(kamar_hotel $kamar_hotel)
    {
        return view('kamar_hotel/show_kamar_hotel',compact('kamar_hotel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kamar_hotel $kamar_hotel)
    {
        return view('kamar_hotel/edit_kamar_hotel',compact('kamar_hotel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kamar_hotel $kamar_hotel)
    {
        $request->validate([
            'nama_kamar' => 'required',
            'hotel' => 'required',
            'tanggal' => 'required',
            'harga' => 'required',
        ]);
  
        $kamar_hotel->update($request->all());
  
        return redirect('/kamar_hotels')->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kamar_hotel $kamar_hotel)
    {
        $kamar_hotel->delete();
  
        return redirect('/kamar_hotels')->with('success','Product deleted successfully');
    }
}
