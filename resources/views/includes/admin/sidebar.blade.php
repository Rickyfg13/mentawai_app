<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link text-decoration-none">
      <img src="{{ asset('asset/backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light ">Halaman Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">

        </div>
        <div class="info">
          <a href="#" class="d-block text-decoration-none">Hello, {{ Auth::user()->name }} </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="/dashboard" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Data Master
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/wisata-admin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Wisata</p>
                </a>
              </li>
                <li class="nav-item">
                  <a href="/kuliner-admin" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Kuliner</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('Rms.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Rumah Makan</p>
                  </a>
                </li>
                  <li class="nav-item">
                    <a href="/penginapan-admin" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Data Penginapan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/pjs" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Data Penanggungjawab</p>
                    </a>
                  </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ url('booking_tampil') }}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Booking
              </p>
            </a>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>