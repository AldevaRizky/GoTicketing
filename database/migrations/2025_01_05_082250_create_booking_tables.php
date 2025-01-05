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
        Schema::create('booking', function (Blueprint $table) {
            $table->id('id_booking'); // Primary key
            $table->unsignedBigInteger('id_kota_asal'); // Foreign key ke kota asal
            $table->unsignedBigInteger('id_kota_tujuan'); // Foreign key ke kota tujuan
            $table->date('tanggal_mulai'); // Tanggal mulai perjalanan
            $table->date('tanggal_berakhir')->nullable(); // Tanggal akhir perjalanan (opsional)
            $table->integer('jumlah_kursi'); // Jumlah kursi dipesan
            $table->timestamps(); // Created at & Updated at

            // Foreign key constraints
            $table->foreign('id_kota_asal')->references('id_kota')->on('kota')->onDelete('cascade');
            $table->foreign('id_kota_tujuan')->references('id_kota')->on('kota')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
