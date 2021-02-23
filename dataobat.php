
<?php
include "koneksi.php";
$query=mysqli_query($koneksi, "SELECT * FROM tbobat") or die("KESALAHAN PADA QUERY ANDA, DI CEK LAGI YA..!")
	?>
	<body>
	<table border="2">
	<p INI adalah form data obat />
	<caption>Data Obat</caption>
	<tr>
	<th>No.</th>
	<th>Kode Obat</th>
	<th>Nama Obat</th>
	<th>Jenis Obat</th>
	<th>Tanggal Expired</th>
	<th>Jumlah</th>
	<th>Aksi</th>
	
	</tr>
	<?php $no = 1 ;
	     while($data=mysqli_fetch_array($query)){
	     	?>
	     	<tr>
	     	<td><?php echo $no ?></td>

	     	<td><?php echo $data['idObat']?></td>
	     	<td><?php echo $data['namaObat']?></td>
	     	<td><?php echo $data['jenisObat']?></td>
	     	<td><?php echo $data['tanggalExpired']?></td>
	     	
	     	<td><?php echo $data['jumlah']?></td>
	     	
	<td><input type="button" onClick="pesan=confirm('yakin ingin di hapus?');
		 		if(pesan)location.href=('delete.php?idObat=<?php echo $data['idObat']?>'); return false;"value="Hapus">
		 		<input type="button" onclick="location.href=('formobat.php?idObat=<?php echo $data['idObat']?>')" value="Edit">
		 	</td>

	     	</tr>
	     	<?php
	     	$no++;

	     } ?>
	</table>
	<a href="formObat.php">Tambah Data</a>
	</body>


