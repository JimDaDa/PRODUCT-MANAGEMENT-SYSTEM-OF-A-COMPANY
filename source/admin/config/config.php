<?php
// $mysqli = new mysqli("sql306.epizy.com","epiz_28608394","BEGfybKjPD","epiz_28608394_database");
$mysqli = new mysqli("localhost","root","","database");
mysqli_set_charset($mysqli,'utf8');

// Check connection
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: ".$mysqli->connect_error;
  exit();
}
?>