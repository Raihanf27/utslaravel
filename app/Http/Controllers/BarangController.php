<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{

    public function create()
    {
        // Tampilkan form untuk input data barang
        return view('barang.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'jenis_varian' => 'required',
            'qty' => 'required',
            'harga_jual' => 'required',
        ]);
    
        $barang = Barang::create($validatedData);
    
        $totalHarga = $barang->harga_jual * $barang->qty;
    
        $diskon = 0;
        if ($totalHarga >= 500000) {
            $diskon = 0.5;
        } elseif ($totalHarga >= 200000) {
            $diskon = 0.2;
        } elseif ($totalHarga >= 100000) {
            $diskon = 0.1;
        }
    
        $hargaSetelahDiskon = $totalHarga - ($totalHarga * $diskon);
    
        return view('barang.detail', [
            'barang' => $barang,
            'totalHarga' => $totalHarga,
            'diskon' => $diskon * 100,
            'hargaSetelahDiskon' => $hargaSetelahDiskon,
        ]);
    }
}    