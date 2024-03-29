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
        Schema::create('products_assets', function (Blueprint $table) {
            $table->id();
            $table->string('product_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->text('file_path');
            $table->string('file_name');
            $table->string('file_type');
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
