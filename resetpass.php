<?php 

require_once 'class.user.php';

$user = new USER();

if(empty($_GET['id']) && empty($_GET['code']))
{
	$user->redirect('index.php');
}

if(isset($_GET['id']) && isset($_GET['code']))
{
	$id = base64_decode($_GET['id']);
    $code = $_GET['code'];
    
$stmt= $user->runQuery("SELECT * FROM users WHERE id=:uid AND tokenCode=:token");
$stmt->execute(array(":uid"=>$id, ":token"=>$code));
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
			}else{
                $password = md5($cpass);
                $stmt= $user->runQuery("UPDATE users SET userPass=:upass WHERE id=:uid");
                $stmt->execute(array(":upass"=>$password, ":uid"=>$rows['id']));

                $msg = "<div class='alert alert-success'>
						<button class='close' data-dismiss='alert'>&times;</button>
						Password Changed.
						</div>";
				header("refresh:5;index.php");
            }
        }
    }else{
        $msg = "<div class='alert alert-success'>
				<button class='close' data-dismiss='alert'>&times;</button>
				No Account Found, Try again
				</div>";
    }
}
?>

<?php include('header.php'); ?>

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

      </div>

      <?php include('footer.php'); ?>


