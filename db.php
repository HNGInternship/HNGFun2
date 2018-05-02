<?php
/*
DO NOT MODIFY THIS FILE!!!
 */
<<<<<<< HEAD
require 'config_slayers.php';

// try {
//     $conn = new PDO("mysql:host=". DB_HOST. ";dbname=". DB_DATABASE , DB_USER, DB_PASSWORD);
  
// } catch (PDOException $pe) {
//     die("Could not connect to the database " . DB_DATABASE . ": " . $pe->getMessage());
// }



=======

/* Instead of rediting this, just move your config.php a step outside the HNGFun folder */
require '../config.php';
>>>>>>> e78920f15c10b6c5a388e7387e50da5c74c9ca6a
 
try {
    $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_DATABASE, DB_USER, DB_PASSWORD);

} catch (PDOException $pe) {
    die("Could not connect to the database " . DB_DATABASE . ": " . $pe->getMessage());
}

?>
