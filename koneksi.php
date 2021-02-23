<?php

$host = "localhost";
$username = "root";
$password = "";
$namadb = "obat";
$koneksi = mysqli_connect($host,$username,$password) or die("Kesalahan Pada KONEKSI !!");
mysqli_select_db($koneksi,$namadb) or die("Database ERROR, perhatikan databasenya!!");

?>
