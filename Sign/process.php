<?php 
//this file is for processsin requests  


//class file required here 

//require_once('classes/User.php');
require_once('User.php');


//for registration 

if(isset($_POST['registration'])){

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$nationality = $_POST['country'];
	$username =  $_POST['username'];
	$password = $_POST['password'];
	$password_confirm = $_POST['password_confirm'];

	

	if($firstname == ""){

		echo "Please enter your Firstname";
	}
	elseif($lastname == ""){

		echo "Please enter your Lastname";
	}
	
	elseif($email == ""){
		echo "Please enter your email";
	}
	elseif($username == ""){
		echo "Please enter your Username";
	}
	elseif($password == ""){
		echo "Please enter your Password";
	}
	elseif($nationality == ""){
		echo "Please enter your Nationality";
	}
	elseif($password != $password_confirm){
		echo "Passwords do not match";
	}
	else{

				//connect to database
			require_once('connection.php');

			//instantiate the user class
			$user = new User();
			//try to register user
			$register_check = $user->register($firstname,$lastname,$email,$username,$nationality,$phone,$password,$db);

			//check for response 
			if($register_check==true){
				
				$login_check = $user->check($email,$password,$db);

				if($login_check == true){

				die(true);	
				}
				else{
					die('Registration successful but login failed, please try and manually login');
				}
				
			}
			else{
				die("Registration failed");
			}

	}


}

//for login
if(isset($_POST['login'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	

	

	if($email ==""){
		echo "Please enter your email";
	}
	elseif($password == ""){
		echo "Please enter your password";
	}
	else{

		//connect to database
			require_once('connection.php');

			//instantiate the user class
			$user = new User();

			$login_check = $user->check($email,$password,$db);
			if($login_check == true){
				echo true;
			}
			else{
				echo "Invalid email or password";
			}
	}

}

	
?>