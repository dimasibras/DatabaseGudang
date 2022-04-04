<?php
session_start();
include 'koneksi.php';
include 'koneksi_email.php';
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

		<style>
			h1{
				padding-top: 3rem;
			}
			.table{
				padding-top: 1rem;
			}
		</style>
		
		<title>Data Produk - Gudang PT Mie Jaya</title>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">Database Gudang - PT Mie Jaya</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item">
							<a class="nav-link"><?php echo $_SESSION["email"] ?></a>
						</li>
						<li class="nav-item">
							<a class="nav-link btn btn-danger" href="logout.php">Logout</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<div class="container">
			<div class="row text-center text-dark">
				<h1>Tabel Daftar Produk</h1>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="col-md-3">
						<a class="nav-link btn btn-success" href = tambah.php>Tambah Data</a>
					</div>
					<div class="table">
						<table border="2" class="table table-striped">
							<thead>
								<tr>
									<th>Kode Produk</th>
									<th>Nama Produk</th>
									<th>Jumlah Box</th>
									<th>Tanggal Produksi</th>
									<th>Tanggal Kadaluarsa</th>
									<th>Opsi</th>
								</tr>
							</thead>
							<tbody>
								<?php
								include 'koneksi.php';
								$data=mysqli_query($koneksi, "SELECT * FROM data_barang") or die (mysqli_error($koneksi));
								foreach($data as $baris){ ?>
								<tr>
									<td><?php echo $baris['kode_barang'] ?></td>
									<td><?php echo $baris['nama_barang'] ?></td>
									<td><?php echo $baris['jumlah'] ?></td>
									<td><?php echo $baris['produksi'] ?></td>
									<td><?php echo $baris['kadaluarsa'] ?></td>
									<td>
										<a href="update.php?kode_barang=<?php echo $baris['kode_barang'] ?>" class="btn btn-success">Update</a>
										<a href="proses_delete.php?kode_barang=<?php echo $baris['kode_barang'] ?>" class="btn btn-danger">Delete</a>
									</td>
									<?php } ?>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

	</body>
</html>