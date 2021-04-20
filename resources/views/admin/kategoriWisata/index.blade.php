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
                    <button class="btn btn-success ml-2" data-toggle="modal"
                    data-target="#exampleModal">Tambah</button>
                </div>
            </div>
            <thead>
                <tr>
                    <th width="60px">No</th>
                    <th>Kategori</th>
                    <th width="270px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($travelKategori as $index => $data)
                    <tr>
                        <td>{{++$index}}</td>
                        <td>{{ $data->nama_kategori }}</td>
                        <td>
                            <a href="#" class="btn btn-warning" data-toggle="modal"
                             data-target="#edit{{$data->id_kategori}}">Edit</a>
                            <a href="#" class="btn btn-danger" data-toggle="modal"
                             data-target="#delete{{$data->id_kategori}}">Hapus</a>
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

  {{-- Modal Insert --}}
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('manajemen-kategoritravel.store')}}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" class="form-control" required name="id">
                        </div>
                        <div class="form-group">
                            <label>Nama Kategori:</label>
                            <input type="text" class="form-control" placeholder="Masukan Kategori" required
                                name="nama_kategori">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<!-- Modal Edit -->
<div class="modal fade" id="edit{{$data->id_kategori}}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('manajemen-kategoritravel.update', $data->id_kategori)}}" method="POST">
                @csrf
                @method('put')
                <div class="modal-body">
                    <div class="form-group">
                        <label>UUID:</label>
                        <input type="text" class="form-control" placeholder="Masukan uuid" required
                            value="{{$data->id_kategori}}" name="id_kategori">
                    </div>
                    <div class="form-group">
                        <label>Nama:</label>
                        <input type="text" class="form-control" placeholder="Masukan Nama" required
                            value="{{$data->nama_kategori}}" name="nama_kategori">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

    <!-- Modal Delete -->
    <div class="modal fade" id="delete{{$data->id_kategori}}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('manajemen-kategoritravel.destroy', $data->id_kategori)}}" method="POST">
                    @csrf
                    @method('delete')
                    <div class="modal-body">
                        <h6>Apakah anda yakin ingin menghapus data ini?</h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
