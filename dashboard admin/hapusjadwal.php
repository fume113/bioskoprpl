<?php

include("koneksi.php");

if( isset($_GET['id_jadwal']) ){

    // ambil id dari query string
    $id_jadwal = $_GET['id_jadwal'];

    // buat query hapus
    $sql = "DELETE FROM jadwal WHERE id_jadwal=$id_jadwal";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: datajadwal.php');
    } else {
        ini_set('display_errors', 1);//Atauerror_reporting(E_ALL && ~E_NOTICE);
    }

} else {
    ini_set('display_errors', 1);//Atauerror_reporting(E_ALL && ~E_NOTICE);
}

?>