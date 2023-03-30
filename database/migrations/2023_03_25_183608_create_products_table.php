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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->string('harga_produk');
            $table->bigInteger('berat_produk');
            $table->bigInteger('stok_produk');
            $table->bigInteger('panjang_produk');
            $table->bigInteger('lebar_produk');
            $table->bigInteger('tinggi_produk');
            $table->string('informasi_produk');
            $table->boolean('garansi_produk');
            $table->string('kelengkapan_produk');
            $table->string('deskripsi_produk');
            $table->String('link_img1')->default('none.jpg');
            $table->String('link_img2')->nullable();
            $table->String('link_img3')->nullable();
            $table->String('link_shopee')->nullable();
            $table->String('link_tokopedia')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
