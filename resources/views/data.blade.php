<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data E_Mutasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    
    <style>
        /* Mengatur gaya untuk placeholder gambar */
        .bd-placeholder-img {
            font-size: 1.125rem; /* Ukuran font */
            text-anchor: middle; /* Mengatur teks di tengah */
            -webkit-user-select: none; /* Mengatur agar tidak dapat dipilih di Chrome */
            -moz-user-select: none; /* Mengatur agar tidak dapat dipilih di Firefox */
            user-select: none; /* Mengatur agar tidak dapat dipilih secara umum */
        }

        /* Mengatur gaya untuk placeholder gambar pada layar yang lebih besar */
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem; /* Ukuran font yang lebih besar */
            }
        }

        /* Mengatur gaya untuk link navigasi */
        .nav-link {
            color: #fff; /* Warna teks link */
        }

        /* Mengatur gaya untuk link navigasi saat diarahkan */
        .nav-link:hover {
            color: #adb5bd; /* Warna teks link saat diarahkan */
        }

        /* Mengatur gaya untuk sidebar */
        .sidebar {
            background: linear-gradient(to right, #6a11cb, #2575fc); /* Gradien warna untuk sidebar */
            color: #fff; /* Warna teks sidebar */
        }

        /* Mengatur gaya untuk link navigasi di dalam sidebar */
        .sidebar .nav-link {
            color: #fff; /* Warna teks link di sidebar */
        }

        /* Mengatur gaya untuk link navigasi aktif di sidebar */
        .sidebar .nav-link.active {
            background-color: #495057; /* Warna latar belakang link aktif */
        }

        /* Mengatur gaya untuk sidebar pada layar yang lebih kecil */
        @media (max-width: 767.98px) {
            .sidebar {
                position: fixed; /* Mengatur posisi sidebar */
                top: 56px; /* Mengatur posisi atas sidebar */
                bottom: 0; /* Mengatur posisi bawah sidebar */
                left: -100%; /* Mengatur posisi kiri sidebar */
                z-index: 100; /* Mengatur indeks z untuk sidebar */
                padding: 20px 0 0; /* Mengatur padding untuk sidebar */
                overflow-x: hidden; /* Mengatur overflow-x untuk sidebar */
                overflow-y: auto; /* Mengatur overflow-y untuk sidebar */
                width: 100%; /* Mengatur lebar sidebar */
                max-width: 200px; /* Mengatur lebar maksimum sidebar */
                transition: left .3s ease-in-out; /* Mengatur transisi untuk sidebar */
            }

            /* Mengatur gaya untuk sidebar saat ditampilkan */
            .sidebar.show {
                left: 0; /* Mengatur posisi kiri sidebar saat ditampilkan */
            }

            /* Mengatur gaya untuk wrapper konten saat sidebar ditampilkan */
            .content-wrapper {
                margin-left: 0; /* Mengatur margin kiri untuk wrapper konten */
            }
            
            /* Mengatur gaya untuk tabel responsif */
            .table-responsive {
                overflow-x: auto; /* Mengatur overflow-x untuk tabel responsif */
            }
            
            /* Mengatur gaya untuk header dan data tabel */
            .table th, .table td {
                white-space: nowrap; /* Mengatur agar teks tidak terpotong */
            }
        }

        /* Mengatur gaya untuk sidebar pada layar yang lebih besar */
        @media (min-width: 768px) {
            .sidebar {
                position: sticky; /* Mengatur posisi sidebar */
                top: 56px; /* Mengatur posisi atas sidebar */
                height: calc(100vh - 56px); /* Mengatur tinggi sidebar */
            }

            /* Mengatur gaya untuk wrapper konten pada layar yang lebih besar */
            .content-wrapper {
                margin-left: 200px; /* Mengatur margin kiri untuk wrapper konten */
            }
        }

        /* Mengatur gaya untuk header tabel */
        .table th {
            white-space: nowrap; /* Mengatur agar teks tidak terpotong */
            vertical-align: middle; /* Mengatur posisi vertikal teks */
            text-align: center; /* Mengatur posisi horizontal teks */
        }
        
        /* Mengatur gaya untuk link navigasi */
        .nav-link {
            transition: all 0.3s ease; /* Mengatur transisi untuk link navigasi */
        }
        /* Mengatur gaya untuk link navigasi saat diarahkan, difokuskan, atau aktif */
        .nav-link:hover, .nav-link:focus, .nav-link.active {
            background-color: rgba(255, 255, 255, 0.5); /* Mengatur warna latar belakang menjadi lebih terang */
            transform: scale(1.05); /* Mengatur skala */
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
                        <a class="nav-link" href="/dashboard"><i class="bi bi-speedometer"></i> Dashboard</a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <a class="nav-link" href="/home"><i class="bi bi-house"></i> Home</a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <a class="nav-link" href="/data"><i class="bi bi-folder2-open"></i> Data</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#" onclick="konfirmasiLogout()"><i class="bi bi-door-open" style="font-size: 25px;"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-none d-md-block sidebar">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link rounded" href="/dashboard" style="color: white;"><i class="bi bi-speedometer" style="font-size: 25px;"></i> Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounded" href="/home" style="color: white;"><i class="bi bi-house" style="font-size: 25px;"></i> Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounded" href="/data" style="color: white;"><i class="bi bi-folder2-open" style="font-size: 25px;"></i> Data</a>
                        </li>
                    </ul>
                </div>
            </nav>
            
            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="background-image: url('https://www.pixel4k.com/wp-content/uploads/2024/02/3d-stars-water-drops-reflection-art-4k_1709113674.jpg.webp'); background-size: cover;">
                <div class="container py-2">
                <h1 class="my-4">Data Mutasi Siswa</h1>
                    <div class="card">
                        <div class="card-header">
                            <div class="container-fluid">
                                <div class="d-flex justify-content-between align-items-center my-3 flex-wrap"></div>
                                <div class="d-flex justify-content-between align-items-center my-3 flex-wrap">
                                    <input type="text" id="searchInput" class="form-control" placeholder="Cari siswa..." style="width: 300px;">
                                    <a href="{{ route('data.export') }}" class="btn btn-primary mt-2 mt-md-0">Ekspor ke Excel</a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggal</th>
                                                <th>Nama Siswa</th>
                                                <th>Tempat Tanggal Lahir</th>
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
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(isset($mutasiData) && count($mutasiData) > 0)
                                                @foreach($mutasiData as $index => $data)
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>{{ \Carbon\Carbon::parse($data->tanggal)->format('d-m-Y') }}</td>
                                                    <td>{{ $data->nama_siswa }}</td>
                                                    <td>{{ $data->ttl }}</td>
                                                    <td>{{ $data->asal_sekolah }}</td>
                                                    <td>{{ $data->no_surat_sekolah }}</td>
                                                    <td>{{ \Carbon\Carbon::parse($data->ttl_surat_dari_sekolah)->format('d-m-Y') }}</td>
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
                                                        <div class="btn-group" role="group">
                                                            <a href="{{ route('siswa.detail', $data->id) }}" class="btn btn-info btn-sm">
                                                                <i class="bi bi-eye"></i>
                                                            </a>
                                                            <a href="{{ route('siswa.edit', $data->id) }}" class="btn btn-warning btn-sm">
                                                                <i class="bi bi-pencil"></i>
                                                            </a>
                                                            <form action="{{ route('siswa.destroy', $data->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data siswa ini?');">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger btn-sm">
                                                                    <i class="bi bi-trash"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="20" class="text-center">Tidak ada data mutasi yang tersedia.</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        function konfirmasiLogout() {
            if (confirm("Apakah Anda yakin ingin keluar?")) {
                window.location.href = "/login";
            }
        }

        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function() {
                document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Fitur pencarian
        document.getElementById('searchInput').addEventListener('keyup', function() {
            const filter = this.value.toLowerCase();
            const rows = document.querySelectorAll('tbody tr');

            rows.forEach(row => {
                const cells = row.getElementsByTagName('td');
                let found = false;

                for (let i = 0; i < cells.length; i++) {
                    if (cells[i].textContent.toLowerCase().includes(filter)) {
                        found = true;
                        break;
                    }
                }

                row.style.display = found ? '' : 'none';
            });
        });
    </script>
</body>
</html>