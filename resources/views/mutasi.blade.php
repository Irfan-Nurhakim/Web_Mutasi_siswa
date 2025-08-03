<!doctype html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E_Mutasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="css/home.css" rel="stylesheet"> <!-- Menghubungkan CSS custom untuk home -->
    <script src="js/home.js"> </script> <!-- Menghubungkan JavaScript untuk home -->
</head>
<body>
    <nav class="navbar navbar-expand-lg sticky-top">
        <!-- Navigasi sticky-top -->
        <div class="container">
        <img src="{{ asset('storage/assets/logo.png') }}" height="60" class="d-inline-block align-top me-2">
            <!-- Logo -->
            <a class="navbar-brand" href="/"><strong>E Mutasi Siswa</strong></a>
            <!-- Nama aplikasi -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <!-- Tombol untuk mengaktifkan/menonaktifkan navigasi -->
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Navigasi yang dapat diklik -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link rounded" href="/"> <i class="bi bi-house-door-fill"> </i><strong>Home</strong></a>
                    </li>
                    <!-- Link ke halaman home -->
                    <li class="nav-item">
                        <a class="nav-link rounded" href="/mutasi"><i class="bi bi-journal-bookmark"> </i><strong>Mutasi</strong></a>
                    </li>
                    <!-- Link ke halaman mutasi -->
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link rounded" href="/login"><i class="bi bi-door-open-fill" style="font-size: 25px;"> </i><strong>Login</strong></a>
                    </li>
                    <!-- Link ke halaman login -->
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-2">
        <!-- Container untuk pesan -->
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <!-- Menampilkan pesan sukses -->
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <!-- Menampilkan pesan error -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- Menampilkan error validasi -->
    </div>

    <div class="container rounded mt-4 p-4" style="background-color: rgba(0, 0, 0, 0.1);">
        <!-- Container untuk form mutasi -->
        <h1 class="text-center mb-4 text-shadow">Form Mutasi Siswa</h1>
        <!-- Judul form -->
        <form class="row g-3 overflow-auto" style="max-height: 600px;" method="post" action="{{ route('mutasi.store') }}">
            @csrf
            <!-- Token CSRF untuk keamanan -->
            <div class="col-lg-12">
                <h4 class="text-left text-shadow">Data Siswa</h4>
                <!-- Judul untuk data siswa -->

                <label for="tanggal" class="form-label text-shadow">Tanggal Pengisian Form</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                <!-- Input untuk tanggal pengisian form -->

                <label for="nama_siswa" class="form-label text-shadow">Nama Siswa</label>
                <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" placeholder="Nama Lengkap" required>
                <!-- Input untuk nama siswa -->

                <label for="ttl" class="form-label text-shadow">Tempat, Tanggal Lahir</label>
                <input type="text" class="form-control" id="ttl" name="ttl" placeholder="Contoh: Garut, 01 januari 2024" required>
                <!-- Input untuk tempat, tanggal lahir -->

                <label for="jenis_kelamin" class="form-label text-shadow">Jenis Kelamin</label>
                <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                    <option selected>Pilih jenis kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                <!-- Select untuk jenis kelamin -->

                <label for="nis" class="form-label text-shadow">NIS (Nomor Induk Siswa di Sekolah)</label>
                <input type="text" class="form-control" id="nis" name="nis" required>
                <!-- Input untuk NIS -->

                <label for="nisn" class="form-label text-shadow">NISN (Nomor Induk Siswa Nasional)</label>
                <input type="text" class="form-control" id="nisn" name="nisn" required>
                <!-- Input untuk NISN -->

                <label for="kelas" class="form-label text-shadow">Kelas</label>
                <input type="text" class="form-control" id="kelas" name="kelas" required>
                <!-- Input untuk kelas -->
            </div>
            
            <div class="col-lg-12">
                <h4 class="text-left text-shadow">Data Sekolah Asal</h4>
                <!-- Judul untuk data sekolah asal -->

                <label for="asal_sekolah" class="form-label text-shadow">Nama Sekolah Asal</label>
                <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" required>
                <!-- Input untuk nama sekolah asal -->

                <label for="no_surat_sekolah" class="form-label text-shadow">Nomor Surat dari Sekolah</label>
                <input type="text" class="form-control" id="no_surat_sekolah" name="no_surat_sekolah" required>
                <!-- Input untuk nomor surat dari sekolah -->

                <label for="ttl_surat_dari_sekolah" class="form-label text-shadow">Tanggal Surat dari Sekolah</label>
                <input type="date" class="form-control" id="ttl_surat_dari_sekolah" name="ttl_surat_dari_sekolah" required>
                <!-- Input untuk tanggal surat dari sekolah -->

                <label for="kecamatan" class="form-label text-shadow">Kecamatan</label>
                <input type="text" class="form-control" id="kecamatan" name="kecamatan" required>
                <!-- Input untuk kecamatan -->

                <label for="kabupaten" class="form-label text-shadow">Kabupaten</label>
                <input type="text" class="form-control" id="kabupaten" name="kabupaten" required>
                <!-- Input untuk kabupaten -->
            </div>
            
            <div class="col-lg-12">
                <h4 class="text-left text-shadow">Data Sekolah Tujuan</h4>
                <!-- Judul untuk data sekolah tujuan -->

                <label for="nama_sekolah_baru" class="form-label text-shadow">Nama Sekolah Baru</label>
                <input type="text" class="form-control" id="nama_sekolah_baru" name="nama_sekolah_baru" required>
                <!-- Input untuk nama sekolah baru -->

                <label for="kec_sekolah_tujuan" class="form-label text-shadow">Kecamatan Sekolah Tujuan</label>
                <input type="text" class="form-control" id="kec_sekolah_tujuan" name="kec_sekolah_tujuan" required>
                <!-- Input untuk kecamatan sekolah tujuan -->

                <label for="kab_kota_sekolah_tujuan" class="form-label text-shadow">Kabupaten/Kota Sekolah Tujuan</label>
                <input type="text" class="form-control" id="kab_kota_sekolah_tujuan" name="kab_kota_sekolah_tujuan" required>
                <!-- Input untuk kabupaten/kota sekolah tujuan -->

                <label for="prov_sekolah_tujuan" class="form-label text-shadow">Provinsi Sekolah Tujuan</label>
                <input type="text" class="form-control" id="prov_sekolah_tujuan" name="prov_sekolah_tujuan" required>
                <!-- Input untuk provinsi sekolah tujuan -->

                <label for="keterangan" class="form-label text-shadow">Keterangan</label>
                <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Masukan Alasan Perpindahan Sekolah" required>
                <!-- Input untuk keterangan -->
            </div>
            
            <div class="col-lg-12">
                <h4 class="text-left text-shadow">Kontak Yang Dapat Dihubungi</h4>
                <!-- Judul untuk kontak yang dapat dihubungi -->

                <label for="no_wa" class="form-label text-shadow">Nomor Telepon/WhatsApp</label>
                <input type="number" class="form-control" id="no_wa" name="no_wa" placeholder="085123xxxxx" required pattern="[0-9]{10,12}" title="Nomor telepon harus terdiri dari 10-12 digit angka">
                <!-- Input untuk nomor telepon/WhatsApp -->

                <label for="email" class="form-label text-shadow">Alamat Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="example@gmail.com" required>
                <!-- Input untuk alamat email -->
            </div>
            <div class="col-lg-12 mt-3">
                <button type="submit" class="btn btn-primary">Kirim</button>
                <!-- Tombol untuk mengirim form -->
            </div>
        </form>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="filter: drop-shadow(0 -4px 6px rgba(0, 0, 0, 0.3));">
        <path fill="#038baa" fill-opacity="1" d="M0,64L60,85.3C120,107,240,149,360,144C480,139,600,85,720,90.7C840,96,960,160,1080,160C1200,160,1320,96,1380,64L1440,32L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
    </svg>
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
        crossorigin="anonymous">
    </script>
</body>
</html>
