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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pelapor_id')->references('id')->on('reporters');
            $table->foreignId('saksi_id')->references('id')->on('witnesses');
            $table->foreignId('orangtua_id')->references('id')->on('parents');
            $table->foreignId('anak_id')->references('id')->on('children');
            $table->foreignId('status_id')->references('id')->on('statuses');
            $table->string('file_kk');
            $table->string('file_akta_nikah');
            $table->string('file_surat_ket_lahir');
            $table->string('file_ktp_ortu_saksi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
