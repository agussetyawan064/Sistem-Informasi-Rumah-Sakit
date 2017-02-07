<?php 
session_start();
include ("../Koneksi/koneksi.php");
$USERNAME=$_POST['USERNAME'];
$PASSWORD=$_POST['PASSWORD'];

$query=mysql_query("SELECT * FROM petugas WHERE USERNAME='$USERNAME' AND PASSWORD='$PASSWORD' ");

if($query){
	if(mysql_num_rows($query) > 0){
		header('Location:main menu.php');
	}else{
		echo "<script> alert('Username atau Password Salah!!!'); location = 'index.php'; </script>";
	}

}



 ?>