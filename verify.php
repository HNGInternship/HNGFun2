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
	
	$statusY = "Y";
    $statusN = "N";
    
    $query = "SELECT id, userstatus FROM interns_data WHERE id=:uid AND token_code=:code LIMIT 1";

    // $stmt->execute(array(":uid"=>$id, ":code"=>$code));
    $stmt=$db->prepare($query);
    $stmt->bindParam(":uid", $id);
    $stmt->bindParam(":code", $code);
    $stmt->execute();
    $row=$stmt->fetch(PDO::FETCH_ASSOC);
    if($stmt->rowCount() >0){
        if($row['userstatus']== $statusN){
            $query = "UPDATE users SET userstatus=:status WHERE id=:uID";
            $stmt=$db->prepare($query);
			$stmt->bindparam(":status",$statusY);
			$stmt->bindparam(":uID",$id);
            $stmt->execute();	

            
            $msg = "
		           <div class='alert alert-success'>
				   <button class='close' data-dismiss='alert'>&times;</button>
					  <strong>WoW !</strong>  Your Account is Now Activated : <a href='login.php'>Login here</a>
			       </div>
			       ";	
        }else{
            $msg = "
            <div class='alert alert-error'>
            <button class='close' data-dismiss='alert'>&times;</button>
               <strong>sorry !</strong>  Your Account is allready Activated : <a href='index.php'>Login here</a>
            </div>
            ";
        }
    }else{
        $msg = "
		       <div class='alert alert-error'>
			   <button class='close' data-dismiss='alert'>&times;</button>
			   <strong>sorry !</strong>  No Account Found : <a href='signup.php'>Signup here</a>
			   </div>
			   ";
    }
}
?>



<div class="container">
		<?php if(isset($msg)) { echo $msg; } ?>
    </div> 

<?php include('footer.php'); ?>