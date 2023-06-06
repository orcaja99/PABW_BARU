<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\homepageController;
use App\Http\Controllers\ThController;
use App\Http\Controllers\KursiController;
use App\Http\Controllers\PesanKamarController;
use App\Http\Controllers\PesanTiketController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\AdminController;

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

// Admin Page

Route::get('/admin', [AdminController::class, 'adminHome'])->middleware(['auth', 'role:Admin'])->name('admin.home');
Route::get('admin/page', [PageController::class, 'home'])->name('admin.page.home');

Route::get('admin/page/user/index', [PageController::class, 'user'])->name('admin.page.user.index');

Route::get('admin/page/hotel', [PageController::class, 'hotel'])->name('admin.page.hotel');
Route::get('admin/page/kamar_hotel/index_kamar_hotel', [ThController::class, 'index'])->name('admin.page.kamar_hotel.index_kamar_hotel');
Route::get('/kamar_hotels', [ThController::class, 'index'])->name('kamar_hotels');

Route::get('admin/page/maskapai/index', [PageController::class, 'maskapai'])->name('admin.page.maskapai.index');

Route::get('admin/page/roles/index', [RoleController::class, 'index'])->name('admin.page.roles.index');




Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class)->middleware(['auth', 'role:Admin']);
    Route::resource('products', ProductController::class);
    Route::resource('tiket_penerbangans', KursiController::class)->middleware(['auth', 'role:Admin']);
    Route::resource('kamar_hotels', ThController::class)->middleware(['auth', 'role:Admin']);

});



// Route::resource('kamar_hotels', ThController::class);

Route::get('/hotel-dash',function () {
    return view('mitra/hotel');
});

Route::get('/maskapai-dash',function () {
    return view('mitra/maskapai');
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

Route::get('/all_FE',function () {
    return view('all_FE');
});

// Route::get('/tiket_penerbangans',function () {
    // return view('tiket_penerbangans');
// });

//ini buat nampilin user ke page admin
// Route::get('userview','App\Http\Controllers\userviewcontroller@index');
Route::resource('homepage',homepageController::class);
//Route::get('/homepage', homepageController::class);
// route::resource('kamar_hotels',ThController::class);


Route::get('/pesanan-kamar-hotel/{id}', [PesanKamarController::class,'detail'])-> name('pesanan.kamar');
Route::get('/pesanan-tiket-penerbangan/{id}', [PesanTiketController::class,'detail'])-> name('pesanan.tiket');
Route::post('/pesanan/create', [PesananController::class, 'createPesanan'])->name('pesanan.create');

//test pemesanan
Route::post('/bookings', [PesananController::class, 'store']);
Route::post('/bookings/cancel', [PesananController::class, 'cancelpesanan']);
Route::post('/bookings', [PesananController::class, 'store'])->name('bookings.store');