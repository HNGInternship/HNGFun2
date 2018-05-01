
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Display Table</h1>
</body>
</html>

<?php 
include('../config.php');
include('db.php');

$q = "SELECT * FROM users";
$res = mysqli_query($db, $q);
$row = mysqli_fetch_array($res);
while($row){
    echo $row['firstname'];
}


 ?>

 

