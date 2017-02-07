<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="../../Tampilan/tampilan admin.css">
	<link rel="stylesheet" type="text/css" href="../../Tampilan/tampilan center.css">
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
			<h1 align="center">Data Dokter</h1>

			<table class="tabel">
				<tr class="header-tr">
					<th>No.</th>
					<th>ID Dokter</th>
					<th>Nama Dokter</th>
					<th>Spesialis</th>
					<th>Jam Kerja</th>
					<th>Tarif Dokter</th>
					<th>Modif Data</th>

				</tr>
				<?php
				include("../../Koneksi/koneksi.php");

				$query = mysql_query("SELECT * FROM dokter");
				$no=1;
				while($tampil=mysql_fetch_array($query)){
					$ID_DOKTER=$tampil['ID_DOKTER'];
					$NAMA_DOKTER=$tampil['NAMA_DOKTER'];
					$SPESIALIS=$tampil['SPESIALIS'];
					$JAM_KERJA=$tampil['JAM_KERJA'];
					$TARIF_DOKTER=$tampil['TARIF_DOKTER'];
					?>

					<tr class="tabel-range">
						<td><?php echo $no++;?><br></td>
						<td><?php echo $tampil['ID_DOKTER'];?><br></td>
						<td><?php echo $tampil['NAMA_DOKTER'];?><br></td>
						<td><?php echo $tampil['SPESIALIS'];?><br></td>
						<td><?php echo $tampil['JAM_KERJA'];?><br></td>
						<td><?php echo $tampil['TARIF_DOKTER'];?><br></td>
						<td><a href="../proses/aksi data.php?page=edit-dokter&ID_DOKTER=<?php echo $ID_DOKTER; ?>" "><input type="button" name="edit" class="tombol-edit" value="Edit Data"/></a>
							<a href="../proses/aksi data.php?page=hapus-dokter&ID_DOKTER=<?php echo $ID_DOKTER; ?>" onclick="return confirm ('Anda yakin akan menghapus Data Dokter !!!')"><input type="button" name="hapus" class="tombol-hapus" value="Hapus Data"tombol-hapus/></a>
						</td>
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
