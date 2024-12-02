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
        Schema::create('task_categories', function (Blueprint $table) {
            $table->id(); // ID unik kategori
            $table->unsignedBigInteger('user_id'); // ID pengguna yang membuat kategori
            $table->string('name'); // Nama kategori
            $table->string('color')->nullable(); // Warna kategori (opsional)

            // Relasi dengan tabel users
            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamps(); // Waktu pembuatan dan update kategori
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('task_categories');
    }
};
