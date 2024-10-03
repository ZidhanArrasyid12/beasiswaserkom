@extends('layout.app')

@section('content')
    <div class="container mt-5 ">
        <div class="col-lg-12    p-3">
            <!-- Form pendaftaran di sini -->

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Tampilkan data beasiswa -->
            <h3 class="mt-4">Data Pendaftar Beasiswa</h3>
            <table class="table mt-3 table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Telepon</th>
                        <th>Semester</th>
                        <th>IPK</th>
                        <th>Beasiswa</th>
                        <th>File Upload</th>
                        <th>Status Ajuan</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Looping melalui setiap item dalam koleksi $beasiswa -->
                    @foreach ($beasiswa as $beasiswa)
                        <tr>
                            <td>{{ $beasiswa->id }}</td>
                            <td>{{ $beasiswa->nama }}</td>
                            <td>{{ $beasiswa->email }}</td>
                            <td>{{ $beasiswa->telepon }}</td>
                            <td>{{ $beasiswa->semester }}</td>
                            <td>{{ $beasiswa->ipk }}</td>
                            <td>{{ $beasiswa->beasiswa }}</td>
                            <td>
                                <!-- Mengecek apakah file upload tersedia dan ada di disk penyimpanan 'public' -->
                                @if ($beasiswa->file_upload && Storage::disk('public')->exists('uploads/' . $beasiswa->file_upload))
                                    <a href="{{ Storage::url('uploads/' . $beasiswa->file_upload) }}"
                                        class="text-blue-500 hover:underline" target="_blank">Lihat Berkas</a>
                                @else
                                    <span class="text-red-500">Berkas tidak ditemukan</span>
                                @endif
                            </td>
                            <!-- Menampilkan status pengajuan beasiswa (misal: disetujui, ditolak, atau dalam proses) -->
                            <td>{{ $beasiswa->status_ajuan }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
