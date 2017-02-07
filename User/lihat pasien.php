<!doctype html><link rel="stylesheet" type="text/css" href="../Tampilan/tampilan center.css">
<html>
<head>
	<title>SIRS</title>
	<link rel="stylesheet" type="text/css" href="../Tampilan/tampilan admin.css">
	
</head>

<body>
	<div class="main">
		<div class="header">SISTEM INFORMASI RUMAH SAKIT &copy;</div>
		<div class="sidebar">
			<div class="menu">
				<ul>
					<li><a href="../index.php">Home</a></li>
					<li><a href="lihat pasien.php"> Lihat Data Pasien </a></li>
					<li><a href="lihat dokter.php"> Lihat Data Dokter </a></li>
					<li><a href="lihat ruang.php"> Lihat Data Ruang </a></li>
				</ul>
			</div>
		</div>
		<div class="center">
			<h1 align="center">Data Pasien</h1>

			<table class="tabel">
				<tr class="header-tr">
					<th>No.</th>
					<th>ID Pasien</th>
					<th>ID Ruang</th>
					<th>Nama Pasien</th>
					<th>Penyakit</th>
					<th>Tanggal Lahir</th>
					<th>Alamat</th>
					<th>Tanggal Masuk</th>


				</tr>
				<?php 
				include("../Koneksi/koneksi.php");

				$query = mysql_query("SELECT * FROM pasien");
				$no=1;

				while($tampil=mysql_fetch_array($query)){
					?>

					<tr class="tabel-range">
						<td><?php echo $no++;?><br></td>
						<td><?php echo $tampil['ID_PASIEN'];?><br></td>
						<td><?php echo $tampil['ID_RUANG'];?><br></td>
						<td><?php echo $tampil['NAMA_PASIEN'];?><br></td>
						<td><?php echo $tampil['PENYAKIT'];?><br></td>
						<td><?php echo $tampil['TGL_LAHIR'];?><br></td>
						<td><?php echo $tampil['ALAMAT'];?><br></td>
						<td><?php echo $tampil['TGL_MASUK'];?><br></td>

					</tr>

					<?php
				}
				?>
			</table>
		</div>
		<div class="footer">
			<p>&copy; 2016 Praktikum Basdat | Sistem Informasi Rumah Sakit</p>
		</div>
	</div>
</body>
</html>