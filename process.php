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
	$secret_key = $_POST['secret_key'];
	$public_key = $_POST['public_key'];

	

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
			$register_check = $user->register($firstname,$lastname,$email,$username,$nationality,$phone,$password,$public_key, $secret_key, $db);

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


//for password reset
	if(isset($_POST['pword-reset'])){
			$email = $_POST['email'];
			$user = new User();
			$email_check = $user->check_email($email, $db);

			if($email_check = 'yes'){
				$reset_pin = rand(10000,99999);
				$user_update_token = $user->update_token($email,$reset_pin, $db);
				if($user_update_token = true){
					$subject = "Password Reset for HNG Account";
					$message = "Your password Reset Pin is ".$reset_pin;
					if(mail($email, $subject, $message)){
						echo "An email to reset your password has been sent to you";
					}

				}
			}



	}


	//for password change
	if(isset($_POST['pword-change'])){
		$password = $_POST['pass'];
		$password_confirm = $_POST['pass-confirm'];
		$token = $_POST['token'];

		$user = new User();

		$confirm_token = $user->check_token($token, $db);
		if($confirm_token == true){
			$update_password = $user->update_password($password,$db);
			if($update_password == true){
				echo 1;
			}
			else{
				echo 2;
			}
			
		}

		else{
			echo 0;
		}
	}

	
		

	
?>