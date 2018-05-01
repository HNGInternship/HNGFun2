<?php

include "header.php";

require_once 'User.php';
$user = new User();

if(empty($_GET['id']) && empty($_GET['code']))
{
	$user->redirect('index.php');
}

if(isset($_GET['id']) && isset($_GET['code']))
{
	$id = base64_decode($_GET['id']);
	$code = $_GET['code'];
	
    $query = "SELECT * FROM interns_data WHERE id=:uid AND token_code=:token";
    $stmt = $db->prepare($query);
	$stmt->execute(array(":uid"=>$id,":token"=>$code));
	$rows = $stmt->fetch(PDO::FETCH_ASSOC);
	if($stmt->rowCount() == 1)
	{
		if(isset($_POST['btn-reset-pass']))
		{
			$pass = $_POST['pass'];
			$cpass = $_POST['confirm-pass'];
			
			if($cpass!==$pass)
			{
				$msg = "<div class='alert alert-block'>
						<button class='close' data-dismiss='alert'>&times;</button>
						<strong>Sorry!</strong>  Password Doesn't match. 
						</div>";
			}
			else
			{
				$password = md5($cpass);
				$query = "UPDATE interns_data SET password_hash=:upass WHERE id=:uid";
				$stmt->execute(array(":upass"=>$password,":uid"=>$rows['id']));
				
				$msg = "<div class='alert alert-success'>
						<button class='close' data-dismiss='alert'>&times;</button>
						Password Changed.
						</div>";
				header("refresh:5;index.php");
			}
		}	
	}
	else
	{
		$msg = "<div class='alert alert-success'>
				<button class='close' data-dismiss='alert'>&times;</button>
				No Account Found, Try again
				</div>";			
	}
}

?>

<div class="container">
    <div class='alert alert-success'>
        <strong>Hello !</strong>  <?php echo $rows['first_name'] ?> you are here to reset your forgetton password.
    </div>
    <form class="form-signin" method="post">
    <h3 class="form-signin-heading">Password Reset.</h3><hr />
    <?php
    if(isset($msg))
    {
        echo $msg;
    }
    ?>
    <input type="password" class="input-block-level" placeholder="New Password" name="pass" required />
    <input type="password" class="input-block-level" placeholder="Confirm New Password" name="confirm-pass" required />
    <hr />
    <button class="btn btn-large btn-primary" type="submit" name="btn-reset-pass">Reset Your Password</button>
    
    </form>

    </div> <!-- /container -->
    
<?php inlude('footer.php') ?>