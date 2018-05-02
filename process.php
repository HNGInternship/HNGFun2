<?php 
if(!isset($_SESSION)) { session_start(); }
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
	$nationality = null;
	$state = null;
	$username =  '';
	$password = $_POST['password'];
	$password_confirm = $_POST['password_confirm'];
	$private_key = $_POST['private_key'];
	$public_key = $_POST['public_key'];
	
	$password = $_POST['password'];
	


	if($firstname == ""){

		echo "Please enter your Firstname";
	}
	elseif($lastname == ""){

		echo "Please enter your Lastname";
	}
	
	elseif($email == ""){
		echo "Please enter your email";
	}
	// elseif($username == ""){
	// 	echo "Please enter your Username";
	// }
	elseif($password == ""){
		echo "Please enter your Password";
	}
	// elseif($nationality == ""){
	// 	echo "Please enter your Nationality";
	// }
	elseif($password != $password_confirm){
		echo "Passwords do not match";
	}
	else{

			//connect to database
			require_once('db.php');

			//instantiate the user class
			$user = new User();
			//try to register user
			$register_check = $user->register($firstname,$lastname,$email,$username,
											$nationality,$state,$phone,$password,$public_key, $private_key, $db);
			

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
		require_once('db.php');

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
			require_once('db.php');
			$user = new User();
			$email_check = $user->check_email($email, $db);

			if($email_check == true){
				$reset_pin = rand(10000,99999);
				$user_update_token = $user->update_token($email,$reset_pin, $db);
				if($user_update_token = true){
					$headers = "MIME-Version: 1.0" . "\r\n";
					$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
					
					// More headers
					$headers .= 'From: <hng@email.com.com>' . "\r\n";
					//$headers .= 'Cc: myboss@example.com' . "\r\n";
					$subject = "Password Reset for HNG Account";
					$message = "Your password Reset Pin is ".$reset_pin;
					$message .= " use this link to reset your password";
					$message .= " <a href='http://5serve.com/test/resetpassword.php?token=".$reset_pin."'>Here</a>";
					if(mail($email, $subject, $message,$headers)){
						echo 1;
					}

				}
			}



	}


	//for password change
	if(isset($_POST['token'])){
		$password = $_POST['pass'];
		$password_confirm = $_POST['pass-confirm'];
		if($password  != $password_confirm ){
		echo 3;
		}
		$token = $_POST['token'];
		require_once('db.php');
		$user = new User();

		$confirm_token = $user->check_token($token, $db);
		if($confirm_token == true){
			$update_password = $user->update_password($password,$token,$db);
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


	
		
if(isset($_POST['sellCoin'])){

	require_once('Sell.php');
	//connect to database
	require_once('db.php');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
	$sell = new Sell();
	
	$id = $_SESSION['id'];
	if($_POST['HNG'] == 'on'){
		$preferred_buyer = "1";
	}else{
		$preferred_buyer = "0";
	}
	$amount = $_POST['amount'];
	$account_id = $_POST['payment_info'];
	$trade_limit = $_POST['trade_limit'];
	$price_per_coin = $_POST['price'];
	$status = "Open";

	$result = $sell->postRequest($id, $amount, $trade_limit, $price_per_coin, $account_id, $preferred_buyer, $status, $db);
	if($result){
		header("Location: /buyandsell.php"); /* Redirect browser */
		exit();
	}else{
		echo "Could not post request";
	}
}


if(isset($_POST['buyCoin'])){
	require_once('Buy.php');
	//connect to database
	require_once('db.php');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
	$buy = new Buy();
	
	$id = $_SESSION['id'];

	$amount = $_POST['amount'];
	$trade_limit = $_POST['trade_limit'];
	$price_per_coin = $_POST['price'];
	$status = "Open";

	$result = $buy->postRequest($id, $amount, $trade_limit, $price_per_coin, $status, $db);
	if($result){
		header("Location: /buyandsell.php"); /* Redirect browser */
		exit();
	}else{
		echo "Could not post request";
	}
}
	
?>
