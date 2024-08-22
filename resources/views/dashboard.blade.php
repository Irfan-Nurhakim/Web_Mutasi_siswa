<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data E_Mutasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="css/dashboard.css" rel="stylesheet">
    <script src="js/dashboard.js"> </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container-fluid">
            <img src="{{ asset('storage/assets/logo.png') }}" height="60" width="90"
                class="d-inline-block align-top me-2">
            <span class="navbar-brand" style="color: #000 !important;"><strong>E Mutasi Siswa</strong></span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item d-lg-none">
                        <a class="nav-link" href="/dashboard"><i class="bi bi-speedometer"></i>
                            <strong>Dashboard</strong></a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <a class="nav-link" href="/data"><i class="bi bi-folder2-open"></i> <strong>Data</strong></a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#" onclick="konfirmasiLogout()">
                            <i class="bi bi-door-open" style="font-size: 25px;"></i> <strong>Logout</strong>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
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
                            <a class="nav-link rounded" href="/dashboard"><i class="bi bi-speedometer"
                                    style="font-size: 25px;"></i> <strong>Dashboard</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounded" href="/data"><i class="bi bi-folder2-open"
                                    style="font-size: 25px;"></i> <strong>Data</strong></a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="container-fluid">
                    <div class="row mt-3">
                        <div class="col-md-6 mb-4">
                            <div >
                                <h1> <br> Dashboard</h1>
                            </div>
                        </div>
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
                    <div class="row mt-1">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>const mutasiChart = new Chart( document.getElementById('mutasiChart'),config);</script> // Membuat grafik
</body>

</html>
