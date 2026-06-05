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
        Schema::create('hk_beautycare_products', function (Blueprint $table) {
            $table->id('product_id');
            $table->string('product_name', 100)->comment('Kategori produk (Cleanser, Toner, Moisturizer, dll)');
            $table->string('original_name', 255)->comment('Nama lengkap produk');
            $table->text('image_url')->nullable()->comment('URL gambar produk');
            $table->longText('ingredients')->nullable();
            $table->text('link_shopee')->nullable()->comment('Link pembelian produk di Shopee');
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hk_beautycare_products');
    }
};