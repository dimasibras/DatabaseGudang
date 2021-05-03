<?php
session_start();
$koneksi = mysqli_connect("localhost", "root", "", "database_gudang");
$email = $_POST["email"];
$password = $_POST["password"];
$query = mysqli_query($koneksi, "SELECT * FROM admin WHERE email='$email' AND password='$password'")
or die(mysqli_error($koneksi));

if ($data = mysqli_fetch_array($query)){
    $_SESSION["email"] = $data["email"];
    $_SESSION["alert"] = "Anda telah berhasil login.";
    header("location:index.php");
}else{
    $_SESSION["alert"]="Email atau password salah, coba ulangi kembali!";
    header("location:login.php");
}

?>