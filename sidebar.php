    <!-- Page Wrapper -->
    <div id="wrapper">
          <!-- Sidebar -->
          <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
              <div class="sidebar-brand-icon rotate-n-15">
              </div>
              <span class="material-symbols-outlined">cloudbuild</span>
              <div class="sidebar-brand-text mx-3">Monitoring<sup>Sys</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0" />

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
              <a class="nav-link" href="index.php">
                <i class="fas fa-fw fa-home"></i>
                <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider" />

            <!-- Heading -->
            <div class="sidebar-heading">Menu</div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Master Data</span>
              </a>
              <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                  <a class="collapse-item" href="index.php?page=view-data-seminar">Data E-Seminar</a>
                  <a class="collapse-item" href="index.php?page=view-data-peserta">Data Peserta E-Seminar</a>
                  <a class="collapse-item" href="index.php?page=absensi-peserta">Absensi Peserta</a>
                  <div class="collapse-divider"></div>
                </div>
              </div>
            </li> 

            <!-- Nav Item - Tables -->
            <li class="nav-item">
              <a class="nav-link" href="doc/dokumentasi.php">
                <i class="fas fa-fw fa-camera"></i>
                <span>Dokumentasi</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block" />

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
              <button class="rounded-circle border-light" id="sidebarToggle"></button>
            </div>
          </ul>
          <!-- End of Sidebar -->