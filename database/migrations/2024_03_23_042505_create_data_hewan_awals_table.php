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
        Schema::create('data_hewan_awals', function (Blueprint $table) {
            $table->id("id_data_hewan_awal");
            $table->integer("nomor_hewan");
            $table->enum("jenis_kelamin_hewan", ['jantan', 'betina']);
            $table->string("jenis_hewan");
            $table->integer("berat_hewan");
            $table->integer("tinggi_hewan");
            $table->integer("poel");
            $table->string("jenis_perkawinan");
            $table->unsignedBigInteger("id_pendataan");


            $table->foreign('id_pendataan')->references('id_pendataan')->on('pendataan_hewans')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_hewan_awals');
    }
};
