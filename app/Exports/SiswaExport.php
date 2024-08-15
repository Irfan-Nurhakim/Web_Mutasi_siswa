<?php

namespace App\Exports;

use App\Models\Siswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SiswaExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Siswa::all(); // Mengambil semua data siswa
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nama Siswa',
            'TTL',
            'Asal Sekolah',
            'No. Surat Sekolah',
            'Tanggal Surat',
            'Jenis Kelamin',
            'NIS',
            'NISN',
            'Kelas',
            'Kecamatan',
            'Sekolah Baru',
            'Kec. Sekolah Tujuan',
            'Kab/Kota Sekolah Tujuan',
            'No. WA',
            'Email',
            'Keterangan',
        ];
    }
}