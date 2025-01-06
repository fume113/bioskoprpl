<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Link Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Link CSS -->
  <link rel="stylesheet" href="style1.css" />
  <!-- Link Js Bootstrap -->
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Link Font Google -->
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>

<body>
  <div class="wrap">
    <h1>Form Tambah Menu</h1>
    <div class="container">
      <form action="./tambahmenu.php" method="POST">
        <table>
          <tr>
            <td><label> Jenis Menu </label></td>
            <td>
              <select class="form-select" aria-label="Default select example">
                <option value="1">Makanan</option>
                <option value="2">Minuman</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><label> Nama </label></td>
            <td>
              <input type="text" name="nama" />
            </td>
          </tr>

          <tr>
            <td><label> Harga </label></td>
            <td>
              <input type="text" name="harga" />
            </td>
          </tr>
        </table>

        <div class="flex">
          <input type="submit" name="tambah" value="Tambah Menu" />
          <li><a href="datamenu.php" class="kluar">Kembali</a></li>
        </div>
      </form>
    </div>
  </div>
  </div>


  <?php

  include("koneksi.php");

  // cek apakah tombol daftar sudah diklik atau blum?
  if (isset($_POST['tambah'])) {

    // ambil data dari formulir
    $jenis_menu = $_POST['jenis_menu'];
    $nama = $_POST['nama'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];


    // buat query
    $sql = "INSERT INTO menu (jenis_menu, nama, stok, harga) VALUES ( '$jenis_menu', '$nama','$stok', '$harga')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if ($query) {
      // kalau berhasil alihkan ke halaman index.php dengan status=sukses
      header('Location: datamenu.php?status=sukses');
    } else {
      // kalau gagal alihkan ke halaman indek.php dengan status=gagal
      ini_set('display_errors', 1);
    }
  }

  ?>

</body>

</html>