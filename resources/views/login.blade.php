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

        .form-control {
            background-color: transparent; /* Mengubah latar belakang input menjadi transparan */
            &:focus {
                background-color: transparent; /* Saat di tekan, latar belakang menjadi transparan */
            }
            color: white; /* Mengubah warna teks menjadi putih */
        }
    </style>
</head>

<body class="d-flex align-items-center justify-content-center vh-100" style="background-image: url('https://www.pixel4k.com/wp-content/uploads/2024/02/3d-stars-water-drops-reflection-art-4k_1709113674.jpg.webp'); background-size: cover;">
    <div class="container">
        <div class="row justify-content-center rounded">
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
            </div>
        </div>
    </div>
</body>
</html>