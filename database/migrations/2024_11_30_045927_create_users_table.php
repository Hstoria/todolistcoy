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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // ID unik otomatis
            $table->string('first_name'); // Nama depan
            $table->string('last_name'); // Nama belakang
            $table->string('username')->unique(); // Username unik
            $table->string('email')->unique(); // Email unik
            $table->string('password'); // Password terenkripsi
            $table->boolean('terms_agreed')->default(false); // Persetujuan syarat
            $table->rememberToken(); // Token untuk "Remember Me"
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
