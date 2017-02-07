<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="../../Tampilan/tampilan admin.css">
	<link rel="stylesheet" type="text/css" href="../../Tampilan/tambah data.css">

</head>

<body>
	<?php
	include ('../../Koneksi/koneksi.php');

	if (isset($_GET['ID_PASIEN'])) {
		$ID_PASIEN = $_GET['ID_PASIEN'];
	} else {
		header('Location: lihat pasien.php');
	}
	$query = "SELECT * FROM pasien WHERE ID_PASIEN = '$ID_PASIEN'";
	$sql = mysql_query ($query);
	$hasil = mysql_fetch_array ($sql);
	$ID_PASIEN = $hasil['ID_PASIEN'];
	$ID_RUANG = $hasil['ID_RUANG'];
	$NAMA_PASIEN = $hasil['NAMA_PASIEN'];
	$PENYAKIT = $hasil['PENYAKIT'];
	$TGL_LAHIR = $hasil['TGL_LAHIR'];
	$ALAMAT= $hasil['ALAMAT'];
	$TGL_MASUK=$hasil['TGL_MASUK'];

	
	if (isset($_POST['edit'])) {
		$ID_PASIEN = $_POST['HID_PASIEN'];
		$ID_RUANG = $_POST['ID_RUANG'];
		$NAMA_PASIEN = $_POST['NAMA_PASIEN'];
		$PENYAKIT = $_POST['PENYAKIT'];
		$TGL_LAHIR = $_POST['TGL_LAHIR'];
		$ALAMAT = $_POST['ALAMAT'];
		$TGL_MASUK = $_POST['TGL_MASUK'];



		$query = "UPDATE pasien SET ID_RUANG='$ID_RUANG', NAMA_PASIEN='$NAMA_PASIEN', PENYAKIT='$PENYAKIT', TGL_LAHIR='$TGL_LAHIR', ALAMAT='$ALAMAT' WHERE ID_PASIEN ='$ID_PASIEN'";
		$sql = mysql_query ($query);
		if ($sql) {
			echo"<script>alert('Data  berhasil diedit !',document.location.href='../menu/lihat pasien.php')</script>";
		} else {
			echo"<script>alert('Data gagal diedit !',document.location.href='../menu/lihat pasien.php')</script>";
		}
	}
	?>
	
	<div class="main">

		<div class="header">SISTEM INFORMASI RUMAH SAKIT &copy;</div>
		<div class="sidebar">
			<div class="menu">
				<ul>
					<!--<h3>Menu Admin</h3>-->
					<li><a href="../main menu.php">Home</a></li>
					<li><a href="../menu/tambah pasien.php">Tambah Data Pasien</a></li>
					<li><a href="../menu/tambah dokter.php">Tambah Data Dokter</a></li>
					<li><a href="../menu/lihat pasien.php"> Lihat Data Pasien </a></li>
					<li><a href="../menu/lihat dokter.php"> Lihat Data Dokter </a></li>
					<li><a href="../menu/lihat ruang.php"> Lihat Data Ruang </a></li>
					<li><a href="../menu/detil pembayaran.php"> Detil Pembayaran </a></li>
					<li><a href="../menu/pasien pulang.php"> Lihat Data Pasien Pulang </a></li>
					<li><a href="../index.php">Logout</a></li>
				</ul>
			</div>
		</div>

		<div class="center">
			

			<form action="" method="POST" class="form-tambah" name="edit">
				<h1 align="center">Edit Data Pasien <?php echo $NAMA_PASIEN; ?></h1>
				<table>
					<tr >
						<td>ID Pasien </td> 
						<td><input type="text" name="ID_PASIEN"  value="<?php echo $ID_PASIEN; ?>" class="tabel-input" ><br></td>
					</tr>

					<tr >
						<td>ID Ruang </td> 
						<td><input type="text" name="ID_RUANG"  value="<?php echo $ID_RUANG; ?>" class="tabel-input" ><br></td>
					</tr>

					<tr>
						<td>Nama Pasien</td>
						<td><input type="text" name="NAMA_PASIEN" value="<?php echo $NAMA_PASIEN; ?>" class="tabel-input"><br></td>
					</tr>
					<td>Penyakit</td>
						<td><input type="text" name="PENYAKIT" value="<?php echo $PENYAKIT; ?>" class="tabel-input"><br></td>
					</tr>


					<tr>
						<td>Tanggal Lahir</td>
						<td><input type="date" name="TGL_LAHIR" value="<?php echo $TGL_LAHIR; ?>"class="tabel-input"><br></td>
					</tr>

					<tr>
						<td>Alamat Pasien</td>
						<td><input type="text" name="ALAMAT" value="<?php echo $ALAMAT; ?>" class="tabel-input"><br></td>
					</tr>

					<tr>
						<td>Tanggal Masuk</td>
						<td><input type="date" name="TGL_MASUK" value="<?php echo $TGL_MASUK; ?>" class="tabel-input"><br></td>
					</tr>


				</table>
				<!--<button class="tombol-tambah-dokter" name="edit">Update</button>-->
				<input type="hidden" name="HID_PASIEN" value="<?php echo $ID_PASIEN; ?>">
				<a href="edit pasien.php"><button type="submit" name="edit" class="tombol-tambah-dokter">Update</button></a>


			</form>
		</div>
		<div class="footer">
			<p>&copy; 2016 Praktikum Basdat | Sistem Informasi Rumah Sakit</p>
		</div>
	</div>
</body>
</html>