<?php
session_start();
require_once("koneksi.php");

$_SESSION["nama"] = $name = $_POST["nama"];
$_SESSION["email"] = $email = $_POST["email"];
$_SESSION["no_hp"] = $NomorHp = $_POST["no_hp"];
$_SESSION["jenis_kelamin"] = $jenisKelamin = $_POST["jenis_kelamin"];
$_SESSION["username"] = $username = $_POST["username"];
$_SESSION["role"] = $role = $_POST["role"];

$password = $_POST["password"];
$confirmPassword = $_POST["confirmpassword"];

if ($password != $confirmPassword) {
    echo "<script>alert('password anda tidak sama')</script>";
    header("Location: ./formdaftar.php");
    return;
}

$query = "INSERT INTO `akun`(`id_user`, `nama`, `email`, `no_hp`, `jenis_kelamin`, `username`, `password`,`role`) VALUES (null, '{$name}','{$email}','{$NomorHp}','{$jenisKelamin}','{$username}','{$password}','{$role}')";

try {
    $result = mysqli_query($db, $query);
} catch (Exception $e) {
    echo "<script type='text/javascript'>alert('{$e->getMessage()}')</script>";
}

//cek apakah user berhasil dimasukkan ke database
if ($result != true) { //gagal
    echo "<script type='text/javascript'>alert('Insert data gagal')</script>";
    header("Location: ./formdaftar.php");
    return;
}

//insert data berhasil
echo "<script>alert('Insert data berhasil')</script>";
header("Location: ./indexlogin.php");
return;
