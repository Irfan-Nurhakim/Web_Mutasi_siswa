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
        <!-- Container utama dengan padding atas dan bawah -->
        <div class="card">
            <!-- Kartu detail siswa -->
            <div class="card-header">
                <h1 class="mb-0">Detail Siswa</h1>
                <!-- Judul kartu detail siswa -->
            </div>
            <div class="card-body">
                <!-- Isi kartu detail siswa -->
                <div class="row">
                    <!-- Baris pertama untuk informasi pribadi -->
                    <div class="col-md-6">
                        <h5 class="card-title">Informasi Pribadi</h5>
                        <!-- Judul informasi pribadi -->
                        <ul class="list-group list-group-flush">
                            <!-- Daftar informasi pribadi -->
                            <li class="list-group-item"><strong>Nama Siswa:</strong> {{ $siswa->nama_siswa }}</li>
                            <li class="list-group-item"><strong>Tempat Tanggal Lahir:</strong> {{ $siswa->ttl }}</li>
                            <li class="list-group-item"><strong>Jenis Kelamin:</strong> {{ $siswa->jenis_kelamin}}</li>
                            <li class="list-group-item"><strong>NIS:</strong> {{ $siswa->nis }}</li>
                            <li class="list-group-item"><strong>NISN:</strong> {{ $siswa->nisn }}</li>
                            <li class="list-group-item"><strong>Kelas:</strong> {{ $siswa->kelas }}</li>
                        </ul>
                    </div>
                    <!-- Baris kedua untuk informasi sekolah asal -->
                    <div class="col-md-6">
                        <h5 class="card-title">Informasi Sekolah Asal</h5>
                        <!-- Judul informasi sekolah asal -->
                        <ul class="list-group list-group-flush">
                            <!-- Daftar informasi sekolah asal -->
                            <li class="list-group-item"><strong>Asal Sekolah:</strong> {{ $siswa->asal_sekolah }}</li>
                            <li class="list-group-item"><strong>No.Surat Sekolah:</strong> {{ $siswa->no_surat_sekolah }}</li>
                            <li class="list-group-item"><strong>Tanggal Surat:</strong> {{ $siswa->ttl_surat_dari_sekolah }}</li>
                            <li class="list-group-item"><strong>Kecamatan:</strong> {{ $siswa->kecamatan }}</li>
                            <li class="list-group-item"><strong>Kabupaten:</strong> {{ $siswa->kabupaten }}</li>
                        </ul>
                    </div>
                </div>
                <!-- Baris ketiga untuk informasi sekolah tujuan -->
                <div class="row mt-4">
                    <div class="col-md-6">
                        <h5 class="card-title">Informasi Sekolah Tujuan</h5>
                        <!-- Judul informasi sekolah tujuan -->
                        <ul class="list-group list-group-flush">
                            <!-- Daftar informasi sekolah tujuan -->
                            <li class="list-group-item"><strong>Sekolah Baru:</strong> {{ $siswa->nama_sekolah_baru }}</li>
                            <li class="list-group-item"><strong>Kec.Sekolah Tujuan:</strong> {{ $siswa->kec_sekolah_tujuan }}</li>
                            <li class="list-group-item"><strong>Kab/Kota Sekolah Tujuan:</strong> {{ $siswa->kab_kota_sekolah_tujuan }}</li>
                            <li class="list-group-item"><strong>Provinsi Sekolah Tujuan:</strong> {{ $siswa->prov_sekolah_tujuan }}</li>
                        </ul>
                    </div>
                    <!-- Baris keempat untuk kontak -->
                    <div class="col-md-6">
                        <h5 class="card-title">Kontak</h5>
                        <!-- Judul kontak -->
                        <ul class="list-group list-group-flush">
                            <!-- Daftar kontak -->
                            <li class="list-group-item"><strong>No.Telp:</strong> {{ $siswa->no_wa }}</li>
                            <li class="list-group-item"><strong>Email:</strong> {{ $siswa->email }}</li>
                        </ul>
                    </div>
                </div>
                <!-- Baris kelima untuk keterangan tambahan -->
                <div class="row mt-4">
                    <div class="col-12">
                        <h5 class="card-title">Keterangan Tambahan</h5>
                        <!-- Judul keterangan tambahan -->
                        <p class="card-text">{{ $siswa->keterangan ?: 'Tidak ada keterangan tambahan.' }}</p>
                        <!-- Teks keterangan tambahan -->
                    </div>
                </div>
                <!-- Tombol kembali dan ekspor -->
                <div class="text-center btn-custom">
                    <a href="{{ route('data.index') }}" class="btn btn-secondary me-2">Kembali</a>
                    <a href="{{ route('siswa.export', $siswa->id) }}" class="btn btn-primary">Ekspor ke Word</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Menghubungkan JavaScript Bootstrap -->
</body>
</html>
