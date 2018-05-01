<?php
include 'conn.php';
$tell = $_GET['tr'];
$sql = "SELECT Surname, FirstName, OtherName, TellerNo, Amount, Bank, Branch, DateIssue, status, UserId FROM bankslip WHERE Branch = '$tell'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
       $name = $row["Surname"].' '.$row["FirstName"].' '.$row["OtherName"];
       $email = $row["TellerNo"];
       $amt = $row["Amount"];
       $UserId = $row["UserId"]; 
       $status = $row["status"]; 
    }
} else {
 //   echo "0 results";
}


       	//echo $receipientmail;
        $msg = "<html>
<head>
<title>ISI O'LEVEL Admission Exercise</title>
</head>
<body>
<p>Your Payment For The Admission Exercise Is Successful</p>
<table>
<tr>
<th>Transaction Number</th>
<th>$trn</th>
</tr>
<tr>
<th>Name</th>
<th>$name</th>
</tr>
<tr>
<td>E-Mail</td>
<td>$email</td>
</tr>
<tr>
<td>Password</td>
<td>$UserId</td>
</tr>
</table>
NOTE: You will ask to login with the above details to  continue your registration</br>
<a href='http://admissions.isi.ui.edu.ng/olevel/registration' target='_blank' class='btn'>CLICK HERE TO PROCEED TO ADMISSION FORM</a>
</body>
</html>";
   // the user has submitted the form

include("class.phpmailer.php"); //you have to upload class files "class.phpmailer.php" and "class.smtp.php"
 
$mail = new PHPMailer();
 
$mail->IsSMTP();
$mail->SMTPAuth = true;

$mail->Host = "mail.admissions.isi.ui.edu.ng";

$mail->Username = "no-reply@admissions.isi.ui.edu.ng";
$mail->Password = "Admission123@"; 
 
$mail->From = "no-reply@admissions.isi.ui.edu.ng";
$mail->FromName = "ISI ADMISSION EXERCISE";
 
$mail->AddAddress($email);
$mail->AddCC('aa.adelopo@gmail.com', '');
$mail->AddCC('school@isi.ui.edu.ng', '');
$mail->AddCC('info@icitifysolution.com', '');
$mail->Subject = "ISI ADMISSION EXERCISE";
$mail->Body = $msg;
$mail->WordWrap = 50;
$mail->IsHTML(true);
$str1= "gmail.com";
$str2=strtolower("no-reply@admissions.isi.ui.edu.ng");
If(strstr($str2,$str1))
{
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
if(!$mail->Send()) {
echo "Mailer Error: " . $mail->ErrorInfo;
echo "<br><br> * Please double check the user name and password to confirm that both of them are correct. <br><br>";
echo "* If you are the first time to use gmail smtp to send email, please refer to this link :http://www.smarterasp.net/support/kb/a1546/send-email-from-gmail-with-smtp-authentication-but-got-5_5_1-authentication-required-error.aspx?KBSearchID=137388";
} 
else {
echo "Message has been sent";
}
}
else{
	$mail->Port = 25;
	if(!$mail->Send()) {
echo "Mailer Error: " . $mail->ErrorInfo;
echo "<br><BR>* Please double check the user name and password to confirm that both of them are correct. <br>";
} 
else {
echo "Message has been sent";
}
}  

?>

<!DOCTYPE html>
<html lang="en">

    <head>
<style>
		body{
			background:url(http://isi.ui.edu.ng/sites/default/files/education/features/DSC_5870.JPG) no-repeat center;
			background-size:cover;
			
		}
		</style>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PAYMENT</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">

            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3 style="color:#fff">PAYMENT CHECK</h3>

                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form >

                              <div class="form-group">
                                PAYMENT STATUS
  			                    		<label class="sr-only" for="form-username">FIrst Name</label>
  			                        	<input type="text" name="fname" value="<?php echo $status; ?>" readonly require class="form-username form-control" id="form-username">
  			                        </div>

                              
                            <div class="form-group">
															FULLNAME
															<label class="sr-only" for="form-username"></label>
																	<input type="text" name="amount" value="<?php echo $name; ?>" readonly require class="form-username form-control" id="form-username">
																</div>

															<div class="form-group">
															EMAIL
															<label class="sr-only" for="form-username"></label>
																	<input type="text" name="email" value="<?php echo $email; ?>" readonly require class="form-username form-control" id="form-username">
																</div>
																<div class="form-group">
																PASSWORD
																<label class="sr-only" for="form-username"></label>
																		<input type="text" name="pass" value="<?php echo $UserId; ?>" readonly require class="form-username form-control" id="form-username">
																	</div>NOTE:PLEASE WRITE DOWN THE EMAIL AND PASSWORD. YOU WILL BE REQUIRED TO INPUT THEM TO COMPLETE YOUR REGISTRATION<br/>
																	<a href="http://admissions.isi.ui.edu.ng/olevel/registration" target="_blank" class="btn">CLICK HERE TO PROCEED TO ADMISSION FORM</a>
																	<br />
															 </form>
		                    </div>
                        </div>
                    </div>


                    </div>
                </div>
            </div>

        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>



