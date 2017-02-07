<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="../Tampilan/tampilan admin.css">
	<link rel="stylesheet" type="text/css" href="../Tampilan/tambah data.css">
</head>

<body>
	<div class="main">
		<div class="header">SISTEM INFORMASI RUMAH SAKIT &copy;</div>
		<div class="centerlog">
		<div class="logo"><br>SIRS</div>
			<div class="formulir">
				<h2 align="center">Login</h2>
				<form action="loginNew.php" method="POST" name="input" >
					<table align="center">
						<tr></td><td><input type="text" name="USERNAME" placeholder="Username" class="input-login"></td></tr>
						<tr><td><input type="password" name="PASSWORD" placeholder="Password" class="input-login"  ></td></tr>

					</table>
					<tr><td><input type="submit" name="Login" value="Login" class="login"></td></tr>
				</form>
			</div>
		</div>
		<div class="footer">
			<p>&copy; 2016 Praktikum Basdat | Sistem Informasi Rumah Sakit</p>
		</div>
	</div>
</body>
</html>


