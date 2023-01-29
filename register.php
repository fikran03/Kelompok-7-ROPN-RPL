<!DOCTYPE html>
<html>
<head>
	<title>HALAMAN REGISTER</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<h1>SILAHKAN MELAKUKAN <br/> REGISTER TERLEBIH DAHULU</h1>

	<div class="kotak_login">
		<p class="tulisan_login">SILAHKAN REGISTER</p>

		<form action="" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username ..">

            <label>Email</label>
			<input type="text" name="email" class="form_login" placeholder="Email ..">

			<label>Password</label>
			<input type="text" name="password" class="form_login" placeholder="Password ..">

			<input type="submit" name=tombol class="tombol_login" value="REGISTER">
			<br/>
			<br/>
			<center>
				<a class="link" href="http://localhost/html/login.php">KEMBALI</a>
			</center>
		</form>

<?php
include 'koneksiregister.php';

if(isset($_POST['tombol'])) {
$user = $_POST['username'];
$email= $_POST['email'];
$pass = $_POST['password'];

$sql = mysqli_query($con, "INSERT INTO register VALUES('$user','$email','$pass')");
	$ck = mysqli_query($con, "INSERT INTO login VALUES('$email','$pass')");

if($sql){
		$_SESSION['coklat'] = $user;
    header("location:index.html");
}
}
?>  
    </div>


</body>
</html>