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
                    <form action="{{ route('cekpisang.proses') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Bentuk Buah</label>
                            <select required name="bentuk_buah" class="form-control" data-live-search="true">
                                <option value="">--Pilih -- </option>
                                @foreach($data as $tampil)
                                <option value="{{ $tampil->bentuk_buah }}">{{ $tampil->bentuk_buah }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Bentuk Daun</label>
                            <select required name="bentuk_daun" class="form-control" data-live-search="true">
                                <option value="">--Pilih -- </option>
                                @foreach($data as $tampil)
                                <option value="{{ $tampil->bentuk_daun }}">{{ $tampil->bentuk_daun }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Warna Pisang</label>
                            <select required name="warna" class="form-control" data-live-search="true">
                                <option value="">--Pilih -- </option>
                                @foreach($data as $tampil)
                                <option value="{{ $tampil->warna }}">{{ $tampil->warna }} </option>
                                @endforeach
                            </select>
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