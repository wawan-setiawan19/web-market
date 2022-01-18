<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $fillable = [
        'tanggal_penjualan',
        'nama_konsumen',
        'alamat'
    ];
}
