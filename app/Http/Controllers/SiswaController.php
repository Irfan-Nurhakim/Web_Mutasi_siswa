<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;

class SiswaController extends Controller
{
    // Menampilkan detail siswa
    public function show($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('/detail', compact('siswa'));
    }
    
    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('/edit', compact('siswa'));
    }

    // Memperbarui data siswa
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_siswa' => 'required|string|max:255',
            // Tambahkan validasi lainnya sesuai kebutuhan
        ]);

        $siswa = Siswa::findOrFail($id);
        $siswa->update($request->all());

        return redirect()->route('data.index')->with('success', 'Data siswa berhasil diperbarui.');
    }

    // Menghapus data siswa
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->route('data.index')->with('success', 'Data siswa berhasil dihapus.');
    }

    public function exportToWord($id)
    {
        $siswa = Siswa::findOrFail($id);
    
        $phpWord = new PhpWord();
        $section = $phpWord->addSection();
    
        // Menambahkan header surat
        // Add logo
        // Add logo
        $logoPath = 'https://3.bp.blogspot.com/-zFbG19P3erQ/UNDv7q47tYI/AAAAAAAAEII/-wMANV86jDg/s1600/Logo+Kabupaten+Garut.jpg';
        $table = $section->addTable();
        $table->addRow();
        $cell1 = $table->addCell(2000);
        $cell1->addImage($logoPath, [
            'width' => 80,
            'height' => 50,
        ]);
        $cell2 = $table->addCell(6000);
        $cell2->addText('PEMERINTAH KABUPATEN GARUT', ['bold' => true, 'size' => 14], ['align' => 'center', 'spaceAfter' => 0]);
        $cell2->addText('DINAS PENDIDIKAN', ['bold' => true, 'size' => 12], ['align' => 'center', 'spaceAfter' => 0]);
        $cell2->addText('Jl. Pembangunan No. 179 Telepon (0262) 233155 Faks 240594 Garut', ['size' => 9], ['align' => 'center']);
        $section->addText('________________________________________________________________________________', ['bold' => true], ['align' => 'center']);
        $section->addText('Garut, ' . now()->format('d F Y'), [], ['align' => 'right']);
    
        // Menambahkan nomor surat
        $section->addText('Nomor     : 400.3.6.6/         -Disdik', ['align' => 'left'], ['spaceAfter' => 0]);
        $section->addText('Lampiran : ', ['align' => 'left'], ['spaceAfter' => 0]);
        $section->addText('Hal          : Rekomendasi Mutasi Siswa', ['align' => 'left'], ['spaceBefore' => 0]);
        $section->addTextBreak(1);
    
        // Menambahkan alamat tujuan
        $section->addText('Yth. Kepala .......', ['align' => 'left'], ['indent' => 0.6, 'spaceAfter' => 0]);
        $section->addText('Kec.  .......', ['align' => 'left'], ['indent' => 1.2, 'spaceAfter' => 0]);
        $section->addText('di Kab. .......', ['align' => 'left'], ['indent' => 1.2]);
        $section->addTextBreak(1);
    
        // Menambahkan isi surat
        $section->addText('     Berdasarkan surat keterangan pindah sekolah dari Kepala' . ' ' .$siswa->asal_sekolah . ' ' . 'Kec.' .$siswa->kecamatan . ' ' . 'Kota Kab.' .$siswa->kabupaten . ' ' . 'Nomor:' . ' ' .$siswa->no_surat_sekolah . ' ' . 'Tanggal:' . ' ' .$siswa->ttl_surat_dari_sekolah . ' ' . 'dengan ini kami tidak keberatan bahwa:', ['align' => 'justify'], ['indent' => 1.2]);
        $section->addTextBreak(0);
    
        // Menambahkan data siswa
        $section->addText('Nama                            : ' . $siswa->nama_siswa, ['align' => 'justify'], ['indent' => 1.2, 'spaceAfter' => 0]);
        $section->addText('Tempat, tanggal lahir    : ' . $siswa->ttl, ['align' => 'justify'], ['indent' => 1.2, 'spaceAfter' => 0]);
        $section->addText('Jenis Kelamin               : ' . $siswa->jenis_kelamin , ['align' => 'justify'], ['indent' => 1.2, 'spaceAfter' => 0]);
        $section->addText('NIS/NISN                      : ' . $siswa->nis . '/' . $siswa->nisn, ['align' => 'justify'], ['indent' => 1.2, 'spaceAfter' => 0]);
        $section->addText('Asal Sekolah                 : ' . $siswa->asal_sekolah . ' ' . 'Kec.' . $siswa->kecamatan . ' ' . 'Kab.' . $siswa->kabupaten, ['align' => 'justify'], ['indent' => 1.2, 'spaceAfter' => 0]);
        $section->addTextBreak(1);

        $section->addText('Anak tersebut bermaksud pindah sekolah ke :', ['align' => 'justify'], ['indent' => 1.2, 'spaceAfter' => 0]);
        $section->addText('Sekolah yang dituju      : ' . $siswa->nama_sekolah_baru, ['align' => 'justify'], ['indent' => 1.2,'spaceAfter' => 0]);
        $section->addText('Kelas                            : ' . $siswa->kelas, ['align' => 'justify'], ['indent' => 1.2, 'spaceAfter' => 0]);
        $section->addText('Kecamatan                   : ' . $siswa->kec_sekolah_tujuan, ['align' => 'justify'], ['indent' => 1.2, 'spaceAfter' => 0]);
        $section->addText('Kab/Kota                      : ' . $siswa->kab_kota_sekolah_tujuan, ['align' => 'justify'], ['indent' => 1.2, 'spaceAfter' => 0]);
        $section->addText('Provinsi                        : ......', ['align' => 'justify'], ['indent' => 1.2, 'spaceAfter' => 0]);
        $section->addText('Dengan alasan             : ' .$siswa->keterangan, ['align' => 'justify'], ['indent' => 1.2, 'spaceAfter' => 0]);
        $section->addTextBreak(1);
    
        // Menambahkan penutup surat
        $section->addText('     Pertimbangan dan persyaratan lainya yang di perlukan, kami serahkan kepada Saudara/i untuk mendapatkan penyelesaian sebagaimana mestinya.', ['align' => 'justify'], ['indent' => 1.2]);
        $section->addTextBreak(3);
        $section->addText('a.n KEPALA DINAS PENDIDIKAN', ['align' => 'right'], ['indent' => 7, 'spaceAfter' => 0]);
        $section->addText('KABUPATEN GARUT', ['align' => 'right'], ['indent' => 7.7, 'spaceAfter' => 0]);
        $section->addText('SEKRETARIS', ['align' => 'right'], ['indent' => 8.2, 'spaceAfter' => 0]);
        $section->addTextBreak(3);
        $section->addText('H. Asep Wawan Budiman, S.Pd., M.Si', ['align' => 'right'], ['indent' => 6.9, 'spaceAfter' => 0]);
        $section->addText('Pembina Tk. I, IV/b', ['align' => 'right'], ['indent' => 8, 'spaceAfter' => 0]);
        $section->addText('NIP: 197207061998021001', ['align' => 'right'], ['indent' => 7.6, 'spaceAfter' => 0]);
    
        // Simpan file Word
        $fileName = 'Detail_Siswa_' . $siswa->id . '.docx';
        $filePath = storage_path('app/public/' . $fileName);
        $phpWord->save($filePath, 'Word2007');
    
        return response()->download($filePath)->deleteFileAfterSend(true);
    }
}