<?php
include 'koneksi.php';
include 'koneksi_email.php';
$npm=$_GET['npm'];

$query=mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE npm='$npm' ")
or die(mysqli_error($koneksi));

if($query){
	header("Location: index.php");
}else{
	echo "Gagal hapus data";
}
?>