<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TravelKategori;

class KategoriWisataController extends Controller
{
    public function __construct(){
        $this->KategoriTravelModel = new TravelKategori();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'title' => 'Kategori Wisata',
            'travelKategori' => $this->KategoriTravelModel->AllData(),
        ];
        return view('admin.kategoriWisata.index', $data);
    }

    public function store(Request $request)
    {
        $kategori = $request->all();
        TravelKategori::create($kategori);
        return back()->with(['success' => 'Data berhasil ditambahkan!']);
    }

    public function update(Request $request, $id_kategori)
    {
        $kategori = TravelKategori::findOrFail($id_kategori);
        $kategori->update($request->all());
        return back()->with(['success' => 'Data berhasil diubah!']);
    }

    public function destroy($id_kategori)
    {
        $kategori = TravelKategori::findOrFail($id_kategori);
        $kategori->delete();
        return back()->with(['success' => 'Data berhasil dihapus!']);
    }
}
