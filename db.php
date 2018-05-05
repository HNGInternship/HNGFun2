<?php
/*
DO NOT MODIFY THIS FILE!!!
 */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
require '../config-slayers.php';
=======
require 'config_slayers.php';
=======
require '../config_slayers.php';
>>>>>>> fc35223e88c2ac5ad024363fa66291e05b47fa3d

>>>>>>> 91a0eb0e7afa0977886c43edc1c2c1dbeb02674b
=======
require 'config_slayers.php';

>>>>>>> e6f4629aeb792695965d8df472985a0f8c4069b0
try {
    $db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_DATABASE, DB_USER, DB_PASSWORD);
} catch (PDOException $pe) {
    die("Could not connect to the database " . DB_DATABASE . ": " . $pe->getMessage());
}
?>
