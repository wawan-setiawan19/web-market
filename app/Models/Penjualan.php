<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $fillable = [
        'nama_konsumen',
        'alamat',
        'tanggal_penjualan'
    ];
}
