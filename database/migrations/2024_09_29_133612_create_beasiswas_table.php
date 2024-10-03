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
        Schema::create('beasiswa', function (Blueprint $table) {
            $table->id(); // Kolom auto-increment
            $table->string('nama'); // Nama penerima beasiswa
            $table->string('email'); // Email penerima
            $table->string('telepon'); // Nomor telepon penerima
            $table->integer('semester'); // Semester
            $table->decimal('ipk', 3, 2); // IPK
            $table->string('beasiswa')->nullable(); // Nama beasiswa
            $table->string('file_upload');
            $table->string('status_ajuan')->default('Belum Diverifikasi'); // Status ajuan
            $table->timestamps(); // Timestamps untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beasiswa');
    }
};
