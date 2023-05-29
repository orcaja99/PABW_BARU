<?php

namespace App\Http\Controllers;

use App\Models\tiket_penerbangan;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class KursiController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    

    function __costruct()
    {
        $this->middleware('permission:tiket_penerbangan-list|tiket_penerbangan-create|tiket_penerbangan-edit|tiket_penerbangan-delete', ['only' => ['index','show']]);
        $this->middleware('permission:tiket_penerbangan-create', ['only' => ['create','store']]);
        $this->middleware('permission:tiket_penerbangan-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:tiket_penerbangan-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tiket_penerbangans = tiket_penerbangan::latest()->paginate(5);
        return view('tiket_penerbangan.index',compact('tiket_penerbangans'))->with('i', (request()->input('page', 1) - 1) * 5);
        
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        return view('tiket_penerbangan.create');

    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {        
        $request->validate([
            'kode_pesawat' => 'required',
            'model_pesawat' => 'required',
            'kelas' => 'required',
            'asal' => 'required',
            'tujuan' => 'required',
            'jam_berangkat' => 'required',
            'jam_tiba' => 'required',
            'maskapai' => 'required',
            'tanggal' => 'required',
            'harga' => 'required',
        ]);
      
        tiket_penerbangan::create($request->all());
       
        return redirect()->route('tiket_penerbangans.index')
                        ->with('success','Product created successfully.');

    }

    /**
     * Display the specified resource.
     * 
     * @param  \App\tiket_penerbangan  $tiket_penerbangans
     * @return \Illuminate\Http\Response
     */
    public function show(tiket_penerbangan $tiket_penerbangan): View
    {
        return view('tiket_penerbangan/show',compact('tiket_penerbangan'));
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param  \App\tiket_penerbangan  $tiket_penerbangans
     * @return \Illuminate\Http\Response
     */
    public function edit(tiket_penerbangan $tiket_penerbangan): View
    {
        return view('tiket_penerbangan/edit',compact('tiket_penerbangan'));
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tiket_penerbangan  $tiket_penerbangans
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tiket_penerbangan $tiket_penerbangan): RedirectResponse
    {
        $request->validate([
            'nama_tiket' => 'required',
            'maskapai' => 'required',
            'tanggal' => 'required',
            'harga' => 'required',
        ]);
  
        $tiket_penerbangan->update($request->all());
  
        return redirect('/tiket_penerbangans')->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param  \App\tiket_penerbangan  $tiket_penerbangans
     * @return \Illuminate\Http\Response
     */
    public function destroy(tiket_penerbangan $tiket_penerbangan): RedirectResponse
    {
        $tiket_penerbangan->delete();
  
        return redirect('/tiket_penerbangans')->with('success','Product deleted successfully');
    }
}
