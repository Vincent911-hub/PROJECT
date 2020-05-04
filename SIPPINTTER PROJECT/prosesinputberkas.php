<?php
  include('koneksi.php'); 
  $kodeberkas = $_POST['kode_berkas'];
  $namaberkas    = $_POST['nama_berkas'];
  $tanggal    = $_POST['tanggal'];
  $kesatuan   = $_POST['kesatuan'];

  mysqli_query($koneksi,"insert into berkas values('$kodeberkas','$namaberkas','$tanggal','$kesatuan')");
 
 
  header("location:index.php");
   
 
?>

