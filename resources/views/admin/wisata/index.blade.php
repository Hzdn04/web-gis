@extends('layouts.beckend')

@section('content')
<div class="col-md-12">
    <div class="card card-outline card-primary">
      <div class="card-header">
        <h3 class="card-title">Data {{ $title }}</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
          </button>
        </div>
        <!-- /.card-tools -->
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped text-center">
            <!-- SEARCH FORM -->
            <div class="row">
                <div class="col-md-4 mb-3">
                    <form class="form-inline ml-3">
                        <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                            </button>
                        </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4 mb-3">
                    <a href="/wisata/add" class="btn btn-success">Tambah</a>
                </div>
            </div>
            <thead>
                <tr>
                    <th width="60px">No</th>
                    <th>Nama</th>
                    <th>Lokasi</th>
                    <th>Tipe</th>
                    <th width="270px">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @foreach ($travel as $data)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->location }}</td>
                        <td>{{ $data->id_kategori }}</td>
                        <td>
                            <a href="#" class="btn btn-primary">Detail</a>
                            <a href="/wisata/edit/{{ $data->id_travel }}" class="btn btn-warning">Edit</a>
                            <a href="/wisata/delete/{{ $data->id_travel }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
@endsection


