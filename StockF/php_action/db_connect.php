<?php 	

$localhost = "localhost";
$username = "u239399297_hualterio";
$password = "bionica21";
$dbname = "u239399297_stockf";

// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}

?>