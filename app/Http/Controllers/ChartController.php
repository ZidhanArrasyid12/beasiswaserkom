<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function chart()
    {
        // Menghitung orang yang melakukan pendaftaran beasiswa
        $beasiswaCounts = Beasiswa::select('beasiswa', DB::raw('count(*) as count'))
            ->groupBy('beasiswa')
            ->get();

        // Persiapan data untuk grafik
        $labels = $beasiswaCounts->pluck('beasiswa')->toArray();
        $data = $beasiswaCounts->pluck('count')->toArray();

        return view('pages.chart', compact('labels', 'data'));
    }
}
