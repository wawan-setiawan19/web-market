<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailPenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_penjualans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_penjualan');
            $table->unsignedBigInteger('id_barang');
            $table->foreign('id_penjualan')->references('id')->on('penjualan');
            $table->foreign('id_barang')->references('id')->on('barang');
            $table->integer('jumlah');
            $table->integer('harga_satuan');
            $table->integer('harga_total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_penjualans');
    }
}
