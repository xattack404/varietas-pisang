@extends('layouts.main')
@section('content')
<section class="section">

  <div class="section-header">
    <h1> Cek Pisang <small> Cek Data Pisang </small></h1>
  </div>

  <div class="section-body">
    <div class="col-12 col-md-6 col-lg-6">
      <div class="card">
        <div class="card-header">
          <a href="{{ route('cekpisang.index') }}">
            <button type="button" class="btn btn-outline-info">
              <i class="fas fa-arrow-circle-left"></i> Back
            </button>
          </a>
        </div>
        <div class="card-body">
          <form action="{{ route('cekpisang.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label>Masok Agi Tabel Tak faham gik 1 From inputan kan yeh bang?</label>
              <input type="text" name="nama_pisang" class="form-control">
            </div>
            <div class="form-group">
              <label>Deskripsi</label>
              <input type="text" name="deskripsi" class="form-control">
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