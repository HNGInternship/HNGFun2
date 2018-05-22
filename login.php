 <?php 
   session_start();
    include("header.php");
  ?>


<div style="text-align: center; padding-top: 20px; padding-bottom: 10px">
    <h1 class="pt-5" style="font-size:2.0em">Log In</h1>
    <p style="font-size: 1.0em !important; color: #3D3D3D !important;" class="pt-0 mt-0 pb-0 mb-0">Login to access your dashboard and manage your account.</p>
</div>

<div class="container" style='color: #3D3D3D'>
            <h6 style="text-align: center" class="text-danger" id="message"></h6>


    <div class="row justify-content-md-center" style="text-align: center">
        <div class="col-lg-4">
            <div >
                <form class="form-signin" id="login_form">
                    <div class="form-group">
                        <label for="email" class="sr-only">Email</label>
                        <input type="email" id="email" class="form-control" placeholder="Username or Email address" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    
                    <div class="custom-control custom-checkbox pl-0 ml-0 pb-2 text-justify">
                        <input type="checkbox" value="remember-me">
                        <label class="form-check-label" style="font-size:0.7em;">Remember Me</label>
                    </div>
                    
                    <button class="btn btn-primary btn-block" id="login" type="submit" style="font-size:1.0em">Log In</button> 
                <input type="hidden" name="login" value="yes">

                
                </form>
                <div class="pt-0 mt-0 text-justify pl-3"> 
                    <img src="https://cdn1.iconfinder.com/data/icons/hawcons/32/698845-icon-118-lock-rounded-128.png" height="15px" width="auto"/>
                    <span style="font-size: 0.7em; color: grey"><a href="resetpassword.php"> Forgot Password?</a></span>
                </div>

                <div style="font-size: 0.8em; color: #ADADAD" class="pt-3">Don't have an account?&nbsp; <a href="sign-up" style="color: #008DDD">Get Started</a></div>
            </div>
        </div> 
        
        
    </div>
    
</div>
<script type="text/javascript">
       $( document ).ready(function() {

    $("#login_form").submit(function(e){
        e.preventDefault();

       
        var email = $("#email").val();
       
        var password = $("#password").val();


        
        
        if(email ==""){
            $("#message").addClass('alert alert-danger');
            $("#message").html('Please enter email');
                 $("#message").show();
            $("#login").html('Log In');

            
        }
       
        else if(password ==""){
            $("#message").addClass('alert alert-danger');
            $("#message").html('Please enter password');
                 $("#message").show();


        }

       
        else{
            
            
            $("#login").html('Logging in..');

             var data = $("#login_form").serialize();

            

             $.ajax('process_access',{
            type : 'post',
            data : data,
            success: function(data){


             if(data=="1"){
                $("#message").attr("class",'text-success');
            $("#message").html("Login Successful");

            $("#login").html('Redirecting..');

            window.location.href ="dashboard";
             }  
             else if(data=="2"){
                $("#message").attr("class", 'text-danger');
            
                $("#message").html("Your Account has not been verified yet");
             } 

             else if(data="0"){

                $("#message").attr("class", 'text-danger');
            
                 $("#message").html('You entered an incorrect email or password');
             }

             else{

                 $("#message").attr("class", 'text-danger');
            
                 $("#message").html(data);
             }
                 $("#message").show();


            $("#login").html('Log In');
                

            },
            beforeSend :function(){

                 $("#message").hide();
            $("#login").html('Logging in..');
            },
        });
    

        }
        
     });



    });
</script>
 <?php include("footer.php");?>
