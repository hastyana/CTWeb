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
        Schema::create('konseps', function (Blueprint $table) {
            $table->id();
            $table->string('materi');
            $table->text('soal');
            $table->string('a');
            $table->string('b');
            $table->string('c');
            $table->string('d');
            $table->string('kunci');
            $table->text('keterangan');
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konseps');
    }
};
