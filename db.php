<?php
/*
DO NOT MODIFY THIS FILE!!!
 */
<<<<<<< HEAD
require '../config.php';

// try {
//     $conn = new PDO("mysql:host=". DB_HOST. ";dbname=". DB_DATABASE , DB_USER, DB_PASSWORD);
  
// } catch (PDOException $pe) {
//     die("Could not connect to the database " . DB_DATABASE . ": " . $pe->getMessage());
// }



=======
require './config.php';
>>>>>>> 033ec22ade1626e17aefdff03cbe66c7d8a17e56
 
try {
    $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_DATABASE, DB_USER, DB_PASSWORD);

} catch (PDOException $pe) {
    die("Could not connect to the database " . DB_DATABASE . ": " . $pe->getMessage());
}

?>