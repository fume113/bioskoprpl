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
  <link rel="stylesheet" href="./jadwal.css">

</head>

<body>
  <div class="wrap">
    <div class="container">
      <h1>Form tambah Jadwal</h1>
      <form action="./tambahjadwal.php" method="POST">
        <table>
          <tr>
            <td><label> Tanggal </label></td>
            <td>
              <input type="date" name="tanggal" value="tanggal" />
            </td>
          </tr>
          <tr>
            <td><label> Jam tayang </label></td>
            <td>
              <input type="time" name="jam_tayang" />
            </td>
          </tr>
          <tr>
            <td><label> Id Film </label></td>
            <td>
              <input type="text" name="id_film" class="id" />
            </td>
          </tr>
        </table>

        <div class="flex-tambahjadwal">
          <input type="submit" name="tambah" value="Tambah Jadwal" />
          <li><a href="datajadwal.php" class="kluar-jadwal">Kembali</a></li>
      </form>
    </div>
  </div>
  </div>


  <?php

  include("koneksi.php");

  // cek apakah tombol daftar sudah diklik atau blum?
  if (isset($_POST['tambah'])) {

    // ambil data dari formulir
    $tanggal = $_POST['tanggal'];
    $jam_tayang = $_POST['jam_tayang'];
    $id_film = $_POST['id_film'];

    // buat query
    $sql = "INSERT INTO jadwal (tanggal, jam_tayang, id_film) VALUES ( '$tanggal', '$jam_tayang','$id_film')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if ($query) {
      // kalau berhasil alihkan ke halaman index.php dengan status=sukses
      header('Location: datajadwal.php?status=sukses');
    } else {
      // kalau gagal alihkan ke halaman indek.php dengan status=gagal
      header('Location: datajadwal.php?status=gagal');
    }
  }

  ?>

</body>

</html>