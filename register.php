<?php 

require 'config/koneksi.php';

if (isset($_POST['registrasi'])) {

  $user = $_POST['Username'];
  $name = $_POST['Name'];
  $asal = $_POST['AsalInstansi'];
  $pass = md5($_POST['Password']);
  $level = $_POST['Level'];

  $sql = "INSERT INTO login (Username, Name, AsalInstansi, Password, Level) VALUES ('$user', '$name', '$asal', '$pass', '$level')";

  $hasil = mysqli_query($koneksi, $sql);

    if ($hasil) {
      echo "<script>
              alert('User berhasil ditambahkan.. Terimakasih!');location:'login.php'
            </script>"
            ;
    }
      else {
        echo "Gagal melakukan registrasi";
        exit;
      }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Monitoring | Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
  </head>

  <body style="background-image: linear-gradient(to right, #6495ED, #1E90FF, #4169E1);">
    <div class="container">
      <!-- Outer Row -->
      <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-6 col-md-6">
          <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
              <!-- Nested Row within Card Body -->

                <div class="col-lg-12">
                  <div class="p-5">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">Silahkan Registrasi !</h1>
                    </div>
                    <form class="user" action="" method="POST">
                      <div class="form-group">
                        <input required type="text" name="Username" class="form-control form-control-user" placeholder="Masukkan username" />
                      </div>
                      <div class="form-group">
                        <input required type="text" name="Name" class="form-control form-control-user" placeholder="Masukkan nama" />
                      </div>
                      <div class="form-group">
                        <input required type="password" name="Password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukkan password" />
                      </div>
                      <div class="form-group">
                        <input required type="text" name="AsalInstansi" class="form-control form-control-user" placeholder="Asal Instansi" />
                      </div>
                      <div class="form-group">
                        <select required class="form-control form-check" name="Level">
                          <option selected>-- Pilih --</option>
                          <option value="User">Mahasiswa Internal</option>
                          <option value="Pengunjung">Umum / Eksternal</option>
                        </select>
                      </div>
                      <div class="container p-0 m-0">
                      <button type="submit" name="registrasi" class="btn btn-user btn-block" style="background-image: linear-gradient(to right, #4169E1, #6495ED);">
                      <i style="color: white;" >Registrasi</i></button>
                      </div>
                    </form>
                    <p class="container p-2">Sudah memiliki akun ? <a href="login.php"> Silahkan login!</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
  </body>
</html>
