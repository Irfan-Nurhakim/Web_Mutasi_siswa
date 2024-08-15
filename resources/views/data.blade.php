<!doctype html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data E_Mutasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .nav-link {
            color: #fff;
        }

        .nav-link:hover {
            color: #adb5bd;
        }

        .sidebar {
            background-color: #343a40;
            color: #fff;
        }

        .sidebar .nav-link {
            color: #fff;
        }

        .sidebar .nav-link.active {
            background-color: #495057;
        }

        .navbar-dark .navbar-nav .nav-link {
            color: #fff;
        }

        .navbar-dark .navbar-nav .nav-link:hover {
            color: #adb5bd;
        }

        @media (max-width: 767.98px) {
            .sidebar {
                position: fixed;
                top: 56px;
                bottom: 0;
                left: 0;
                z-index: 100;
                padding: 20px 0 0;
                overflow-x: hidden;
                overflow-y: auto;
                width: 100%;
                max-width: 200px;
                transform: translateX(-100%);
                transition: transform .3s ease-in-out;
            }

            .sidebar.show {
                transform: translateX(0);
            }

            .content-wrapper {
                margin-left: 0;
            }
        }

        @media (min-width: 768px) {
            .sidebar {
                position: sticky;
                top: 56px;
                height: calc(100vh - 56px);
            }

            .content-wrapper {
                margin-left: 200px;
            }
        }

        /* Gaya yang sudah ada tetap dipertahankan */
        .table th {
            white-space: nowrap;
            vertical-align: middle;
            text-align: center;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #00001b;">
        <div class="container-fluid">
            <a class="navbar-brand" href="/dashboard"><i class="bi bi-houses" style="font-size: 25px;"></i> E Mutasi Siswa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item d-lg-none">
                        <li class="nav-item d-lg-none">
                            <a class="nav-link" href="/dashboard"><i class="bi bi-speedometer"></i> Dashboard</a>
                        </li>
                        <li class="nav-item d-lg-none">
                            <a class="nav-link" href="/home"><i class="bi bi-speedometer"></i> Home</a>
                        </li>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#" onclick="konfirmasiLogout()"><i class="bi bi-door-open" style="font-size: 25px;"></i> Logout</a>
                    </li>
                    <script>
                    function konfirmasiLogout() {
                        if (confirm("Apakah Anda yakin ingin keluar?")) {
                            window.location.href = "/login";
                        }
                    }
                    </script>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link rounded" href="/dashboard"><i class="bi bi-speedometer" style="font-size: 25px;"></i> Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounded" href="/home"><i class="bi bi-house" style="font-size: 25px;"></i> Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounded" href="/data"><i class="bi bi-folder2-open" style="font-size: 25px;"></i> Data</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <style>
                .nav-link {
                    transition: all 0.3s ease;
                }
                .nav-link:hover, .nav-link:focus, .nav-link.active {
                    background-color: rgba(255, 255, 255, 0.1);
                    transform: scale(1.05);
                }
            </style>
            <script>
                document.querySelectorAll('.nav-link').forEach(link => {
                    link.addEventListener('click', function() {
                        document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
                        this.classList.add('active');
                    });
                });
            </script>
            
            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between align-items-center my-3">
                        <h1 class="my-4">Data Mutasi Siswa</h1>
                        <a href="{{ route('data.export') }}" class="btn btn-primary">Ekspor ke Excel</a> <!-- Tombol Ekspor diubah menjadi warna biru -->
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                        <thead>
                        <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Nama Siswa</th>
                                    <th>TTL</th>
                                    <th>Asal Sekolah</th>
                                    <th>No.Surat Sekolah</th>
                                    <th>Tanggal Surat</th>
                                    <th>Jenis Kelamin</th>
                                    <th>NIS</th>
                                    <th>NISN</th>
                                    <th>Kelas</th>
                                    <th>Kecamatan</th>
                                    <th>Kabupaten</th>
                                    <th>Sekolah Baru</th>
                                    <th>Kec.Sekolah Tujuan</th>
                                    <th>Kab/Kota Sekolah Tujuan</th>
                                    <th>No.Telp</th>
                                    <th>Email</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th> <!-- Tambahkan kolom aksi -->
                                </tr>
                            </thead>
                            <tbody>
                                @if(isset($mutasiData) && count($mutasiData) > 0)
                                    @foreach($mutasiData as $index => $data)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $data->tanggal }}</td>
                                        <td>{{ $data->nama_siswa }}</td>
                                        <td>{{ $data->ttl }}</td>
                                        <td>{{ $data->asal_sekolah }}</td>
                                        <td>{{ $data->no_surat_sekolah }}</td>
                                        <td>{{ $data->ttl_surat_dari_sekolah }}</td>
                                        <td>{{ $data->jenis_kelamin }}</td>
                                        <td>{{ $data->nis }}</td>
                                        <td>{{ $data->nisn }}</td>
                                        <td>{{ $data->kelas }}</td>
                                        <td>{{ $data->kecamatan }}</td>
                                        <td>{{ $data->kabupaten }}</td>
                                        <td>{{ $data->nama_sekolah_baru }}</td>
                                        <td>{{ $data->kec_sekolah_tujuan }}</td>
                                        <td>{{ $data->kab_kota_sekolah_tujuan }}</td>
                                        <td>{{ $data->no_wa }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->keterangan }}</td>
                                        <td>
                                            <a href="{{ route('siswa.detail', $data->id) }}" class="btn btn-info btn-sm">
                                                <i class="bi bi-eye"></i> <!-- Ikon untuk melihat -->
                                            </a>
                                            <a href="{{ route('siswa.edit', $data->id) }}" class="btn btn-warning btn-sm">
                                                <i class="bi bi-pencil"></i> <!-- Ikon untuk mengedit -->
                                            </a>
                                            <form action="{{ route('siswa.destroy', $data->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data siswa ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="bi bi-trash"></i> <!-- Ikon untuk menghapus -->
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="18" class="text-center">Tidak ada data mutasi yang tersedia.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e3f2fd" fill-opacity="1" d="M0,64L60,85.3C120,107,240,149,360,144C480,139,600,85,720,90.7C840,96,960,160,1080,160C1200,160,1320,96,1380,64L1440,32L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        const logout = (event) => {
            window.location.href = '/login';
        }
    </script>
</body>
</html>