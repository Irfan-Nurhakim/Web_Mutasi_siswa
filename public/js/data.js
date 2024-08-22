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
document.addEventListener('DOMContentLoaded', function() {
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
});