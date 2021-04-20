<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Travel;
use Illuminate\Auth\Events\Validated;

class WisataController extends Controller
{
    public $long, $lat;

    public function __construct(){
        $this->TravelModel = new Travel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'title' => 'Wisata',
            'travel' => $this->TravelModel->AllData(),
        ];
        return view('admin.wisata.index', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Tambah'
        ];
        return view('admin.wisata.add', $data);
    }

    public function store(Request $request)
    {
      Request()->validate([
        'id_kategori' => 'required',
        'long' => 'required',
        'lat' => 'required',
        'title' => 'required',
        'description' => 'required',
        'location' => 'required',
        'image' => 'required'
      ],
    [
        'id_kategori.required' => 'Wajib Disi !!!',
        'long.required' => 'Wajib Disi !!!',
        'lat.required' => 'Wajib Disi !!!',
        'title.required' => 'Wajib Disi !!!',
        'description.required' => 'Wajib Disi !!!',
        'location.required' => 'Wajib Disi !!!',
        'image.required' => 'Wajib Disi !!!',
    ]);

    $data = [
        'id_kategori' => Request()->id_kategori,
        'long' => Request()->long,
        'lat' => Request()->lat,
        'title' => Request()->title,
        'description' => Request()->description,
        'location' => Request()->location,
        'image' => Request()->image,
    ];

    $this->TravelModel->InsertData($data);
    return redirect()->route('wisata')->with('pesan','Data Berhasil Dinputkan');
    }

    public function edit($id_travel)
    {
        $data = [
            'title' => 'Edit',
            'wisata' => $this->TravelModel->DetailData($id_travel),
        ];
        return view('admin.wisata.edit', $data);
    }




    public function delete($id_travel)
    {
        $data = [
            'title' => 'Edit',
            'wisata' => $this->TravelModel->DetailData($id_travel),
        ];
        $this->TravelModel->DeleteData($data);
        return redirect()->route('wisata')->with('pesan','Data Berhasil DiDelete');
    }

}
