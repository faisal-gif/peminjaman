@extends('layouts.template-admin')
@section('title', 'Edit Fasilitas')
@section('content')
<!-- Navbar -->

<!-- End Navbar -->
<div class="container-fluid py-4">
  <div class="card">
    <div class="row">
      <div class="col-12">
        <div class="card-header pb-0 text-center">
          <h4>Edit Fasilitas</h4>
        </div><br>
        <div class="card-body">
          <form role="form" action="{{ route('fasilitas.update',$fasilita) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label>Nama*</label>
            <div class="mb-3">
              <input type="text" class="form-control" name="nama" value="{{ $fasilita->nama }}" placeholder="Nama Fasilitas" aria-label="Nama" aria-describedby="email-addon">
            </div>
            <label>Detail*</label>
            <div class="mb-3">
              <textarea rows="5" cols="80" type="text" name="detail" class="form-control" placeholder="Detail Fasilitas" aria-label="Nama" aria-describedby="email-addon">{{ $fasilita->detail }}</textarea>
            </div>
            <label>Choose a picture*</label>
            <div class="mb-3">
              <input type="file" name="img" accept="image/png, image/jpeg">
            </div>
            <label>Stok*</label>
            <div class="mb-3">
              <input type="number" class="form-control" placeholder="Stok" name="stok" value="{{ $fasilita->stok }}">
            </div>
            <div class="text-center">
              <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <br><br>
  <footer class="footer pt-3  ">
    <div class="container-fluid">
      <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-6 mb-lg-0 mb-4">
          <div class="copyright text-center text-sm text-muted text-lg-start">
            © <script>
              document.write(new Date().getFullYear())
            </script>,
            made with <i class="fa fa-heart"></i> by
            <a>Peminjaman Fasilitas</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>
@endsection