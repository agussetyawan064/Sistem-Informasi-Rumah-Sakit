<?php 
include("../../Koneksi/koneksi.php");
$ID_DOKTER=$_POST['ID_DOKTER'];
$NAMA_DOKTER=$_POST['NAMA_DOKTER'];
$SPESIALIS=$_POST['SPESIALIS'];
$JAM_KERJA=$_POST['JAM_KERJA'];
$TARIF_DOKTER=$_POST['TARIF_DOKTER'];


$query=mysql_query("insert into dokter
	values ('$ID_DOKTER','$NAMA_DOKTER','$SPESIALIS','$JAM_KERJA','$TARIF_DOKTER')");
header('Location: ../menu/lihat dokter.php');
?>
