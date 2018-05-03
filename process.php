<?php 
set_time_limit(0);
if(!isset($_SESSION)) { session_start(); }
//this file is for processsin requests  

// timexone
date_default_timezone_set('Africa/Lagos');

//class file required here 

//require_once('classes/User.php');
require_once('User.php');
require_once('db.php');
if(isset($conn)) {
	$db = $conn;
}
require_once('smtp_credentials.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once "vendor/autoload.php";

//for registration 

if(isset($_POST['registration'])){

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$username =  '';
	$password = $_POST['password'];
	$private_key = $_POST['private_key'];
	$public_key = $_POST['public_key'];
	$created_at = date('Y-m-d h:i:s');
	$updated_at = $created_at;
	$token = base64_encode(bin2hex(random_bytes(60)));
	$active =0;

	if($firstname == ""){
		echo "Please enter your Firstname";
	}
	elseif($lastname == ""){
		echo "Please enter your Lastname";
	}
	
	elseif($email == ""){
		echo "Please enter your email";
	}
	elseif($password == ""){
		echo "Please enter your Password";
	}
	else{
			//connect to database
			global $db;

			//instantiate the user class
			$user = new User();

			//try to register user
			$register_check = $user->register($firstname, $lastname, $email, $password, 
			$public_key, $private_key, $token, $active, $created_at, $updated_at, $db);

			//check for response 
			if($register_check==true){
				$subject = 'Welcome to HNG Internship';
				$message = '<html><body>';
                $message .= '<h1>Hi '. $firstname .'!</h1>';
                $message .= '<h3>Thank you for your interest in HNG Internship';
                $message .= '<p>You may now login to your account <a href="https://hng.fun/login.php">here</a></p>';
				$message .= '</body></html>';
				
				$mail = new PHPMailer;
				
				//Set PHPMailer to use SMTP.
				$mail->isSMTP();            
				//Set SMTP host name                          
				$mail->Host = SMTP_HOST;
				//Set this to true if SMTP host requires authentication to send email
				$mail->SMTPAuth = true;                          
				//Provide username and password     
				$mail->Username = SMTP_USER;                 
				$mail->Password = SMTP_PASSWORD;                           
				//If SMTP requires TLS encryption then set it
				$mail->SMTPSecure = SMTP_PROTOCOL;                           
				//Set TCP port to connect to 
				$mail->Port = SMTP_PORT;             

				//From email address and name
				$mail->From = "hello@hng.fun";
				$mail->FromName = "HNG Team";

				//To address and name
				$mail->addAddress($email);

				//Send HTML or Plain Text email
				$mail->isHTML(true);

				$mail->Subject = $subject;
				$mail->Body = $message;
				// $mail->AltBody = "This is the plain text version of the email content";
				
				$sent = $mail->send();
				// if(!sent) 
				// {
				// echo "Mailer Error: " . $mail->ErrorInfo;
				// echo json_encode([
				// 'status' => 0,
				// 'message' => "Mailer Error: " . $mail->ErrorInfo
				// ]);
				// } 
				// else 
				// {
				// echo json_encode([
				// 'status' => 1,
				// 'message' => 'An Email containing password reset token has been sent to you'	
				// ]);
				// }

				$_SESSION['email'] = $email;
				die('true');
			}
			elseif($register_check == 'exists') {
				die('exists');
			}
			else{
				die("Registration failed cos no record was inserted");
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

			if($email_check == true){
				$reset_pin = rand(10000,99999);
				$user_update_token = $user->update_token($email,$reset_pin, $db);
				if($user_update_token = true){
					$headers = "MIME-Version: 1.0" . "\r\n";
					$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
					
					// More headers
					$headers .= 'From: <hng@email.com>' . "\r\n";
					//$headers .= 'Cc: myboss@example.com' . "\r\n";
					$subject = "Password Reset for HNG Account";
					$message = "Your password Reset Pin is ".$reset_pin;
					$message .= " use this link to reset your password";
					$message .= " <a href='https://hng.fun/resetpassword.php?token=".$reset_pin."'>Here</a>";
					// if(mail($email, $subject, $message,$headers)){
					// 	echo json_encode([
					// 		'status' => 1,
					// 		'message' => 'Email has been sent to you'	
					// 	]);
					// }
					// else{
					// 	echo json_encode([
					// 		'status' => 0,
					// 		'message' => 'An error occured while sending password reset email'	
					// 	]);
					// }				
					
					//PHPMailer Object
					$mail = new PHPMailer;
					                        
					//Set PHPMailer to use SMTP.
					$mail->isSMTP();            
					//Set SMTP host name  
					$mail->Host = SMTP_HOST;
					//Set this to true if SMTP host requires authentication to send email
					$mail->SMTPAuth = true;                          
					//Provide username and password     
					$mail->Username = SMTP_USER;                 
					$mail->Password = SMTP_PASSWORD;                           
					//If SMTP requires TLS encryption then set it
					$mail->SMTPSecure = SMTP_PROTOCOL;                           
					//Set TCP port to connect to 
					$mail->Port = SMTP_PORT;             

					//From email address and name
					$mail->From = "noreply@hng.fun";
					$mail->FromName = "HNG Team";
					
					//To address and name
					$mail->addAddress($email);
					
					//Address to which recipient will reply
					// $mail->addReplyTo("@yourdomain.com", "Reply");
					
					//Send HTML or Plain Text email
					$mail->isHTML(true);
					
					$mail->Subject = $subject;
					$mail->Body = $message;
					// $mail->AltBody = "This is the plain text version of the email content";
					
					if(!$mail->send()) 
					{
						echo "Mailer Error: " . $mail->ErrorInfo;
						echo json_encode([
							'status' => 0,
							'message' => "Mailer Error: " . $mail->ErrorInfo
						]);
					} 
					else 
					{
						echo json_encode([
							'status' => 1,
							'message' => 'An Email containing password reset token has been sent to you'	
						]);
					}
				}
			}
			else{
				echo json_encode([
					'status' => 0,
					'message' => 'Email not found in our records'	
				]);
			}


	}


	//for password change
	if(isset($_POST['token'])){
		$password = trim($_POST['pass']);
		$password_confirm = trim($_POST['pass-confirm']);
		if($password  == '' || $password_confirm == '' ){
			echo json_encode([
				'status' => 0,
				'message' => 'Passwords cannot be empty'	
			]);
			return;
		}
		if($password  != $password_confirm ){
			echo json_encode([
				'status' => 0,
				'message' => 'Passwords do not match'	
			]);
			return;
		}
		$token = $_POST['token'];
	
		$user = new User();

		$confirm_token = $user->check_token($token, $db);
		if($confirm_token == true){
			$update_password = $user->update_password($password,$token,$db);
			if($update_password == true){
				//remove token to prevent abuse
				$user->remove_token($token, $db);
				echo json_encode([
					'status' => 1,
					'message' => 'Passwords change successful'	
				]);
			}
			else{
				echo json_encode([
					'status' => 0,
					'message' => 'Passwords change unsuccessful'	
				]);
			}
			
		}

		else{
			echo json_encode([
				'status' => 0,
				'message' => 'Invalid token entered'	
			]);
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
	}


	
		

	
?>