<?php
include_once("header.php");
?>

<div class="d-flex justify-content-center align-items-center mt-5 pt-5 pl-5">
	<div class="d-block w-50 mt-5 ml-10">
		<div class="w-50">
			<h2 class="text-center my-0 py-0" style="margin-bottom: 10px">Log In</h2>
			<p class="text-center text-lighte" style="font-size: 15px; opacity: 0.7">Login to access your dashboard and manage your account.</p>
		</div>

		<form class="w-50 mt-2">
			<input type="text" name="username" class="form-control mb-3" placeholder="Username or Email" required >
			<input type="text" name="password" class="form-control mb-3" placeholder="Password" required >
			<input type="checkbox" name="remember_me" class="" placeholder="Password"><span style="font-size: 14px;"> Remember me</span> 
			<button class="btn btn-blue w-100 rounded py-2" style="margin-bottom: 10px">Log In</button>
		</form>
		<small>Forgotten password? </small><a href="reset-password.php">reset here</a><br />
		<small>Not yet registered?
			<span><a href="signup.php" class="text-primary text-lighter">SignUp</a></span>
		</small>
	</div>
</div>

<?php
include_once("footer.php");
?>