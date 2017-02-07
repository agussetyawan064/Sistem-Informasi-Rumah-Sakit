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

	if (isset($_GET['ID_DOKTER'])) {
		$ID_DOKTER = $_GET['ID_DOKTER'];
	} else {
		header('Location: lihat dokter.php');
	}
	$query = "SELECT * FROM dokter WHERE ID_DOKTER = '$ID_DOKTER'";
	$sql = mysql_query ($query);
	$hasil = mysql_fetch_array ($sql);
	$ID_DOKTER = $hasil['ID_DOKTER'];
	$NAMA_DOKTER = $hasil['NAMA_DOKTER'];
	$SPESIALIS = $hasil['SPESIALIS'];
	$JAM_KERJA = $hasil['JAM_KERJA'];
	$TARIF_DOKTER= $hasil['TARIF_DOKTER'];

	if (isset($_POST['edit'])) {
		$ID_DOKTER = $_POST['HID_DOKTER'];
		$NAMA_DOKTER = $_POST['NAMA_DOKTER'];
		$SPESIALIS = $_POST['SPESIALIS'];
		$JAM_KERJA = $_POST['JAM_KERJA'];
		$TARIF_DOKTER = $_POST['TARIF_DOKTER'];

		$query = "UPDATE dokter SET NAMA_DOKTER='$NAMA_DOKTER', SPESIALIS='$SPESIALIS', JAM_KERJA='$JAM_KERJA', TARIF_DOKTER='$TARIF_DOKTER' WHERE ID_DOKTER='$ID_DOKTER'";
		$sql = mysql_query ($query);
		if ($sql) {
			echo"<script>alert('Data  berhasil diedit !',document.location.href='../menu/lihat dokter.php')</script>";
		} else {
			echo"<script>alert('Data gagal diedit !',document.location.href='../menu/lihat dokter.php')</script>";
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
				<h1 align="center">Edit Data Dokter <?php echo $NAMA_DOKTER; ?></h1>
				<table>
					<tr >
						<td>ID Dokter </td> 
						<td><input type="text" name="ID_DOKTER"  value="<?php echo $ID_DOKTER; ?>" class="tabel-input" ><br></td>
					</tr>

					<tr>
						<td>Nama Dokter</td>
						<td><input type="text" name="NAMA_DOKTER" value="<?php echo $NAMA_DOKTER; ?>" class="tabel-input"><br></td>
					</tr>

					<tr>
						<td>Spesialis</td>
						<td><input type="text" name="SPESIALIS" value="<?php echo $SPESIALIS; ?>"class="tabel-input"><br></td>
					</tr>

					<tr>
						<td>Jam Kerja</td>
						<td><input type="time" name="JAM_KERJA" value="<?php echo $JAM_KERJA; ?>" class="tabel-input"><br></td>
					</tr>

					<tr>
						<td>Tarif</td>
						<td><input type="text" name="TARIF_DOKTER" value="<?php echo $TARIF_DOKTER; ?>" class="tabel-input"><br></td>
					</tr>


				</table>
				<!--<button class="tombol-tambah-dokter" name="edit">Update</button>-->
				<input type="hidden" name="HID_DOKTER" value="<?php echo $ID_DOKTER; ?>">
				<a href="edit dokter.php"><button type="submit" name="edit" class="tombol-tambah-dokter">Update</button></a>


			</form>
		</div>
		<div class="footer">
			<p>&copy; 2016 Praktikum Basdat | Sistem Informasi Rumah Sakit</p>
		</div>
	</div>
</body>
</html>