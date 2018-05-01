<?php

include "header.php";

session_start();

require_once 'User.php';

$user = new User();

// if($user->is_logged_in()!="")
// {
// 	$user->redirect('home.php');
// }

if(isset($_POST['btn-submit'])){
    $email = $_POST['email'];

    $query= "SELECT id FROM interns_data WHERE email=:email LIMIT 1";
    $stmt= $db->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();
    // $stmt->execute(array(":email"=>$email));
    $row= $stmt->fetch(PDO::FETCH_ASSOC);
    if($stmt->rowCount() == 1){
        $id = base64_encode($row['id']);
        $code = md5(uniqid(rand()));

        $query = "UPDATE interns_table SET token_code=:token WHERE email=:email";
        $stmt=$db->prepare($query);
        $stmt->bindParam(":token", $code);
        $stmt->bindParam(":email", $email);

        // $stmt->execute(array(":token"=>$code, "email"=>$email));

        $message= "
				   Hello , $email
				   <br /><br />
				   We got requested to reset your password, if you do this then just click the following link to reset your password, if not just ignore                   this email,
				   <br /><br />
				   Click Following Link To Reset Your Password 
				   <br /><br />
				   <a href='http://slayers.hng.fun/resetpass.php?id=$id&code=$code'>click here to reset your password</a>
				   <br /><br />
				   thank you :)
				   ";
        $subject = "Password Reset";
        
        $user->send_mail($email,$message,$subject);
		
		$msg = "<div class='alert alert-success'>
					<button class='close' data-dismiss='alert'>&times;</button>
					We've sent an email to $email.
                    Please click on the password reset link in the email to generate new password. 
                  </div>";

    }else{
        $msg = "<div class='alert alert-danger'>
					<button class='close' data-dismiss='alert'>&times;</button>
					<strong>Sorry!</strong>  this email not found. 
			    </div>";
    }
}

?>

<div class="container">

    <form class="form-signin" id="reset_form"  method="post">

    <?php
        if(isset($msg))
        {
            echo $msg;
        }
        else
        {
            ?>
            <div class='alert alert-info'>
            Please enter your email address. You will receive a link to create a new password via email.!
            </div>  
            <?php
        }
    ?>
    <!-- <div class="form-row justify-content-center">
        <div class="form-group col-md-6" style="padding-right:100px; padding-left: 100px">
            <input type="password" name="password" id="password" class="form-control" placeholder="New Password" value=""> -->

            <input type="email" class="input-block-level" placeholder="Email address" name="email" required />
            <hr />
            <button class="btn btn-danger btn-primary" type="submit" name="btn-submit">Generate new Password</button>
        </form>
</div>

<?php include('footer.php'); ?>



