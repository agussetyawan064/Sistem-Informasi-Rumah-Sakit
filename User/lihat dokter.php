<!DOCTYPE html>
<html>
<head>
	<title>SIRS</title>
	<link rel="stylesheet" type="text/css" href="../Tampilan/tampilan admin.css">
	<link rel="stylesheet" type="text/css" href="../Tampilan/tampilan center.css">
	
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
			<h1 align="center">Data Dokter</h1>

			<table class="tabel">
				<tr class="header-tr">
					<th>No.</th>
					<th>ID Dokter</th>
					<th>Nama Dokter</th>
					<th>Spesialis</th>
					<th>Jam Kerja</th>
					<th>Tarif Dokter</th>

				</tr>
				<?php 
				include("../Koneksi/koneksi.php");

				$query = mysql_query("SELECT * FROM dokter");
				$no=1;
				while($tampil=mysql_fetch_array($query)){
					?>

					<tr class="tabel-range">
						<td><?php echo $no++;?><br></td>
						<td><?php echo $tampil['ID_DOKTER'];?><br></td>
						<td><?php echo $tampil['NAMA_DOKTER'];?><br></td>
						<td><?php echo $tampil['SPESIALIS'];?><br></td>
						<td><?php echo $tampil['JAM_KERJA'];?><br></td>
						<td><?php echo $tampil['TARIF_DOKTER'];?><br></td>

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