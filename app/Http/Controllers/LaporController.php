<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaporKejadian;

class LaporController extends Controller
{
    public function index()
    {
        $getAllLaporan = LaporKejadian::all();

        return view('admin/laporan', [
            'dataLaporan' => $getAllLaporan
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pelapor' => ['required', 'string', 'max:255'],
            'pesan' => ['required'],
            'link_maps' => ['required'],
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $imagePath = $request->file('image')->store('images/laporkejadian', 'public');

        $laporkejadian = LaporKejadian::create([
            'nama_pelapor' => $request->nama_pelapor,
            'pesan' => $request->pesan,
            'link_maps' => $request->link_maps,
            'image' => $imagePath
        ]);

        if ($laporkejadian) {
            return redirect('/')->with('success', 'Laporan berhasil dikirim!');
        } else {
            return redirect('/')->with('error', 'Laporan gagal dikirim!');
        }
    }
}
