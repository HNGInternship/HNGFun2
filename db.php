<?php
/*
DO NOT MODIFY THIS FILE!!!
 */
<<<<<<< HEAD
require '../config-slayers.php';
=======
require '../config_slayers.php';

>>>>>>> 770a6e7e5c4cdec98a6baff7f19807e2b4d6ef97
try {
    $db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_DATABASE, DB_USER, DB_PASSWORD);
} catch (PDOException $pe) {
    die("Could not connect to the database " . DB_DATABASE . ": " . $pe->getMessage());
}
?>
