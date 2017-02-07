<?php  
include
if (isset($_POST['edit'])) {
		$ID_DOKTER = $_POST['HID_DOKTER'];
		$NAMA_DOKTER = $_POST['NAMA_DOKTER'];
		$SPESIALIS = $_POST['SPESIALIS'];
		$JAM_KERJA = $_POST['JAM_KERJA'];
		$TARIF_DOKTER = $_POST['TARIF_DOKTER'];


       //update data di tabel 
		$query = "UPDATE dokter SET NAMA_DOKTER='$NAMA_DOKTER', SPESIALIS='$SPESIALIS', JAM_KERJA='$JAM_KERJA', TARIF_DOKTER='$TARIF_DOKTER' WHERE ID_DOKTER='$ID_DOKTER'";
		$sql = mysql_query ($query);
		if ($sql) {
			echo"<script>alert('Data  berhasil diedit !',document.location.href='lihat dokter.php')</script>";
		} else {
			echo"<script>alert('Data gagal diedit !',document.location.href='lihat dokter.php')</script>";
		}
	}

	?>