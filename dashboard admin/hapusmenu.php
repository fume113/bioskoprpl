<?php

include("koneksi.php");

if( isset($_GET['id_menu']) ){

    // ambil id dari query string
    $id_menu = $_GET['id_menu'];

    // buat query hapus
    $sql = "DELETE FROM menu WHERE id_menu=$id_menu";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: datamenu.php');
    } else {
        ini_set('display_errors', 1);//Atauerror_reporting(E_ALL && ~E_NOTICE);
    }

} else {
    ini_set('display_errors', 1);//Atauerror_reporting(E_ALL && ~E_NOTICE);
}

?>