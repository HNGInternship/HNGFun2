
<?php
if(!defined('DB_USER')){
        require "./config.php";
}
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
}
    
// <?php 
//$db = new MySQLi('localhost','root','','hngfun')
//$db = new MySQLi('localhost','root','','hng_fun');

// define ('DB_USER', "root");
// define ('DB_PASSWORD', "");
// define ('DB_DATABASE', "hng_fun");
// define ('DB_HOST', "localhost");
// define ('DB_USER', "root");
// define ('DB_PASSWORD', "");
// define ('DB_DATABASE', "hngfun");
// define ('DB_HOST', "localhost");

try {
    $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_DATABASE, DB_USER, DB_PASSWORD);

} catch (PDOException $pe) {
    die("Could not connect to the database " . DB_DATABASE . ": " . $pe->getMessage());
}

?>
