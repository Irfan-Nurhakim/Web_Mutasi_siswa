<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login E_Mutasi</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <style>
        body {
            background: linear-gradient(to right, #6a11cb, #2575fc); /* Gradien latar belakang */
            height: 100vh; /* Mengatur tinggi body */
        }

        .form-signin {
            background: transparent; /* Latar belakang putih dengan transparansi */
            max-width: 400px; /* Lebar maksimum */
            padding: 30px 40px; /* Padding */
            color: black; /* Warna teks */
            border-radius: 10px; /* Radius sudut */
            border: 2px solid rgba(255, 255, 255, 0.15); /* Batas dengan warna putih transparan */
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); /* Efek bayangan */
        }
    </style>
</head>
<body style="background-image: url('https://www.pixel4k.com/wp-content/uploads/2024/02/3d-stars-water-drops-reflection-art-4k_1709113674.jpg.webp'); background-size: cover;">
    <div class="container py-5">
        <div class="card">
            <div class="card-header">
                <h1 class="mb-0">Detail Siswa</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="card-title">Informasi Pribadi</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Nama Siswa:</strong> {{ $siswa->nama_siswa }}</li>
                            <li class="list-group-item"><strong>Tempat Tanggal Lahir:</strong> {{ $siswa->ttl }}</li>
                            <li class="list-group-item"><strong>Jenis Kelamin:</strong> {{ $siswa->jenis_kelamin}}</li>
                            <li class="list-group-item"><strong>NIS:</strong> {{ $siswa->nis }}</li>
                            <li class="list-group-item"><strong>NISN:</strong> {{ $siswa->nisn }}</li>
                            <li class="list-group-item"><strong>Kelas:</strong> {{ $siswa->kelas }}</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h5 class="card-title">Informasi Sekolah Asal</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Asal Sekolah:</strong> {{ $siswa->asal_sekolah }}</li>
                            <li class="list-group-item"><strong>No.Surat Sekolah:</strong> {{ $siswa->no_surat_sekolah }}</li>
                            <li class="list-group-item"><strong>Tanggal Surat:</strong> {{ $siswa->ttl_surat_dari_sekolah }}</li>
                            <li class="list-group-item"><strong>Kecamatan:</strong> {{ $siswa->kecamatan }}</li>
                            <li class="list-group-item"><strong>Kabupaten:</strong> {{ $siswa->kabupaten }}</li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <h5 class="card-title">Informasi Sekolah Tujuan</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Sekolah Baru:</strong> {{ $siswa->nama_sekolah_baru }}</li>
                            <li class="list-group-item"><strong>Kec.Sekolah Tujuan:</strong> {{ $siswa->kec_sekolah_tujuan }}</li>
                            <li class="list-group-item"><strong>Kab/Kota Sekolah Tujuan:</strong> {{ $siswa->kab_kota_sekolah_tujuan }}</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h5 class="card-title">Kontak</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>No.Telp:</strong> {{ $siswa->no_wa }}</li>
                            <li class="list-group-item"><strong>Email:</strong> {{ $siswa->email }}</li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h5 class="card-title">Keterangan Tambahan</h5>
                        <p class="card-text">{{ $siswa->keterangan ?: 'Tidak ada keterangan tambahan.' }}</p>
                    </div>
                </div>
                <div class="text-center btn-custom">
                    <a href="{{ route('data.index') }}" class="btn btn-secondary me-2">Kembali</a>
                    <a href="{{ route('siswa.export', $siswa->id) }}" class="btn btn-primary">Ekspor ke Word</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>