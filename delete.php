<?php

include "koneksi.php";
$idObat = $_GET['idObat'];
$query = "DELETE FROM tbobat WHERE idObat = '$idObat'";
mysqli_query($koneksi, $query);
?>
<script type="text/javascript">
	document.location='dataobat.php';
</script>
