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
        Schema::create('produks', function (Blueprint $table) {
            $table->id("id_produk");
            $table->string("nama_produk");
            $table->integer("stok_produk");
            $table->enum("jenis_produk", ['susu','daging','tulang','kepala','paha','jeroan']);
            $table->integer("harga_produk");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
