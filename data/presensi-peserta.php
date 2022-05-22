<?php 
  include 'config/koneksi.php';
  
  if (isset($_POST['simpan'])) {
    $Tanggal = $_GET['Tanggal'];
    $Nama = $_POST['Nama'];
    $Email = $_POST['Email'];
    $AsalIntansi = $_POST['Asal'];
    $NoTelp = $_POST['Nomor'];

    $sql = mysqli_query($koneksi, "INSERT INTO absensi VALUES('$Tanggal', '$Nama', '$Email', '$AsalIntansi', '$NoTelp')");
      if ($sql) {
          echo "<script>alert('Anda Berhasil Absen.. Terimakasih!');location.href='index.php?page=absensi-peserta'</script>";
      }
    }
?>

            <?php if ($_SESSION['level']=="Admin") {
              
              ?>
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Penambahan Data Peserta E-Seminar</h1>
            <p class="mb-4">
              Berikut Tabel Penambahan Data Peserta Baru  E-Seminar</a>
            </p>
            <?php } ?>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3 d-sm-flex align-item-center justify-content-between mb-4">
                <div>
                <h6 class="m-0 font-weight-bold text-primary"> Masukkan Data Untuk Absensi</h6>
                <p class="m-0 text-gray">Isi data dan klik tombol "Absen" sebagai tanda "Hadir"</p>
                </div>
              </div>
              
              <div class="card-body">
                <div class="table-responsive">
                  <div class="col-md-6">
                  <form action="" method="POST">
                    <div class="card-body">

                      <div class="form-group">
                        <label for="InputNama">Nama</label>
                        <input required type="text" name="Nama" class="form-control" id="exampleInputNama" placeholder="Masukkan Nama">
                      </div>

                      <div class="form-group">
                        <label for="InputEmail">Email</label>
                        <input required type="email" name="Email" class="form-control" id="exampleInputEmail" placeholder="Masukkan Email">
                      </div>

                      <div class="form-group">
                        <label for="InputAsal">Asal Instansi</label>
                        <input required type="text" name="Asal" class="form-control" id="exampleInputAsal" placeholder="Asal Instansi">
                      </div>

                      <div class="form-group">
                        <label for="InputNomor">No. Telp</label>
                        <input required type="text" name="Nomor" class="form-control" id="exampleInputNomor" placeholder="No. telp">
                      </div>
                      
                      <button type="submit" name="simpan" class="btn btn-primary bg-gradient-info mt-4"><i class="fa fa-user-check"> </i> Absen</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>