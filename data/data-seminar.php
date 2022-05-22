            <?php if ($_SESSION['level']=="Admin") {

              ?>
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Pendataan E-Seminar</h1>
            <p class="mb-4">
              Berikut tabel untuk pendataan kegiatan E-Seminar dengan beberapa list seperti, Jadwal E-Seminar, Tema pada E-Seminar, Narasumber pada saat E-Seminar berlangsung, Lokasi E-Seminar.</a>
            </p>
            <?php } ?>

            <?php if ($_SESSION['level']!="Admin") { ?>
            <div class="card shadow-sm mb-5">
            <div class="card-header py-5">
              <h6 class="m-0 font-weight-bold text-secondary text-center" style="font-size: xx-large;">Selamat Datang <?= $_SESSION['level'] ?></h6>
            </div>
            </div>
            <?php } ?>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3 d-sm-flex align-item-center justify-content-between mb-4">
                <h6 class="m-0 font-weight-bold text-primary">Data E-Seminar</h6>
                <div>
                <?php if ($_SESSION['level']=="Admin") {?>
                <a href="index.php?page=insert-data-seminar" class="d-none d-sm-inline-block btn btn-sm btn-primary bg-gradient-primary shadow-sm m-3"><i class="fas fa-plus text-white-50"> </i> Tambah Data</a>
                <?php } ?>

                
                <?php if ($_SESSION['level']!="Admin") {?>
                <a href="index.php?page=presensi-peserta" class="d-none d-sm-inline-block btn btn-sm btn-primary bg-gradient-info m-2 mb-2 shadow-sm"><i class="fas fa-user-check text-white-50"> </i> Absensi Peserta</a>
              <?php } ?>
              </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Id</th>
                        <th>Jadwal</th>
                        <th>Tema</th>
                        <th>Narasumber</th>
                        <th>Lokasi</th>

                        <?php if ($_SESSION['level']=="Admin") {

                          ?>
                        <th>#</th>
                        <?php } ?>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      include 'config/koneksi.php';
                      $no = 1;
                      $Id = 1;
                      $sql = mysqli_query($koneksi, "SELECT * FROM seminar")
                        ;

                      while ($data = mysqli_fetch_array($sql)) { ?>
                      <tr>
                        <td><?= $no++ ?></td>

                        <td><a href="index.php?page=detail-seminar&Id=<?= $Id++ ?>" 
                        class="d-none d-sm-inline-block btn btn-sm btn-success bg-gradient-success shadow-sm" style="width: 60px;" >
                        <i class="text-white-50"></i>S-<?= $data['Id'] ?></a></td>

                        <td><?= $data['Jadwal'] ?></td>
                        <td><?= $data['Tema'] ?></td>
                        <td><?= $data['Narasumber'] ?></td>
                        <td><?= $data['Lokasi'] ?></td>

                        <?php if ($_SESSION['level']=="Admin") {?>
                        <td>
                        <div class="btn-group">
                        <a href="index.php?page=up-data-seminar&Id=<?= $data['Id'] ?>"
                          class="d-none d-sm-inline-block btn btn-sm btn-warning bg-gradient-warning shadow-sm">
                        <i class="fas fa-edit text-white-50"></i></a>
                        <a href="index.php?page=del-data-seminar&Id=<?= $data['Id'] ?>"
                          class="d-none d-sm-inline-block btn btn-sm btn-danger bg-gradient-danger shadow-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data tersebut ??')">
                        <i class="fas fa-trash text-white-50"></i></a>

                      <?php }elseif ($_SESSION['level']=="User" && $_SESSION['level']=="Pengunjung") {?>
                        <a href="#"
                          class="d-none d-sm-inline-block btn btn-sm btn-warning bg-gradient-warning shadow-sm disabled">
                        <i class="fas fa-edit text-white-50"></i></a>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger bg-gradient-danger shadow-sm disabled">
                        <i class="fas fa-trash text-white-50"></i></a>
                        <?php } ?>
                        </div>
                      </td>
                      </tr>

                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>