<?php
if (empty($_SESSION["email"])){
    $_SESSION["alert"] = "Anda harus melakukan login terlebih dahulu!";
    header("location:login.php");
}

?>