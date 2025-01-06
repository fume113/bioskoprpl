<!doctype html>
<html lang="en">
<?php include("koneksi.php"); ?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <!-- Link Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

  <style>
    * {
      font-family: 'Quicksand', sans-serif;
    }

    .dropdown-menu {
      background: #000 !important;
    }

    .dropdown-menu .dropdown-item {
      color: #FCF8E8 !important;
      background: none !important;
    }

    .dropdown-menu .dropdown-item:hover {
      color: #34675c !important;
    }

    body {
      background: #082A3A !important;
    }

    thead {
      background: #082A3A !important;
      color: azure !important;
    }

    tbody {
      background: #082A3A !important;
      color: azure !important;
    }

    th {
      padding-top: 20px !important;
      padding-bottom: 20px !important;
    }

    button {
      background: #94B49F !important;
      border: 2px solid #94B49F !important;
      color: #FCF8E8 !important;
      border-radius: 16px !important;
      transition: all 0.3s ease !important;
    }

    button:hover {
      background: none !important;
      transform: scale(1.06) !important;
    }

    .akhir {
      font-size: 17px !important;
      align-items: center !important;
      text-align: center !important;
      flex-direction: column !important;
      align-content: center !important;
      width: 125px !important;
      height: 100% !important;
      margin: auto !important;
    }

    .akhir .btn-akhir {
      width: 100% !important;
      height: 100% !important;
      padding: 8px 12px !important;
      background: #76BA99 !important;
      border: 2px solid #76BA99 !important;
      transition: all 0.3s ease;
    }

    .akhir .btn-akhir:hover {
      background: none !important;
      transform: scale(1.08) !important;
    }
  </style>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

    <div class="container-fluid">
      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarLeftAlignExample" aria-controls="navbarLeftAlignExample" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>


      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarLeftAlignExample">
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Kelola Data
            </a>
            <!-- Dropdown menu -->
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <a class="dropdown-item" href="datafilm.php">Data Film</a>
              </li>
              <li>
                <a class="dropdown-item" href="datamenu.php">Data Menu</a>
              </li>

  </nav>

  <table class="table align-middle mb-0 bg-white text-center pt-3">
    <thead class="head">
      <tr>
        <th>ID Jadwal</th>
        <th>Tanggal</th>
        <th>Jam Tayang</th>
        <th>Judul</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT jadwal.id_jadwal, jadwal.tanggal, jadwal.jam_tayang, film.judul
        FROM jadwal, film
        WHERE film.id_film=jadwal.id_film";
      $query = mysqli_query($db, $sql);

      while ($jadwal = mysqli_fetch_array($query)) {
        echo "<tr>";

        echo "<td>" . $jadwal['id_jadwal'] . "</td>";
        echo "<td>" . $jadwal['tanggal'] . "</td>";
        echo "<td>" . $jadwal['jam_tayang'] . "</td>";
        echo "<td>" . $jadwal['judul'] . "</td>";
        echo "<td>";
        echo "<a href='editjadwal.php?id_jadwal=" . $jadwal['id_jadwal'] . "'><button>Edit</button></a> | ";
        echo "<a href='hapusjadwal.php?id_jadwal=" . $jadwal['id_jadwal'] . "'><button>Hapus</button></a>";
        echo "</td>";
        echo "</tr>";
      }
      ?>
      </tr>

    </tbody>
  </table>
  <div class="akhir">
    <br><a href="tambahjadwal.php"><button class="btn-akhir">Tambah Jadwal</button></a></br>
    <br><a href="index.php"><button class="btn-akhir">Kembali ke Admin</button></a></br>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

  </body>

</html>