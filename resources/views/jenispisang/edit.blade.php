@extends('layouts.main')
@section('content')
<section class="section">

  <div class="section-header">
    <h1>Jenis Pisang <small>Tambah Data</small></h1>
  </div>

  <div class="section-body">
    <div class="col-12 col-md-6 col-lg-6">
      <div class="card">
        <div class="card-header">
          <a href="{{ route('jenispisang.index') }}">
            <button type="button" class="btn btn-outline-info">
              <i class="fas fa-arrow-circle-left"></i> Back
            </button>
          </a>
        </div>
        <div class="card-body">
          <form action="{{ route('jenispisang.update', ['id' => $data->id]) }}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            @csrf
            <div class="form-group">
              <label>Nama Pisang</label>
              <input type="text" name="nama_pisang" class="form-control" value="{{ $data->nama_pisang }}">
            </div>
            <div class="form-group">
              <label>Bentuk</label>
              <input type="text" name="bentuk" class="form-control" value="{{ $data->bentuk }}">
            </div>
            <div class="form-group">
              <label>Panjang</label>
              <input type="text" name="panjang" class="form-control" value="{{ $data->panjang }}">
            </div>
            <div class="form-group">
              <label>Diameter</label>
              <input type="text" name="diameter" class="form-control" value="{{ $data->diameter }}">
            </div>
            <div class="form-group">
              <label>Bentuk Luar</label>
              <input type="text" name="bentuk_luar" class="form-control" value="{{ $data->bentuk_luar }}">
            </div>
            <div class="form-group">
              <label>Gambar</label>
              <input type="text" name="gambar" class="form-control" value="{{ $data->gambar }}">
            </div>
            <div class="form-group">
              <label>Id Variates</label>
              <input type="text" name="id_variates" class="form-control" value="{{ $data->id_variates }}">
            </div>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">SAVE</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  </div>
</section>
@endsection()