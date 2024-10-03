@extends('layout.app')
@section('content')
    <div class="container mt-5 d-flex justify-content-center">
        <div class="col-6 border p-5" style="background-color: white">
            <h2>Form Pendaftaran Beasiswa</h2>

            <!-- Form pendaftaran beasiswa, action form mengarah ke route '/daftar' dengan metode POST -->
            <form id="formPendaftaran" action="/daftar" method="POST" enctype="multipart/form-data">
                <!-- Token CSRF untuk keamanan form Laravel -->
                @csrf

                <!-- Input nama lengkap -->
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama"
                        placeholder="Masukkan nama lengkap" required>
                </div>

                <!-- Input email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email"
                        required>
                    <!-- Pesan error untuk format email yang salah (menggunakan fitur HTML5 `invalid-feedback`) -->
                    <div class="invalid-feedback">Masukkan format email yang benar.</div>
                </div>

                <!-- Input nomor telepon -->
                <div class="mb-3">
                    <label for="telepon" class="form-label">Nomor HP</label>
                    <input type="number" class="form-control" id="telepon" name="telepon" placeholder="Masukkan nomor HP"
                        required>
                </div>

                <!-- Select dropdown untuk memilih semester -->
                <div class="mb-3">
                    <label for="semester" class="form-label">Semester Saat Ini</label>
                    <select class="form-select" id="semester" name="semester" required>
                        <!-- Pilihan default, pengguna harus memilih semester -->
                        <option value="" disabled selected>Pilih Semester</option>
                        <!-- Pilihan semester dari 1 hingga 8 -->
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                </div>

                <!-- Input IPK yang diset menjadi readonly (tidak bisa diisi oleh pengguna secara manual) -->
                <div class="mb-3">
                    <label for="ipk" class="form-label">IPK</label>
                    <input type="text" class="form-control" id="ipk" name="ipk" readonly>
                </div>

                <!-- Select dropdown untuk memilih jenis beasiswa -->
                <div class="mb-3">
                    <label for="beasiswa" class="form-label">Pilih Beasiswa</label>
                    <select class="form-select" id="beasiswa" name="beasiswa" disabled>
                        <!-- Pilihan default, pengguna harus memilih beasiswa -->
                        <option value="" disabled selected>Pilih Beasiswa</option>
                        <!-- Pilihan jenis beasiswa -->
                        <option value="Beasiswa Akademik">Beasiswa Akademik</option>
                        <option value="Beasiswa Non Akademik">Beasiswa Non Akademik</option>
                        <option value="Beasiswa Kominfo">Beasiswa Kominfo</option>
                    </select>
                </div>

                <!-- Input untuk mengupload berkas, sementara dinonaktifkan (disabled) -->
                <div class="mb-3">
                    <label for="upload" class="form-label">Upload Berkas</label>
                    <input type="file" class="form-control" id="upload" name="upload" disabled>
                </div>

                <!-- Tombol submit untuk mengirimkan form, sementara dinonaktifkan (disabled) -->
                <button type="submit" class="btn btn-primary" id="submitBtn" disabled>Daftar</button>
            </form>

            <script>
                // Ambil elemen yang diperlukan dari form
                const semesterField = document.getElementById('semester');
                const ipkField = document.getElementById('ipk');
                const beasiswaField = document.getElementById('beasiswa');
                const uploadField = document.getElementById('upload');
                const submitBtn = document.getElementById('submitBtn');

                // Asumsi IPK berdasarkan semester
                const ipkPerSemester = {
                    1: 2.9,
                    2: 3.1,
                    3: 2.8,
                    4: 3.5,
                    5: 3.2,
                    6: 3.6,
                    7: 3.0,
                    8: 3.4
                };

                // Fungsi untuk memperbarui IPK berdasarkan semester
                function updateIPK() {
                    const semester = parseInt(semesterField.value);

                    // Cek apakah semester valid dan ada dalam data
                    if (!isNaN(semester) && ipkPerSemester[semester]) {
                        const ipk = ipkPerSemester[semester];
                        ipkField.value = ipk;

                        // Mengatur aktivasi/disaktivasi pilihan beasiswa dan upload berdasarkan IPK
                        if (ipk >= 3) {
                            beasiswaField.disabled = false;
                            uploadField.disabled = false;
                            submitBtn.disabled = false;
                            beasiswaField.focus();
                        } else {
                            beasiswaField.disabled = true;
                            uploadField.disabled = true;
                            submitBtn.disabled = true;
                        }
                    } else {
                        // Jika semester tidak valid, reset IPK dan disable elemen terkait
                        ipkField.value = "";
                        beasiswaField.disabled = true;
                        uploadField.disabled = true;
                        submitBtn.disabled = true;
                    }
                }

                // Event listener untuk perubahan semester
                semesterField.addEventListener('change', updateIPK);

                // Panggil updateIPK saat halaman pertama kali dimuat (jika ada nilai default untuk semester)
                updateIPK();
            </script>
        </div>
    </div>
@endsection
