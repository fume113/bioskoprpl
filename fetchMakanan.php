<?php
  $mysqli = new mysqli("localhost","root","","bioskoprpl");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$query = "SELECT * FROM menu WHERE jenis_menu = 'makanan'";
$result = $mysqli->query($query);
$foods = $result->fetch_all(MYSQLI_ASSOC);

$json_foods = json_encode($foods);

echo $json_foods;