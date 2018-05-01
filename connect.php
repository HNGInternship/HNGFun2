<?php
include ('config.example.php');
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
if(!$conn){
  echo "couldn't connect";
}
?>