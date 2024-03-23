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
        Schema::create('data_hewan_akhirs', function (Blueprint $table) {
            $table->id("id_data_hewan_akhir");
            $table->integer("berat_hewan");
            $table->integer("tinggi_hewan");
            $table->integer("poel");
            $table->string("klasifikasi_akhir");
            $table->unsignedBigInteger("id_pendataan");
            $table->unsignedBigInteger("id_data_hewan_awal");
            $table->foreign('id_pendataan')->references('id_pendataan')->on('pendataan_hewans')->onDelete('cascade');
            $table->foreign('id_data_hewan_awal')->references('id_data_hewan_awal')->on('data_hewan_awals')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_hewan_akhirs');
    }
};
