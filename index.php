<?php
session_start();
?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <title>Penjualan Tiket Bioskop Online</title>
</head>

<body>
  <!-- Header -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <div class=" d-flex justify-content-center align-items-center gap-3 d-films">
        <i class="bi bi-film text-white fs-2"></i>
        <a class="navbar-brand nav-films me-3 ml-2" href="#">RKFTF Films</a>
      </div>
      <div class="collapse navbar-collapse p-0 justify-content-end pe-5" id="navbarSupportedContent">
        <form class="d-flex gap-2 align-items-stretch">
          <div class="position-relative">
            <input class="form-search" id="form-search" type="search" placeholder="Search" aria-label="Search" />
          </div>

          <?php
          if (isset($_SESSION['user'])) { // <!-- user udah login -->
            echo "
                <div class='dropdown'>
                  <a class='dropdown-toggle' id='dropdownMenuButton1' data-bs-toggle='dropdown' aria-expanded='false'>
                    <i class='bi bi-person-circle text-dark'></i>
                    <span class='prf text-decoration-none'>{$_SESSION['user']['username']}</span>
                  </a>

                  <ul class='dropdown-menu' aria-labelledby='dropdownMenuButton1'>
                    <li><a class='dropdown-item' href='./logout.php'>Profile Saya</a></li>
                    <li><a class='dropdown-item' href='./logout.php'>Logout</a></li>
                  </ul>
                </div>
              ";
          } else {
            echo "
                <a href='./formdaftar.php' class='btn btn-primary rounded-pill m-0 px-3 border-0 shadow-none text-center pt-2'>Sign Up</a>
                <a href='./indexlogin.php' class='btn btn-primary rounded-pill m-0 px-3 border-0 shadow-none text-center pt-2'>Login</a>
              ";
          }
          ?>
        </form>
      </div>
    </div>
  </nav>
  <!-- End Header -->

  <!-- Sidebar -->
  <div class="container-fluid">
    <div class="row flex-nowrap">
      <div class="col-auto" style="background: #082A3A;">
        <div class="d flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start min-vh-100">
          <a href=""class="d-flex align-items-center text-decoration-none btn-film nav-link p-0">
            <i class="fs-4 bi bi-play"></i></i><span class="ms-1 d-none d-sm-inline">Film yang sedang tayang</span>
          </a>
          <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            <li>
              <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle btn-mkn">
                <i class=" fs-4 bi bi-apple"></i> <span class="ms-1 d-none d-sm-inline">Katalog Makanan</span></a>
            </li>
            <li>
              <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle btn-mnm">
                <i class="fs-4 bi bi-cup-straw"></i> <span class="ms-1 d-none d-sm-inline">Katalog Minuman</span> </a>
            </li>
            <hr>
            <li>
              <a href="tampilan check out/cotiket.php" class="nav-link px-0 align-middle btn-mnm">
                <i class="fs-4 bi-ticket"></i> <span class="ms-1 d-none d-sm-inline">Beli Tiket</span> </a>
            </li>
            <li>
              <a href="tampilan check out/cotiket.php" class="nav-link px-0 align-middle btn-mnm">
                <i class="fs-4 bi-egg-fried"></i> <span class="ms-1 d-none d-sm-inline">Beli Makanan</span> </a>
            </li>
            <li>
              <a href="tampilan check out/cotiket.php" class="nav-link px-0 align-middle btn-mnm">
                <i class="fs-4 bi-cup"></i> <span class="ms-1 d-none d-sm-inline">Beli Minuman</span> </a>
            </li>
            <li>
              <a href="riwayat.php" class="nav-link px-0 align-middle btn-mnm">
                <i class="fs-4 bi-clock-history"></i> <span class="ms-1 d-none d-sm-inline">Riwayat Pesanan</span> </a>
            </li>
            <li>
          </ul>
          <hr>
        </div>
      </div>
      <!-- End Sidebar -->

      <!-- Main Content -->
      <div class="col py-3 content-container position-relative">
      </div>
    </div>
    <!-- End Content -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="script.js"></script>

</body>

</html>