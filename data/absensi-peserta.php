<?php if ($_SESSION['level']=="Admin") {

?>
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Absensi Peserta E-Seminar</h1>
<p class="mb-4">
Berikut Tabel Presensi Peserta E-Seminar dengan beberapa list seperti, Id Peserta, Nama Peserta, Email Peserta, Asal Instansi dan No. Telepon Peserta.</a>
</p>
<?php } ?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3 d-sm-flex align-item-center justify-content-between mb-4">
  <div>
  <h6 class="m-0 font-weight-bold text-primary">Presensi Peserta E-Seminar</h6>
  <h6 class="m-0 m-1 text-secondary">Data peserta yang sudah melakukan absensi</h6>
  </div>

  <?php if ($_SESSION['level']!="Admin") {?>
  <a href="index.php?page=view-data-seminar" class="d-none d-sm-inline-block btn btn-sm btn-success bg-gradient-success shadow-sm m-3"><i class="fas fa-address-book fa-sm text-white-50"></i> Data E-Seminar</a>
  <?php } ?>
</div>

<div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>No.</th>
          <th>Tgl Presensi</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Asal Instansi</th>
          <th>No Telp</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        include 'config/koneksi.php';
        
        $no = 1;
        $Tanggal = date("l/m/Y/");
        $sql = mysqli_query($koneksi, "SELECT * FROM absensi")
          ;

        while ($data = mysqli_fetch_array($sql)) {
          ?>
        
        <tr>
          <td><?= $no++ ?></td>
          <td><i class="text-white-50"></i><?= $Tanggal . $no ?></td>
          <td><?= $data['Nama'] ?></td>
          <td><?= $data['Email'] ?></td>
          <td><?= $data['AsalInstansi'] ?></td>
          <td><?= $data['NoTelp'] ?></td>
        </tr>

      <?php } ?>
    </tbody>
  </table>
</div>
</div>
</div>