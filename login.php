<?php
$erros = [];
$username = '';
$password = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	$username = $_POST['username'] ?? '';
	$password = $_POST['password'] ?? '';

	// Simple validation
	if(is_blank($username)) {
		$erros[] = "Username cannot be blank.";
	}

	if(is_blank($username)) {
		$erros[] = "Password cannot be blank.";
	}

	//
	if(empty($errors)) {

		$user = find_user_by_id($username);
		$login_failure = "Log in was unsuccessful.";
		
		if($user) {
			
			if(password_verify($password, $user['hashed_password'])) {
				// password matches
				login_user($user);
				redirect_to(url_for('/dashboard/index.php'));
			} else {
				// username found, but password does not match
				$errors[] = $login_failure;
			}
		} else {
			// no user 
			$errors[] = $login_failure;
		}
	}
	
}

function find_user_by_id($id) {
	// global conn;

	$sql = "SELECT * from users WHERE user_id = '".$id."' LIMIT 1";
	  try {
         $query = $conn->query($sql);
            $user = $query->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        throw $e;
    }
}
 
//Check for blank input
function is_blank($val) {
	$input = trim($val);
	if($input === '' || null) {
		return false;
	}

	return true;
}

//Redirect pages
function redirect_to($location) {
	header("Location: " . $location);
	exit;
}

//Perform all login 
function login_user($user) {

	session_regenerate_id();
	$_SESSION['user_id'] = $user['id'];
	$_SESSION['username'] = $user['username'];
	$_SESSION['last_login'] = time();

	return true;
}

?>
<?php
include_once("header.php");
?>

<style>
	.login-button {
		background: #2196F3;
        padding: 0.4em 8em !important;
        color: white;
        border-radius: 5px;
    }
    .login-button:hover {
        opacity: 0.8;
    }
	.fa.fa-lock {
		color:#2196F3;
	}
	
	 /* media queries */
	 @media (max-width: 599px) { 
		 .login-con {
			 width: 100% !important;
		 }
	 }
</style>

<div class="container">
	<div class="d-flex flex-column justify-content-center align-items-center">
		<div class="d-block w-50 mt-5 login-con">
			<div class="w-50 m-auto">
				<h2 class="text-center my-0 py-0" style="margin-bottom: 10px">Log In</h2>
				<p class="text-center" style="font-size: 15px; opacity: 0.7">Login to access your dashboard and manage your account.</p>
			</div>

			<form class="w-50 m-auto">
				<input type="text" name="username" class="form-control mb-3" placeholder="Username or Email" required >
				<input type="text" name="password" class="form-control mb-3" placeholder="Password" required >
				<input type="checkbox" name="remember_me" class="" placeholder="Password"><span style="font-size: 14px;"> Remember me</span> 
				<button class="btn w-100 rounded py-2 login-button">Login</button>
			</form>
			<div class="w-50 m-auto text-center">
				<a href="resetpassword.php">
					<small><i class="fa fa-lock"></i>&nbsp;&nbsp;Forgotten password? </small>
				</a>
			</div>
			<div class="w-50 m-auto text-center">
				<small>
					<span style="color: #c4c4c4">
						Don't have an account?&nbsp;
					<span>
					<a href="signup.php" class="text-primary text-lighter text-center">Get Started</a>
				</small>
			</div>
		</div>
	</div>
</div>

<?php
include_once("footer.php");
?>