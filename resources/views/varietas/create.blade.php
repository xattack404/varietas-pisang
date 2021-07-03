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
              <label>Nama Pisang</label>
              <input type="text" name="nama_pisang" class="form-control">
            </div>
            <div class="form-group">
              <label>Bentuk</label>
              <input type="text" name="bentuk" class="form-control">
            </div>
            <div class="form-group">
              <label>Panjang</label>
              <input type="number" name="panjang" class="form-control">
            </div>
            <div class="form-group">
              <label>Diameter</label>
              <input type="number" name="diameter" class="form-control">
            </div>
            <div class="form-group">
              <label>Bentuk Buah</label>
              <input type="text" name="bentuk_buah" class="form-control">
            </div>
            <div class="form-group">
              <label>Bentuk Daun</label>
              <input type="text" name="bentuk_daun" class="form-control">
            </div>
            <div class="form-group">
              <label>Bentuk Pohon</label>
              <input type="text" name="bentuk_pohon" class="form-control">
            </div>
    

            <div class="form-group">
                 <label>Gambar </label> <br>
               <input type="file" name="gambar" id="gambar" onchange="tampilkanPreview(this,'preview')" required />
              </div>

             <div class="form-group">
                 <b>Preview Gambar</><br>
                 <img id="preview" src="" alt="" width="35%" />
             </div>



            <div class="form-group">
              <label>Id Varietas</label>
              <input type="text" name="id_varietas" class="form-control">
            </div>


            <div class="form-group">
              <button type="submit" class="btn btn-primary">SAVE</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script>
        function tampilkanPreview(foto, idpreview) { //membuat objek gambar
            var gb = foto.files;
            //loop untuk merender gambar
            for (var i = 0; i < gb.length; i++) { //bikin variabel
                var gbPreview = gb[i];
                var imageType = /image.*/;
                var preview = document.getElementById(idpreview);
                var reader = new FileReader();
                if (gbPreview.type.match(imageType)) { //jika tipe data sesuai
                    preview.file = gbPreview;
                    reader.onload = (function(element) {
                        return function(e) {
                            element.src = e.target.result;
                        };
                    })(preview);
                    //membaca data URL gambar
                    reader.readAsDataURL(gbPreview);
                } else { //jika tipe data tidak sesuai
                    alert("Tipe file tidak sesuai. Gambar harus bertipe .png, .gif atau .jpg.");
                }
            }
        }
    </script>

</section>
@endsection()