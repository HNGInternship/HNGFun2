<?php

$reset_link_passed = false;

// Handle mailing
if(isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	// Get email
	$user_email = $_POST['email'];

	// Generate reset link
	$reset_token = sha1(rand(1, 1000000));

	// Create URL and append link
	$reset_link = urlencode("https://hng.fun/reset-password.php?token=". $reset_token);

	// Prepare email for user
	$subject = 'Password Reset Link';
	$message = "Click on the link below to reset your password.\n\n". $reset_link;
	$header = "Content-type:text/plain;charset=utf-8" . "\r\n";
	$header += "From:hng.fun";

	// Send email to user
	mail($user_email, $subject, $message, $header);
}
else if(isset($_GET['token']) && $_GET['token'] != '') { // Handle token
	// Split out token
	$token = $_GET['token'];

	// Check if equal to token stored in db

	// Check for expiry
	// If accurate allow user input new password
	echo 'works';
}
else if (isset($_POST['password']) && $_POST['password'] != '') { // Handle new password reset
	echo 'password reset';
}
else {
	echo 'bad';
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" width="device-width, initial-scale=1.0">
	<title>Reset Password</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<style>
		h1 {
			font-weight: bolder;
		}
		.container {
			margin-top: 10%;
		}
		.formContainer {
			display: table;
			height: 100%;
			margin: 0 auto;
		}
		.form {
			display: table-cell;
			vertical-align: middle;
		}
		.form, #email{
			padding: 10px;
			width: 300px;
		}
		#btn {
			width: 300px;
		}
		input {
			margin: 10px;
		}
		#p {
			opacity: 0.7;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1 class="text-center">Reset Password</h1>
		<p class="text-center">Enter your email address and we'll send you an email with<br/>instructions to reset your password.</p>

	<div class="formContainer">
		<div class="form">
			<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
				<?php if($reset_link_passed){ ?>
					<div class="row">
						<input type="password" class="form-control" name="password" id="email">
					</div>
				<?php }else { ?>
					<div class="row">
						<input type="text" class="form-control" name="email" id="email" placeholder="johndoe@mail.com">
					</div>
				<?php } ?>

				<div class="row">
					<input type="submit" class="btn btn-primary" id="btn" value="Reset password" placeholder="Enter new password">
				</div>

				<div class="row">
					<p id="p" class="text-center" style="padding-top: 5px;">Already have an account? <a href="#">Log In</a></p>
				</div>
			</form>
		</div>
	</div>

	</div>
</body>
</html>
