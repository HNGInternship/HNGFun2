 <?php include("header.php");?>



<div class="container" style='color: #3D3D3D'>
    <div class="row justify-content-md-center" style="text-align: center">
        <div class="col-lg-4">
            <div style="padding: 0px 20px 0px 20px">
                <form class="form-signin">
            <h1 class="h3 mb-3 font-weight-normal">
                <h1>Log In</h1>
	           <p style="font-size: 16px;">Login to access your dashboard and manage your account.</p>
                <br/>
            </h1>
            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email" required="" autofocus="">
            <br/>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
            <br/>
            <div class="checkbox mb-3" style="text-align: left">
                <label>
                    <input type="checkbox" value="remember-me">&nbsp; <span style="font-size: 16px;">Remember me</span>
                </label>
            </div>
            <div>
               <button class="btn btn-primary btn-block" type="submit">Log In</button> 
            </div>
                </form>
            </div>
        <div style="padding-top: 30px; padding-bottom: 30px"> 
            <img src="https://cdn1.iconfinder.com/data/icons/hawcons/32/698845-icon-118-lock-rounded-128.png" height="15px" width="auto"/>
            <span style="font-size: 14px; color: grey">Forgot Password?<a href="resetpassword.php" style="color: #008DDD"> Click here</a></span>
        </div>
        
        <div style="padding-bottom: 20px; font-size: 14px; color: #ADADAD">Don't have an account?&nbsp; <a href="signup.php" style="color: #008DDD">Get Started</a></div>
        </div>
    </div>
    
</div>

 <?php include("footer.php");?>
