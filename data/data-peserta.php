            <?php if ($_SESSION['level']=="Admin") {

              ?>
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Pendataan Peserta E-Seminar</h1>
            <p class="mb-4">
              Berikut Tabel Data Peserta E-Seminar dengan beberapa list seperti, Id Peserta, Nama Peserta, Email Peserta, Asal Instansi dan No. Telepon Peserta.</a>
            </p>
              <?php } ?>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3 d-sm-flex align-item-center justify-content-between mb-4">
                <div>
              <h6 class="m-0 font-weight-bold text-primary">Data Peserta E-Seminar</h6>
                </div>

                <?php if ($_SESSION['level']!="Admin") {?>
                <a href="index.php?page=view-data-seminar" class="d-none d-sm-inline-block btn btn-sm btn-success bg-gradient-success m-3 shadow-sm"><i class="fas fa-address-book fa-sm text-white-50"></i> Data E-Seminar</a>
                <?php } ?>

                <?php if ($_SESSION['level']=="Admin") {?>
                <a href="index.php?page=insert-data-peserta" class="d-none d-sm-inline-block btn btn-sm btn-primary bg-gradient-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a>
              <?php } ?>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Asal Instansi</th>
                        <th>No Telp</th>

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
                      $sql = mysqli_query($koneksi, "SELECT * FROM peserta")
                        ;

                      while ($data = mysqli_fetch_array($sql)) { ?>
                      
                      <tr>
                        <td><?= $no++ ?></td>

                        <td><a href="index.php?page=detail-peserta&Id=<?= $Id++ ?>" class="d-none d-sm-inline-block btn btn-sm btn-success bg-gradient-success shadow-sm">
                        <i class="text-white-50"></i>P-<?= $data['Id'] ?></a></td>


                        <td><?= $data['Nama'] ?></td>
                        <td><?= $data['Email'] ?></td>
                        <td><?= $data['AsalInstansi'] ?></td>
                        <td><?= $data['NoTelp'] ?></td>

                        <?php if ($_SESSION['level']=="Admin") {?>
                        <td>
                          <div class="btn-group">
                          <a href="index.php?page=up-data-peserta&Id=<?= $data['Id'] ?>"
                          class="d-none d-sm-inline-block btn btn-sm btn-warning bg-gradient-warning shadow-sm">
                          <i class="fas fa-edit text-white-50"></i></a>
                          <a href="index.php?page=del-data-peserta&Id=<?= $data['Id'] ?>"
                          class="d-none d-sm-inline-block btn btn-sm btn-danger bg-gradient-danger shadow-sm" 
                          onclick="return confirm('Apakah anda yakin ingin menghapus data tersebut ??')">
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