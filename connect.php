<?php
include ('config.example.php');
$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
if(!$db){
  echo "couldn't connect";
}
?>