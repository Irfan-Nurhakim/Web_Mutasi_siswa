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
        // $logoPath = 'https://3.bp.blogspot.com/-zFbG19P3erQ/UNDv7q47tYI/AAAAAAAAEII/-wMANV86jDg/s1600/Logo+Kabupaten+Garut.jpg';
        // $table = $section->addTable();
        // $table->addRow();
        // $cell1 = $table->addCell(2000);
        // $cell1->addImage($logoPath, [
        //     'width' => 90,
        //     'height' => 60,
        // ]);
        // Add logo to the left side
        $logoPath = public_path('storage/assets/logo.png');
        $table = $section->addTable();
        $table->addRow();
        $cell1 = $table->addCell(2000);
        $cell1->addImage($logoPath, ['width'=>90,'height'=>62,'alignment'=>\PhpOffice\PhpWord\SimpleType\Jc::CENTER]);
        $cell2 = $table->addCell(6000);
        $cell2->addText('PEMERINTAH KABUPATEN GARUT', ['bold'=>true,'size'=>12,'name'=>'Times New Roman'], ['align'=>'center','spaceAfter'=>0]);
        $cell2->addText('DINAS PENDIDIKAN', ['bold'=>true,'size'=>16,'name'=>'Times New Roman'], ['align'=>'center','spaceAfter'=>0]);
        $cell2->addText('Jl. Pembangunan No. 179 Telepon (0262) 233155 Faks 240594 Garut', ['size'=>9,'name'=>'Times New Roman'], ['align'=>'center','spaceAfter'=>0]);
        $section->addText('________________________________________________________________________________', ['bold' => true], ['align' => 'center']);
        $section->addText('Garut, ' . now()->format('d F Y'), [], ['align' => 'right']);

        // Menambahkan nomor surat
        $table = $section->addTable();
        $table->addRow();
        $table->addCell(900)->addText('Nomor', [], ['spaceAfter' => 0]);
        $table->addCell(100)->addText(':', [], ['spaceAfter' => 0]);
        $table->addCell(4800)->addText('400.3.6.6/         -Disdik', [], ['spaceAfter' => 0]);
        
        $table->addRow();
        $table->addCell(900)->addText('Lampiran', [], ['spaceAfter' => 0]);
        $table->addCell(100)->addText(':', [], ['spaceAfter' => 0]);
        $table->addCell(4800)->addText('-', [], ['spaceAfter' => 0]);
        
        $table->addRow();
        $table->addCell(900)->addText('Hal', [], ['spaceAfter' => 0]);
        $table->addCell(100)->addText(':', [], ['spaceAfter' => 0]);
        $table->addCell(4800)->addText('Rekomendasi Mutasi Siswa', [], ['spaceAfter' => 0]);
        
        $section->addTextBreak(1);
    
        // Menambahkan alamat tujuan
        $section->addText('Yth. Kepala ' . $siswa->nama_sekolah_baru, ['align' => 'left'], ['indent' => 0.6, 'spaceAfter' => 0]);
        $section->addText('Kec. '. $siswa->kec_sekolah_tujuan, ['align' => 'left'], ['indent' => 1.2, 'spaceAfter' => 0]);
        $section->addText('di Kab. '. $siswa->kab_kota_sekolah_tujuan, ['align' => 'left'], ['indent' => 1.2]);
        
        $section->addTextBreak(0.8);
    
        // Menambahkan isi surat
        $section->addText(
            "\tBerdasarkan Surat Keterangan Pindah sekolah dari Kepala " . $siswa->asal_sekolah . ' Kec. ' . 
            $siswa->kecamatan . ' Kab. ' . $siswa->kabupaten . ' Nomor: ' . $siswa->no_surat_sekolah . 
            ' Tanggal: ' . $siswa->ttl_surat_dari_sekolah . ' dengan ini kami tidak keberatan bahwa:',
            ['alignment' => 'justify'],
            ['indent' => 1.2, 'alignment' => 'both']
        );
        $section->addTextBreak(0);
    
        // Menambahkan data siswa
            $table = $section->addTable();
            $table->addRow();
            $table->addCell(3200)->addText('Nama', [], ['spaceAfter' => 0, 'indent' => 1.2]);
            $table->addCell(200)->addText(':', [], ['spaceAfter' => 0]);
            $table->addCell(4800)->addText($siswa->nama_siswa, [], ['spaceAfter' => '0', 'alignment' => 'both','alignment' => 'left'], ['indent' => 1.2]);
            
            $table->addRow();
            $table->addCell(3200)->addText('Tempat, tanggal lahir', [], ['spaceAfter' => 0, 'indent' => 1.2]);
            $table->addCell(200)->addText(':', [], ['spaceAfter' => 0]);
            $table->addCell(4800)->addText($siswa->ttl, [], ['spaceAfter' => '0', 'alignment' => 'both','alignment' => 'left'], ['indent' => 1.2]);
            
            $table->addRow();
            $table->addCell(3200)->addText('Jenis Kelamin', [], ['spaceAfter' => 0, 'indent' => 1.2]);
            $table->addCell(200)->addText(':', [], ['spaceAfter' => 0]);
            $table->addCell(4800)->addText($siswa->jenis_kelamin, [], ['spaceAfter' => '0', 'alignment' => 'both','alignment' => 'left'], ['indent' => 1.2]);
            
            $table->addRow();
            $table->addCell(3200)->addText('NIS/NISN', [], ['spaceAfter' => 0, 'indent' => 1.2]);
            $table->addCell(200)->addText(':', [], ['spaceAfter' => 0]);
            $table->addCell(4800)->addText($siswa->nis . '/' . $siswa->nisn, [], ['spaceAfter' => '0', 'alignment' => 'both','alignment' => 'left'], ['indent' => 1.2]);
            
            $table->addRow();
            $table->addCell(3200)->addText('Asal Sekolah', [], ['spaceAfter' => 0, 'indent' => 1.2]);
            $table->addCell(200)->addText(':', [], ['spaceAfter' => 0]);
            $table->addCell(4800)->addText($siswa->asal_sekolah . ' ' . 'Kec.' . $siswa->kecamatan . ' ' . 'Kab.' . $siswa->kabupaten, [], ['spaceAfter' => '0', 'alignment' => 'both','alignment' => 'left'], ['indent' => 1.2]);
            
            $section->addTextBreak(1);

        $section->addText('Anak tersebut bermaksud pindah sekolah ke :', ['align' => 'justify'], ['indent' => 1.2, 'spaceAfter' => 0]);
        $section->addTextBreak(0);

        $table = $section->addTable();
        $table->addRow();
        $table->addCell(3200)->addText('Sekolah yang dituju', [], ['spaceAfter' => 0, 'indent' => 1.2]);
        $table->addCell(200)->addText(':', [], ['spaceAfter' => 0]);
        $table->addCell(4800)->addText($siswa->nama_sekolah_baru, [], ['spaceAfter' => '0', 'alignment' => 'both','alignment' => 'left'], ['indent' => 1.2]);
        
        $table->addRow();
        $table->addCell(3200)->addText('Kelas', [], ['spaceAfter' => 0, 'indent' => 1.2]);
        $table->addCell(200)->addText(':', [], ['spaceAfter' => 0]);
        $table->addCell(4800)->addText($siswa->kelas, [], ['spaceAfter' => '0', 'alignment' => 'both','alignment' => 'left'], ['indent' => 1.2]);
        
        $table->addRow();
        $table->addCell(3200)->addText('Kecamatan', [], ['spaceAfter' => 0, 'indent' => 1.2]);
        $table->addCell(200)->addText(':', [], ['spaceAfter' => 0]);
        $table->addCell(4800)->addText($siswa->kec_sekolah_tujuan, [], ['spaceAfter' => '0', 'alignment' => 'both','alignment' => 'left'], ['indent' => 1.2]);
        
        $table->addRow();
        $table->addCell(3200)->addText('Kab/Kota', [], ['spaceAfter' => 0, 'indent' => 1.2]);
        $table->addCell(200)->addText(':', [], ['spaceAfter' => 0]);
        $table->addCell(4800)->addText($siswa->kab_kota_sekolah_tujuan, [], ['spaceAfter' => '0', 'alignment' => 'both','alignment' => 'left'], ['indent' => 1.2]);
        
        $table->addRow();
        $table->addCell(3200)->addText('Provinsi', [], ['spaceAfter' => 0, 'indent' => 1.2]);
        $table->addCell(200)->addText(':', [], ['spaceAfter' => 0]);
        $table->addCell(4800)->addText($siswa->prov_sekolah_tujuan, [], ['spaceAfter' => '0', 'alignment' => 'both','alignment' => 'left'], ['indent' => 1.2]);
        
        $table->addRow();
        $table->addCell(3200)->addText('Dengan alasan', [], ['spaceAfter' => 0, 'indent' => 1.2]);
        $table->addCell(200)->addText(':', [], ['spaceAfter' => 0]);
        $table->addCell(4800)->addText($siswa->keterangan, [], ['spaceAfter' => '0', 'alignment' => 'both','alignment' => 'left'], ['indent' => 1.2]);
        
        $section->addTextBreak(1);
    
        // Menambahkan penutup surat
        $section->addText("\tPertimbangan dan persyaratan lainya yang diperlukan, kami serahkan kepada Saudara/i untuk mendapatkan penyelesaian sebagaimana mestinya.", ['align' => 'justify'], ['indent' => 1.2, 'alignment' => 'both']);
        $section->addTextBreak(2);
        $section->addText('a.n KEPALA DINAS PENDIDIKAN', ['align' => 'right'], ['indent' => 7, 'spaceAfter' => 0]);
        $section->addText('KABUPATEN GARUT', ['align' => 'right'], ['indent' => 7.7, 'spaceAfter' => 0]);
        $section->addText('SEKRETARIS', ['align' => 'right'], ['indent' => 8.2, 'spaceAfter' => 0]);
        $section->addTextBreak(3);
        $section->addText('H. Asep Wawan Budiman, S.Pd., M.Si', ['align' => 'right', 'bold' => true], ['indent' => 6.9, 'spaceAfter' => 0]);
        $section->addText('Pembina Tk. I, IV/b', ['align' => 'right', 'bold' => true], ['indent' => 8, 'spaceAfter' => 0]);
        $section->addText('NIP: 197207061998021001', ['align' => 'right'], ['indent' => 7.6, 'spaceAfter' => 0]);
    
        // Simpan file Word
        $fileName = 'Detail_Siswa_' . $siswa->id . '.docx';
        $filePath = storage_path('app/public/' . $fileName);
        $phpWord->save($filePath, 'Word2007');
    
        return response()->download($filePath)->deleteFileAfterSend(true);
    }
}