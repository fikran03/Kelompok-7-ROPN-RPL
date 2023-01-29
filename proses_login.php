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