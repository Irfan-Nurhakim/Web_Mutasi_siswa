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
        <!-- Navigasi -->
        <nav class="navbar navbar-expand-lg sticky-top">
            <div class="container">
                <!-- Logo -->
                <img src="{{ asset('storage/assets/logo.png') }}" height="60"  class="d-inline-block align-top me-2">
                <!-- Nama aplikasi -->
                <a class="navbar-brand" href="/"><strong>E Mutasi Siswa</strong></a>
                <!-- Tombol navigasi -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Menu navigasi -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link rounded" href="/"> <i class="bi bi-house-door-fill"> </i> <strong>Home</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounded" href="/mutasi"><i class="bi bi-journal-bookmark"> </i><strong>Mutasi</strong></a>
                        </li>
                    </ul>
                    <!-- Menu navigasi untuk login -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link rounded" href="/login"><i class="bi bi-door-open-fill" style="font-size: 25px;"></i><strong>Login</strong></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Kartu informasi -->
        <div class="card mt-4 link-dark container" style="background-color: rgba(0, 0, 0, 0.1); box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <div>
                <div >
                    <div >
                        <!-- Gambar -->
                        <img src="{{ asset('storage/assets/disdik.jpg') }}" class="d-block w-100" alt="Slide 1" style="height: auto; width: 100%; object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>

        <!-- Kartu informasi tentang E-Mutasi -->
        <div class="card container mt-3" style="background-color: rgba(0, 0, 0, 0.1); box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
            <div class="card-body rounded text-center text-black">
                <h5 class="card-title">E Mutasi Siswa</h5>
                <p class="card-text">E-Mutasi Online Siswa adalah platform yang memungkinkan orang tua, siswa, dan pihak sekolah untuk melakukan pengajuan mutasi secara daring. Sistem ini menggantikan proses manual yang sering kali memakan waktu dan rentan terhadap kesalahan. Dengan e-mutasi, semua langkah dalam proses mutasi dapat dilakukan secara online, mulai dari pengajuan hingga persetujuan.</p>
                <a href="/mutasi" class="btn btn-primary">Ajukan Mutasi</a>
            </div>
        </div>
    
        <!-- Footer -->
        <footer class="py-4 mt-5 ">
            <div class="container">
                <div class="row d-flex justify-content-around">
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
                                <p> disdikkabgarut@gmail.com </p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 ">
                        <h6>Media Sosial</h6>
                        <ul class="list-unstyled">
                            <li><p class="text-dark"><i class="bi bi-instagram text-danger"></i><a href="https://www.instagram.com/disdikkabgarut/" target="_blank"> disdikkabgarut</a></p></li>
                            <li><p class="text-dark"><i class="bi bi-facebook text-danger"></i><a href="https://www.instagram.com/disdikkabgarut/" target="_blank"> DINAS Pendidikan Kab.garut</a></p></li>
                            <li><p class="text-dark"><i class="bi bi-whatsapp text-danger"></i> <a href="https://wa.me/6285179911392" target="_blank"> 085179911392</a></p></li>
                            <li><p class="text-dark"><i class="bi bi-youtube text-danger"></i> <a href="https://www.youtube.com/channel/UChk1aNB49e0OoAqKn9qZ0-g" target="_blank"> Disdik Garutt</a></p></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h6></h6>
                        <ul class="list-unstyled">
                        <li style="padding: -10px;" class="pe-5"><img src="{{ asset('storage/assets/logo.png') }}" alt="Link Image" class="img-fluid" style="max-width: 600px; height: 200px;"></li>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Menghubungkan JavaScript Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
