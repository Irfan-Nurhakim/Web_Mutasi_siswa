<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mutasi extends Model
{
    use HasFactory;
    protected $table = 'tabel_mutasi';
    protected $fillable = [
        'tanggal', 'nama_siswa', 'ttl', 'asal_sekolah', 'no_surat_sekolah',
        'ttl_surat_dari_sekolah', 'jenis_kelamin', 'nis', 'nisn', 'kelas',
        'kecamatan', 'kabupaten', 'nama_sekolah_baru', 'kec_sekolah_tujuan',
        'kab_kota_sekolah_tujuan', 'no_wa', 'email', 'keterangan'
    ];
}