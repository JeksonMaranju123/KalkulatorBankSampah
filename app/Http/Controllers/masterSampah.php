<?php

namespace App\Http\Controllers;

use App\Models\mastersampahs;
use Illuminate\Http\Request;

class masterSampah extends Controller
{
    public function store(Request $request)  {
        $js_sampah = new mastersampahs();
        $js_sampah-> nama = $request->nama;
        $js_sampah-> jenis_sampah = $request->jenis_sampah;
        $js_sampah-> deskripsi = $request->deskripsi;
        $js_sampah-> harga = $request->harga;
        $js_sampah->save();

        if ($js_sampah) {
            return redirect()->back()->with('success', 'berhasil menambahkan data');
        }
    }
}
