<?php
include_once("header.php");
?>

<div class="login-container">
	<div class="inner-login-container">
		<div class="w-50">
			<h2 class="text-center my-0 py-0">Log In</h2>
			<p class="text-center f-2 mt-0 pt-0">Login to access your dashboard and manage your account.</p>
		</div>

		<form class="form-container">
			<input type="text" name="" class="form-control login-input" placeholder="Username or Email">
			<input type="password" name="" class="form-control login-input" placeholder="Password">
			<div class="remember-div">
				<input type="checkbox" name="remember" class="form-control checkbox" placeholder="Remember Me">
				<label class="remember-label" for="remember">Remember Me</label>
			</div>
			<button class="btn btn-blue w-100 rounded py-2 login-btn">Login</button>
		</form>

		<small class="forgot-password">Forgot Password?
			<span><a href="forgotpassword.php" class="text-primary text-lighter">Click Here</a></span>
		</small>

		<small class="signup">Don't have an account?
			<span><a href="signup.php" class="text-primary text-lighter">Get Started</a></span>
		</small>
	</div>
</div>

<?php
include_once("footer.php");
?>


   