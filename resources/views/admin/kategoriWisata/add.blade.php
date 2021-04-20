@extends('layouts.beckend')

@section('content')
<div class="col-md-12">
    <div class="card card-outline card-primary">
      <div class="card-header">
        <h3 class="card-title">{{ $title }} Data</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
          </button>
        </div>
        <!-- /.card-tools -->
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <form action="{{route('manajemen-travel.store')}}" enctype="multipart/form-data" method="POST">
            @csrf
                <div class="form-group">
                    <input type="hidden" class="form-control" placeholder="Masukan uuid" required name="id">
                </div>
                <div class="form-group">
                    <label>Kategori:</label>
                    <select name="id_kategori" class="form-control">
                        <option selected disabled>-- pilih kategori --</option>
                        <option>1</option>
                        <option>2</option>
                        {{-- @foreach ($dataKategori as $kategori)
                            <option value="{{$kategori->id}}">{{$kategori->nama_kategori}}</option>
                        @endforeach --}}
                    </select>
                </div>
                <div class="form-group">
                    <label>Longtitude </label>
                    <input type="text" class="form-control" placeholder="Masukan Longtitude" required name="long">
                </div>

                <div class="form-group">
                    <label>Lattitude</label>
                    <input type="text" class="form-control" placeholder="Masukan Lattitude" required
                        name="lat">
                </div>

                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" placeholder="Masukan Nama Wisata" required name="title">
                </div>

                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label>Lokasi</label>
                    <textarea name="location" id="" cols="30" rows="10" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label>Gambar:</label>
                    <input type="file" class="form-control" placeholder="Masukan gambar" required name="image">
                </div>
            </div>
            <div class="form-group">
                <a href="{{ route('manajemen-travel.store') }}" class="btn btn-primary">Tambah</a>
            </div>
        </form>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
@endsection
