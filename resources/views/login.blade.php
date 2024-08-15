<!doctype html>
<html lang="en" data-bs-theme="dark">
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

        .form-signin {
            transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
        }

        .btn-primary {
            transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
        }

        @media (max-width: 768px) {
            .form-signin {
                padding: 20px;
            }
        }
    </style>
</head>

<body class="d-flex align-items-center justify-content-center vh-100 bg-body-tertiary">
    <div class="container">
        <div class="row justify-content-center rounded">
            <div class="shadow col-md-6 col-lg-4 text-center rounded">
                <main class="form-signin w-100 m-auto">
                    <form class="needs-validation" novalidate action="{{ route('login') }}" method="POST">
                        @csrf
                        <h1 class="h3 mb-3" style="padding-bottom: 20px;"><br>LOGIN</h1>

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
                            <button class="btn btn-primary w-50 py-2 mb-2" type="submit" name="submit-validate" value="abc">Login</button>
                        </div>
                    </form>
                </main>
                <p class="mt-5 mb-2 text-body-secondary"> &copy; 2023–2024</p>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
                <script>
                    // Tambahkan JavaScript yang diperlukan di sini
                    (function () {
                        'use strict'
                        // Loop over them and prevent submission
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