<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id_jadwal = $_POST['id_jadwal'];
    $tanggal = $_POST['tanggal'];
    $jam_tayang = $_POST['jam_tayang'];
	$id_film = $_POST['id_film'];

    // buat query update
    $sql = "UPDATE jadwal SET tanggal='$tanggal', jam_tayang='$jam_tayang', id_film='$id_film' WHERE id_jadwal=$id_jadwal";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: editjadwal.php');
    } else {
        // kalau gagal tampilkan pesan
        ini_set('display_errors', 1);
    }


} else {
    ini_set('display_errors', 1);
}

?>
