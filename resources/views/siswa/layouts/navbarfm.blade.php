    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark bg-dark">
        <!-- Left navbar links -->
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ url('/siswa') }}" class="nav-link">Home Farmasi</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto nav-flex-icons">
                <!-- Authentication Links -->
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::guard('siswa')->user()->name }} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('siswa.logout') }}"
                            onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('siswa.logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
          <!-- /.navbar -->

          <!-- Main Sidebar Container -->
          <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ url('/siswa') }}" class="brand-link elevation-4">
                <i class="nav-icon fas fa-graduation-cap" style="margin-left:20px"></i>
              {{-- <img src="{{ url('/dist/img/AdminLTELogo.png') }}"
                   alt="Portal UN"
                   class="brand-image img-circle elevation-3"
                   style="opacity: .8"> --}}
              <span class="brand-text font-weight-light">Portal <b>UN</b> 2020</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
              <!-- Sidebar user (optional) -->

              <!-- Sidebar Menu -->
              <nav class="mt-3">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
                       with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href=" {{ route('siswa.identitasfm') }} " class="nav-link">
                            <i class="nav-icon fas fa-user-circle"></i>
                            <p class="text">Identitas Data Pribadi</p>
                        </a>
                    </li>


                {{-- <li class="nav-item">
                    <a href="{{ route('ujian.ups') }}" class="nav-link">
                        <i class="nav-icon fas fa-clinic-medical text-primary"></i>
                        <p class="text">Ujian Praktek Sekolah</p>
                    </a>
                </li> --}}

                <!-- Start UKK -->
                <li class="nav-item">
                <a href="{{ route('ujian.ukksfm') }}" class="nav-link">
                    <i class="nav-icon fas fa-prescription text-primary"></i>
                    <p>UKK Sekolah FM</p>
                </a>
                <li class="nav-item">
                <a href="{{ route('ujian.ukknfm') }}" class="nav-link">
                    <i class="nav-icon fas fa-prescription text-fuchsia"></i>
                    <p>UKK Nasional FM</p>
                </a>
                </li>
                <!-- End UKK -->

                <!-- Start Try Out -->
                <li class="nav-item has-treeview">
                        <a href="" class="nav-link">
                          <i class="nav-icon fas fa-edit text-success"></i>
                          <p>TRY OUT UNBK<i class="right fas fa-angle-left"></i></p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item" style="margin-left:10px">
                            <a href="{{ route('ujian.fm.tryout1') }}" class="nav-link">
                              <i class="far fa-check-square nav-icon"></i>
                              <p>TRY OUT 1</p>
                            </a>
                          </li>
                          <li class="nav-item" style="margin-left:10px">
                            <a href="{{ route('ujian.fm.tryout2') }}" class="nav-link">
                              <i class="far fa-check-square nav-icon"></i>
                              <p>TRY OUT 2</p>
                            </a>
                          </li>
                          <li class="nav-item" style="margin-left:10px">
                            <a href="{{ route('ujian.fm.tryout3') }}" class="nav-link">
                              <i class="far fa-check-square nav-icon"></i>
                              <p>TRY OUT 3</p>
                            </a>
                          </li>
                        </ul>
                      </li>
                    <!-- End Try Out -->
                    <li class="nav-item">
                        <a href="{{ route('ujian.fm.gladi') }}" class="nav-link">
                            <i class="nav-icon fas fa-edit text-warning"></i>
                            <p class="text">Gladi Bersih UNBK</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('ujian.fm.unbk') }}" class="nav-link">
                            <i class="nav-icon fas fa-laptop-medical text-danger"></i>
                            <p class="text">UNBK<i class="right fas fa-exclamation-circle text-warning"></i></p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('ujian.fm.usbn') }}" class="nav-link">
                            <i class="nav-icon fas fa-laptop text-danger"></i>
                            <p class="text">USBN<i class="right fas fa-exclamation-circle text-warning"></i></p>
                        </a>
                    </li>
                </ul>

              </nav>
              <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
          </aside>
