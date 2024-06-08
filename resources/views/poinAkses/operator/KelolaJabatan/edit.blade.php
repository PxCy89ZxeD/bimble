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
          <li class="nav-item menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Kelola Karyawan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('KelolaKaryawan')}}" class="nav-link">
                  <i class="fas fa-user-tie nav-icon"></i>
                  <p>
                    Data Karyawan
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('KelolaJabatan')}}" class="nav-link">
                  <i class="fas fa-briefcase nav-icon"></i>
                  <p>
                    Data Jabatan
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('AbsensiKaryawan')}}" class="nav-link">
                 <i class="fas fa-paste nav-icon"></i>
                  <p>Absensi Karyawan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('KelolaGaji')}}" class="nav-link">
                  <i class="fas fa-money-check-alt nav-icon"></i>
                  <p>Gaji Karyawan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-close">
            <a href="#" class="nav-link">
              <i class=" nav-icon fas fa-users"></i>
              <p>
                Kelola Siswa
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('KelolaSiswa')}}" class="nav-link">
                  <i class="fas fa-users-cog nav-icon"></i>
                  <p>
                    Data Siswa
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('KelolaSiswaKursus')}}" class="nav-link">
                  <i class="fas fa-code-branch nav-icon"></i>
                  <p>
                    Kursus Siswa
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('KelolaJadwal')}}" class="nav-link">
                <i class="fas fa-calendar-alt nav-icon"></i>
                  <p>
                    Jadwal Siswa
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('KelolaAbsensi')}}" class="nav-link">
                <i class="fas fa-book-reader nav-icon"></i>
                  <p>
                    Absensi Siswa
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('KelolaSPP')}}" class="nav-link">
                <i class="fas fa-wallet nav-icon"></i>
                  <p>
                    SPP Siswa
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fab fa-pied-piper-square"></i>
              <p>
                Kelola Kursus
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('KelolaKursus')}}" class="nav-link">
                  <i class="fas fa-scroll nav-icon"></i>
                  <p>
                    Data Kursus
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('KelolaInstruktur')}}" class="nav-link">
                  <i class="fas fa-user-friends nav-icon"></i>
                  <p>
                    Data Instruktur
                  </p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
@endsection
@section('Content')
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="card card-success"  style="width: 50%">
              <div class="card-header">
                    <h3 class="card-title">Add Position Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            <form action="{{ route('JabatanUpdate', $jabatan->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Jabatan</label>
                            <input type="text" class="form-control" id="title" placeholder="Cth: Owner" name="vjabatan" value="{{ $jabatan->nama_jabatan }}">
                            @error('vjabatan')
                                <small>{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Gaji</label>
                            <span class="left badge badge-danger">Rp</span>
                            <input type="text" class="form-control" id="content" placeholder="Cth: 1.000.0000 " name="vgaji"value="{{ $jabatan->gaji }}">
                            @error('vgaji')
                                <small>{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Textarea</label>
                            <textarea class="form-control" name="vdeskripsi" rows="3" placeholder="Enter ...">{{ $jabatan->deskripsi }}</textarea>
                            @error('vdeskripsi')
                                <small>{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
            </form>
        </div>
      </div><!-- /.container-fluid -->
            @if ($message = Session::get('success'))
            <script>
                Swal.fire({
                    icon: "success",
                    text: "{{ $message }}",
                });
            </script>
        @endif
    </div>
    <!-- /.content -->
@endsection
