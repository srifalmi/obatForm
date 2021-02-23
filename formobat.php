<?php

include "koneksi.php";

if(!empty($_GET['idObat'])){
$idObat = $_GET['idObat'] ;
$simpan = 'lama' ;
$query = mysqli_query($koneksi, "select * from tbobat where idObat = '$idObat'");
}
else
{

$simpan = 'baru' ;
$query = mysqli_query($koneksi , "select '' as idObat, '' as namaObat, '' jenisObat, '' as tanggalExpired, '' as jumlah");
}
  $data = mysqli_fetch_array($query);
?>

<body>
	<h1 style="color:#009;">Form Obat</h1>
	<form name="fbuku" action="simpan.php" method="post">
		<input type="hidden" name="simpan" value="<?php echo $simpan ?>">
		<table border="2">
			<tr>
				<th align="left">Kode Obat</th>
				<td><input type="text" name="idObat" size="7" maxlength="7" value="<?php echo $data['idObat']?>"></td>
			</tr>

		<tr>
				<th align="left">Nama Obat</th>
				<td><textarea cols="50" rows="5" name="namaObat"><?php echo $data['namaObat']?></textarea></td>
			</tr>
		<tr>


		<tr>
              <th align="left">Jenis Obat</th>
			<td>
				<input type="radio" name="jenisObat" value="Baik">Baik<?php echo $data['jenisObat']?>
				<input type="radio" name="jenisObat" value="Rusak">Rusak<?php echo $data['jenisObat']?>
				<td><td>
				</tr>


				<th align="left">Tanggal Kadarluarsa</th>

				<td><input type="date" name="tanggalExpired" size="50" maxlength="50" value="<?php echo $data['tanggalExpired']?>"></td>
			</tr>

</tr>

			<tr>

			<tr>
				<th align="left">Jumlah Obat</th>
				<td><input type="text" name="jumlah" size="20" maxlength="20" value="<?php echo $data['jumlah']?>"></td>
			</tr>

			<tr>


				<td colspan="2" align="right"><input type="submit"  value="Simpan"> <input type="button" onClick="location.href=('dataobat.php')" value="<<Kembali"></td>
			
			</tr>
		</table>
	</form>
</body>