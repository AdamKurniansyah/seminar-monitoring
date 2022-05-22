<?php 
  include 'config/koneksi.php';

  if (isset($_POST['ubah'])) {
    $Id = $_POST['Id'];
    $Jadwal = $_POST['Jadwal'];
    $Tema = $_POST['Tema'];
    $Narasumber = $_POST['Narasumber'];
    $Lokasi = $_POST['Lokasi'];

    $sql = mysqli_query($koneksi, "UPDATE seminar SET Jadwal='$Jadwal', Tema='$Tema', Narasumber='$Narasumber', Lokasi='$Lokasi' WHERE Id = '$Id'");

      if ($sql) {
          echo "<script>alert('Data Berhasil Diubah');location.href='index.php?page=view-data-seminar'</script>";
      }
  }

  $Id = $_GET['Id'];
  $tampil = mysqli_query($koneksi, "SELECT * FROM seminar WHERE Id = '$Id'"
        );
      while ($data = mysqli_fetch_array($tampil)) {
        
  ?>

              <?php if ($_SESSION['level']=="Admin") {
                
              ?>
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Update Data E-Seminar</h1>
            <p class="mb-4">
              Berikut Tabel Update Data Kegiatan E-Seminar</a>
            </p>
            <?php } ?>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3 d-sm-flex align-item-center justify-content-between mb-4">
                <h6 class="m-0 font-weight-bold text-primary">Update Data Seminar</h6>
                <?php if ($_SESSION['level']=="Admin") { ?>
                <a href="index.php?page=view-data-seminar" class="d-none d-sm-inline-block btn btn-sm btn-success bg-gradient-success shadow-sm">
                  <i class="fas fa-address-book text-white-50"> </i> Tampil Data</a>
              </div>
              <?php } ?>
              
              <div class="card-body">
                <div class="table-responsive">
                  <div class="col-md-6">

                  <form action="" method="POST">
                    <div class="card-body">
                      <div class="form-group">
                        <label for="InputId">Id Seminar</label><br>
                        <h4><?= $data['Id'] ?></h4>
                        <input required type="hidden" name="Id" class="form-control" value="<?= $data['Id'] ?>" id="exampleInputId" placeholder="Masukkan Id">
                      </div>

                      <div class="form-group">
                        <label for="InputJadwal">Jadwal</label>
                        <input required type="text" name="Jadwal" class="form-control" value="<?= $data['Jadwal'] ?>" id="exampleInputJadwal" placeholder="Masukkan Jadwal">
                      </div>

                      <div class="form-group">
                        <label for="InputTema">Tema</label>
                        <input required type="text" name="Tema" class="form-control" value="<?= $data['Tema'] ?>" id="exampleInputTema" placeholder="Masukkan Tema">
                      </div>

                      <div class="form-group">
                        <label for="InputNarasumber">Narasumber</label>
                        <input required type="text" name="Narasumber" class="form-control" value="<?= $data['Narasumber'] ?>" id="exampleInputNarasumber" placeholder="Narasumber">
                      </div>

                      <div class="form-group">
                        <label for="InputLokasi">Lokasi</label>
                        <input required type="text" name="Lokasi" class="form-control" value="<?= $data['Lokasi'] ?>" id="exampleInputLokasi" placeholder="Lokasi">
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