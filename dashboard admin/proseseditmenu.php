<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id_menu = $_POST['id_menu'];
    $nama = $_POST['nama'];
    $stok = $_POST['stok'];
	$harga = $_POST['harga'];

    // buat query update
    $sql = "UPDATE menu SET id_menu='$id_menu', nama='$nama', stok='$stok', harga='$harga'  WHERE id_menu=$id_menu";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: editmenu.php');
    } else {
        // kalau gagal tampilkan pesan
        ini_set('display_errors', 1);
    }


} else {
    ini_set('display_errors', 1);
}

?>
