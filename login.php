<?php
session_start();
require_once 'User.php';
$user_login = new USER();

if($user_login->is_logged_in() !=""){
    $user_login->redirect('dashboard.php');
}
if(isset($_POST['btn-login'])){
    $email = trim($_POST['txtemail']);
    $upass = trim($_POST['txtupass']);

    if($user_login->login($email, $upass)){
        $user_login->redirect('dashboard.php');
    }
}
?>

<?php include('header.php'); ?>

<div style="text-align: center; padding-top: 20px; padding-bottom: 10px">
    <h1 class="font-weight-normal">
        <h1>Log In</h1>
	    <p style="font-size: 16px;">Login to access your dashboard and manage your account.</p>
    </h1>
</div>

<div class="container" style='color: #3D3D3D'>
<?php 
    if(isset($_GET['inactive']))
    {
        ?>
        <div class='alert alert-error'>
            <button class='close' data-dismiss='alert'>&times;</button>
            <strong>Sorry!</strong> This Account is not Activated Go to your Inbox and Activate it. 
        </div>
        <?php
    }
    ?>
    <div class="row justify-content-md-center" style="text-align: center">
        <div class="col-lg-4">
            <div style="padding: 0px 20px 0px 20px">
                <form class="form-signin" id="login_form">
            <label for="email" class="sr-only">Email</label>
            <input type="email" id="email" class="form-control" placeholder="Email" name="txtemail" required="" autofocus="">
            <br/>
            <label for="password" class="sr-only">Password</label>
            <input type="password" id="password" name="txtupass" class="form-control" placeholder="Password" required="">
            <br/>
            <div class="checkbox mb-3" style="text-align: left">
                <label>
                    <input type="checkbox" value="remember-me">&nbsp; <span style="font-size: 16px;">Remember me</span>
                </label>
            </div>
            <div>
               <button class="btn btn-primary btn-block" name="btn-login" id="login" type="submit">Log In</button> 
            </div>
                </form>
            </div>
        <div style="padding-top: 30px; padding-bottom: 30px"> 
            <img src="https://cdn1.iconfinder.com/data/icons/hawcons/32/698845-icon-118-lock-rounded-128.png" height="15px" width="auto"/>
            <span style="font-size: 14px; color: grey">Forgot Password?<a href="fpass.php" style="color: #008DDD"> Click here</a></span>
        </div>
        <div style="padding-bottom: 20px; font-size: 14px; color: #ADADAD">Don't have an account?&nbsp; <a href="signup.php" style="color: #008DDD">Get Started</a></div>
        </div>
    </div>
    
</div>

<?php include("footer.php");?>