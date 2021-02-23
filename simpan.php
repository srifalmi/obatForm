
<?php
include 'koneksi.php' ;
$idObat = (isset ($_POST['idObat']) ? $_POST['idObat'] : '');
$namaObat =(isset ($_POST['namaObat']) ? $_POST['namaObat'] : '');
$jenisObat= (isset ($_POST['jenisObat']) ? $_POST['jenisObat'] : '');
$tanggalExpired = (isset ($_POST['tanggalExpired']) ? $_POST['tanggalExpired'] : '');
$jumlah = (isset ($_POST['jumlah']) ? $_POST['jumlah'] : '');

$simpan = (isset ($_POST['simpan']) ? $_POST['simpan'] : '');


if($simpan =='lama')
{
	$query_edit = mysqli_query($koneksi, "UPDATE tbObat SET  namaObat = '$namaObat',  jenisObat = '$jenisObat ', tanggalExpired= '$tanggalExpired', jumlah = '$jumlah' WHERE idObat = '$idObat'");
if($query_edit)
{
echo "Data Berhasil di Edit <br>";
echo "<a href='dataObat.php'>Lihat Data</a>";
}
}
else
{

$query_simpan = mysqli_query($koneksi ,"INSERT INTO tbobat VALUES('$idObat','$namaObat','$jenisObat','$tanggalExpired','$jumlah')") or die("Kesalahan pada Query, Silahkan Periksa Query anda ....");

if($query_simpan)

{
echo "Data Berhasil di simpan... <br>";
echo "<a href='dataobat.php'>Lihat Data</a>";
 }
}
?>

