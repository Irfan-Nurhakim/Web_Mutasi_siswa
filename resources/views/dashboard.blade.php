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
            color: #000; /* Warna teks link */
        }

        /* Mengatur gaya untuk link navigasi saat diarahkan */
        .nav-link:hover {
            color: #333; /* Warna teks link saat diarahkan */
        }
        
        /* Mengatur gaya untuk sidebar */
        .sidebar {
            background: #ADD8E6; /* Warna putih semu biru untuk sidebar tanpa transparansi */
            color: #000; /* Warna teks sidebar */
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2); /* Menambahkan shadow pada sidebar */
        }

        /* Mengatur gaya untuk link navigasi di dalam sidebar */
        .sidebar .nav-link {
            color: #000; /* Warna teks link di sidebar */
        }

        /* Mengatur gaya untuk link navigasi aktif di sidebar */
        .sidebar .nav-link.active {
            background-color: #e0e0e0; /* Warna latar belakang link aktif */
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
                box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2); /* Menambahkan shadow pada sidebar */
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
                top: 80px; /* Mengatur posisi atas sidebar */
                height: calc(100vh - 80px); /* Mengatur tinggi sidebar */
                box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2); /* Menambahkan shadow pada sidebar */
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
            background-color: rgba(0, 0, 0, 0.1); /* Mengatur warna latar belakang menjadi lebih terang */
            transform: scale(1.05); /* Mengatur skala */
        }

        /* Mengatur gaya untuk navbar */
        .navbar {
            padding-top: 15px;
            padding-bottom: 15px;
            background-color: #e3f2fd; /* Warna putih semu biru untuk navbar tanpa transparansi */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* Menambahkan shadow pada navbar */
        }
        .navbar-brand {
            color: #000; /* Warna teks navbar-brand */
        }
        .navbar-nav .nav-link {
            color: #000; /* Warna teks link di navbar */
        }
        .navbar-nav .nav-link:hover {
            color: #333; /* Warna teks link di navbar saat diarahkan */
        }

        /* Mengatur gaya untuk background dengan warna bayangan */
        body {
            background: #F5F5F5; /* Warna putih agak gelap untuk latar belakang */
            background: linear-gradient(to bottom right, #F0F0F0, #E0E0E0); /* Gradasi warna putih agak gelap */
            height: 100vh;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container-fluid">
            <img src="{{ asset('storage/assets/logo.png') }}" height="60" width="90" class="d-inline-block align-top me-2">
            <span class="navbar-brand" style="color: #000 !important;"><strong>E Mutasi Siswa</strong></span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item d-lg-none">
                        <a class="nav-link" href="/dashboard"><i class="bi bi-speedometer"></i> <strong>Dashboard</strong></a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <a class="nav-link" href="/data"><i class="bi bi-folder2-open"></i> <strong>Data</strong></a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#" onclick="konfirmasiLogout()"><i class="bi bi-door-open" style="font-size: 25px;"></i> <strong>Logout</strong></a>
                    </li>
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
                            <a class="nav-link rounded" href="/dashboard"><i class="bi bi-speedometer" style="font-size: 25px;"></i> <strong>Dashboard</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounded" href="/data"><i class="bi bi-folder2-open" style="font-size: 25px;"></i> <strong>Data</strong></a>
                        </li>
                    </ul>
                </div>
            </nav>
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
                    <h1 class="my-4">Dashboard</h1>
                    <div class="row">
                        <div class="col-12 col-md-3 mb-4">
                            <div class="card bg-primary text-white">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="bi bi-bar-chart"></i> Total Mutasi</h5>
                                    <p class="card-text display-4">{{ $totalMutasi ?? 0 }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3 mb-4">
                            <div class="card bg-success text-white">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="bi bi-arrow-down-circle"></i> Mutasi Masuk</h5>
                                    <p class="card-text display-4">{{ $mutasiMasuk ?? 0 }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="bi bi-graph-up"></i> Grafik Mutasi Bulanan</h5>
                                    <canvas id="mutasiChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
    function konfirmasiLogout() {
        if (confirm("Apakah Anda yakin ingin keluar?")) {
            window.location.href = "/login";
        }
    }

    // Data untuk grafik (ganti dengan data sebenarnya dari backend)
    const mutasiData = {
        labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
        datasets: [{
            label: 'Total Mutasi',
            data: [19, 30, 8, 13, 5, 10, 15, 20, 25, 30, 35, 40],
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }, {
            label: 'Mutasi Masuk',
            data: [12, 19, 3, 5, 2, 3, 7, 9, 11, 13, 15, 17],
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1
        }]
    };

    // Konfigurasi grafik
    const config = {
        type: 'bar',
        data: mutasiData,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Grafik Mutasi Siswa'
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    };

    // Membuat grafik
    const mutasiChart = new Chart(
        document.getElementById('mutasiChart'),
        config
    );
    </script>
</body>
</html>
