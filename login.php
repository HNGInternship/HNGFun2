<?php
	session_start(); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {    
   
	if(!defined('DB_USER')){
		require "config.php";		
		try {
			$conn = new PDO("mysql:host=". DB_HOST. ";dbname=". DB_DATABASE , DB_USER, DB_PASSWORD);
		} catch (PDOException $pe) {
			die("Could not connect to the database " . DB_DATABASE . ": " . $pe->getMessage());
		}
		}
		
	// set constant fot the root url 
	define("ROOT_URL", $_SERVER['SERVER_NAME']);
	$username = $_POST['username'] ?? '';
	$password = $_POST['password'] ?? '';
	

  // Simple validation
  if(is_blank($username)) {
    $errors['username'] = "Username cannot be blank.";
  }

  if(is_blank($password)) {
    $errors['password'] = "Password cannot be blank.";
  }

  //if everything is okay, query DB for username and password
  if(empty($errors)) {
	$login_failure = "Log in was unsuccessful.";
   try {
	$query = "SELECT * FROM users_data WHERE (email = :username OR users = :username) AND password = :password";
		$q = $conn->prepare($query);
		$q->execute(array(':username' => $username,':password' => $password ));
        $q->setFetchMode(PDO::FETCH_ASSOC);
		$data = $q->fetchAll();
			if(!empty($data)){
				session_regenerate_id();
				$_SESSION['authenticated'] = true;
				$_SESSION['username'] = $data['username'];
				$_SESSION['last_login'] = time();
				redirect_to('/listing.php');

			} else {
				$errors['failed'] = $login_failure;
		}

      } catch (PDOException $e) {
        throw $e;
      }
  }
  
}


//Path resolution
function url_for($path) {

  if($path[0] != '/') {
    $path = "/" . $path;
  }
  return ROOT_URL . $path;
}

//Set and clear session message
function get_clear_session() {
	if(isset($_SESSION['message']) && $_SESSION['message'] != '') {
		$msg = $_SESSION['message'];
		unset($_SESSION['message']);
	}
}

// display session messages
function display_session_message() {
	$msg = get_clear_session();
	if(!is_blank($msg)) {
		return '<div id="message">'. h($msg) .'</div>';
	}
}

 
//Check for blank input
function is_blank($val) {
  $input = trim($val);
  if($input === '' || null) {
    return true;
  }

  return false;
}

//Redirect pages
function redirect_to($location) {
  header("Location: " . $location);
  exit;
}

// Check if user is login in
function is_logged_in(){
	return isset($_SESSION['username']);
}

//Perform all login 
function login_user($user) {

  session_regenerate_id();
  // $_SESSION['user_id'] = $user['id'];
  $_SESSION['authenticated'] = $true;
  $_SESSION['last_login'] = time();

  return true;
}

?>
<?php
include_once("header.php");
// require_once("./auth_scripts/login.php");
?>

<div class="login-container">
	<div class="inner-login-container">
		<div class="w-50">

			<span style="color:#FF0000;font-size:18px"><?= $errors['failed'] ?? '';?></span>

			<h2 class="text-center my-0 py-0" style="margin-bottom: 10px">Log In</h2>
			<p class="text-center text-lighte" style="font-size: 15px; opacity: 0.7">Login to access your dashboard and manage your account.</p>
		</div>

		<form class="w-50 mt-2">
			<input type="text" name="username" class="form-control mb-3" placeholder="Username or Email">
			<input type="text" name="password" class="form-control mb-3" placeholder="Password">
			<input type="checkbox" name="" class="" placeholder="Password"><span style="font-size: 14px;"> Remember me</span> 
			<button class="btn btn-blue w-100 rounded py-2" style="margin-bottom: 10px">Log In</button>
		</form>

		<small>Not yet registered?
			<span><a href="signup.php" class="text-primary text-lighter">SignUp</a></span>

			<h2 class="text-center my-0 py-0">Log In</h2>
			<p class="text-center f-2 mt-0 pt-0">Login to access your dashboard and manage your account.</p>
		</div>
	
		<span style="color:#FF0000;font-size:12px"><?=  $errors['username'] ?? '';?></span>
		<form class="form-container" method="POST" action="<?php echo $_SERVER['SCRIPT_NAME'] ?>">
			<input type="text" name="username" class="form-control login-input" placeholder="Username or Email">
			<span style="color:red;font-size:12px"><?=  $errors['password'] ?? '';?></span>
			<input type="password" name="password" class="form-control login-input" placeholder="Password">
			
			<div class="remember-div">
				<input type="checkbox" name="remember" class="form-control checkbox" placeholder="Remember Me">
				<label class="remember-label" for="remember">Remember Me</label>
			</div>
			<button type="submit" class="btn btn-blue w-100 rounded py-2 login-btn">Login</button>
		</form>

		<small class="forgot-password">Forgot Password?
			<span><a href="reset-password.php" class="text-primary text-lighter">Click Here</a></span>
		</small>

		<small class="signup">Don't have an account?
			<span><a href="signup.php" class="text-primary text-lighter">Get Started</a></span>

		</small>
	</div>
</div>

<?php
include_once("footer.php");
?>


   