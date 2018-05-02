<?php
session_start();
require_once 'User.php';

$reg_user = new USER();

if($reg_user ->is_logged_in()!=""){
    $reg_user->redirect('home.php');
}

if(isset($_POST['btn-signup'])){

    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $email = trim($_POST['email']);
    $upass = trim($_POST['password']);
    $code = md5(uniqid(rand()));

    $stmt = $reg_user->runQuery("SELECT * FROM users WHERE email=:email_id");
    $stmt->execute(array(":email_id"=>$email));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // $stmt = $reg_user->runQuery("SELECT * FROM users WHERE userEmail=:email_id");
	// $stmt->execute(array(":email_id"=>$email));
	// $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if($stmt->rowCount() > 0){
        $msg = "
		      <div class='alert alert-error'>
				<button class='close' data-dismiss='alert'>&times;</button>
					<strong>Sorry !</strong>  email allready exists , Please Try another one
			  </div>
			  ";
    }else{
        if($reg_user->register($firstname, $lastname, $email, $upass, $code)){
            $id = $reg_user->lasdID();
            $key = base64_encode($id);
            $id = $key;

            $message = "					
						Hello $firstname $lastname,
						<br /><br />
						Welcome to Dragon Slayer!<br/>
						To complete your registration  please , just click following link<br/>
						<br /><br />
						<a href='http://localhost/dragon/verify.php?id=$id&code=$code'>Click HERE to Activate :)</a>
						<br /><br />
						Thanks,";
						
			$subject = "Confirm Registration";

            // $reg_user->send_mail($email,$message,$subject);	
			$msg = "
					<div class='alert alert-success'>
						<button class='close' data-dismiss='alert'>&times;</button>
						<strong>Success!</strong>  We've sent an email to $email.
                    Please click on the confirmation link in the email to create your account. 
			  		</div>
					";
        }else{
            echo "sorry , Query could no execute...";
        }
    }
}
?>

<?php include('header.php'); ?>

<style>
    body {
        font-size: inherit !important;
    }
    .btn-signup {
        background-color: #2196F3;
        border-color: #2196F3;
        padding: 0.4em 8em !important;
        color: white;
        border-radius: 4px;
    }
    p, label {
        font-size: 14px !important;
    }
    .link {
        font-size: 14px !important;
    }
    
</style>

<div class="container">
<div class="row h-100">
    <div class="col-md-6" >
        <div style="padding: 80px 110px 0px 110px; text-align: center; line-height: 35px;">
            <span style="font-size: 16px; color: grey">
                <strong>''</strong> The HNG Internship is a remote training program, it centres on picking out indiviuals with relevant software development skills. For a period of about 3 months these skills are developed. The internship holds annually. Its organised by Hotels.ng in partnership with top companies around the globe. Fill the form to join the biggest and best remote software internship in the world! <strong>''</strong>
            </span>
            <p style="font-size: 40px !important; text-align: center; color: #2196F3; font-family: 'Qwigley', cursive;">Mark Essien</p>
        </div>
        
    </div>
    <div class="col-md-6  mx-auto">
        <div style='text-align: left'>
        <h1 class="login-title" style="padding-top: 20px; color: #3D3D3D;">Sign Up</h1>
        <p style="font-size: 16px">Just a few clicks away from joining the biggest software development internship in Africa
        </p>
        <p><span style='color: grey'>Already have an account?</span> <a class='link' href="login.php" style="color: #2196F3; text-decoration: none">Login</a></p>
        </div>

        <?php if(isset($msg)) echo $msg;  ?>

        <form class="form-signin" method="post">

        <div class="form-row">
                <div class="form-group col-md-6" style="padding-right:25px">
                    <input type="text" name="firstname" id="firstname" class="form-control" placeholder="First Name">
                </div>
                <div class="form-group col-md-6" style="padding-right:25px">
                    <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Last Name">
                </div>
        </div>

        <br />
        <div class="form-row">
            <div class="form-group col-md-6" style="padding-right:25px">
                <input type="email" name="email" id="email" class="form-control" placeholder="Email Address">
            </div>
            <div class="form-group col-md-6" style="padding-right:25px">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            </div>
        </div>
        <br />

        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="terms" name="terms">
                <label class="form-check-label" for="terms">
                I agree to the <a class='link' href="terms-and-conditions.php" style="color: #2196F3; text-decoration: none">Terms and Conditions</a>
                </label>
            </div>
        </div>
        <br>

        <button class="btn btn-signup" type="submit" name="btn-signup" id="register">Sign Up</button>
        </form>

    </div>
</div>
</div>
<?php
    include_once("footer.php");
?>

