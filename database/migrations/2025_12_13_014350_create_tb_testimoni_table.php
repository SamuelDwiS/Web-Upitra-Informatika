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
        Schema::create('tb_testimoni', function (Blueprint $table) {
            $table->id('id_testimoni');
            $table->string('nm_alumni');
            $table->string('pekerjaan');
            $table->string('ulasan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_testimoni');
    }
};
