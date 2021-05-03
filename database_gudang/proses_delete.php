<?php
include 'koneksi.php';
$kode_barang=$_GET['kode_barang'];

$query=mysqli_query($koneksi, "DELETE FROM data_barang WHERE kode_barang='$kode_barang' ")
or die(mysqli_error($koneksi));

if($query){
	header("Location: index.php");
}else{
	echo "Gagal hapus data";
}
?>