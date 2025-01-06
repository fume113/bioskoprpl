<?php

include("koneksi.php");

// kalau tidak ada id di query string
if (!isset($_GET['id_menu'])) {
	header('Location: datamenu.php');
}

//ambil id dari query string
$id_menu = $_GET['id_menu'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM menu WHERE id_menu=$id_menu";
$query = mysqli_query($db, $sql);
$menu    = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
	die("data tidak ditemukan...");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Link Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- Link Js Bootstrap -->
	<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<!-- Link Font Google -->
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&family=Roboto:wght@300&display=swap" rel="stylesheet">
	<!-- link CSS Manual -->
	<link rel="stylesheet" href="./editmenu.css" />

</head>

<body>
	<form action="proseseditmenu.php" method="POST">
		<div class="wrap">
			<h1>Form Edit Menu</h1>
			<div class="container">
				<form action="./datamenu.php" method="POST">
					<table>
						<tr>
							<td><label>ID Menu</label></td>
							<td>
								<input type="text" name="id_menu" id="name" value="<?php echo $menu['id_menu'] ?>" />
							</td>
						</tr>
						<tr>
							<td><label> Nama </label></td>
							<td>
								<input type="text" name="nama" id="name" value="<?php echo $menu['nama'] ?>" />
							</td>
						</tr>
						<tr>
						<tr>
							<td><label> Harga</label></td>
							<td>
								<input type="text" name="harga" value="<?php echo $menu['harga'] ?>" />
							</td>
						</tr>
					</table>

					<div class="flex-editmenu">
						<input type="submit" name="simpan" value="Simpan" />
						<li><a href="datamenu.php" class="kluar-editmenu">kembali</a></li>
				</form>
			</div>
		</div>
		</div>