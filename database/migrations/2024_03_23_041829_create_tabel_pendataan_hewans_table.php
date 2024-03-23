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
        Schema::create('pendataan_hewans', function (Blueprint $table) {
            $table->id("id_pendataan");
            $table->date("tanggal_pendataan");
            $table->integer("jumlah_hewan");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendataan_hewans');
    }
};
