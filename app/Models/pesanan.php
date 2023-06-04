<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    use HasFactory;
    protected $table = 'pesanan';
    protected $fillable = [
        'nama_pemesan',
        'nama_barang',
        'jumlah_barang',
        'harga_barang',
        'total_harga',
        'no_hp',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function kamar()
    {
        return $this->belongsTo(kamar_hotel::class);
    }
    
    public function tiket()
    {
        return $this->belongsTo(tiket_penerbangan::class);
    }
}
