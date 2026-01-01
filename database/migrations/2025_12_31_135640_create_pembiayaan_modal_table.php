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
        Schema::create('pembiayaan_modal', function (Blueprint $table) {
            $table->id();
            $table->foreignId('umkm_id')->constrained('umkm')->onDelete('cascade');
            $table->foreignId('mitra_id')->constrained('pengguna');
            $table->decimal('jumlah_pinjaman', 15, 2);
            $table->integer('tenor_bulan');
            $table->enum('status', ['aktif','lunas','gagal'])->default('aktif');
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembiayaan_modal');
    }
};
