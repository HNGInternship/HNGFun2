<<<<<<< HEAD
<?php 
set_time_limit(0);

if(!isset($_SESSION)) { session_start(); }
=======
<?php session_start();
>>>>>>> 4de0117eee336590e3b98ce0c4858555c7549437
//this file is for processsin requests  


//class file required here 

//require_once('classes/Member.php');
require_once('Member.php');

<<<<<<< HEAD
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";
=======
>>>>>>> 4de0117eee336590e3b98ce0c4858555c7549437

// using SendGrid's PHP Library
// https://github.com/sendgrid/sendgrid-php



//for registration 

if(isset($_POST['registration'])){

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	
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
	
	elseif($password == ""){
		echo "Please enter your Password";
	}
	
	else{

				//connect to database
			require_once('db.php');

			//instantiate the member class
			$member = new Member();
			//try to register user
			$register_check = $member->register($firstname,$lastname,$email,$password,$conn);

			//check for response 
<<<<<<< HEAD
			if($register_check=='true'){
				$_SESSION['email'] = $email;

				$subject = 'Welcome to HNG Internship';
				$message = '<html><body>';
                $message .= '<h1>Hi '. $firstname .'!</h1>';
                $message .= '<h3>Thank you for your interest in HNG Internship';
                $message .= '<p>You may now login to your account <a href="https://hng.fun/login.php">here</a></p>';
				$message .= '</body></html>';

				$from = new SendGrid\Email("HNG TEAM", "hello@hng.fun");
				$subject = "Welcome to HNG Internship";
				$to = new SendGrid\Email($firstname, $email);
				$content = new SendGrid\Content("text/html", $message);
				$mail = new SendGrid\Mail($from, $subject, $to, $content);
				$apiKey = getenv('SENDGRID_API_KEY');
				$sg = new \SendGrid($apiKey);
				$response = $sg->client->mail()->send()->post($mail);
				//$response->statusCode();

				echo json_encode([
					'status' => 1,
					'message' => 'Status code: '. $response->statusCode()
					]);
				
				/*$mail = new PHPMailer;
				
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
				
				$sent = $mail->send();*/
				/*if(!$sent) 
				{
					// echo "Mailer Error: " . $mail->ErrorInfo;
					echo json_encode([
					'status' => 0,
					'message' => "Mailer Error: " . $mail->ErrorInfo
					]);
				} 
				else 
				{
					echo json_encode([
					'status' => 1,
					'message' => 'Registration successful'	
					]);
				}*/
			}
			elseif($register_check == 'exists') {
				echo json_encode([
				'status' => 0,
				'message' => 'Email already registered!'
				]);
=======
			if($register_check==true){
				
				$login_check = $member->check($email,$password,$conn);

				if($login_check == true){

				die(true);	
				}
				else{
					die('Registration successful but login failed, please try and manually login');
				}
				
>>>>>>> 4de0117eee336590e3b98ce0c4858555c7549437
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

			//instantiate the member class
			$member = new Member();

<<<<<<< HEAD
		$login_check = $user->check($email,$password,$db);
		
		if($login_check == true){
			echo true;
		}
		else{
			echo "Invalid email or password";
		}
=======
			$login_check = $member->check($email,$password,$conn);
			if($login_check == true){
				echo true;
			}
			else{
				echo "Invalid email or password";
			}
>>>>>>> 4de0117eee336590e3b98ce0c4858555c7549437
	}

}

	
	
	if(isset ($_POST['reset_password_token'])){

		$email = $_POST['email'];

		//set reset password token 
      $hash = md5( rand(0,1000) );

      $token = "reset".$hash;

      //check if email exists 
      require_once('db.php');
      $member = new Member();
      $member_response = $member->check_email($email,$conn);

      if($member_response==false){

      die("Email doesnt exist..check the email you typed well"); 

      }
      else{
      	//update password reset token
      	
      	$reset_token_check =  $member->update_token($email,$token,$conn);

      	if($reset_token_check ==true){

      		//sending email starts here 
      		require_once ('phpmailer/PHPMailerAutoload.php');

				//Create a new PHPMailer instance
				$mail = new PHPMailer;
				// Set PHPMailer to use the sendmail transport
				//$mail->isSendmail();
				//Tell PHPMailer to use SMTP
					$mail->isSMTP();
					//Enable SMTP debugging
					// 0 = off (for production use)
					// 1 = client messages
					// 2 = client and server messages
					$mail->SMTPDebug = 0;
					//Set the hostname of the mail server
					$mail->Host = 'smtp.gmail.com';
					// use
					// $mail->Host = gethostbyname('smtp.gmail.com');
					// if your network does not support SMTP over IPv6
					//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
					$mail->Port = 587;
					//Set the encryption system to use - ssl (deprecated) or tls
					$mail->SMTPSecure = 'tls';
					//Whether to use SMTP authentication
					$mail->SMTPAuth = true;
					//Username to use for SMTP authentication - use full email address for gmail
					$mail->Username = "teamdragonrevenge@gmail.com";
					//Password to use for SMTP authentication
					$mail->Password = "dragonrevenge2018";

				//Set who the message is to be sent from
				$mail->setFrom('internship@hngfun.com', 'Hng');
				//Set an alternative reply-to address
				$mail->addReplyTo('mark@hotels.ng', 'Mark');
				//Set who the message is to be sent to
				$mail->addAddress($email, 'Intern');
				//Set the subject line
				$mail->Subject = 'Password Reset ';
				//Read an HTML message body from an external file, convert referenced images to embedded,
				//convert HTML into a basic plain-text alternative body
				//$htmlContent = $member->render_email($token);
				$_SESSION['token'] = $token;

				$Body = file_get_contents('password_reset_email.php');
				$Body = str_replace('urltoken', $token, $Body);
				
				$mail->IsHTML(true);
				$mail->Body    = $Body;
				 
				//Replace the plain text body with one created manually
				$mail->AltBody = 'Your Password reset  link is http://revenge.hng.fun/passwordreset.php?token='.$token;
				//Attach an image file
				//$mail->addAttachment('images/phpmailer_mini.png');

				//send the message, check for errors
				
				if (!$mail->send()) {
				    //echo "Mailer Error: " . $mail->ErrorInfo;
				    "Error occured while sending mail";
				} else {
				    echo "Message sent";

<<<<<<< HEAD
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
=======
>>>>>>> 4de0117eee336590e3b98ce0c4858555c7549437
				}
      		
      	}
      	else{
      		//error while updating reset token 
      		
      		die('Error occured while setting reset token');
      	}

      }


	}	

<<<<<<< HEAD
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

	}

=======

	if(isset ($_POST['reset_password'])){
		 require_once('db.php');
     
      //get data from post array
      $id = $_POST['id'];

      $password= $_POST['password'];

      $password2=$_POST['password_confirm'];

      if($password !== $password2){

      die("Passwords do not match");

      }

      else if($password==""){

      die("Fill in your password");

      }
        
       else{
     //instantiate the member class
      $member_class = new Member();

      $reset_response=$member_class->update_password($id,$password,$conn);
          if($reset_response==true){
           die(true); 
          }
          else{
          die("Error occured while reseting password");  
          }
     }

  }

>>>>>>> 4de0117eee336590e3b98ce0c4858555c7549437
	
?>
