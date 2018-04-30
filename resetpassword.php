<?php
include_once("header.php");
?>


<div class="container">
    <div class="d-flex justify-content-center align-items-center mt-5">
        <div class="d-block w-80 login-con mb-5">
            <div class="w-50 m-auto reset-title">
                <h2 class="text-center my-0 py-0">Reset Password</h2>
                <p class="text-center f-2 mt-0 pt-0 text-lighte">Enter your email address and we'll send you an email with instructions to reset your password.</p>
            </div>
            <form class="w-50 m-auto">
                    <input type="text" class="form-control mb-3" placeholder="johndoe@example.com" aria-label="Username" aria-describedby="basic-addon1">
                    <button class="btn btn-primary w-100 rounded py-2" type="submit">Reset Password</button>
            </form>
			<div class="w-50 m-auto text-center">            
                <small>
                <span style="color: #c4c4c4">
                    Already have an account?
                </span>
                    <span><a href="login.php" class="text-primary text-lighter">Login</a></span>
                </small>
            </div>
        </div>
    </div> 
</div>

<?php
include_once("footer.php");
?>