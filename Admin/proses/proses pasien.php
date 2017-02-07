<?php 
include("../../Koneksi/koneksi.php");
$ID_PASIEN=$_POST['ID_PASIEN'];
$ID_RUANG=$_POST['ID_RUANG'];
$NAMA_PASIEN=$_POST['NAMA_PASIEN'];
$PENYAKIT=$_POST['PENYAKIT'];
$TGL_LAHIR=$_POST['TGL_LAHIR'];
$ALAMAT=$_POST['ALAMAT'];
$TGL_MASUK=$_POST['TGL_MASUK'];

$query=mysql_query("insert into pasien
	values ('$ID_PASIEN','$ID_RUANG','$NAMA_PASIEN','$PENYAKIT','$TGL_LAHIR','$ALAMAT','$TGL_MASUK')");
header('Location:../menu/lihat pasien.php');
?>
