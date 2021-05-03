<?php
include 'koneksi.php';

$kode_barang=$_POST['kode_barang'];
$nama_barang=$_POST['nama_barang'];
$jumlah=$_POST['jumlah'];
$produksi=$_POST['produksi'];
$kadaluarsa=$_POST['kadaluarsa'];

$query=mysqli_query($hubung,"INSERT INTO data_barang(kode_barang, nama_barang, jumlah, produksi, kadaluarsa) 
VALUES ('$kode_barang', '$nama_barang','$jumlah', '$produksi', '$kadaluarsa')")
or die(mysqli_error($hubung));

if ($query){
    header("Location: index.php");
}else{
    echo"Gagal Input Data";
}
?>