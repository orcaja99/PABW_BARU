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
        Schema::create('tiket_penerbangans', function (Blueprint $table) {
            $table->id();
            $table->string('model_pesawat');
            $table->string('kelas');
            $table->string('kode_pesawat');
            $table->string('jam_berangkat');
            $table->string('jam_tiba');
            $table->string('asal');
            $table->string('tujuan');
            $table->string('maskapai');
            $table->date('tanggal');
            $table->integer('harga');
            $table->string('status')->default('tersedia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tiket_penerbangans');
    }
};
