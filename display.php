<?php 

include('../config.php');

include('db.php');


$q = "SELECT * FROM users";
$res = mysqli_query($db, $q);
while ($row = mysqli_fetch_array($res) {
	# code...
	echo $row['firstname'];
}

 ?>