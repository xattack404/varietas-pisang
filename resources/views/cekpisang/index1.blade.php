@extends('layouts.main')
@section('content')
<section class="section">

  <div class="section-header">
    <h1> Cek Jenis Pisang</h1>
  </div>

  <div class="section-body">
    <div class="col-12 col-md-12 col-lg-12">
      <div class="card">
        <div class="card-header">
          <form action="{{ route('cekpisang.proses') }}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            @csrf
            <div class="card-body" style="overflow: scroll">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Bentuk Buah</th>
                    <th scope="col">Bentuk Daun</th>
                    <th scope="col">Warna Buah</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td> <select required name="bentuk_buah" class="form-control" data-live-search="true">
                        <option value="">--Pilih -- </option>
                        @foreach($data as $tampil)
                        <option value="{{ $tampil->bentuk_buah }}">{{ $tampil->bentuk_buah }} </option>
                        @endforeach
                      </select></td>
                    <td> <select required name="bentuk_daun" class="form-control" data-live-search="true">
                        <option value="">--Pilih -- </option>
                        @foreach($data as $tampil)
                        <option value="{{ $tampil->bentuk_daun }}">{{ $tampil->bentuk_daun }} </option>
                        @endforeach
                      </select></td>
                    <td> <select required name="warna" class="form-control" data-live-search="true">
                        <option value="">--Pilih -- </option>
                        @foreach($data as $tampil)
                        <option value="{{ $tampil->warna }}">{{ $tampil->warna }} </option>
                        @endforeach
                      </select></td>
                    <td>
                      <button type="button" class="btn btn-sm btn-danger">Proses</button>
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
          </form>
        </div>
        <div class="card-footer text-right">
          <nav class="d-inline-block">
            {!! $data->appends(request()->except('page'))->render() !!}
          </nav>
        </div>
      </div>
    </div>
  </div>

</section>
@endsection()