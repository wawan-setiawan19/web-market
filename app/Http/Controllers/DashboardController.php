<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Penjualan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $barang = Barang::all();
        $penjualan = Penjualan::select('*')
                        ->orderBy('tanggal_penjualan','desc')
                        ->take(10)
                        ->get();
        return view('dashboard', ['barangs'=>$barang,'penjualans'=>$penjualan]);
    }
}
