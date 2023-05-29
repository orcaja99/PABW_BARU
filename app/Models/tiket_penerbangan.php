<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tiket_penerbangan extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
    protected $fillable = [
        'id', 'model_pesawat', 'kelas', 'kode_pesawat', 'jam_berangkat', 'jam_tiba', 'asal', 'tujuan', 'maskapai', 'tanggal', 'harga'
    ];
}
