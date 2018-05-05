<?php
/*
DO NOT MODIFY THIS FILE!!!
 */
<<<<<<< HEAD
require '../config-slayers.php';
=======
require 'config_slayers.php';

>>>>>>> 91a0eb0e7afa0977886c43edc1c2c1dbeb02674b
try {
    $db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_DATABASE, DB_USER, DB_PASSWORD);
} catch (PDOException $pe) {
    die("Could not connect to the database " . DB_DATABASE . ": " . $pe->getMessage());
}
?>
