<!doctype html>
<html lang="en" data-bs-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home E_Mutasi</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    </head>
    <style>
        .nav-link {
            transition: color 0.3s ease-in-out, background-color 0.3s ease-in-out;
        }

        .nav-link.active {
            color: white !important;
            background-color: #007bff !important;
        }

        .nav-link:active {
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
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/login"><i class="bi bi-box-arrow-right"> </i>Login</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <div class="card mt-4 bg-light link-dark container">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000" style="max-width: 100%; margin: auto;">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="https://dvgddkosknh6r.cloudfront.net/live/media/img/1689055582-IMG-20230710-WA0225.jpg" class="d-block w-100" alt="Slide 1" style="height: auto; width: 100%; object-fit: cover;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Judul Slide Pertama</h5>
                    <p>Deskripsi singkat untuk slide pertama.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="https://asset-2.tstatic.net/priangan/foto/bank/images/asngelarapel.jpg" class="d-block w-100" alt="Slide 2" style="height: auto; width: 100%; object-fit: cover;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Judul Slide Kedua</h5>
                    <p>Deskripsi singkat untuk slide kedua.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="https://dvgddkosknh6r.cloudfront.net/live/media/img/1678752975-IMG-20230313-WA0115.jpg" class="d-block w-100" alt="Slide 3" style="height: auto; width: 100%; object-fit: cover;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Judul Slide Ketiga</h5>
                    <p>Deskripsi singkat untuk slide ketiga.</p>
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Sebelumnya</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Selanjutnya</span>
            </button>
        </div>
    </div>

    <div class="card bg-light link-dark container mt-3">
        <div class="card-body rounded text-center">
            <h5 class="card-title ">HALAMAN DASHBOARD KATALOG</h5>
            <p class="card-text ">Selamat datang di Dasbor Katalog Makanan! Ini adalah pusat utama untuk
                dan menampilkan katalog makanan yang menarik di restoran kami. Kami senang Anda berada di sini untuk
                penawaran menu yang menggugah selera. Berikut adalah beberapa opsi yang dapat Anda temukan di dasbor ini:</p>
            <a href="/mutasi" class="btn btn-info">Menu</a>
        </div>
    </div>
    
    <footer class="bg-secondary text-white py-2 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h6>Logo DisDik</h6>
                <ul class="list-unstyled">
                    <li><i class="bi bi-geo-alt-fill text-danger"></i> Lokasi</li>
                    <li><i class="bi bi-clock-fill text-danger"></i> Jam Kerja</li>
                    <li><i class="bi bi-telephone-fill text-danger"></i> Telepon</li>
                    <li><i class="bi bi-envelope-fill text-danger"></i> Email</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h6>Media Sosial</h6>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white"><i class="bi bi-instagram text-danger"></i> Instagram</a></li>
                    <li><a href="#" class="text-white"><i class="bi bi-facebook text-danger"></i> Facebook</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h6>Link Lainnya</h6>
                <!-- Tambahkan link lainnya di sini jika diperlukan -->
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 160"><path fill="#e3f2fd" fill-opacity="1" d="M0,32L60,42.7C120,53,240,75,360,72C480,69,600,43,720,45.3C840,48,960,80,1080,80C1200,80,1320,48,1380,32L1440,16L1440,160L1380,160C1320,160,1200,160,1080,160C960,160,840,160,720,160C600,160,480,160,360,160C240,160,120,160,60,160L0,160Z"></path></svg>
</footer>
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
        crossorigin="anonymous">
    </script>
  </body>
</html>
