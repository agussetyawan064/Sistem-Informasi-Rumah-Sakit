<?php
$koneksi = mysql_connect("localhost", "root", "");
if($koneksi){
	$get_database = mysql_selectdb("rumahsakit");
	if($get_database){
		//echo "Koneksi Berhasil";
	}else{
		//echo "Koneksi Gagal";
	}
}
?>