<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('kamar_hotels', ThController::class);
Route::get('/kamar_hotels/{kamar_hotel}', [ThController::class, 'show']);

// Route::get('/home', [HomeController::class, 'index'])->name('home');
// route::resource('tiket_penerbangans',KursiController::class);