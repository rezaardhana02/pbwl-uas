<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_transaksi', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('id_produk')->nullable();
            $table->foreignId('id_pelanggan')->nullable();
            $table->date('tanggal')->default(now());
            $table->integer('jumlah');
            $table->bigInteger('total_harga');
            $table->bigInteger('tunai');
            $table->bigInteger('kembalian');
            $table->timestamps();

            $table->foreign('id_produk')->references('id')->on('tb_produk')->onDelete('cascade');
            $table->foreign('id_pelanggan')->references('id')->on('tb_pelanggan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_transaksi');
    }
};
