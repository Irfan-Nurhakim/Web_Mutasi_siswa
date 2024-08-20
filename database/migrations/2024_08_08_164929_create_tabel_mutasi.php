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
        Schema::create('tabel_mutasi', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal')->index();
            $table->string('nama_siswa')->index();
            $table->string('ttl')->index();
            $table->string('asal_sekolah')->index();
            $table->string('no_surat_sekolah')->index();
            $table->date('ttl_surat_dari_sekolah')->index();
            $table->string('jenis_kelamin')->index();
            $table->string('nis')->index();
            $table->string('nisn')->index();
            $table->string('kelas')->index();
            $table->string('kecamatan')->index();
            $table->string('kabupaten')->index();
            $table->string('nama_sekolah_baru')->index();
            $table->string('kec_sekolah_tujuan')->index();
            $table->string('kab_kota_sekolah_tujuan')->index();
            $table->string('prov_sekolah_tujuan')->index();
            $table->string('no_wa')->index();
            $table->string('email')->index();
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_mutasi');
    }
};