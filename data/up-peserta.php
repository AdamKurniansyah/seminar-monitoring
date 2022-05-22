<?php 
  include 'config/koneksi.php';

  if (isset($_POST['ubah'])) {
    $Id = $_POST['Id'];
    $Nama = $_POST['Nama'];
    $Email = $_POST['Email'];
    $AsalIntansi = $_POST['AsalInstansi'];
    $NoTelp = $_POST['NoTelp'];

    $sql = mysqli_query($koneksi, "UPDATE peserta SET Nama='$Nama', Email='$Email', AsalInstansi='$AsalIntansi', NoTelp='$NoTelp' WHERE Id = '$Id'");

      if ($sql) {
          echo "<script>alert('Data Berhasil Diupdate');location.href='index.php?page=view-data-peserta'</script>";
      }
  }

    $Id = $_GET['Id'];
    $tampil = mysqli_query($koneksi, "SELECT * FROM peserta WHERE Id = '$Id'"
          );
        while ($data = mysqli_fetch_array($tampil)) {

  ?>
            <?php if ($_SESSION['level']=="Admin") {

              ?>
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Update Data Peserta E-Seminar</h1>
            <p class="mb-4">
              Berikut Tabel Update Data Peserta E-Seminar</a>
            </p>
            <?php } ?>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3 d-sm-flex align-item-center justify-content-between mb-4">
                <h6 class="m-0 font-weight-bold text-primary">Ubah Data Peserta</h6>
                <?php if ($_SESSION['level']=="Admin") { ?>
                <a href="index.php?page=view-data-peserta" class="d-none d-sm-inline-block btn btn-sm btn-success bg-gradient-success shadow-sm"><i class="fas fa-address-book text-white-50"> </i> Tampil Data</a>
              </div>
              <?php } ?>
              
              <div class="card-body">
                <div class="table-responsive">
                  <div class="col-md-6">

                  <form action="" method="POST">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="InputId">Id Peserta</label><br>
                      <h4 class="fa fa-2x"><?= $data['Id'] ?></h4>
                      <input required type="hidden" name="Id" class="form-control" value="<?= $data['Id'] ?>" id="exampleInputId" placeholder="Masukkan Id">
                    </div>

                    <div class="form-group">
                      <label for="InputNama">Nama</label>
                      <input required type="text" name="Nama" value="<?= $data['Nama'] ?>" class="form-control" id="exampleInputNama" placeholder="Masukkan Nama">
                    </div>

                    <div class="form-group">
                      <label for="InputEmail">Email</label>
                      <input required type="email" name="Email" value="<?= $data['Email'] ?>" class="form-control" id="exampleInputEmail" placeholder="Masukkan Email">
                    </div>

                    <div class="form-group">
                      <label for="InputAsalInstansi">Asal Instansi</label>
                      <input required type="text" name="AsalInstansi" class="form-control" value="<?= $data['AsalInstansi'] ?>" id="exampleInputAsalInstansi" placeholder="Asal Instansi">
                    </div>

                    <div class="form-group">
                      <label for="InputNomor">No. Telp</label>
                      <input required type="text" name="NoTelp" class="form-control" value="<?= $data['NoTelp'] ?>" id="exampleInputNomor" placeholder="No. telp">
                    </div>
                    <?php if ($_SESSION['level']=="Admin") { ?>
                    <button type="submit" name="ubah" class="btn btn-warning bg-gradient-warning mt-4"><i class="fa fa-save"> </i> Ubah Data</button>
                </form>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
<?php } ?>