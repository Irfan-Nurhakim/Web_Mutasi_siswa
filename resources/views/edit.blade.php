<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E_Mutasi</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
</head>
<body>
    <div class="container py-5">
        <div class="card">
            <div class="card-header">
                <h1 class="my-4">Edit Data Siswa</h1>
                <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nama_siswa" class="form-label">Nama Siswa</label>
                        <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="{{ $siswa->nama_siswa }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="ttl" class="form-label">Tempat Tanggal Lahir</label>
                        <input type="text" class="form-control" id="ttl" name="ttl" value="{{ $siswa->ttl }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                        <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" value="{{ $siswa->asal_sekolah }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="no_surat_sekolah" class="form-label">No.Surat Sekolah</label>
                        <input type="text" class="form-control" id="no_surat_sekolah" name="no_surat_sekolah" value="{{ $siswa->no_surat_sekolah }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="ttl_surat_dari_sekolah" class="form-label">Tanggal Surat</label>
                        <input type="date" class="form-control" id="ttl_surat_dari_sekolah" name="ttl_surat_dari_sekolah" value="{{ $siswa->ttl_surat_dari_sekolah }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="{{ $siswa->jenis_kelamin }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="nis" class="form-label">NIS</label>
                        <input type="text" class="form-control" id="nis" name="nis" value="{{ $siswa->nis }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="nisn" class="form-label">NISN</label>
                        <input type="text" class="form-control" id="nisn" name="nisn" value="{{ $siswa->nisn }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input type="text" class="form-control" id="kelas" name="kelas" value="{{ $siswa->kelas }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="kecamatan" class="form-label">Kecamatan</label>
                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="{{ $siswa->kecamatan }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="kabupaten" class="form-label">Kabupaten</label>
                        <input type="text" class="form-control" id="kabupaten" name="kabupaten" value="{{ $siswa->kabupaten }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama_sekolah_baru" class="form-label">Sekolah Baru</label>
                        <input type="text" class="form-control" id="nama_sekolah_baru" name="nama_sekolah_baru" value="{{ $siswa->nama_sekolah_baru }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="kec_sekolah_tujuan" class="form-label">Kec.Sekolah Tujuan</label>
                        <input type="text" class="form-control" id="kec_sekolah_tujuan" name="kec_sekolah_tujuan" value="{{ $siswa->kec_sekolah_tujuan }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="kab_kota_sekolah_tujuan" class="form-label">Kab/Kota Sekolah Tujuan</label>
                        <input type="text" class="form-control" id="kab_kota_sekolah_tujuan" name="kab_kota_sekolah_tujuan" value="{{ $siswa->kab_kota_sekolah_tujuan }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="prov_sekolah_tujuan" class="form-label">Provinsi Sekolah Tujuan</label>
                        <input type="text" class="form-control" id="prov_sekolah_tujuan" name="prov_sekolah_tujuan" value="{{ $siswa->prov_sekolah_tujuan }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="no_wa" class="form-label">No.Telp</label>
                        <input type="text" class="form-control" id="no_wa" name="no_wa" value="{{ $siswa->no_wa }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $siswa->email }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <textarea class="form-control" id="keterangan" name="keterangan" rows="3">{{ $siswa->keterangan }}</textarea>
                    </div>
                </form>
            </div>
        </div>
        <div class="d-flex justify-content-end"  style="margin-top: 20px;">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('data.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</body>
</html>