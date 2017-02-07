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
			
			<form action="../proses/proses pasien.php" method="POST" class="form-tambah">
				<h1 align="center">Tambah Data Pasien</h1>
				<table>
					<tr >
						<td>ID Pasien</td>
						<td><input type="text" name="ID_PASIEN" class="tabel-input"><br></td>
					</tr>

					<tr >
						<td>ID Ruang</td>
						<td><input type="text" name="ID_RUANG" class="tabel-input"><br></td>
					</tr>

					<tr>
						<td>Nama Pasien</td>
						<td><input type="text" name="NAMA_PASIEN" class="tabel-input"><br></td>
					</tr>

					<td>Penyakit</td>
						<td><input type="text" name="PENYAKIT" class="tabel-input"><br></td>
					</tr>

					<tr>
						<td>Tanggal Lahir</td>
						<td><input type="date" name="TGL_LAHIR" class="tabel-input"><br></td>
					</tr>

					<tr>
						<td>Alamat</td>
						<td><input type="text" name="ALAMAT" class="tabel-input"><br></td>
					</tr>

					<tr>
						<td>Tanggal Masuk</td>
						<td><input type="date" name="TGL_MASUK" class="tabel-input"><br></td>
					</tr>


				</table>
				<button class="tombol-tambah-pasien">Tambah</button>


			</div>
			<div class="footer">
				<p>&copy; 2016 Praktikum Basdat | Sistem Informasi Rumah Sakit</p>
			</div>
		</div>
	</body>
	</html>