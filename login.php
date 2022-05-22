<?php 
 
  include 'config/koneksi.php';

  session_start();
  if (isset($_POST['login'])) {

    $user = $_POST['username'];
    $pass = md5($_POST['password']);

    $sql = mysqli_query($koneksi, "SELECT * FROM login WHERE Username = '$user' AND Password = '$pass'");

    $data = mysqli_fetch_array($sql);

      if (mysqli_num_rows($sql) > 0) {
        if ($data['Level']=="Admin") { 

          $_SESSION['user']=$user;
          $_SESSION['status']="login";
          $_SESSION['nama']=$data['Name'];
          $_SESSION['level']="Admin";

          header("location:index.php");

      }elseif ($data['Level']=="User") {

          $_SESSION['user']=$user;
          $_SESSION['status']="login";
          $_SESSION['nama']=$data['Name'];
          $_SESSION['level']="User";

          header("location:index.php?page=view-data-seminar");

      }elseif ($data['Level']=="Pengunjung") {

        $_SESSION['user']=$user;
        $_SESSION['status']="login";
        $_SESSION['nama']=$data['Name'];
        $_SESSION['level']="Pengunjung";

          header("location:index.php?page=view-data-seminar");

      }else {
          header("location:login.php?status=gagal");
      }
    }else {
      header("location:login.php?status=gagal");
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

    <title>Monitoring | Login</title>

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
                      <h1 class="h4 text-gray-900 mb-4">Selamat Datang !</h1>
                    </div>

                    <?php 
                      if(isset($_GET['status'])) {
                        if($_GET['status']=='logindulu') {
                          echo "<div class='alert alert-warning'>Maaf! Silahkan Login Terlebih Dahulu</div>";

                          }elseif($_GET['status']=='gagal') {
                            echo "<div class='alert alert-danger'>Maaf! Username dan Password Salah</div>";

                          }elseif($_GET['status']=='logout') {
                            echo "<div class='alert alert-success'>Terima kasih! Anda Berhasil Logout</div>";
                          }
                        }
                    ?>

                    <form class="user" action="" method="POST">
                      <div class="form-group">
                        <input type="text" name="username" class="form-control form-control-user" placeholder="Username" />
                      </div>
                      <div class="form-group">
                        <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" />
                      </div>
                      <div class="form-group">
                      </div>
                      <button name="login" class="btn btn-user btn-block" style="background-image: linear-gradient(to right, #4169E1, #6495ED);">
                      <i style="color: white;" >Login</i></button>
                      <p class="container p-2">Belum memiliki akun ? <a href="register.php"> Registrasi dulu!</a></p>
                    </form>
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
