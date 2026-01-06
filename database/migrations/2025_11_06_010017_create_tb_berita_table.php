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
        Schema::create('tb_berita', function (Blueprint $table) {
            $table->id('id_berita');
            $table->unsignedBigInteger('id_kategori');
            $table->string('judul');
            $table->string('slug', 150)->unique();
            $table->text('deskripsi');
            $table->string('author');
            $table->date('published_at')->nullable();
            $table->string('gambar');
            $table->timestamps();
            $table->foreign('id_kategori')->references('id_kategori')->on('tb_kategori')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita');
    }
};
