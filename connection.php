<?php 
//$db = new MySQLi('localhost','root','','hngfun')
//$db = new MySQLi('localhost','root','','hng_fun');

define ('DB_USER', "root");
define ('DB_PASSWORD', "");
define ('DB_DATABASE', "hngfun");
define ('DB_HOST', "localhost");

try {
    $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_DATABASE, DB_USER, DB_PASSWORD);

} catch (PDOException $pe) {
    die("Could not connect to the database " . DB_DATABASE . ": " . $pe->getMessage());
}
?>
