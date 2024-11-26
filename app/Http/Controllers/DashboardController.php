<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaporKejadian;

class DashboardController extends Controller
{
    public function index()
    {
        $getAllLaporan = LaporKejadian::all();

        return view('dashboard', [
            'dataLaporan' => $getAllLaporan
        ]);
    }
}
