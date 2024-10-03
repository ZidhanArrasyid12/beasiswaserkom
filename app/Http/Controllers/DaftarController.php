<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function daftar()
    {
        return view('pages.daftar');
    }

    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'telepon' => 'required|string|max:15',
            'semester' => 'required|integer|min:1|max:8',
            'ipk' => 'required|numeric|between:0,4',
            'beasiswa' => 'nullable|string|max:50',
            'upload' => 'required|file|mimes:pdf,jpg,png|max:2048', // Validasi file
        ]);

        if ($request->hasFile('upload')) {
            $file = $request->file('upload');
            $filename = time() . '_' . $file->getClientOriginalName(); // Menggunakan timestamp agar nama file unik
            $file->storeAs('uploads', $filename, 'public'); // Simpan di folder public/uploads
            $validatedData['file_upload'] = $filename; // Menambahkan nama file ke validatedData
        }

        // Simpan data ke tabel beasiswa
        $beasiswa = new Beasiswa();
        $beasiswa->nama = $validatedData['nama'];
        $beasiswa->email = $validatedData['email'];
        $beasiswa->telepon = $validatedData['telepon'];
        $beasiswa->semester = $validatedData['semester'];
        $beasiswa->ipk = $validatedData['ipk'];
        $beasiswa->beasiswa = $validatedData['beasiswa'] ?? null; // Jika beasiswa tidak dipilih
        $beasiswa->file_upload = $validatedData['file_upload']; // Menyimpan nama file
        $beasiswa->status_ajuan = 'Belum Diverifikasi'; // Set status default

        // Simpan data ke database
        $beasiswa->save();
        // Redirect atau return response
        return redirect('/hasil')->with('success', 'Data berhasil disimpan!');
    }
}


