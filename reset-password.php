<?php
include_once("header.php");
?>

<div class="d-flex justify-content-center align-items-center mt-5 pt-5 pl-5">
	<div class="d-block w-50 mt-5 ml-10">
		<div class="w-50">
			<h2 class="text-center my-0 py-0">Reset Password</h2>
			<p class="text-center f-2 mt-0 pt-0 text-lighte">Enter your email address and we'll send you an email with instructions to reset your password.</p>
		</div>

		<form class="w-50 mt-2">
			<input type="text" name="" class="form-control mb-3" placeholder="johndoe@gmail.com">
			<button class="btn btn-blue w-100 rounded py-2">Reset Password</button>
		</form>

		<small>Already have an account?
			<span><a href="login.php" class="text-primary text-lighter">Login</a></span>
		</small>
	</div>
</div>

<?php
include_once("footer.php");
?>


   