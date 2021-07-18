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
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="card-body" style="overflow: scroll">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Nama Pisang</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Bentuk Buah</th>
                    <th scope="col">Panjang Buah</th>
                    <th scope="col">Diameter Buah</th>
                    <th scope="col">Bentuk Daun</th>
                    <th scope="col">Bentu Pohon</th>
                    <th scope="col">Deskripsi Singkat</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse($data as $hasil)
                  <tr>
                    <td>{{ $hasil->warna}}</td>
                    <td> Hasil</td>
                    <td> Hasil</td>
                    <td> Hasil</td>
                    <td> Hasil</td>
                    <td> Hasil</td>
                    <td> Hasil</td>
                    <td> Hasil</td>
                  </tr>
                  @empty
                  <tr>
                    <td colspan="3">
                      <center>Data kosong</center>
                    </td>
                  </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
            <div class="card-footer text-right">
              <nav class="d-inline-block">
              </nav>
            </div>
        </div>
      </div>
    </div>

</section>
@endsection()