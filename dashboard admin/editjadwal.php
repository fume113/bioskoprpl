	<?php

	include("koneksi.php");

	// kalau tidak ada id di query string
	if (!isset($_GET['id_jadwal'])) {
		header('Location: datajadwal.php');
	}

	//ambil id dari query string
	$id_jadwal = $_GET['id_jadwal'];

	// buat query untuk ambil data dari database
	$sql = "SELECT * FROM jadwal WHERE id_jadwal=$id_jadwal";
	$query = mysqli_query($db, $sql);
	$jadwal    = mysqli_fetch_assoc($query);

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
		<!-- Links CSS Manual -->
		<link rel="stylesheet" href="./editjadwal.css">
	</head>

	<body>
		<form action="proseseditjadwal.php" method="POST">
			<div class="wrap">
				<div class="container">
					<h1>Form Edit Jadwal</h1>
					<form action="./editjadwal.php" method="POST">
						<table>
							<tr>
								<td><label>ID Jadwal</label></td>
								<td>
									<input type="text" name="id_jadwal" id="name" value="<?php echo $jadwal['id_jadwal'] ?>" />
								</td>
							</tr>
							<tr>
								<td><label>Tanggal</label></td>
								<td>
									<input type="date" name="tanggal" id="name" value="<?php echo $jadwal['tanggal'] ?>" />
								</td>
							</tr>
							<tr>
								<td><label> Jam Tayang </label></td>
								<td>
									<input type="time" name="jam_tayang" id="name" value="<?php echo $jadwal['jam_tayang'] ?>" />
								</td>
							</tr>
							<tr>
								<td><label> Id Film</label></td>
								<td>
									<input type="text" name="id_film" value="<?php echo $jadwal['id_film'] ?>" />
								</td>
							</tr>
						</table>

						<div class="flex-editjadwal">
							<input type="submit" name="simpan" value="Simpan" />
							<li><a href="./datajadwal.php" class="kluar-editjadwal">Kembali</a></li>
						</div>
					</form>
				</div>
			</div>
			</div>