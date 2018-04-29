 <?php include("header.php");?>

<head>
    <title>Login</title>
	<style>
	
	@import url(http://fonts.googleapis.com/css?family=Roboto:400,100);


.page
{    
	padding-top: 90px;
	margin: 0 auto 30px;
     width: 400px;
}
.login-card {
  padding: 5px 20px;
  width: 350px;
  margin: 0 auto 10px;
  border-radius: 5px;
  overflow: hidden;
  font-family:Roboto;
  
}

.login-card h1 {
padding-top: 20px;
margin-left: 20px;
  color:#000;
  font-weight: 700;
  text-align: center;
  font-size: 1.8em;
  line-height: 0px;
  font-family:Roboto;
}

.login-card input[type=submit] {
  width: 90%;
  display: block;
  margin: 10px 40px;
  position: relative;
}

.login-card input[type=text], input[type=password] {
  height: 38px;
  font-size: 14px;
  width: 90%;
  margin: 15px 40px;
   display: block;
  border: 0.5px solid grey;
  background: #fff;
 border-radius: 5px; 
  padding: 0 8px;
   opacity: 0.6;
   font-family:Roboto;
}

.login-card input[type=checkbox] {
  border: 1px solid grey;
}
.login-card input[type=text]:hover, input[type=password]:hover { 
 
}

.login {
  text-align: center;
  font-size: 13px;
  font-family: 'Arial', sans-serif;
  font-weight: 700;
  height: 36px;
  padding: 0 8px;
}

.login-submit {
  margin-top: 10px;
  border: 0px;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1); 
  background-color: #2196F3;
  border-radius: 2px;
}

.login-submit:hover {
  border: 0px;
  text-shadow: 0 1px rgba(0,0,0,0.3);
}

.login-card a {
  text-decoration: none;
  color: #000;
  font-weight: 400;
  display: inline-block;
  opacity: 0.6;
  transition: opacity ease 0.5s;
}

.login-card a:hover {
  opacity: 1;
}

.login-help {
  width: 70%;
  font-size: 14px;
  margin-:10px 40x;
}

.login-help a {
 margin-left: 14px;
}
.login-help img {
 margin-left: 40px;
}
.login-out {
  width: 89%;
  text-align: center;
  font-size: 14px;
   opacity: 0.8;
   font-family:Roboto;
}
.login-out a{
  text-decoration: none;
  color: #2196F3;
}
		</style>
  </head>
  <div class="page">
    <div class="login-card">
    <h1>Log In</h1><br>
	 <p class="login-out" style="margin:0px 20px;">Login to access your dashboard and manage your account.</p>
  <form action="checkLogin.php" method="post">
   <input type="text" name="username" id="username"  placeholder="Username or Email">
    <input type="password" name="password" id="password" placeholder="Password">
	<input type="checkbox" name="remember" id="remember" value="" style="margin-left: 40px;font-size: 10px;">&nbsp Remember me<br>
    <input type="submit" name="login" class="login login-submit" value="Login">
  </form>
    
  <div class="login-help"> <img src="https://cdn1.iconfinder.com/data/icons/hawcons/32/698845-icon-118-lock-rounded-128.png" height="20px" width="20px"/><a href="resetpassword.php">Forgot Password?</a></div>
</div>
 <div class="login-out" style="margin-left: 50px; text-align: center;">Don't have an account?<a href="signup.php" >&nbsp Get Started</a></div>
 </div>
 <?php include("footer.php");?>
