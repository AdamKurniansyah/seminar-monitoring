<?php 
  $page = '';
  if (isset($_GET['page'])) {
      $page = $_GET['page'];
  }

  switch ($page) {
      case 'profile':
        $judul = "";
          $page = "include 'profile.php';";
          break;

      case 'documentation':
        $judul = "";
          $page = "include 'doc/dokumentasi.php';";
          break;

      case 'del-dokumentasi':
        $judul = "";
          $page = "include 'doc/dokumentasi.php';";
          break;

      case 'view-data-seminar':
        $judul = "";
          $page = "include 'data/data-seminar.php';";
          break;

      case 'view-data-peserta':
        $judul = "";
          $page = "include 'data/data-peserta.php';";
          break;

      case 'absensi-peserta':
        $judul = "";
          $page = "include 'data/absensi-peserta.php';";
          break;

      case 'presensi-peserta':
        $judul = "";
          $page = "include 'data/presensi-peserta.php';";
          break;

      case 'insert-data-seminar':
        $judul = "";
          $page = "include 'data/insert-seminar.php';";
          break;

      case 'insert-data-peserta':
        $judul = "";
          $page = "include 'data/insert-peserta.php';";
          break;

      case 'up-data-seminar':
        $judul = "";
          $page = "include 'data/up-seminar.php';";
          break;

      case 'up-data-peserta':
        $judul = "";
          $page = "include 'data/up-peserta.php';";
          break;

      case 'del-data-seminar':
        $judul = "";
          $page = "include 'data/del-seminar.php';";
          break;

      case 'del-data-peserta':
        $judul = "";
          $page = "include 'data/del-peserta.php';";
          break;

      case 'detail-seminar':
        $judul = "";
          $page = "include 'data/detail-seminar.php';";
          break;

      case 'detail-peserta':
        $judul = "";
          $page = "include 'data/detail-peserta.php';";
          break;

  default:
    $judul = "Dashboard";
      $page = "include 'content.php';";
      break;
}

$CONTENT['main'] = $page;

  ?>