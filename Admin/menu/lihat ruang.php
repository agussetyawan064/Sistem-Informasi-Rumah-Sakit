<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="../../Tampilan/tampilan admin.css">
	<link rel="stylesheet" type="text/css" href="../../Tampilan/tampilan center.css">
	
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
			<h1 align="center">Data Ruang</h1>

			<table class="tabel">
				<tr class="header-tr">
					<th>No.</th>
					<th>ID Ruang</th>
					<th>Nama Ruang</th>
					<th>Kelas</th>
					<th>Tarif Ruang</th>
					<th>Kuota</th>
					

				</tr>
				<?php 
				include("../../Koneksi/koneksi.php");

				$query = mysql_query("SELECT * FROM ruang");
				$no=1;
				while($tampil=mysql_fetch_array($query)){
					?>

					<tr class="tabel-range">
						<td><?php echo $no++;?><br></td>
						<td><?php echo $tampil['ID_RUANG'];?><br></td>
						<td><?php echo $tampil['NAMA_RUANG'];?><br></td>
						<td><?php echo $tampil['KELAS'];?><br></td>
						<td><?php echo $tampil['TARIF_RUANG'];?><br></td>
						<td><?php echo $tampil['KUOTA'];?><br></td>

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