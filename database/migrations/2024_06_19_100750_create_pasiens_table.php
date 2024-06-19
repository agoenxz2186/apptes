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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->string('nama');
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('jenis_kelamin');
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->string('golongan_darah');
            $table->string('status_perkawinan');
            $table->string('pekerjaan');
            $table->string('agama');
            $table->string('no_ktp');
            $table->string('no_bpjs');
            $table->string('nama_wali');
            $table->string('alamat_wali');
            $table->string('no_hp_wali');
            $table->string('hubungan_wali');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
