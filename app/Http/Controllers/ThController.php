<?php

namespace App\Http\Controllers;

use App\Models\kamar_hotel;
use Illuminate\Http\Request;

use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Symfony\Component\HttpFoundation\JsonResponse;

class ThController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */

    function __costruct()
    {
        $this->middleware('permission:kamar_hotel-list|kamar_hotel-create|kamar_hotel-edit|kamar_hotel-delete', ['only' => ['index','show']]);
        $this->middleware('permission:kamar_hotel-create', ['only' => ['create','store']]);
        $this->middleware('permission:kamar_hotel-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:kamar_hotel-delete', ['only' => ['destroy']]);
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $kamar_hotels = kamar_hotel::latest()->paginate(5);

        if (request()->expectsJson()) {
            return response()->json($kamar_hotels);
        }
        return view('admin/page/kamar_hotel/index_kamar_hotel',compact('kamar_hotels'))->with('i', (request()->input('page', 1) - 1) * 5);
        
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        return view('admin.page.kamar_hotel.tambah_kamar_hotel');

    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kamar_hotel  $kamar_hotel
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {

        $request->validate([
            'nama_kamar' => 'required',
            'hotel' => 'required',
            'lokasi' => 'required',
            'fasilitas' => 'required',
            'tanggal' => 'required',
            'harga' => 'required',
            'fasilitas' => 'required',
            'lokasi' => 'required',
        ]);
      
        kamar_hotel::create($request->all());
       
        return redirect()->route('admin.page.kamar_hotel.index_kamar_hotel')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     * 
     * @param  \App\kamar_hotel  $kamar_hotel
     * @return \Illuminate\Http\Response
     */
    public function show(kamar_hotel $kamar_hotel)
    {
        if (request()->expectsJson()) {
            return response()->json($kamar_hotel);
        }
    
        return view('admin.page.kamar_hotel.show_kamar_hotel', compact('kamar_hotel'))->with('jsonData', $kamar_hotel->toJson());
    
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param  \App\kamar_hotel  $kamar_hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(kamar_hotel $kamar_hotel): View
    {
        return view('admin/page/kamar_hotel/edit_kamar_hotel',compact('kamar_hotel'));
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kamar_hotel  $kamar_hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kamar_hotel $kamar_hotel): RedirectResponse
    {
        $request->validate([
            'nama_kamar' => 'required',
            'hotel' => 'required',
            'lokasi' => 'required',
            'fasilitas' => 'required',
            'tanggal' => 'required',
            'harga' => 'required',
            'fasilitas' => 'required',
            'lokasi' => 'required',
        ]);
  
        $kamar_hotel->update($request->all());
  
        return redirect('/kamar_hotels')->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param  \App\kamar_hotel  $kamar_hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(kamar_hotel $kamar_hotel)
    {
        $kamar_hotel->delete();
  
        return redirect('/kamar_hotels')->with('success','Product deleted successfully');
    }

    public function detail($id)
    {
        return kamar_hotel::find($id);
    }
}
