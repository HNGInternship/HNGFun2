
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
include('config_slayers.php');
include('db.php');

$q1 = "INSERT INTO interns_data (first_name) VALUES ('Nelson')";
$res1 = mysqli_query($db, $q1);
if($res1){
	echo "inserted";
}else{
	echo "not inserted";
}


$q = "SELECT * FROM interns_data";
$res = mysqli_query($db, $q);
$row = mysqli_fetch_array($res);
if(mysqli_num_rows($res) > 0){
while($row){
    echo $row['firstname'];
}
}else{
	echo "nothing";
}

 ?>



