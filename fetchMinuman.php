<?php
  $mysqli = new mysqli("localhost","root","","bioskoprpl");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$query = "SELECT * FROM menu WHERE jenis_menu = 'minuman'";
$result = $mysqli->query($query);
$drinks = $result->fetch_all(MYSQLI_ASSOC);

$json_drinks = json_encode($drinks);

echo $json_drinks;