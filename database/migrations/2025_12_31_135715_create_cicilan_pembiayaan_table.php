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
        Schema::create('cicilan_pembiayaan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pembiayaan_modal_id')->constrained('pembiayaan_modal')->onDelete('cascade');
            $table->decimal('jumlah_bayar', 15, 2);
            $table->date('tanggal_bayar');
            $table->enum('status', ['belum','lunas'])->default('belum');
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cicilan_pembiayaan');
    }
};
