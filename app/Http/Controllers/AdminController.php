<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
    return view('admin.admin-home');
    }

    /**
     * Show the admin contents.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminContents()
    {
    return view('admin.admin-dash');
    }

}
