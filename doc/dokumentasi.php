<?php 

session_start();

$koneksi = mysqli_connect("localhost:3307", "root", "", "data_seminar");

  if (isset($_POST['upload'])) {

    $direktori = "berkas/";
    $file_name = $_FILES['gambar']['name'];
    move_uploaded_file($_FILES['gambar']['tmp_name'], $direktori.$file_name);

    mysqli_query($koneksi, "INSERT INTO dokumentasi SET FILE = '$file_name'");

      echo "<script>alert('Foto Berhasil Diupload');location.href='dokumentasi.php'</script>";
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Aplikasi Monitoring Seminar" />
    <meta name="author" content="Wiranti Hambarani" />
    <meta name="generator" content="Hugo 0.84.0" />

    <title>Application Monitoring | Album</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/" />

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet" />

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet" />

  </head>

  <body>
    <header>
      <?php if ($_SESSION['level']=="Admin") {?>
      <div class="navbar navbar-dark p-0 bg-gradient-primary fixed-top">
        <?php } ?>

        <?php if ($_SESSION['level']!="Admin") {?>
      <div class="navbar navbar-dark p-0 bg-gray-900 fixed-top">
        <?php } ?>

        <div class="container">
          <a href="dokumentasi.php" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="50" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24">
              <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
              <circle cx="12" cy="13" r="4" />
            </svg>
            <strong class="col-sm-4" style="font-size : x-large"> Album</strong>
          </a>
          <?php if ($_SESSION['level']=="Admin") {?>
          <a href="../index.php?page=view-data-seminar" class="d-none d-sm-inline-block btn btn-light bg-gradient-primary shadow-sm"><i class="fas fa-arrow-left text-white-50"></i></a>
        <?php } ?>

        <?php if ($_SESSION['level']!="Admin") {?>
          <a href="../index.php?page=view-data-seminar" class="d-none d-sm-inline-block btn btn-light bg-gray-900 shadow-sm"><i class="fas fa-arrow-left text-white-50"></i></a>
        <?php } ?>

        </div>
      </div>
    </header>

    <main>
      <section class="py-5 text-center container mt-5">
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="row py-lg-5">
          <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Album E-Seminar</h1>
            <p class="lead text-muted">Kumpulan Foto Kegiatan E-Seminar</p>

            

            <?php if ($_SESSION['level']=="Admin") {?>
            <p>
              <div class="form-group">
              <input required type="file" name="gambar" class="form-control btn-white shadow-sm p-1 mb-3" placeholder="Choose File">
              <button type="submit" name="upload" class="text-black-50 btn btn-info"><i class="fas fa-upload"></i> Upload File</button>
              </div>
            </p>
            <?php } ?>
            

          </div>
        </div>
        </form>
      </section>

      <div class="album py-5 bg-light">
        <div class=" container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <?php 
              $sql = "SELECT * FROM dokumentasi ORDER BY Id DESC";
              $res = mysqli_query($koneksi, $sql);

              if (mysqli_num_rows($res) > 0) {
                while ($dokumentasi = mysqli_fetch_assoc($res)) { ?>

                <div class="card-body card-img card-group collapse-header img-thumbnail">
                  <img src="berkas/<?=$dokumentasi['File']?>" class="card fa-images">
                </div>

            <?php }} ?>
          </div>
        </div>
      </div>
    </main>

    <footer class="text-muted py-lg-5">
      <div class="container">
        <p class="mb-0 text-center">Copyright &copy; Wiranti Hambarani 2022</p>
      </div>
    </footer>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>