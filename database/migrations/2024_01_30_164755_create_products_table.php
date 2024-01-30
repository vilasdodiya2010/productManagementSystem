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
            $table->unsignedBigInteger('user_id')->index(); 
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); 
            $table->unsignedBigInteger('category_id')->index(); 
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
             $table->unsignedBigInteger('product_variation_id')->index(); 
            $table->foreign('product_variation_id')->references('id')->on('product_variations')->onDelete('cascade');  

            $table->string('product_name')->nullable();
            $table->longText('product_detail')->nullable();
            $table->string('image')->nullable(); 
            $table->decimal('price')->nullable(); 

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
