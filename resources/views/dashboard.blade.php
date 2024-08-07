<!doctype html>
<html lang="en" data-bs-theme="dark">
<head>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home E_Mutasi</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    </head>
    
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

        .nav-link {
            color: #fff;
        }

        .nav-link:hover {
            color: #adb5bd;
        }

        .sidebar {
            height: 100vh;
            background-color: #343a40;
            color: #fff;
        }

        .sidebar .nav-link {
            color: #fff;
        }

        .sidebar .nav-link.active {
            background-color: #495057;
        }

        .navbar-dark .navbar-nav .nav-link {
            color: #fff;
        }

        .navbar-dark .navbar-nav .nav-link:hover {
            color: #adb5bd;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand navbar-dark sticky-top" style="background-color: #00001b;">
        <div class="container-lg">
        <a class="navbar-brand" href="/dashboard"><i class="bi bi-houses" style="font-size: 25px;"></i> </i>E Mutasi Siswa</a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown" data-bs-theme="dark">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle" style="font-size: 25px;"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end mt-2" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#ModalProfil">
                            <i class="bi bi-person-circle" style="font-size: 25px;"> </i> Profile</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="d-flex">
        <!-- Sidebar -->
        <nav class="sidebar p-5">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link rounded active" href="/dashboard"><i class="bi bi-speedometer" style="font-size: 25px;"></i> </i>Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/data"><i class="bi bi-folder2-open" style="font-size: 25px;"> </i>Data</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/setting"><i class="bi bi-house-gear" style="font-size: 25px;"> </i>Settings</a>
                </li>
                <button class="nav-item" onclick={logout()}>
                    <!-- <a class="nav-link" href="/logout"><i class="bi bi-door-open" style="font-size: 25px;"> </i>Logout</a> -->
                    logout
                </button>
            </ul>
        </nav>
        <!-- Main Content -->
        <main class="flex-fill p-4">
            <div class="container">
                <h1 class="mb-4">Dashboard</h1>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Welcome to E_Mutasi</h5>
                                <p class="card-text">This is your dashboard where you can view and manage your data.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Recent Activity</h5>
                                <ul class="list-group">
                                    <li class="list-group-item">Activity 1</li>
                                    <li class="list-group-item">Activity 2</li>
                                    <li class="list-group-item">Activity 3</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        const logout= (event) =>{
            window.location.href='/login'
        }
    </script>
</body>
</html>
