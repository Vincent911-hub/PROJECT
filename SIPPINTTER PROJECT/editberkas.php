<!DOCTYPE html>
<html>
<head>
	<center><title>Edit Berkas </title><center>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
	<h3>Edit Berkas </h3>

    <?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from berkas where kode_berkas='$id'");
	while($row = mysqli_fetch_array($data)){
		?>

  <form method="POST" action="update.php" enctype="multipart/form-data" >
  <br>
  <a  href="dataperkara.php">Kembali ke daftar berkas</a>
</br>		
		<table>
		<tr>
		<td> Kode Berkas </td>
				<td><input type="hidden" name="kode_berkas" value="<?php echo $row['kode_berkas'];?>">
			</tr>
			<tr>
				<td>Nama Berkas</td>
				<td><input type="text" name="nama_berkas"value="<?php echo $row['nama_berkas'];?>">				
			</tr>	
			<tr>
				<td>Tanggal<td>
				<td><input type="Date" name="tanggal" value="<?php echo $row['tanggal'];?>"></td>					
            </tr>	
            <tr>
                <td>Kesatuan</td>
                <td><input type="text" name="kesatuan" value="<?php echo $row['kesatuan'];?>"></td>
            </tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php
	}
	?>
</body>
</html>