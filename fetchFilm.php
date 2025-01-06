<?php
$mysqli = new mysqli("localhost", "root", "", "bioskoprpl");

// Check connection
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
  exit();
}

$query = "SELECT * from film";
$result = $mysqli->query($query);
$films = $result->fetch_all(MYSQLI_ASSOC);

$query = "SELECT * from jadwal";
$result = $mysqli->query($query);
$jadwal = $result->fetch_all(MYSQLI_ASSOC);

$filmDenganJadwal = [];

foreach ($films as $film) {
  foreach ($jadwal as $jwl) {
    if ($jwl["id_film"] == $film["id_film"]) {
      $film["jadwal"][] = $jwl;
    }
  }

  $filmDenganJadwal[] = $film;
}

/*
  1. query untuk films - selesai
  2. query untuk jadwal - selesai
  3. looping si film -> cari jadwal yang id nya sama kaya di film
  4. masukin jadwal yang id film sama kaya di tabel jadwal dan id film ->kalo ketemu, masukin ke variabel films["jadwal"]
*/

$json_films = json_encode($filmDenganJadwal);

echo $json_films;
