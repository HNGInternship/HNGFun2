<?php
include_once("header.php");
?>

		<link href="css/user-profile.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		
		
		
		<div id="navbar">
			<nav class="navbar navbar-expand-lg navbar-light"  style="background-color: #ffffff; padding: 0px 0px 0px 200px;">
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						
						<li class="nav-item">
							<a href="index.php" class="nav-link"><img src="https://res.cloudinary.com/dzwrncue8/image/upload/v1525188272/windows.png" alt="" class="navbar-icon">Dashboard</a>
						</li>
						
						<li class="nav-item">
							<a href="learn.php" class="nav-link"><img src="https://res.cloudinary.com/dzwrncue8/image/upload/v1525188272/hand.png" alt=""  class="navbar-icon">Trade</a>
						</li> 
						<li class="nav-item">
							<a href="listing.php" class="nav-link"><img src="https://res.cloudinary.com/dzwrncue8/image/upload/v1525188272/perso.png" alt="" class="navbar-icon">Profile</a>
						</li> 
						<li class="nav-item">
							<a href="testimonies.php" class="nav-link"><img src="https://res.cloudinary.com/dzwrncue8/image/upload/v1525188272/help.png" alt="" class="navbar-icon">Help & Feedback</a>
						</li> 
					</ul>
				</div> 
			</nav>
		</div>
		<?php 
		include '../config.php';
		$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
				$sql2 = "SELECT * FROM users_data WHERE username ='admin'";
				$result = mysqli_query($conn, $sql2);
				$row = mysqli_fetch_assoc($result);
				if(isset($row['filename'])){
				$filename = $row['filename'];
				}
		
		?>
		<section>
			<div class="container container-main">
				<img src="<?php if(isset($row['filename'])) echo 	$filename; else echo "https://res.cloudinary.com/dzwrncue8/image/upload/v1525188272/help.png" ?>" class="profile-img img-circle" />
			
				
				
					<h4 class="hh">User Profile</h4>
<?php

function Filter($str)
{
    $filter=htmlspecialchars($str, ENT_QUOTES);
	//$filter=mysqli_real_escape_string($str);
	return $filter;
}
function sqli($con,$str1)
{
   
	$sqli_filter=mysqli_real_escape_string($con,$str1);
	return $sqli_filter;
}
	function CheckSimilaremail($email){
	 
	 $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
	 $email=Filter($email);
	 $query1 = "SELECT * FROM users_data WHERE email ='$email'";
	 $result = mysqli_query($conn, $query1);
	if (mysqli_num_rows($result) > 1)
	{
		echo "<p style='color:rgb(177, 59, 59);font-size:14px' >Email Exists</p>";
	} else 
	return "OK";


	//  $row = mysqli_fetch_assoc($result);
	// if(strtolower($row['email']) == strtolower($email)){
	// 	return "OK";
	// }else
	// 	$query  = "select user_id,email from users_data";
	// 	$result=mysqli_query($conn,$query);
	// 	$count=0;
	// 	while($row = mysqli_fetch_assoc($result)) {
	// 		$count++;
	// 	if($count>1){
	// 		echo "<p style='color:rgb(177, 59, 59);font-size:14px' >Email Exists</p>";
	// 	}
		
	// }
			
				
 			 

 }

