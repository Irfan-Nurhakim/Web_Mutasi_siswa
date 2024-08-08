
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

            .b-example-divider {
                width: 100%;
                height: 3rem;
                background-color: rgba(0, 0, 0, .1);
                border: solid rgba(0, 0, 0, .15);
                border-width: 1px 0;
                box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
            }

            .b-example-vr {
                flex-shrink: 0;
                width: 1.5rem;
                height: 100vh;
            }

            .bi {
                vertical-align: -.125em;
                fill: currentColor;
            }

            .nav-scroller {
                position: relative;
                z-index: 2;
                height: 2.75rem;
                overflow-y: hidden;
            }

            .nav-scroller .nav {
                display: flex;
                flex-wrap: nowrap;
                padding-bottom: 1rem;
                margin-top: -1px;
                overflow-x: auto;
                text-align: center;
                white-space: nowrap;
                -webkit-overflow-scrolling: touch;
            }

            .form-signin {
                transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
            }

            .btn-primary {
                transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
            }

            
        </style>
    </head>

    <body class="d-flex align-items-center justify-content-center vh-100 bg-body-tertiary">
        <div class="container">
            <div class="row justify-content-center rounded">
                <div class="shadow col-md-4 text-center rounded">
                    <main class="form-signin w-100 m-auto">
                        <form class="needs-validation" novalidate action="/dashboard">
                            <h1 class="h3 mb-3" style="padding-bottom: 20px;"><br>LOGIN</h1>
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
                </div>
            </div>
        </div>
    </body>

</html>
