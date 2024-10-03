<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use Illuminate\Http\Request;

class HasilController extends Controller
{
    public function hasil()
    {
        // Mengambil data pendaftaran beasiswa dari database
        $beasiswa = Beasiswa::all(); // Ganti nama variabel agar lebih konsisten

        // Mengirim variabel ke view
        return view('pages.hasil', compact('beasiswa')); // Pastikan nama view sesuai dengan yang ada
    }
}
