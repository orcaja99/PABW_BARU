<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kamar_hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','nama_kamar', 'hotel','nama_hotel','harga','tanggal'
    ];
}
