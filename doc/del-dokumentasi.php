<?php 
  include 'dokumentasi.php';

  $Id = $_GET['Id'];
  $sql = mysqli_query($koneksi, "DELETE FROM dokumentasi WHERE Id = '$Id'");

  if ($sql) {
    echo "<script>alert('Foto Berhasil Dihapus');location.href='index.php?page=dokumentasi.php'</script>";
}

?>