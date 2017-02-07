<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="../../Tampilan/tampilan admin.css">
	<link rel="stylesheet" type="text/css" href="../../Tampilan/tambah data.css">

</head>

<body>
	<div class="main">
		<div class="header">SISTEM INFORMASI RUMAH SAKIT &copy;</div>
		<div class="sidebar">
			<div class="menu">
				<ul>
					<!--<h3>Menu Admin</h3>-->
					<li><a href="../main menu.php">Home</a></li>
					<li><a href="tambah pasien.php">Tambah Data Pasien</a></li>
					<li><a href="tambah dokter.php">Tambah Data Dokter</a></li>
					<li><a href="lihat pasien.php"> Lihat Data Pasien </a></li>
					<li><a href="lihat dokter.php"> Lihat Data Dokter </a></li>
					<li><a href="lihat ruang.php"> Lihat Data Ruang </a></li>
					<li><a href="detil pembayaran.php"> Detil Pembayaran </a></li>
					<li><a href="pasien pulang.php"> Lihat Data Pasien Pulang </a></li>
					<li><a href="../index.php">Logout</a></li>
				</ul>
			</div>
		</div>
		<div class="center">
			
			<form action="../proses/proses dokter.php" method="POST" class="form-tambah">
				<h1 align="center">Tambah Data Dokter</h1>
				<table>
					<tr >
						<td>ID Dokter</td>
						<td><input type="text" name="ID_DOKTER" class="tabel-input"><br></td>
					</tr>

					<tr>
						<td>Nama Dokter</td>
						<td><input type="text" name="NAMA_DOKTER" class="tabel-input"><br></td>
					</tr>

					<!--<tr>
						<td>Spesialis</td>
						<td><input type="text" name="SPESIALIS" class="tabel-input"><br></td>
					</tr>-->
					<tr>
						<td>Spesialis</td>
						<td><select name="SPESIALIS" class="tabel-input">
							<option value="Jantung" selected>Jantung</option>
							<option value="Syaraf" >Syaraf</option>
						</select><td>
					</tr>

					<tr>
						<td>Jam Kerja</td>
						<td><input type="time" name="JAM_KERJA" class="tabel-input"><br></td>
					</tr>

					<tr>
						<td>Tarif</td>
						<td><input type="text" name="TARIF_DOKTER" class="tabel-input"><br></td>
					</tr>


				</table>
				<button class="tombol-tambah-dokter">Tambah</button>


			</form>
		</div>
		<div class="footer">
			<p>&copy; 2016 Praktikum Basdat | Sistem Informasi Rumah Sakit</p>
		</div>
	</div>
</body>
</html>