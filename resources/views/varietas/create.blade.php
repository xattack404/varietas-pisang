@extends('layouts.main')
@section('content')
<section class="section">

  <div class="section-header">
    <h1> Varietas <small>Tambah Data</small></h1>
  </div>

  <div class="section-body">
    <div class="col-12 col-md-6 col-lg-6">
      <div class="card">
        <div class="card-header">
          <a href="{{ route('varietas.index') }}">
            <button type="button" class="btn btn-outline-info">
              <i class="fas fa-arrow-circle-left"></i> Back
            </button>
          </a>
        </div>
        <div class="card-body">
          <form action="{{ route('varietas.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label>Bentuk Daun</label>
              <input type="text" name="bentuk_daun" class="form-control">
            </div>
            <div class="form-group">
              <label>Bentuk Pohon</label>
              <input type="text" name="bentuk_pohon" class="form-control">
            </div>
            <div class="form-group">
              <label>Deskripsi</label>
              <input type="text" name="deskirpsi" class="form-control">
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