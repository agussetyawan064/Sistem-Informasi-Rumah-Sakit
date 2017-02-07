<?php
include("../../Koneksi/koneksi.php");

if (isset($_GET['ID_PASIEN'])) {
	$ID_PASIEN = $_GET['ID_PASIEN'];
} else {
	die ("Error. No  Selected! ");  
}
?>

<?php
if (!empty($ID_PASIEN) && $ID_PASIEN!= "") {
	$query = "DELETE FROM pasien WHERE ID_PASIEN= '$ID_PASIEN'";
	$sql = mysql_query($query);
	if ($sql) {
		echo"<script>alert('Data telah berhasil dihapus !',document.location.href='../menu/lihat pasien.php')</script>";  
	} else {
		echo"<script>alert('Data gagal dihapus !',document.location.href='../menu/lihat pasien.php')</script>";  
	}


} else {
	die ("Access Denied");  
}
?>