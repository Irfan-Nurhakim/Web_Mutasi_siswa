document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', function() {
        document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
        this.classList.add('active');
    });
});

function konfirmasiLogout() {
    if (confirm("Apakah Anda yakin ingin keluar?")) {
        document.getElementById('logout-form').submit();
    }
}

        // Data untuk grafik (ganti dengan data sebenarnya dari backend)
        const mutasiData = {
            labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober',
                'November', 'Desember'
            ],
            datasets: [{
                label: 'Total Mutasi',
                data: [19, 30, 8, 13, 5, 10, 15, 20, 25, 30, 35, 40],
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }, {
                label: 'Mutasi Masuk',
                data: [12, 19, 3, 5, 2, 3, 7, 9, 11, 13, 15, 17],
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }]
        };
        // Konfigurasi grafik
        const config = {
            type: 'bar',
            data: mutasiData,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Grafik Mutasi Siswa'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        };
