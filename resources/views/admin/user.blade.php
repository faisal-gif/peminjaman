@extends('layouts.template-admin')
@section('title', 'User')
@section('content')
<!-- Navbar -->

<!-- End Navbar -->
<div class="container-fluid py-4">
  <div class="card mb-4">
    <div class="card-header pb-0 text-center">
      <h4>Tabel User</h4>
    </div><br>
    <table class="table align-items-center mb-0">
      <thead>
        <tr>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama User</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Password</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
        </tr>
      </thead>
      <tbody>
        @foreach($data as $d)
        <tr>
          <td>
            <div class="d-flex px-2 py-1">
              <div class="d-flex flex-column justify-content-center">
                <h6 class="mb-0 text-sm">{{$d->name}}</h6>
              </div>
            </div>
          </td>
          <td>
            <p class="text-xs font-weight-bold mb-0">{{$d->email}}</p>
          </td>
          <td class="align-middle text-center text-sm">
            ******
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
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