<nav class="navbar navbar-expand-lg sticky-top border-bottom" style="background-color: #ffffff">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="nav" href="/">
            <img src="./assets/compiled/jpg/Group 4136 1.png" alt="Logo" width="120" height="65">
        </a>

        <!-- Navbar toggler (hamburger menu for mobile view) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar content -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link fw-bold {{ Request::is('/') ? 'active' : '' }}" aria-current="page"
                        href="/">Pilihan Beasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold {{ Request::is('daftar') ? 'active' : '' }}"
                        href="/daftar">Pendaftaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold {{ Request::is('hasil') ? 'active' : '' }}" href="/hasil">Hasil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold {{ Request::is('chart') ? 'active' : '' }}" href="/chart">Grafik</a>
                </li>
            </ul>
        </div>

    </div>
</nav>
