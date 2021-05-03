<?php
session_start();
unset($_SESSION["email"]);
$_SESSION["alert"] = "Anda telah berhasil logout!";
header("location:login.php")
?>