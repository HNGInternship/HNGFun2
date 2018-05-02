<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HNG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/passwordreset.css" />
</head>
<body>
<?php
include_once("header.php");
?>
     <h3 class="head">   Reset Password </h3>
     <p class="text">Enter your email address and we'll send 
     you an email with <br /> instructions to reset your password.</p>

     
           <input type="text" name="email" placeholder="johndoe@mail.com" class="input"><br>
           <button class="btn1"> Reset Password</button>
           <p class="note"> Already have an account? <a href="#">Login</a></p>

<?php
include_once("footer.php");
?>
</body>
</html>