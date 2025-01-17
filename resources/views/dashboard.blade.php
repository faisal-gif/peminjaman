@extends('layouts.template-admin')
@section('content')
<!-- Navbar -->

<!-- End Navbar -->
<div class="container-fluid py-4">
  <div class="row">
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Fasilitas</p>
                <h5 class="font-weight-bolder mb-0">
                  {{$data['fasilitasCount']}}
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Peminjam</p>
                <h5 class="font-weight-bolder mb-0">
                  {{$data['peminjamanCount']}}
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Rekap Peminjaman</p>
                <h5 class="font-weight-bolder mb-0">
                  {{$data['historyCount']}}
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-4">
    @foreach($data['fasilitas'] as $f)
    <div class="col-lg-6 mb-lg-0 mb-4 pt-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">

            <div class="col-lg-6">
              <div class="d-flex flex-column h-100">
                <h5 class="font-weight-bolder">{{$f->nama}}</h5>
                <p class="mb-5">{{$f->detail}}</p>
                <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="{{route('fasilitas.show',$f)}}">
                <div class="mb-1">
                Terisi : {{$f->stok}} / {{$f->sisa}}
                </div>  
                Jam Oprasional : {{\Carbon\Carbon::createFromFormat('H:i:s',$f->jamMulai)->format('H:i')}} - {{\Carbon\Carbon::createFromFormat('H:i:s',$f->jamSelesai)->format('H:i')}}
                  <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                </a>
              </div>
            </div>
            <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
              <div class="border-radius-lg h-100">
                <div class="position-relative d-flex align-items-center justify-content-center h-100">
                  <img class="w-100 position-relative z-index-2 pt-4" src="{{ asset('fasilitasImg/'.$f->img) }}" alt="rocket">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
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