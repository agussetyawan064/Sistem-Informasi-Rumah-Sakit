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
			<h1 align="center">Data Pasien</h1>

			<table class="tabel" >
				<tr class="header-tr">
					<th>No.</th>
					<th>ID Pasien</th>
					<th>ID Ruang</th>
					<th>Nama Pasien</th>
					<th>Penyakit</th>
					<th>Tanggal Lahir</th>
					<th>Alamat</th>
					<th>Tanggal Masuk</th>
					<th>Modif Data</th>
				</tr>
				<?php 
				include("../../Koneksi/koneksi.php");

				$query = mysql_query("SELECT * FROM pasien");
				$no=1;

				while($tampil=mysql_fetch_array($query)){
					$ID_PASIEN=$tampil['ID_PASIEN'];
					$ID_RUANG=$tampil['ID_RUANG'];
					$NAMA_PASIEN=$tampil['NAMA_PASIEN'];
					$PENYAKIT=$tampil['PENYAKIT'];
					$TGL_LAHIR=$tampil['TGL_LAHIR'];
					$ALAMAT=$tampil['ALAMAT'];
					$TGL_MASUK=$tampil['TGL_MASUK'];
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
						<td><a href="../proses/aksi data.php?page=edit-pasien&ID_PASIEN=<?php echo $ID_PASIEN; ?>"><input type="button" name="edit" class="tombol-edit" value="Edit Data"/></a>
							<a href="../proses/aksi data.php?page=hapus-pasien&ID_PASIEN=<?php echo $ID_PASIEN; ?>" onclick="return confirm('Anda yakin akan menghapus Data Pasien !!! ')"><input type="button" name="hapus" class="tombol-hapus" value="Pulang"/></a><d>

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