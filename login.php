 <?php include("header.php");?>

<head>
    <title>Login</title>
	<style>
	
	@import url(http://fonts.googleapis.com/css?family=Roboto:400,100);


.page
{    
	margin: 0 auto 30px;
     width: 300px;
}
.login-card {
  padding: 20px;
  width: 274px;
  background-color: #b0e5f0;
  margin: 0 auto 30px;
  border-radius: 5px;
  overflow: hidden;
  
}

.login-card h1 {
  color:#365eb4;
  font-weight: 40;
  text-align: center;
  font-size: 1.8em;
  font-family:'Arial', sans-serif;
}

.login-card input[type=submit] {
  width: 100%;
  display: block;
  margin-bottom: 10px;
  position: relative;
}

.login-card input[type=text], input[type=password] {
  height: 30px;
  font-size: 14px;
  width: 100%;
  margin-bottom: 10px;
  background: #fff;
 border-radius: 5px; 
  padding: 0 8px;
}

.login-card input[type=text]:hover, input[type=password]:hover {
  border-radius: 5px; 
}

.login {
  text-align: center;
  font-size: 16px;
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
  background-color: #C0E2D4;
}

.login-card a {
  text-decoration: none;
  color: #000;
  font-weight: 400;
  text-align: center;
  display: inline-block;
  opacity: 0.6;
  transition: opacity ease 0.5s;
}

.login-card a:hover {
  opacity: 1;
}

.login-help {
  width: 100%;
  text-align: left;
  font-size: 12px;
}

.login-out {
  width: 100%;
  text-align: center;
  font-size: 12px;
}
.login-out a{
  text-decoration: none;
  color: #2196F3;
}
		</style>
  </head>
  <div class="page">
    <div class="login-card">
    <h1>Login</h1>
  <form action="checkLogin.php" method="post">
    <input type="text" name="id"  placeholder="ID">
    <input type="password" name="password" placeholder="Password">
	<input type="checkbox" name="remember" value=""> Remember me<br>
    <input type="submit" name="login" class="login login-submit" value="Login">
  </form>
    
  <div class="login-help"><a href="#">Forgot Password?</a></div>
</div>
 <div class="login-out">Don't have an account?<a href="#" >Get Started</a></div>
 </div>
 <?php include("footer.php");?>
