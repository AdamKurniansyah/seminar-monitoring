<?php 
  include 'config/koneksi.php';

    $Id = $_GET['Id'];
    $tampil = mysqli_query($koneksi, "SELECT * FROM peserta WHERE Id = '$Id'"
          );
        while ($data = mysqli_fetch_array($tampil)) {
?>

            <?php if ($_SESSION['level']=="Admin") {
              
              ?>
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Detail Data Peserta E-Seminar</h1>
            <p class="mb-4">
              Berikut Tabel Detail Data Peserta E-Seminar</a>
            </p>
            <?php } ?>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3 d-sm-flex align-item-center justify-content-between mb-4">
                <h6 class="m-0 font-weight-bold text-primary">Detail Data Peserta</h6>
                <a href="index.php?page=view-data-peserta" class="d-none d-sm-inline-block btn btn-sm btn-success bg-gradient-success shadow-sm"><i class="fas fa-address-book text-white-50"> </i> Tampil Data Peserta</a>
              </div>
              
              <div class="card-body">
                <div class="table-responsive">
                  <div class="col-md-6">
                    <div class="card-body">

                      <div class="form-group">
                        <label for="InputId">Id Peserta</label><br>
                        <h4 class="fa fa-2x"><?= $data['Id'] ?></h4>
                        <input type="hidden" name="Id" class="form-control" value="<?= $data['Id'] ?>">
                      </div>

                      <div class="form-group">
                        <label for="InputNama">Nama</label>
                        <h5><?= $data['Nama'] ?></h5>
                      </div>

                      <div class="form-group">
                        <label for="InputEmail">Email</label>
                        <h5><?= $data['Email'] ?></h5>
                      </div>

                      <div class="form-group">
                        <label for="InputAsalInstansi">Asal Instansi</label>
                        <h5><?= $data['AsalInstansi'] ?></h5>
                      </div>

                      <div class="form-group">
                        <label for="InputNomor">No. Telp</label>
                        <h5><?= $data['NoTelp'] ?></h5>
                      </div>

                      <?php if ($_SESSION['level']=="Admin") { ?>
                      <button type="submit" onclick="location.href='index.php?page=view-data-peserta'" name="kembali" class="btn btn-secondary bg-gradient-secondary mt-4"><i class="fas fa-arrow-left"> </i> Kembali</button>
                    <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
<?php } ?>