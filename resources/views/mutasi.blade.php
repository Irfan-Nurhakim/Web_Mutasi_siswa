<!doctype html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mutasi E_Mutasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <style>
        .nav-link {
            position: relative;
            transition: color 0.3s ease-in-out; /* Transisi untuk perubahan warna teks */
            color: #000000; /* Warna teks navbar */
        }
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            display: block;
            margin-top: 5px;
            right: 0;
            background: #000000; /* Warna garis bawah saat hover */
            transition: width 0.3s ease, right 0.3s ease; /* Transisi untuk garis bawah */
        }
        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%; /* Garis bawah penuh saat hover atau aktif */
            right: 0; /* Posisi garis bawah */
        }
        .btn-primary {
            transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out; /* Transisi untuk perubahan warna latar belakang dan teks */
        }
        .btn-primary:active {
            background-color: white !important; /* Warna latar belakang tombol saat ditekan */
            color: #000000 !important; /* Warna teks tombol saat ditekan */
        }
        @media (max-width: 768px) {
            .container {
                padding-left: 15px;
                padding-right: 15px;
            }
            h1 {
                font-size: 1.5rem;
            }
            .form-label {
                font-size: 0.9rem;
            }
            .btn {
                width: 100%;
            }
        }

        .nav-link {
        transition: all 0.3s ease;
        }
        .nav-link:hover, .nav-link:focus, .nav-link.active {
            background-color: rgba(0, 0, 0, 0.1); /* Warna latar belakang saat hover, fokus, atau aktif */
            transform: scale(1.05);
        }
        /* Navbar */
        .navbar {
            padding-top: 15px;
            padding-bottom: 15px;
            background-color: #e3f2fd; /* Background putih semu biru untuk navbar */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); 
        }
        .navbar-brand {
            color: #000000; /* Warna teks navbar-brand */
        }
        .navbar-nav .nav-link {
            color: #000000; /* Warna teks navbar-link */
        }
    </style>
