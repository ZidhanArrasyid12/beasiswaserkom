<div class="container mt-5">
    <h1 class="text-center mb-4">Beasiswa yang Ditawarkan</h1>
    <div class="row d-flex justify-content-center">
        <!-- Card 1 -->
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="{{ asset('./assets/compiled/jpg/akademik.png') }}" class="card-img-top" alt="Beasiswa Akademik">
                <div class="card-body">
                    <h5 class="card-title">Beasiswa Akademik</h5>
                    <p class="card-text">Beasiswa akademik adalah bantuan finansial yang diberikan kepada mahasiswa
                        berdasarkan prestasi dan kinerja akademiknya.</p>
                    <!-- Trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#modalAkademik">
                        Lihat Selengkapnya
                    </button>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="{{ asset('./assets/compiled/jpg/non.png') }}" class="card-img-top"
                    alt="Beasiswa Non Akademik">
                <div class="card-body">
                    <h5 class="card-title">Beasiswa Non Akademik</h5>
                    <p class="card-text">Beasiswa non akademik adalah beasiswa yang mengutamakan prestasi di luar
                        kemampuan akademik, dan juga potensi-potensi di luar kelas.</p>
                    <!-- Trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#modalNonAkademik">
                        Lihat Selengkapnya
                    </button>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="{{ asset('./assets/compiled/jpg/kominfo.png') }}" class="card-img-top" alt="Beasiswa Kominfo">
                <div class="card-body">
                    <h5 class="card-title">Beasiswa Kominfo</h5>
                    <p class="card-text">Beasiswa Kominfo adalah program beasiswa yang diselenggarakan oleh Kementerian
                        Komunikasi dan Informatika.</p>
                    <!-- Trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#modalKominfo">
                        Lihat Selengkapnya
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
