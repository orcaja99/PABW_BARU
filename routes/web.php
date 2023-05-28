<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\homepageController;
use App\Http\Controllers\ThController;
use App\Http\Controllers\KursiController;
use App\Http\Controllers\PesanKamarController;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('homepage');
// });

Route::get('/', [homepageController::class, 'index'])->name('homepage');

Auth::routes();

Route::get('/admin', [AdminController::class, 'adminHome'])->name('admin_dashboard');
Route::get('/admin/dash', [AdminController::class, 'adminContents'])->name('admin_dash');

Route::resource("admin/page", PageController::class);

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    Route::resource('tiket_penerbangans', KursiController::class)->middleware('auth');
    Route::resource('kamar_hotels', ThController::class)->middleware('auth');
});







Route::get('/myorder',function () {
    return view('myorder');
});



Route::get('/profileuser',function () {
    return view('profileuser');
});


Route::get('/pesan',function () {
    return view('pesan');
});

Route::get('/adminpage',function () {
    return view('adminpage');
});

Route::get('/ticket',function () {
    return view('ticket');
});

Route::get('/saldo',function () {
    return view('saldo');
});

Route::get('/homepage',function () {
    return view('homepage');
});

// Route::get('/tiket_penerbangans',function () {
    // return view('tiket_penerbangans');
// });

//ini buat nampilin user ke page admin
Route::get('userview','App\Http\Controllers\userviewcontroller@index');
Route::resource('homepage',homepageController::class);
//Route::get('/homepage', homepageController::class);
route::resource('kamar_hotels',ThController::class);
route::resource('tiket_penerbangans',KursiController::class);

Route::get('/pesanan-kamar-hotel/{id}', [PesanKamarController::class,'detail'])-> name('pesanan.kamar');
