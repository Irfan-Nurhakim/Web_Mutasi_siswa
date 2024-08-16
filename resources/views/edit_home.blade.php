<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login E_Mutasi</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <style>
        body {
            background: linear-gradient(to right, #6a11cb, #2575fc); /* Gradien latar belakang */
            height: 100vh; /* Mengatur tinggi body */
        }

        .form-signin {
            background: transparent; /* Latar belakang putih dengan transparansi */
            max-width: 400px; /* Lebar maksimum */
            padding: 30px 40px; /* Padding */
            color: black; /* Warna teks */
            border-radius: 10px; /* Radius sudut */
            border: 2px solid rgba(255, 255, 255, 0.15); /* Batas dengan warna putih transparan */
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); /* Efek bayangan */
        }
    </style>
</head>
    <body>
        <div class="card mt-4 bg-light link-dark container">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000" style="max-width: 100%; margin: auto;">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    @if(isset($slides) && count($slides) > 0)
                        @foreach($slides as $index => $slide)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            <img src="{{ $slide->image_url }}" class="d-block w-100" alt="Slide {{ $index + 1 }}" style="height: auto; width: 100%; object-fit: cover;">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>{{ $slide->title }}</h5>
                                <p>{{ $slide->description }}</p>
                            </div>
                        </div>
                        @endforeach
                    @else
                        <div class="carousel-item active">
                            <img src="https://via.placeholder.com/800x400?text=No+Slides+Available" class="d-block w-100" alt="No Slides Available">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>No Slides Available</h5>
                                <p>Please add some slides to display here.</p>
                            </div>
                        </div>
                    @endif
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
                <h5 class="card-title">{{ $dashboard_title ?? 'Welcome to E Mutasi Siswa' }}</h5>
                <p class="card-text">{{ $dashboard_description ?? 'Manage student mutations efficiently.' }}</p>
                <a href="/mutasi" class="btn btn-info">Menu</a>
            </div>
        </div>
        
        <footer class="bg-secondary text-white py-2 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h6>Logo DisDik</h6>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-geo-alt-fill text-danger"></i> {{ $contact_info->location ?? 'Location not set' }}</li>
                            <li><i class="bi bi-clock-fill text-danger"></i> {{ $contact_info->working_hours ?? 'Working hours not set' }}</li>
                            <li><i class="bi bi-telephone-fill text-danger"></i> {{ $contact_info->phone ?? 'Phone not set' }}</li>
                            <li><i class="bi bi-envelope-fill text-danger"></i> {{ $contact_info->email ?? 'Email not set' }}</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h6>Media Sosial</h6>
                        <ul class="list-unstyled">
                            <li><a href="{{ $social_media->instagram ?? '#' }}" class="text-white"><i class="bi bi-instagram text-danger"></i> Instagram</a></li>
                            <li><a href="{{ $social_media->facebook ?? '#' }}" class="text-white"><i class="bi bi-facebook text-danger"></i> Facebook</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h6>Link Lainnya</h6>
                        <ul class="list-unstyled">
                            @if(isset($other_links) && count($other_links) > 0)
                                @foreach($other_links as $link)
                                <li><a href="{{ $link->url }}" class="text-white">{{ $link->name }}</a></li>
                                @endforeach
                            @else
                                <li>No other links available</li>
                            @endif
                        </ul>
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
