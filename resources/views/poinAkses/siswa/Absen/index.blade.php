@extends('Layout-Dashboard.main')
@section('NavAccount')

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name}}</a>
        </div>
      </div>

            <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('cekjadwal')}}" class="nav-link">
             <i class="fas fa-calendar-alt nav-icon"></i>
              <p>
                Jadwal Les
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('cekabsen')}}" class="nav-link">
             <i class="far fa-address-book nav-icon"></i>
              <p>
                Absensi Les
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('kuis')}}" class="nav-link">
             <i class="fas fa-puzzle-piece nav-icon"></i>
              <p>
                Kuis
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
@endsection
@section('navlink')
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('siswa')}}" class="nav-link">Dashboard</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
          <a href="{{ route('logout') }}" class="nav-link" data-toggle="modal" data-target="#modal-logout">Logout</a>
      </li>
    </ul>
@endsection
@section('Content')
  <!-- Main content -->
  <div class="content">
        <div class="container-fluid">
              <div class="card">
              <div class="card-header" style="display: flex; justify-content: space-between; align-items:center;">
                  <h3 class="card-title" style="margin-bottom: 0;"><b>Tabel Absensi Siswa</b></h3>
              </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr style="text-align: center; background-color:rgb(146, 69, 6);color:antiquewhite">
                        <th>#</th>
                        <th>Nama Siswa</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($cekabsen as $item)                          
                      <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$item->siswa->nama}}</td>
                          <td>{{$item->tanggal}}</td>
                          <td>{{$item->keterangan}}</td>
                          <td>{{$item->catatan}}</td>
                          <td style="Display: flex; justify-content: center; align-items:center; border: none;">
                                  <a data-toggle="modal" data-target="#modal-edit{{$item->id}}" class="btn-sm btn-warning mr-2"><i class="fas fa-pen mr-1"></i></a>
                                  <a data-toggle="modal" data-target="#modal-hapus{{ $item->id }}" class="btn-sm btn-danger"><i class="fas fa-trash-alt mr-1"></i></a>
                          </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
        </div><!-- /.container-fluid -->
        @if ($message = Session::get('error'))
              <script>
                  Swal.fire({
                      icon: "error",
                      text: "{{ $message }}",
                  });
              </script>
          @endif
  </div>
  <!-- /.content -->
@endsection