$fullname = isset($_POST['fullname']) && !empty($_POST['fullname']);
$email = isset($_POST['email']) && !empty($_POST['email']);
$phonenumber = isset($_POST['phonenumber']) && !empty($_POST['phonenumber']);
$username = isset($_POST['username']) && !empty($_POST['username']);
$filename = isset($_POST['filename']) && !empty($_POST['filename']);
$nationality = isset($_POST['nationality']) && !empty($_POST['nationality']);
$city = isset($_POST['city']) && !empty($_POST['city']);
$private_key = isset($_POST['private_key']) && !empty($_POST['private_key']);
$public_key = isset($_POST['public_key']) && !empty($_POST['public_key']);
 if($fullname && $email && $phonenumber && $username && $filename && $nationality && $city && $private_key && $public_key){
	//Setting cookies
		 	
	$val=CheckSimilaremail($_POST['email']);
		if($val=="OK"){
		 $conn1 = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
		 $fullname=sqli($conn1,Filter($_POST['fullname']));
		 $email=sqli($conn1,Filter($_POST['email']));
		 $phonenumber=sqli($conn1,Filter($_POST['phonenumber']));
		 $username=sqli($conn1,Filter($_POST['username']));
		 $nationality=sqli($conn1,Filter($_POST['nationality']));
		 $city=sqli($conn1,Filter($_POST['city']));
		 $filename=sqli($conn1,Filter($_POST['filename']));
		 $private_key=sqli($conn1, $_POST['private_key']);
		 $public_key=sqli($conn1, $_POST['public_key']);
		 $date_updated= date('Y-m-d H:i:s');

		 $sql="UPDATE users_data SET fullname = '$fullname',
		 username = '$username', email ='$email', phonenumber = '$phonenumber', nationality ='$nationality', city = '$city',
		 filename ='$filename', public_key ='$public_key', private_key = '$private_key',
		 date_updated = '$date_updated' WHERE user_id='1'";
		 if (mysqli_query($conn1, $sql)) { 
				echo '
				<p><div class="alert alert-success" role="alert">
				<strong>Profile Updated!</strong>.
				</div></p>';
			}
			 
			 else{
				 echo "error: ". mysqli_error($conn1);
				}
				
		}
	
	
 
 
 
} 
				$conn2 = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
				$sql2 = "SELECT * FROM users_data WHERE user_id ='1'";
				$result = mysqli_query($conn2, $sql2);
				$row = mysqli_fetch_assoc($result);
			
				$fullname = $row['fullname'];
				$email = $row['email'];
				$username = $row['username'];
				$email = $row['email'];
				$phonenumber = $row['phonenumber'];

				$nationality = $row['nationality'];
				$city = $row['city'];
				if(isset($row['filename'])){
				$filename = $row['filename'];
				}
				if(isset($row['public_key'])){
				$public_key = $row['public_key'];
				}
				if(isset($row['private_key'])){
				$private_key = $row['private_key'];
				}

 ?>



				<hr>
				<form action="user-profile.php" method="post" onsubmit="return SubmitForm(this)">
				<div class="row">
				
					<div class="col-md-6">
						
							<div class="form-group">
								<label for="inputFname">Full Name</label>
								<input type="text" class="form-control" value="<?php if(isset($fullname)) echo $fullname ?>"  name="fullname" id="fName" placeholder="Full Name">
							</div>
						
						  <div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" class="form-control"  value="<?php if(isset($email)) echo $email ?>" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
							
						  </div>
						  
						  <div class="form-group">
								<label for="inputFname">Username</label>
								<input type="text" class="form-control" value="<?php if(isset($username)) echo $username ?>" name="username" id="fName" placeholder="Enter Username">
							</div>

						  <div class="form-group">
							<label for="inputText">Public Key</label>
							<input type="Text" class="form-control" value="<?php if(isset($public_key)) echo $public_key ?>" name="public_key" id="inputText" placeholder="Enter Public Key">
							
						  </div>
						  
						  
					
					</div>
					<div class="col-md-6">
					
						  <div class="form-group">
							<label for="inputText">Phone Number</label>
							<input type="number" class="form-control" value="<?php if(isset($phonenumber)) echo $phonenumber ?>" name="phonenumber" id="inputText" placeholder="Enter Phone Number">
							
						  </div>
						  <div class="form-group">
							<label for="inputPhone">Nationality</label>
							<input type="Text" class="form-control" value="<?php if(isset($nationality)) echo $nationality ?>" name="nationality" id="inputPhone" placeholder="Enter Nationality">
						  </div>

							<div class="form-group">
							<label for="inputPhone">City</label>
							<input type="Text" class="form-control" value="<?php if(isset($city)) echo $city ?>" name="city" id="inputPhone" placeholder="Enter City">
						  </div>

						  <div class="form-group">
							<label for="inputText">Image Filename</label>
							<input type="Text" class="form-control" value="<?php if(isset($filename)) echo $filename ?>" name="filename" id="inputText" placeholder="Enter profile image link">
							
						  </div>

						  <div class="form-group">
							<label for="inputText">Private Key</label>
							<input type="Text" class="form-control" value="<?php if(isset($private_key)) echo $private_key ?>" name="private_key" id="inputText" placeholder="Enter Private Key">
							
						  </div>
						
					</div>
					<div class="col-md-12 text-center"><br>
						<button type="reset" class="btn btn-change">Reset</button><button type="submit" class="btn btn-change">Save</button>
					</div>

					
				</div>
				</form>
			
			</div>
		
		</section>
		
		

<?php
include_once("footer.php");
?>






























































