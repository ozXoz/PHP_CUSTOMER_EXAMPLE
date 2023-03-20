
<?php

$db_server = "localhost";
$db_user="root";
$db_password="123";
$db_database="customer";

$mysqli = new mysqli($db_server,$db_user,$db_password,$db_database);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
  }
  echo "Connected successfully";




?>