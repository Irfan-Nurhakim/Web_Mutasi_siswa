<!doctype html>
<html lang="en" data-bs-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>E_Mutasi</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
        <link href="css/home.css" rel="stylesheet">
        <script src="js/home.js"> </script>
    </head>
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
                            <a class="nav-link rounded" href="/mutasi"><i class="bi bi-journal-bookmark"> </i><strong>Mutasi</strong></a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link rounded" href="/login"><i class="bi bi-box-arrow-right"> </i><strong>Login</strong></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="card mt-4 link-dark container" style="background-color: rgba(0, 0, 0, 0.1); box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <div>
                <div >
                    <div >
                        <img src="{{ asset('storage/assets/disdik.jpg') }}" class="d-block w-100" alt="Slide 1" style="height: auto; width: 100%; object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>

        <div class="card container mt-3" style="background-color: rgba(0, 0, 0, 0.1); box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
            <div class="card-body rounded text-center text-black">
                <h5 class="card-title">E Mutasi Siswa</h5>
                <p class="card-text">E-Mutasi Online Siswa adalah platform yang memungkinkan orang tua, siswa, dan pihak sekolah untuk melakukan pengajuan mutasi secara daring. Sistem ini menggantikan proses manual yang sering kali memakan waktu dan rentan terhadap kesalahan. Dengan e-mutasi, semua langkah dalam proses mutasi dapat dilakukan secara online, mulai dari pengajuan hingga persetujuan.</p>
                <a href="/mutasi" class="btn btn-primary">Ajukan Mutasi</a>
            </div>
        </div>
    
        <footer class="py-4 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h6>Profil Dinas Pendidikan Garut</h6>
                        <ul class="list-unstyled">
                            <li>
                                <i class="bi bi-geo-alt-fill text-danger"></i> Alamat
                                <p> Jl. Pembangunan No.179, Sukagalih, Kec. Tarogong Kidul, Kabupaten Garut, Jawa Barat 44151 <br>
                                <a href="https://maps.app.goo.gl/jni8F8WMozbFMrSB6">Lihat Lokasi di Peta</a></p>
                            </li>
                            <li>
                                <i class="bi bi-clock-fill text-danger"></i> Jam Kerja
                                <p> Senin - Jumaat (08.00–16.00 - 08.00–16.30)</p>
                            </li>
                            <li>
                                <i class="bi bi-telephone-fill text-danger"></i> Telpon
                                <p>(0262) 233155</p>
                            </li>
                            <li>
                                <i class="bi bi-envelope-fill text-danger"></i> Email
                                <p>- </p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 offset-md-2">
                        <h6>Media Sosial</h6>
                        <ul class="list-unstyled">
                            <li><p class="text-dark"><i class="bi bi-instagram text-danger"></i> disdikkabgarut</p></li>
                            <li><p class="text-dark"><i class="bi bi-facebook text-danger"></i> DINAS Pendidikan Kab.garut</p></li>
                            <li><p class="text-dark"><i class="bi bi-whatsapp text-danger"></i> -</p></li>
                        </ul>
                    </div>
                    <div class="col-md-1 offset">
                        <div class="mt-3">
                            <img src="{{ asset('storage/assets/logo.png') }}" alt="Link Image" class="img-fluid rounded" style="max-width: 800px; height: 300px;">
                        </div>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 160"><path fill="#e3f2fd" fill-opacity="1" d="M0,32L60,42.7C120,53,240,75,360,72C480,69,600,43,720,45.3C840,48,960,80,1080,80C1200,80,1320,48,1380,32L1440,16L1440,160L1380,160C1320,160,1200,160,1080,160C960,160,840,160,720,160C600,160,480,160,360,160C240,160,120,160,60,160L0,160Z"></path></svg>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
