@extends('layout.app')

@section('content')
    <div class="container mt-5 d-flex justify-content-center">
        <div class="justify conten-center">
            <h2>Grafik Pendaftaran Beasiswa</h2>
            <!-- Elemen canvas tempat Chart.js akan menampilkan grafik -->
            <canvas id="beasiswaChart" width="800" height="600"></canvas>
        </div>
    </div>

    <script>
        const ctx = document.getElementById('beasiswaChart').getContext('2d');
        const beasiswaChart = new Chart(ctx, {
            type: 'line', // Bisa dirubah menjadi 'line', 'pie', edan lainnya.
            data: {
                labels: @json($labels), // Data label dikirim dari controller
                datasets: [{
                    label: 'Jumlah Pendaftar',
                    data: @json($data), // Data jumlah pendaftar dan grafik yang diambil dari controller
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                // Mengatur skala sumbu Y agar selalu dimulai dari nol
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
