<?php 
  $koneksi = mysqli_connect("localhost:3307", "root", "", "data_seminar");
  if (mysqli_connect_errno()) {
      echo "Koneksi Database Gagal". mysqli_connect_error();
  }
?>