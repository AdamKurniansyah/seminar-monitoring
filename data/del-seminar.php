<?php 
  include 'config/koneksi.php';

  $Id = $_GET['Id'];
  $sql = mysqli_query($koneksi, "DELETE FROM seminar WHERE Id = '$Id'");

  if ($sql) {
    echo "<script>alert('Data Berhasil Dihapus');location.href='index.php?page=view-data-seminar'</script>";
}

?>