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
        Schema::create('hubungi_kami', function (Blueprint $table) {
            $table->id(); // Kolom ID
            $table->string('nama'); // Kolom nama
            $table->string('email'); // Kolom email
            $table->string('subject'); // Kolom subject
            $table->text('pesan'); // Kolom pesan
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hubungi_kami');
    }
};
