<?php 
  include 'config/koneksi.php';

$Id = $_GET['Id'];
$tampil = mysqli_query($koneksi, "SELECT * FROM seminar WHERE Id = '$Id'"
      );
    while ($data = mysqli_fetch_array($tampil)) { ?>

            <?php if ($_SESSION['level']=="Admin") {

              ?>
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Detail Data E-Seminar</h1>
            <p class="mb-4">
              Berikut Tabel Detail Data Kegiatan E-Seminar</a>
            </p>
              <?php } ?>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3 d-sm-flex align-item-center justify-content-between mb-4">
                <h6 class="m-0 font-weight-bold text-primary">Detail Data Seminar</h6>
              <?php if ($_SESSION['level']!="Admin") {?>
                <a href="index.php?page=view-data-seminar" class="d-none d-sm-inline-block btn btn-sm btn-secondary bg-gradient-secondary shadow-sm"><i class="fas fa-arrow-left text-white-50"> </i> Kembali</a>
              <?php } ?>
              </div>
              
              <div class="card-body">
                <div class="table-responsive">
                  <div class="col-md-6">
                    <div class="card-body">
                      <div class="form-group">
                        <label for="InputId">Id Seminar</label><br>
                        <h4 class="fa fa-2x"><?= $data['Id'] ?></h4>
                        <input type="hidden" name="Id" class="form-control" value="<?= $data['Id'] ?>" id="exampleInputId" placeholder="Masukkan Id">
                      </div> 

                      <div class="form-group">
                        <label for="InputJadwal">Jadwal</label>
                        <h5><?= $data['Jadwal'] ?></h5>
                      </div>

                      <div class="form-group">
                        <label for="InputTema">Tema</label>
                        <h5><?= $data['Tema'] ?></h5>
                      </div>

                      <div class="form-group">
                        <label for="InputNarasumber">Narasumber</label>
                        <h5><?= $data['Narasumber'] ?></h5>
                      </div>

                      <div class="form-group">
                        <label for="InputLokasi">Lokasi</label>
                        <h5><?= $data['Lokasi'] ?></h5>
                      </div>
                      <?php if ($_SESSION['level']=="Admin") { ?>
                      <button type="submit" onclick="location.href='index.php?page=view-data-seminar'" name="kembali" class="btn btn-secondary bg-gradient-secondary mt-4"><i class="fa fa-arrow-left"> </i> Kembali</button>
                    <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
<?php } ?>