<?php
include("../../Koneksi/koneksi.php");

if (isset($_GET['ID_DOKTER'])) {
	$ID_DOKTER = $_GET['ID_DOKTER'];
} else {
	die ("Error. No  Selected! ");  
}
?>

<?php
if (!empty($ID_DOKTER) && $ID_DOKTER!= "") {
	$query = "DELETE FROM dokter WHERE ID_DOKTER= '$ID_DOKTER'";
	$sql = mysql_query($query);
	if ($sql) {
		echo"<script>alert('Data telah berhasil dihapus !',document.location.href='../menu/lihat dokter.php')</script>";  
	} else {
		echo"<script>alert('Data gagal dihapus !',document.location.href='../menu/lihat dokter.php')</script>";  
	}

} else {
	die ("Access Denied");  
}
?>