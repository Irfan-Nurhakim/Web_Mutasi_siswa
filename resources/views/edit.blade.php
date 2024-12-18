<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E_Mutasi</title>
    <!-- Judul halaman -->
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
    <!-- Menghubungkan CSS custom -->
</head>
<body>
    <div class="container py-5">
        <div class="card">
            <div class="card-header">
                <h1 class="my-4">Edit Data Siswa</h1>
                <!-- Judul form edit data siswa -->
                <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <!-- Token CSRF dan method spoofing untuk update -->
                    <div class="mb-3">
                        <label for="nama_siswa" class="form-label">Nama Siswa</label>
                        <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="{{ $siswa->nama_siswa }}" required>
                    </div>
                    <!-- Input nama siswa -->
                    <div class="mb-3">
                        <label for="ttl" class="form-label">TTL</label>
                        <input type="text" class="form-control" id="ttl" name="ttl" value="{{ $siswa->ttl }}" required>
                    </div>
                    <!-- Input TTL -->
                    <div class="mb-3">
                        <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                        <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" value="{{ $siswa->asal_sekolah }}" required>
                    </div>
                    <!-- Input asal sekolah -->
                    <div class="mb-3">
                        <label for="no_surat_sekolah" class="form-label">No.Surat Sekolah</label>
                        <input type="text" class="form-control" id="no_surat_sekolah" name="no_surat_sekolah" value="{{ $siswa->no_surat_sekolah }}" required>
                    </div>
                    <!-- Input no surat sekolah -->
                    <div class="mb-3">
                        <label for="ttl_surat_dari_sekolah" class="form-label">Tanggal Surat</label>
                        <input type="date" class="form-control" id="ttl_surat_dari_sekolah" name="ttl_surat_dari_sekolah" value="{{ $siswa->ttl_surat_dari_sekolah }}" required>
                    </div>
                    <!-- Input tanggal surat -->
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                            <option value="1" {{ $siswa->jenis_kelamin == 1 ? 'selected' : '' }}>Laki-laki</option>
                            <option value="2" {{ $siswa->jenis_kelamin == 2 ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>
                    <!-- Select jenis kelamin -->
                    <div class="mb-3">
                        <label for="nis" class="form-label">NIS</label>
                        <input type="text" class="form-control" id="nis" name="nis" value="{{ $siswa->nis }}" required>
                    </div>
                    <!-- Input NIS -->
                    <div class="mb-3">
                        <label for="nisn" class="form-label">NISN</label>
                        <input type="text" class="form-control" id="nisn" name="nisn" value="{{ $siswa->nisn }}" required>
                    </div>
                    <!-- Input NISN -->
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input type="text" class="form-control" id="kelas" name="kelas" value="{{ $siswa->kelas }}" required>
                    </div>
                    <!-- Input kelas -->
                    <div class="mb-3">
                        <label for="kecamatan" class="form-label">Kecamatan</label>
                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="{{ $siswa->kecamatan }}" required>
                    </div>
                    <!-- Input kecamatan -->
                    <div class="mb-3">
                        <label for="kabupaten" class="form-label">Kabupaten</label>
                        <input type="text" class="form-control" id="kabupaten" name="kabupaten" value="{{ $siswa->kabupaten }}" required>
                    </div>
                    <!-- Input kabupaten -->
                    <div class="mb-3">
                        <label for="nama_sekolah_baru" class="form-label">Sekolah Baru</label>
                        <input type="text" class="form-control" id="nama_sekolah_baru" name="nama_sekolah_baru" value="{{ $siswa->nama_sekolah_baru }}" required>
                    </div>
                    <!-- Input nama sekolah baru -->
                    <div class="mb-3">
                        <label for="kec_sekolah_tujuan" class="form-label">Kec.Sekolah Tujuan</label>
                        <input type="text" class="form-control" id="kec_sekolah_tujuan" name="kec_sekolah_tujuan" value="{{ $siswa->kec_sekolah_tujuan }}" required>
                    </div>
                    <!-- Input kecamatan sekolah tujuan -->
                    <div class="mb-3">
                        <label for="kab_kota_sekolah_tujuan" class="form-label">Kab/Kota Sekolah Tujuan</label>
                        <input type="text" class="form-control" id="kab_kota_sekolah_tujuan" name="kab_kota_sekolah_tujuan" value="{{ $siswa->kab_kota_sekolah_tujuan }}" required>
                    </div>
                    <!-- Input kabupaten/kota sekolah tujuan -->
                    <div class="mb-3">
                        <label for="no_wa" class="form-label">No.Telp</label>
                        <input type="number" class="form-control" id="no_wa" name="no_wa" value="{{ $siswa->no_wa }}" required>
                    </div>
                    <!-- Input no telp -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $siswa->email }}" required>
                    </div>
                    <!-- Input email -->
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <textarea class="form-control" id="keterangan" name="keterangan" rows="3">{{ $siswa->keterangan }}</textarea>
                    </div>
                    <!-- Textarea keterangan -->
                    <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Anda yakin ingin mengupdate data ini?')">Update</button>
                    <!-- Tombol submit untuk update -->
                    <a href="{{ route('data.index') }}" class="btn btn-secondary">Kembali</a>
                    <!-- Tombol kembali -->
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <!-- Menampilkan pesan sukses jika ada -->
                </form>
            </div>
        </div>
        
    </div>
</body>
</html>