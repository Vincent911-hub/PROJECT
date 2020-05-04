<link rel="stylesheet" type="text/css" href="style.css">
<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Data Berkas</title>

  </head>
  <body>
    <center><h1>Data Berkas</h1><center>
    <br/>
    <table>
      <thead>
        <tr>
          <th> Kode Berkas</th>
          <th>Nama Berkas</th>
          <th>Tanggal Berkas</th>
          <th>Kesatuan</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
      <?php
     
      $query = "SELECT * FROM berkas ";
      $result = mysqli_query($koneksi, $query);
    
      
      while($d = mysqli_fetch_array($result))
      {
      ?>
       <tr>
        <td><?php echo $d['kode_berkas']; ?></td>
				<td><?php echo $d['nama_berkas']; ?></td>
				<td><?php echo $d['tanggal']; ?></td>
				<td><?php echo $d['kesatuan']; ?></td>
    
          <td>
              <a href="editberkas.php?id=<?php echo $d['id']; ?>">Edit Berkas</a> 
              <a href="hapus.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus Berkas</a>
          </td>
      </tr>
         
      <?php
  
      }
      ?>
    </tbody>
    </table>
  </body>
</html>