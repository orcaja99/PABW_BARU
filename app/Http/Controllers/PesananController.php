<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pesanan;
use App\Models\User;
use App\Models\kamar_hotel;
use App\Models\tiket_penerbangan;

class PesananController extends Controller
{

    public function store(Request $request)
    {
        // Validate request data
        $request->validate([
            'user_id' => 'required',
            'kamar_id' => 'required',
            'nama_pemesan' => 'required',
            'jumlah_barang' => 'required|integer',
            'no_hp' => 'required|integer',
        ]);
    
        $user = User::findOrFail($request->user_id);
        $kamar_hotels =  kamar_hotel::findOrFail($request->kamar_id);
    
        // Check Kamar availability
        if (!$kamar_hotels->status) {
            return response()->json(['message' => 'Kamar is not available.'], 400);
        }
    
        // Calculate the booking price based on the Kamar's price and quantity
        $hargapesanan = $kamar_hotels->harga * $request->jumlah_barang;
    
        // Check user's e-wallet balance
        if ($user->saldo < $hargapesanan) {
            return response()->json(['message' => 'Insufficient e-wallet balance.'], 400);
        }
    
        // Create the booking
        $pesanan = new Pesanan();
        $pesanan->user_id = $user->id;
        $pesanan->kamar_id = $kamar_hotels->id;
        $pesanan->jumlah_barang = $request->jumlah_barang;
        $pesanan->harga_barang = $kamar_hotels->harga;
        $pesanan->status = 'confirmed'; // Assuming bookings are confirmed instantly
        $pesanan->save();
    
        // Update Kamar availability
        $kamar_hotels->status = false;
        $kamar_hotels->save();
    
        // Transfer funds from user's e-wallet to mitra's e-wallet
        // Assuming mitra's user ID is 1, update accordingly
        $mitra = User::findOrFail(1);
        $mitra->saldo += $hargapesanan;
        $mitra->save();
    
        // Update user's e-wallet balance
        $user->saldo -= $hargapesanan;
        $user->save();
    
        return redirect()->route('homepage')->with('success', 'Kamar booked successfully.');
    }
    

    public function cancelBooking(Request $request)
    {
        // Validate request data
        $request->validate([
            'id' => 'required|exists:pesanan,id',
        ]);

        $pesanan = pesanan::findOrFail($request->id);
        $user = $pesanan->user;

        // Check if the booking is owned by the user
        if ($user->id !== auth()->user()->id) {
            return response()->json(['message' => 'Unauthorized.'], 403);
        }

        // Check if the booking is cancellable based on business rules (e.g., cancellation deadline)

        // Update booking status to "cancelled"
        $pesanan->status = 'cancelled';
        $pesanan->save();

        // Update Kamar$kamar_hotels availability
        $kamar_hotels = $pesanan->kamar_hotels;
        $kamar_hotels->status = true;
        $kamar_hotels->save();

        // Refund user's e-wallet balance
        $refundAmount = $kamar_hotels->harga ;
        $user->ewallet_balance += $refundAmount;
        $user->save();

        return response()->json(['message' => 'Booking cancelled successfully.']);
    }
}
