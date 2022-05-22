
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-gradient-light topbar mb-4 shadow">

          <!-- Navbar Documentation -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100">

                  <?php if ($_SESSION['level']!="Admin") { ?>
                  <a  href="doc/dokumentasi.php">
                  <button class="btn btn-dark bg-gray-900" type="button">
                  <i class="fas fa-camera fa-sm"></i> Dokumentasi E-Seminar </button></a>
                  <?php } ?>
            </form>
            
              <!-- Topbar Navbar -->
              <ul class="navbar-nav ml-auto">

            <div class="container-fluid">
            <?php if ($_SESSION['level']!="Admin") { ?>
                <a href="index.php?page=insert-data-peserta" class="d-none d-sm-inline-block btn btn-sm btn-primary bg-gradient-primary shadow-sm"><i class="fas fa-plus text-white-50"> </i> Pendaftaran Peserta Baru</a>
                  <?php } ?>
                  </div>

          
              <!-- Nav Item - Search Dropdown (Visible Only XS) -->

              <div class="topbar topbar-divider"></div>
              
              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $_SESSION['nama'] ?></span>
                    <?php if ($_SESSION['level']=="Admin") {?>
                  <img class="img-profile rounded-circle" src="img/undraw_profile_3.svg" />
                      <?php } ?>
                      <?php if ($_SESSION['level']!="Admin") {?>
                  <img class="img-profile rounded-circle" src="img/user.jpg" />
                  <?php } ?>
                </a>

                <!-- Dropdown - User Information -->
                
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <?php if ($_SESSION['level']=="Admin") {?>
                  <a class="dropdown-item" href="index.php?page=profile">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profil
                  </a>
                  <?php }elseif ($_SESSION['level']=="User" && $_SESSION['level']=="Pengunjung") {?>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="index.php?page=profile">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profil
                  </a>
                  <?php } ?>
                  
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="login.php" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Keluar
                  </a>
                </div>
              </li>
            </ul>
          </nav>
          <!-- End of Topbar -->