<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pesanan;

class PesananController extends Controller
{
    // public function createPesanan(Request $request)
    // {
    //     // Validasi input dari form pesanan
    //     $validatedData = $request->validate([
    //         'nama_pemesan' => 'required|string',
    //         'alamat' => 'required|string',
    //         // tambahkan validasi untuk data lainnya
    //     ]);

    //     // Buat pesanan baru
    //     $pesanan = new Pesanan();
    //     $pesanan->nama_pemesan = $validatedData['nama_pemesan'];
    //     // set data pesanan lainnya sesuai dengan inputan

    //     // Simpan pesanan ke dalam database
    //     $pesanan->save();

    //     // Redirect atau tampilkan halaman sukses pesanan
    //     // return redirect()->route('nama_rute')->with('success', 'Pesanan berhasil dibuat');
    //     // atau
    //     // return view('pesanan.sukses')->with('pesanan', $pesanan);
    // }
}
