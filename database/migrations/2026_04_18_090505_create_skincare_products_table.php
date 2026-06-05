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
        Schema::create('skincare_products', function (Blueprint $table) {
            $table->id('product_id');
            $table->string('product_name'); 
            $table->string('original_name'); 
            $table->text('image_url')->nullable();
            $table->text('ingredients')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skincares');
    }
};
