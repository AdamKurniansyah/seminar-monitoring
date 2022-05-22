<?php 
  include 'config/koneksi.php';

  if (isset($_POST['simpan'])) {
    $Id = $_POST['Id'];
    $Jadwal = $_POST['Jadwal'];
    $Tema = $_POST['Tema'];
    $Narasumber = $_POST['Narasumber'];
    $Lokasi = $_POST['Lokasi'];

    $sql = mysqli_query($koneksi, "INSERT INTO seminar VALUES('$Id', '$Jadwal', '$Tema', '$Narasumber', '$Lokasi')");
      if ($sql) {
          echo "<script>alert('Data Berhasil Ditambahkan');location.href='index.php?page=view-data-seminar'</script>";
      }
  }
  ?>

            <?php if ($_SESSION['level']=="Admin") {
            
            ?>
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Penambahan Data E-Seminar</h1>
            <p class="mb-4">
              Berikut Tabel Penambahan Data Baru Kegiatan E-Seminar</a>
            </p>
              <?php } ?>
              
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3 d-sm-flex align-item-center justify-content-between mb-4">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Data Seminar</h6>
                <?php if ($_SESSION['level']=="Admin") { ?>
                <a href="index.php?page=view-data-seminar" class="d-none d-sm-inline-block btn btn-sm btn-success bg-gradient-success shadow-sm"><i class="fas fa-address-book text-white-50"> </i> Tampil Data</a>
              <?php } ?>
              </div>
              
              <div class="card-body">
                <div class="table-responsive">
                  <div class="col-md-6">
                  <form action="" method="POST">
                    <div class="card-body">

                      <div class="form-group">
                        <label for="InputJadwal">Jadwal</label>
                        <input required type="text" name="Jadwal" class="form-control" id="exampleInputJadwal" placeholder="Masukkan Jadwal">
                      </div>

                      <div class="form-group">
                        <label for="InputTema">Tema</label>
                        <input required type="text" name="Tema" class="form-control" id="exampleInputTema" placeholder="Masukkan Tema">
                      </div>

                      <div class="form-group">
                        <label for="InputNarasumber">Narasumber</label>
                        <input required type="text" name="Narasumber" class="form-control" id="exampleInputNarasumber" placeholder="Narasumber">
                      </div>

                      <div class="form-group">
                        <label for="InputLokasi">Lokasi</label>
                        <input required type="text" name="Lokasi" class="form-control" id="exampleInputLokasi" placeholder="Lokasi">
                      </div>
                      <?php if ($_SESSION['level']=="Admin") { ?>
                      <button type="submit" name="simpan" class="btn btn-primary bg-gradient-primary mt-4"><i class="fa fa-save"> </i> Simpan Data</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
<?php } ?>