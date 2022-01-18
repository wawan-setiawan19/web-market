<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPenjualan extends Model
{
    protected $fillable =[
        'id_penjualan',
        'id_barang',
        'jumlah',
        'harga_satuan',
        'harga_total'
    ];
}
