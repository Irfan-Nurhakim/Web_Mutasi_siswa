<!doctype html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard E_Mutasi</title>
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
                    <h1 class="my-4">Dashboard</h1>
                    <div class="row">
                        <div class="col-12 col-md-3 mb-4">
                            <div class="card bg-primary text-white">
                                <div class="card-body">
                                    <h5 class="card-title">Total Mutasi</h5>
                                    <p class="card-text display-4">{{ $totalMutasi ?? 0 }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3 mb-4">
                            <div class="card bg-success text-white">
                                <div class="card-body">
                                    <h5 class="card-title">Mutasi Masuk</h5>
                                    <p class="card-text display-4">{{ $mutasiMasuk ?? 0 }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Grafik Mutasi Bulanan</h5>
                                    <canvas id="mutasiChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e3f2fd" fill-opacity="1" d="M0,64L60,85.3C120,107,240,149,360,144C480,139,600,85,720,90.7C840,96,960,160,1080,160C1200,160,1320,96,1380,64L1440,32L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
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
        labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni'],
        datasets: [{
            label: 'Total Mutasi',
            data: [19, 30, 8, 13, 5, 10],
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }, {
            label: 'Mutasi Masuk',
            data: [12, 19, 3, 5, 2, 3],
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
