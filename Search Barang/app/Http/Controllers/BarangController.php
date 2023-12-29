<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::SimplePaginate(5);
        return view('barang', compact('barangs'));
    }

    // Untuk cari barang
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        $barangs = Barang::where('nama', 'LIKE', "%$keyword%")
                        ->orWhere('deskripsi', 'LIKE', "%$keyword%")
                        ->paginate(5);

        return view('barang', compact('barangs'));
    }

    // Untuk detail barang
    public function detail($id)
    {
        $barang = Barang::find($id);
        return view('barang.detail', compact('barang'));
    }
}
