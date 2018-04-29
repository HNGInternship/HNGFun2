<?php
/*
DO NOT MODIFY THIS FILE!!!
 */
<<<<<<< HEAD
require 'config.php';

// try {
//     $conn = new PDO("mysql:host=". DB_HOST. ";dbname=". DB_DATABASE , DB_USER, DB_PASSWORD);
  
// } catch (PDOException $pe) {
//     die("Could not connect to the database " . DB_DATABASE . ": " . $pe->getMessage());
// }



=======
require './config.php';
>>>>>>> d5a28c351f8a8d653162c67aaba275e5bbbbb4c7
 
try {
    $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_DATABASE, DB_USER, DB_PASSWORD);

} catch (PDOException $pe) {
    die("Could not connect to the database " . DB_DATABASE . ": " . $pe->getMessage());
}

?>