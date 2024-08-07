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

    <div class="card mt-4 bg-light link-dark container mt-3">
        <!--- --->
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="https://dvgddkosknh6r.cloudfront.net/live/media/img/1689055582-IMG-20230710-WA0225.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="https://asset-2.tstatic.net/priangan/foto/bank/images/asngelarapel.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="https://dvgddkosknh6r.cloudfront.net/live/media/img/1678752975-IMG-20230313-WA0115.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!--- --->
    </div>

    <div class="card mt-4 bg-light link-dark container mt-3">
        <div class="card-body rounded text-center">
            <h5 class="card-title ">HALAMAN DASHBOARD KATALOG</h5>
            <p class="card-text ">Selamat datang di Dasbor Katalog Makanan! Ini adalah pusat utama untuk
                dan menampilkan katalog makanan yang menarik di restoran kami. Kami senang Anda berada di sini untuk
                penawaran menu yang menggugah selera. Berikut adalah beberapa opsi yang dapat Anda temukan di dasbor ini:</p>
            <a href="menu" class="btn btn-info">Menu</a>
        </div>
    </div>

    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
        crossorigin="anonymous">
    </script>
  </body>
</html>
