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
        Schema::create('order_details', function (Blueprint $table) {
            $table->increments('order_details_id');
            //
            $table->unsignedInteger('order_id');
            $table->foreign('order_id')->references('order_id')->on('orders')->onDelete('cascade');
            //
            $table->unsignedInteger('product_id');
            $table->foreign('product_id')->references('product_id')->on('products')->onDelete('cascade');
            //
            $table->string('quantity')->default(1);//Số lượng
            $table->float('price',8,2);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};