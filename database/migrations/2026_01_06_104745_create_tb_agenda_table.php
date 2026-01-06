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
        Schema::create('tb_agenda', function (Blueprint $table) {
            $table->id('id_agenda');
            $table->string('judul_agenda');
            $table->string('slug')->unique();
            $table->string('deskripsi')->nullable();
            $table->date('tanggal_mulai');
            $table->string('lokasi');
            $table->string('pembicara');
            $table->string('gambar_poster')->nullable();
            $table->date('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_agenda');
    }
};
