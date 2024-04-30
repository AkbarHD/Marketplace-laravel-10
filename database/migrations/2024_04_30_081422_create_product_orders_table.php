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
        Schema::create('product_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('creator_id'); // yg pnya product
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('buyer_id'); // pembeli
            $table->unsignedBigInteger('total_price'); // harga total
            $table->boolean('is_paid'); // dia udh bayar apa blm
            $table->string('proof'); // bukti pembayaran
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('creator_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('buyer_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_orders');
    }
};
