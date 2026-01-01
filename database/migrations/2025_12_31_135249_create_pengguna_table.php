<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pengguna', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 16)->unique(); 
            $table->string('nama');
            $table->string('email')->nullable(); 
            $table->string('password'); 
            $table->enum('role', ['admin','umkm','mitra']);
            $table->boolean('status_aktif')->default(true);
            $table->timestamps();
        });        
    }

    public function down(): void
    {
        Schema::dropIfExists('pengguna');
    }
};
