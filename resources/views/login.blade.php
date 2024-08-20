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
    <style>
        body {
            background: url('storage/assets/disdik.jpg') no-repeat center center fixed; /* Gambar latar belakang */
            background-size: cover; /* Menyesuaikan ukuran gambar latar belakang */
            height: 100vh; /* Mengatur tinggi body */
            margin: 0; /* Menghapus margin default */
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative; /* Menyiapkan posisi relatif untuk overlay */
        }

        .overlay {
            position: absolute; /* Menempatkan overlay di atas gambar latar belakang */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4); /* Overlay abu-abu transparan */
            z-index: 1; /* Menempatkan overlay di atas gambar */
        }

        .form-signin {
            background: rgba(255, 255, 255, 0.9); /* Kotak login dengan latar belakang putih semi-transparan */
            max-width: 400px; /* Lebar maksimum */
            padding: 30px 40px; /* Padding */
            color: black; /* Warna teks hitam */
            border-radius: 10px; /* Radius sudut */
            border: 2px solid rgba(0, 0, 0, 0.1); /* Batas dengan warna hitam transparan */
            box-shadow: 0 4px 8px rgba(0,0,0,0.2); /* Efek bayangan lebih lembut */
            position: relative; /* Menempatkan kotak login di atas overlay */
            z-index: 2; /* Menempatkan kotak login di atas overlay */
        }

        .form-control {
            background-color: #ffffff; /* Latar belakang input putih */
            color: black; /* Warna teks hitam */
        }

        .form-control:focus {
            background-color: #ffffff; /* Latar belakang input tetap putih saat fokus */
            color: black; /* Warna teks tetap hitam saat fokus */
        }
    </style>
</head>

<body>
    <div class="overlay"></div> <!-- Overlay abu-abu transparan -->
    <div class="container">
        <div class="row justify-content-center">
            <div>
                <main class="form-signin w-100 m-auto">
                    <form class="needs-validation" novalidate action="{{ route('login') }}" method="POST">
                        @csrf
                        <h1 class="h3 mb-3 text-center">LOGIN</h1>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="form-floating mb-3">
                            <input name="username" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                            <label for="floatingInput">Email address</label>
                            <div class="invalid-feedback">
                                Masukkan Email Yang Benar.
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                            <label for="floatingPassword">Password</label>
                            <div class="invalid-feedback">
                                Masukkan password Yang Benar.
                            </div>
                        </div>

                        <div class="text-center">
                            <button class="btn btn-primary w-50 py-2 mb-2" type="submit">Login</button>
                        </div>
                    </form>
                </main>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        (function () {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation');
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
</body>
</html>
