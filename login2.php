<!DOCTYPE html>
<html>
<head>
	<title>HALAMAN LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<h1>SILAHKAN MELAKUKAN <br/> LOGIN TERLEBIH DAHULU</h1>

	<div class="kotak_login">
		<p class="tulisan_login">SILAHKAN LOGIN</p>

		<form action="" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username atau email ..">

			<label>Password</label>
			<input type="text" name="password" class="form_login" placeholder="Password ..">

			<input type="submit" name=tombol class="tombol_login" value="LOGIN">

			<br/>
			<br/>
			<center>
				<a class="link" href="login.php">KEMBALI</a>
			</center>
			<center>
				<a class="link" href="register.php">Register, jika belum mempunyai akun</a>
			</center>
		</form>
		
<?php
include 'koneksilogin.php';

if(isset($_POST['tombol'])) {
$user = $_POST['username'];
$pass = $_POST['password'];

$sql = mysqli_query($con, "SELECT * FROM login WHERE username='$user' AND password='$pass'");

$x = mysqli_num_rows($sql);
if($x >0){
    $cek = mysqli_fetch_assoc($sql);
    header("location:index.html");
}
}
?>  

	</div>


</body>
</html>