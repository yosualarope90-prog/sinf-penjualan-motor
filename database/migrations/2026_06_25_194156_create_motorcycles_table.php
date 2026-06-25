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
        Schema::create('motorcycles', function (Blueprint $table) {
            $table->id();
            $table->string('merk');         // Contoh: Honda, Yamaha, Kawasaki
            $table->string('tipe');         // Contoh: Matic, Sport, Bebek
            $table->integer('harga');        // Harga dalam angka
            $table->integer('stok');         // Jumlah stok tersedia
            $table->text('deskripsi')->nullable(); // Detail tambahan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motorcycles');
    }
};
