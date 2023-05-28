<?php

namespace App\Http\Controllers;
use App\Http\Controllers\RoleController;


use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        return view('admin.page.home');
    }

    public function index()
    {
        return view('admin.page.roles.index');
    }

    public function user()
    {
        return view('admin.page.user');
    }

    public function hotel()
    {
        return view('admin.page.hotel');
    }

    public function maskapai()
    {
        return view('admin.page.maskapai');
    }

    public function kamar_hotel()
    {
        return view('kamar_hotel.index');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
