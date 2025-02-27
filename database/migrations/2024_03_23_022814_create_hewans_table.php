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
        Schema::create('hewans', function (Blueprint $table) {
            $table->id("nomor_hewan");
            $table->integer("berat_badan");
            $table->integer("tinggi_badan");
            $table->string("jenis_hewan");
            $table->enum("jenis_kelamin", ['jantan', 'betina'] );
            $table->integer("harga_hewan");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hewans');
    }
};