</head>
<body>
<body>
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
        <img src="{{ asset('storage/assets/logo.png') }}" height="60" width="90" class="d-inline-block align-top me-2">
            <a class="navbar-brand" href="/"><strong>E Mutasi Siswa</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link rounded" href="/"> <i class="bi bi-house-door-fill"> </i> <strong>Home</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link rounded" href="/mutasi"><i class="bi bi-journal-bookmark"> </i> <strong>Mutasi</strong></a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link rounded" href="/login"><i class="bi bi-box-arrow-right"> </i> <strong>Login</strong></a>
                    </li>
                </ul>
            </div>
        </div>
        <script>
            document.querySelectorAll('.nav-link').forEach(link => {
                link.addEventListener('click', function() {
                    document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
                    this.classList.add('active');
                });
            });
        </script>
    </nav>

    <div class="container mt-2">
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="container rounded mt-4 p-4" style="background-color: rgba(0, 0, 0, 0.1);">
        <h2 class="text-center mb-4 text-shadow">Form Mutasi Siswa</h2>
        <form class="row g-3" method="post" action="{{ route('mutasi.store') }}">
            @csrf
            <div class="col-12">
                <h4 class="text-shadow">Data Siswa</h4>
            </div>
            <div class="col-12">
                <label for="tanggal" class="form-label text-shadow">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal">
            </div>
            <div class="col-12">
                <label for="nama_siswa" class="form-label text-shadow">Nama Siswa</label>
                <input type="text" class="form-control" id="nama_siswa" name="nama_siswa">
            </div>
            <div class="col-12">
                <label for="ttl" class="form-label text-shadow">Tempat, Tanggal Lahir</label>
                <input type="text" class="form-control" id="ttl" name="ttl">
            </div>
            <div class="col-12">
                <label for="jenis_kelamin" class="form-label text-shadow">Jenis Kelamin</label>
                <select class="form-select" id="jenis_kelamin" name="jenis_kelamin">
                    <option selected>Pilih jenis kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="col-12">
                <label for="nis" class="form-label text-shadow">NIS (Nomor Induk Siswa)</label>
                <input type="text" class="form-control" id="nis" name="nis">
            </div>
            <div class="col-12">
                <label for="nisn" class="form-label text-shadow">NISN (Nomor Induk Siswa Nasional)</label>
                <input type="text" class="form-control" id="nisn" name="nisn">
            </div>
            <div class="col-12">
                <label for="kelas" class="form-label text-shadow">Kelas</label>
                <input type="text" class="form-control" id="kelas" name="kelas">
            </div>
            
            <div class="col-12 mt-4">
                <h4 class="text-shadow">Data Sekolah Asal</h4>
            </div>
            <div class="col-12">
                <label for="asal_sekolah" class="form-label text-shadow">Nama Sekolah Asal</label>
                <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah">
            </div>
            <div class="col-12">
                <label for="no_surat_sekolah" class="form-label text-shadow">Nomor Surat dari Sekolah</label>
                <input type="text" class="form-control" id="no_surat_sekolah" name="no_surat_sekolah">
            </div>
            <div class="col-12">
                <label for="ttl_surat_dari_sekolah" class="form-label text-shadow">Tanggal Surat dari Sekolah</label>
                <input type="date" class="form-control" id="ttl_surat_dari_sekolah" name="ttl_surat_dari_sekolah">
            </div>
            <div class="col-12">
                <label for="kecamatan" class="form-label text-shadow">Kecamatan</label>
                <input type="text" class="form-control" id="kecamatan" name="kecamatan">
            </div>
            <div class="col-12">
                <label for="kabupaten" class="form-label text-shadow">Kabupaten</label>
                <input type="text" class="form-control" id="kabupaten" name="kabupaten">
            </div>
            
            <div class="col-12 mt-4">
                <h4 class="text-shadow">Data Sekolah Tujuan</h4>
            </div>
            <div class="col-12">
                <label for="nama_sekolah_baru" class="form-label text-shadow">Nama Sekolah Baru</label>
                <input type="text" class="form-control" id="nama_sekolah_baru" name="nama_sekolah_baru">
            </div>
            <div class="col-12">
                <label for="kec_sekolah_tujuan" class="form-label text-shadow">Kecamatan Sekolah Tujuan</label>
                <input type="text" class="form-control" id="kec_sekolah_tujuan" name="kec_sekolah_tujuan">
            </div>
            <div class="col-12">
                <label for="kab_kota_sekolah_tujuan" class="form-label text-shadow">Kabupaten/Kota Sekolah Tujuan</label>
                <input type="text" class="form-control" id="kab_kota_sekolah_tujuan" name="kab_kota_sekolah_tujuan">
            </div>
            <div class="col-12">
                <label for="prov_sekolah_tujuan" class="form-label text-shadow">Provinsi Sekolah Tujuan</label>
                <input type="text" class="form-control" id="prov_sekolah_tujuan" name="prov_sekolah_tujuan">
            </div>
            
            <div class="col-12 mt-4">
                <h4 class="text-shadow">Kontak yang bisa dihubungi</h4>
            </div>
            <div class="col-12">
                <label for="no_wa" class="form-label text-shadow">Nomor Telepon/WhatsApp</label>
                <input type="text" class="form-control" id="no_wa" name="no_wa">
            </div>
            <div class="col-12">
                <label for="email" class="form-label text-shadow">Alamat Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            
            <div class="col-12 mt-4">
                <label for="keterangan" class="form-label text-shadow">Keterangan</label>
                <textarea class="form-control" id="keterangan" name="keterangan" rows="3"></textarea>
            </div>
            <div class="col-12 mt-4">
                <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
        </form>
    </div>
    
    <footer>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="filter: drop-shadow(0 -4px 6px rgba(0, 0, 0, 0.1));">
            <path fill="#e3f2fd" fill-opacity="1" d="M0,64L60,85.3C120,107,240,149,360,144C480,139,600,85,720,90.7C840,96,960,160,1080,160C1200,160,1320,96,1380,64L1440,32L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
        </svg>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
