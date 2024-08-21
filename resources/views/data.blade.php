<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data E_Mutasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="css/dashboard.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container-fluid">
        <img src="{{ asset('storage/assets/logo.png') }}" height="60" width="90" class="d-inline-block align-top me-2">
        <span class="navbar-brand" style="color: #000 !important;"><strong>E Mutasi Siswa</strong></span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item d-lg-none">
                    <a class="nav-link" href="/dashboard"><i class="bi bi-speedometer"></i><strong> Dashboard</strong></a>
                </li>
                <li class="nav-item d-lg-none">
                    <a class="nav-link" href="/data"><i class="bi bi-folder2-open"></i><strong> Data</strong></a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="#" onclick="konfirmasiLogout()"><i class="bi bi-door-open" style="font-size: 25px;"></i> <strong>Logout</strong></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link rounded" href="/dashboard">
                            <i class="bi bi-speedometer" style="font-size: 25px;"></i> 
                            <strong> Dashboard</strong>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link rounded" href="/data">
                            <i class="bi bi-folder2-open" style="font-size: 25px;"></i> 
                            <strong> Data</strong>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Main Content -->
        <main class="col-md-9 mt-3 ms-sm-auto col-lg-10 px-md-4">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center my-3 flex-wrap">
                    <h1 class="my-2">Data Mutasi Siswa</h1>
                    <input type="text" id="searchInput" class="form-control" placeholder="Cari siswa..." style="width: 300px; ">
                    <a href="{{ route('data.export') }}" class="btn btn-primary mt-2 mt-md-0">Ekspor ke Excel</a>
                </div>
                <div class="card data-card">
                    <div class="container-fluid">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover blur-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Nama Siswa</th>
                                        <th>Tempat Tanggal Lahir</th>
                                        <th>Asal Sekolah</th>
                                        <th>No.Surat Sekolah</th>
                                        <th>Tanggal Surat</th>
                                        <th>Jenis Kelamin</th>
                                        <th>NIS</th>
                                        <th>NISN</th>
                                        <th>Kelas</th>
                                        <th>Kecamatan</th>
                                        <th>Kabupaten</th>
                                        <th>Sekolah Baru</th>
                                        <th>Kec.Sekolah Tujuan</th>
                                        <th>Kab/Kota Sekolah Tujuan</th>
                                        <th>Provinsi Sekolah Tujuan</th>
                                        <th>No.Telp</th>
                                        <th>Email</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($mutasiData) && count($mutasiData) > 0)
                                        @foreach($mutasiData as $index => $data)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ \Carbon\Carbon::parse($data->tanggal)->format('d-m-Y') }}</td>
                                            <td>{{ $data->nama_siswa }}</td>
                                            <td>{{ $data->ttl }}</td>
                                            <td>{{ $data->asal_sekolah }}</td>
                                            <td>{{ $data->no_surat_sekolah }}</td>
                                            <td>{{ \Carbon\Carbon::parse($data->ttl_surat_dari_sekolah)->format('d-m-Y') }}</td>
                                            <td>{{ $data->jenis_kelamin }}</td>
                                            <td>{{ $data->nis }}</td>
                                            <td>{{ $data->nisn }}</td>
                                            <td>{{ $data->kelas }}</td>
                                            <td>{{ $data->kecamatan }}</td>
                                            <td>{{ $data->kabupaten }}</td>
                                            <td>{{ $data->nama_sekolah_baru }}</td>
                                            <td>{{ $data->kec_sekolah_tujuan }}</td>
                                            <td>{{ $data->kab_kota_sekolah_tujuan }}</td>
                                            <td>{{ $data->prov_sekolah_tujuan }}</td>
                                            <td>{{ $data->no_wa }}</td>
                                            <td>{{ $data->email }}</td>
                                            <td>{{ $data->keterangan }}</td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <a href="{{ route('siswa.detail', $data->id) }}" class="btn btn-info btn-sm">
                                                        <i class="bi bi-eye"></i>
                                                    </a>
                                                    <a href="{{ route('siswa.edit', $data->id) }}" class="btn btn-warning btn-sm">
                                                        <i class="bi bi-pencil"></i>
                                                    </a>
                                                    <form action="{{ route('siswa.destroy', $data->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data siswa ini?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="20" class="text-center">Tidak ada data mutasi yang tersedia.</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
    function konfirmasiLogout() {
        if (confirm("Apakah Anda yakin ingin keluar?")) {
            window.location.href = "/login";
        }
    }

    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', function() {
            document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
            this.classList.add('active');
        });
    });

    // Fitur pencarian
    document.getElementById('searchInput').addEventListener('keyup', function() {
        const filter = this.value.toLowerCase();
        const rows = document.querySelectorAll('tbody tr');

        rows.forEach(row => {
            const cells = row.getElementsByTagName('td');
            let found = false;

            for (let i = 0; i < cells.length; i++) {
                if (cells[i].textContent.toLowerCase().includes(filter)) {
                    found = true;
                    break;
                }
            }

            row.style.display = found ? '' : 'none';
        });
    });
</script>
</body>
</html>