<?php
include('../db.php');


$query = "SELECT * FROM interns_data";
$result = mysqli_query($db, $query);
if(mysqli_num_rows($result) > 0){
$row = mysqli_fetch_array($result);
while($row){
	echo $row['first_name'];
	echo $row['email'];
}


}


else{
	echo "nothing found";
}
?>