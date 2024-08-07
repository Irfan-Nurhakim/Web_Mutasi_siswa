<!doctype html>
<html lang="en" data-bs-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mutasi E_Mutasi</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
        <style>
            .nav-link {
                position: relative;
                transition: color 0.3s ease-in-out;
            }

            .nav-link::after {
                content: '';
                position: absolute;
                width: 0;
                height: 2px;
                display: block;
                margin-top: 5px;
                right: 0;
                background: white;
                transition: width 0.3s ease, right 0.3s ease;
            }

            .nav-link:hover::after {
                width: 100%;
                right: 0;
            }

            .nav-link.active::after {
                width: 100%;
                right: 0;
            }

            .btn-primary {
                transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
            }

            .btn-primary:active {
                background-color: white !important;
                color: #007bff !important;
            }
        </style>
    </head>

<body>
    <nav class="navbar navbar-expand-lg text-bg-secondary sticky-top" style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand" href="/">E Mutasi Siswa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/"> <i class="bi bi-house-door-fill"> </i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/mutasi"><i class="bi bi-journal-bookmark"> </i>Mutasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contac"> <i class="bi bi-telephone"> </i>contac</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/login"><i class="bi bi-box-arrow-right"> </i>Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <h1>Halaman Mutasi</h1>
        <form>
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="tanggal">
            </div>
            <div class="mb-3">
                <label for="nama_siswa" class="form-label">Nama Siswa</label>
                <input type="text" class="form-control" id="nama_siswa">
            </div>
            <div class="mb-3">
                <label for="tempat_tanggal_lahir" class="form-label">Tempat, Tanggal Lahir</label>
                <input type="text" class="form-control" id="tempat_tanggal_lahir">
            </div>
            <div class="mb-3">
                <label for="nama_sekolah_asal" class="form-label">Nama Sekolah Asal</label>
                <input type="text" class="form-control" id="nama_sekolah_asal">
            </div>
            <div class="mb-3">
                <label for="nomor_surat" class="form-label">Nomor Surat dari Sekolah</label>
                <input type="text" class="form-control" id="nomor_surat">
            </div>
            <div class="mb-3">
                <label for="tanggal_surat" class="form-label">Tanggal Surat dari Sekolah</label>
                <input type="date" class="form-control" id="tanggal_surat">
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-select" id="jenis_kelamin">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="nis" class="form-label">NIS</label>
                <input type="text" class="form-control" id="nis">
            </div>
            <div class="mb-3">
                <label for="nisn" class="form-label">NISN</label>
                <input type="text" class="form-control" id="nisn">
            </div>
            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" class="form-control" id="kelas">
            </div>
            <div class="mb-3">
                <label for="kecamatan" class="form-label">Kecamatan</label>
                <input type="text" class="form-control" id="kecamatan">
            </div>
            <div class="mb-3">
                <label for="nama_sekolah_baru" class="form-label">Nama Sekolah Baru</label>
                <input type="text" class="form-control" id="nama_sekolah_baru">
            </div>
            <div class="mb-3">
                <label for="kecamatan_sekolah_tujuan" class="form-label">Kecamatan Sekolah Tujuan</label>
                <input type="text" class="form-control" id="kecamatan_sekolah_tujuan">
            </div>
            <div class="mb-3">
                <label for="kab_kota_sekolah_tujuan" class="form-label">Kabupaten/Kota Sekolah Tujuan</label>
                <input type="text" class="form-control" id="kab_kota_sekolah_tujuan">
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <textarea class="form-control" id="keterangan" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
