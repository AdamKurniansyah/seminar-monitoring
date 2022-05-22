<?php 
  include 'config/koneksi.php';
  
  if (isset($_POST['simpan'])) {
    $Id = $_GET['Id'];
    $Nama = $_POST['Nama'];
    $Email = $_POST['Email'];
    $AsalIntansi = $_POST['Asal'];
    $NoTelp = $_POST['Nomor'];

    $sql = mysqli_query($koneksi, "INSERT INTO peserta VALUES('$Id', '$Nama', '$Email', '$AsalIntansi', '$NoTelp')");
      if ($sql) {
          echo "<script>alert('Data Berhasil Ditambahkan');location.href='index.php?page=insert-data-peserta'</script>";
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
                <h6 class="m-0 font-weight-bold text-primary"> Masukkan Data Peserta Baru</h6>
                </div>
                
                <a href="index.php?page=view-data-peserta" class="d-none d-sm-inline-block btn btn-sm btn-success bg-gradient-success m-2 shadow-sm"><i class="fas fa-address-book text-white-50"> </i> Data Peserta</a>

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
                      
                      <button type="submit" name="simpan" class="btn btn-primary bg-gradient-primary mt-4"><i class="fa fa-save"> </i> Simpan Data</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>