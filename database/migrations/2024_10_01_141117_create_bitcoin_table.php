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
        Schema::create('bitcoin', function (Blueprint $table) {
            $table->id('id_bitcoin');
            $table->string('nama_bitcoin');
            $table->bigInteger('harga_bitcoin');    
            $table->unsignedBigInteger('pembeli');

            $table->foreign('pembeli')->references('id_user')->on('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bitcoin');
    }
};
