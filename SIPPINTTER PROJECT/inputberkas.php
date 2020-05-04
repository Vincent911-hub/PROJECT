<?php
include ('koneksi.php');
?>

<html>
<head>
	<center><title>Input Berkas Baru</title><center>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
	<h3>Input Berkas Baru</h3>
  <form method="POST" action="prosesinputberkas.php" enctype="multipart/form-data" >
  <br>
  <a  href="dataperkara.php">Kembali ke daftar berkas</a>
</br>		
		<table>
			<tr>
				<td> Kode Berkas </td>
				<td><input type="text" name="kode_berkas" autofocus=""required=""></td>
			<tr>
				<td>Nama Berkas</td>
				<td><input type="text" name="nama_berkas"autofocus=""required=""></td>					
			</tr>	
			<tr>
				<td>Tanggal<td>
				<td><input type="Date" name="tanggal"></td>					
            </tr>	
            <tr>
                <td>Kesatuan</td>
                <td><input type="text" name="kesatuan"></td>
            </tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>