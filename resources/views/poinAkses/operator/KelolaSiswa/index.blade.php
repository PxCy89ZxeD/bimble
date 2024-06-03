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
                <a href="{{route('SettingWebsite')}}" class="nav-link">
                 <i class="fas fa-sliders-h nav-icon"></i>
                  <p>Setting</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-user-clock nav-icon"></i>
                  <p>Reviewer</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class=" nav-icon fas fa-users"></i>
              <p>
                Kelola Siswa
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('KelolaSiswa')}}" class="nav-link active">
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
        <div class="card-header" style="display: flex; justify-content:space-between; align-items:center;">
            <a href="{{Route('SiswaCreate')}}" class="btn btn-primary">Tambah Data</a>
            <h3 class="card-title" style="margin-bottom: 0;"><b>Siswa Table</b></h3>
        </div>
              <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                  <thead>
                    <tr style="text-align: center; background-color:rgb(165, 204, 57);">
                      <th>#</th>
                      <th>Nama</th>
                      <th>Kursus</th>
                      <th>Orang Tua</th>
                      <th>Telp</th>
                      <th>Alamat</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($datasiswa as $item)
                      <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->kursus->nama_kursus}}</td>
                        <td>{{$item->orangtua}}</td>
                        <td>{{$item->no_telp}}</td>
                        <td>{{$item->alamat}}</td>
                        <td style="Display: flex; justify-content: center; align-items:center; border: none;">
                                <a href="{{ route('SiswaEdit', ['id' => $item->id]) }}" class="btn-sm btn-warning mr-2">
                                    <i class="fas fa-pen nav-icon"></i></span>
                                </a>
                                <a data-toggle="modal" data-target="#modal-hapus{{ $item->id }}" class="btn-sm btn-danger"><i class="fas fa-trash-alt mr-2"></i></a>
                        </td>
                      </tr>
                        <!-- Modal -->
                            <div class="modal fade" id="modal-hapus{{ $item->id}}">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Konfirmasi Hapus Data</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <p>Apakah anda yakin ingin menghapus data Siswa <b>{{ $item->nama}}</b> ?</p>
                                </div>
                                <div class="modal-footer" style="display: flex; justify-content: flex-end;">
                                  <form action="{{route('SiswaDelete', ['id' => $item->id])}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                                    <button type="submit" class="btn btn-danger">Ya, Hapus Data</button>
                                  </form>
                                </div>
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>
                            <!-- Modal -->
                      @endforeach
                  </tbody>
            </table>
        </div>
              <!-- /.card-body -->
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