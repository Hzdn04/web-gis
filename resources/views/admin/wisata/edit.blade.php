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
          @if (session('pesan'))
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i> {{ session('pesan') }}</h5>
          </div>
          @endif
            <form role="form" action="/wisata/edit" method="POST">
                @csrf
                <!-- input states -->
              <div class="form-group" action="/wisata/update">
                <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Input Wisata</label>
                <input name="title" type="text" value="{{ $wisata->title }}" class="form-control is-valid" id="inputSuccess" placeholder="Enter ...">
                <div class="text-danger mt-1">
                    @error('title')
                        {{ $message }}
                    @enderror
                </div>
            </div>
              <div class="row">
                <div class="col-sm-6">
                  <!-- textarea -->
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="description" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                    <div class="text-danger mt-1">
                        @error('description')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Lokasi</label>
                    <textarea name="location" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                    <div class="text-danger mt-1">
                        @error('location')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6 mt-2">
                  <div class="form-group">
                    <label>Kategori Wisata </label>
                    <select class="form-control" name="id_kategori">
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                    <div class="text-danger mt-1">
                        @error('id_kategori')
                            {{ $message }}
                        @enderror
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mt-2">
                    <div class="form-group">
                        <label>Image</label>
                        <div class="custom-file">
                          <input name="image" type="file" class="custom-file-input" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="text-danger mt-1">
                            @error('image')
                                {{ $message }}
                            @enderror
                        </div>
                      </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Longtitude</label>
                    <input name="long" type="text" class="form-control" placeholder="Enter ...">
                    <div class="text-danger mt-1">
                        @error('long')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Lattitude </label>
                    <input name="lat" type="text" class="form-control" placeholder="Enter ...">
                    <div class="text-danger mt-1">
                        @error('lat')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                </div>
              </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-info">Tambah</button>
        <button type="submit" class="btn btn-default float-right">Cancel</button>
    </div>
</form>
    </div>
    <!-- /.card -->
  </div>
@endsection
