<?php
if (isset($_POST['Login'])) {
	$user = $_POST['username'];
	$pass = $_POST['password'];
	if ($user == "admin" && $pass == "123") {
		header('Location:main menu.php');
		//include("main menu.php");
	} else {
		echo "<script> alert('Username atau Password Salah!!!'); location = 'index.php'; </script>";
	}
}
?>