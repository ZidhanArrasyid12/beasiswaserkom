<!-- Menggunakan template utama 'layout.app' yang berisi struktur halaman dasar seperti header, footer, dll. -->
@extends('layout.app')
<!-- Memulai section konten yang akan diisi di dalam template layout -->
@section('content')
    <section class="hero"
        style="position: relative; height: 87vh; background: url('{{ asset('./assets/compiled/jpg/hero.jpg') }}') no-repeat center center; background-size: cover;">
        <div class="container h-100 d-flex justify-content-center align-items-center">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bold">Selamat Datang di Portal Beasiswa <br> Ryzen University</h1>
                <p class="lead text-dark fw-bold">Dapatkan berbagai informasi beasiswa dan dukungan pendidikan di sini.</p>
                <a href="daftar" class="btn btn-primary btn-lg">Daftar Beasiswa</a>
            </div>
        </div>
    </section>
    <!-- Meng-include komponen modal dari folder layout.components -->
    @include('layout.components.modal')
    <!-- Meng-include komponen card dari folder layout.components -->
    @include('layout.components.card')
    <!-- Akhir dari section konten yang akan di-render dalam template layout -->
@endsection
