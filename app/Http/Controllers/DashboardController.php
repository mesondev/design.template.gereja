<?php

namespace App\Http\Controllers;

use App\Models\Jemaat;
use App\Models\Keluarga;
use App\Models\Baptis;
use App\Models\Pernikahan;

class DashboardController extends Controller
{
    public function stats()
    {
        return response()->json([
            'total_jemaat' => Jemaat::count(),
            'total_keluarga' => Keluarga::count(),
            'total_baptis' => Baptis::count(),
            'total_pernikahan' => Pernikahan::count(),

            // Statistik gender untuk chart
            'pria' => Jemaat::where('jenis_kelamin','Pria')->count(),
            'wanita' => Jemaat::where('jenis_kelamin','Wanita')->count(),
        ]);
    }
}