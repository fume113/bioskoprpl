<!doctype html>
<html lang="en">
<?php include("koneksi.php"); ?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="dashboard admin/css/bootstrap.css" rel="stylesheet">
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

  </nav>

  <table class="table align-middle mb-0 bg-white text-center pt-3">
    <thead class="head">
      <tr>
        <th>Tanggal Pemesanan</th>
        <th>Jam Tayang</th>
        <th>Makanan</th>
        <th>Minuman</th>
        <th>Total Harga</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT *
        FROM pesanan, akun
        WHERE akun.id_user = pesanan.id_user";
      $query = mysqli_query($db, $sql);

      while ($pesanan = mysqli_fetch_array($query)) {
        echo "<tr>";

        echo "<td>" . $pesanan['tanggal_pemesanan'] . "</td>";
        echo "<td>" . $pesanan['total_harga'] . "</td>";
        echo "<td>";
        echo "</td>";
        echo "</tr>";
      }
      ?>
      </tr>

    </tbody>
  </table>
  <div class="akhir">
    <br><a href="index.php"><button class="btn-akhir">Back</button></a></br>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

  </body>

</html>