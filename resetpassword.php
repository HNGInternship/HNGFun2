<?php
include_once("header.php");
?>



<!--form for getting email for password reset-->
<div id="get-email-reset" class="container" >
    <div class="row justify-content-md-center">
        <p id="message"></p>
        <form id="form-reset" style='text-align: center; padding: 100px'>
<div class="container" >
    

    <div class="row justify-content-md-center">
        <div id="message"></div>
        <form style='text-align: center; padding: 100px' id="reset_form">
            <h1>Reset Password</h1>
            <p style="width: 480px; margin-left: 150px;">
                Enter your email address and we'll send you an email with instructions to reset your password.
            </p>
            <div style="padding: 20px 200px 0px 200px;  width: 800px;">
                <!-- <input type="text" name="email" class="form-control form-control-lg rounded-right" placeholder="johndoe@example.com" aria-label="Username" aria-describedby="basic-addon1">
                <br />
                <input type="hidden" name="pword-reset" value="yes">
                <button id="btn-reset" name="pword-reset" class="btn btn-primary btn-block" type="submit" style="border-radius: 8px;">Reset Password</button> -->
                <input type="email" class="form-control form-control-lg rounded-right" placeholder="johndoe@example.com" aria-label="Username" aria-describedby="basic-addon1" id="email" name="email">
                <br />
                <input type="hidden" name="reset_password_token" value="yes">
                <button id='reset' class="btn btn-primary btn-block" type="submit" style="border-radius: 8px;">Reset Password</button>
                <p style='color: #ADADAD '>
                     Already have account? <a href="login.php" style="text-decoration: none; "><span style="color: #1E99E0">Log In</span></a> 
                </p>
            </div>
        </form>
    </div> 
</div>

<!--form for changing password-->
<div id="password-change" class="container" >
    <div class="row justify-content-md-center">
        <form id="form-change" style='text-align: center; padding: 100px'>
            <h1>Change Password</h1>
            <p style="width: 480px; margin-left: 150px;">
                Create a new password and confirm it.
            </p>
            <div style="padding: 20px 200px 0px 200px;  width: 800px;">
                <input type="password" name="pass" class="form-control form-control-lg rounded-right" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
                <br />

                <input type="password" name="pass-confirm" class="form-control form-control-lg rounded-right" placeholder="Confrim Password" aria-label="Username" aria-describedby="basic-addon1">
                <br />
                <input type="hidden" name="token" value="<?php $token = $_GET['token']; echo $token;   ?>">
                <button id="btn-change" name="pword-change" class="btn btn-primary btn-block" type="submit" style="border-radius: 8px;">Change Password</button>
                <p style='color: #ADADAD '>
                     Already have account? <a href="login.php" style="text-decoration: none; "><span style="color: #1E99E0">Log In</span></a> 
                </p>
            </div>
        </form>
    </div> 
</div>




 
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->

<script type="text/javascript">
 const la = ""
     var token = "<?php if(isset($_GET['token'])){
         echo $_GET['token'];
     }else{
        echo null;
     } ?>";
        if(token){
            $('#get-email-reset').hide();
        }

        else{
             $('#password-change').hide();
        }
    $(document).ready(function(){
        //ajax for password reset
        $("#btn-reset").click(function(e){
            e.preventDefault();
            var data = $("#form-reset").serialize();
            //alert('clicked');
            $.ajax('process.php',{
                type: 'post',
                data: data,
                success: function(response){
                    if(response == 1){
                    $("#message").addClass('alert alert-success');
                    $("#message").html("Email has been sent to you!");
                    }

                    else if(response == 3){
                        $("#message").addClass('alert alert-success');
                    $("#message").html("Email not registered!");
                    }
                    else{
                    $("#message").addClass('alert alert-success');
                    $("#message").html('Password reset failed, please try again.');
                    }

                }
            });
        });



        //ajax for password change
        $("#btn-change").click(function(e){
            e.preventDefault();
            var data = $("#form-change").serialize();
            $.ajax('process.php',{
                type: 'post',
                data: data,
                success: function(response){

                    if(response == 1){
                    $("#message").addClass('alert alert-success');
                    $("#message").html("Password Change Successful");
                    window.location = "login.php";
                }

                else if(response == 2){
                    $("#message").addClass('alert alert-success');
                    $("#message").html("Password change wasn't successful, try again");
                }
                
                else if(response == 3){
                 $("#message").addClass('alert alert-success');
                    $("#message").html("Password don't match");
                
                }
                else{

                }
                    $("#message").addClass('alert alert-success');
                    $("#message").html("Password change wasn't successful, input correct token");
                }
            });
        });


    })
</script>
<script type="text/javascript">
       $( document ).ready(function() {
    $("#reset").click(function(e){
        e.preventDefault();

       
        var email = $("#email").val();
             
        if(email ==""){
            alert('please enter email');
            $("#message").addClass('alert alert-danger');
            $("#message").html('Please enter email');
        }
       
        
        else{
            
            
            $("#reset").html('Requesting..');

             var data = $("#reset_form").serialize();

            

             $.ajax('process.php',{
            type : 'post',
            data : data,
            success: function(data){

             
             $("#message").addClass('alert alert-success');
            $("#message").html(data);

            $("#reset").html('DONE');          

            },
           error : function(jqXHR,textStatus,errorThrown){
                 if(textStatus ='error'){
                    alert('Request not completed');
                 }
                $("#reset").html('Failed');
            },
            beforeSend :function(){

            $("#message").removeClass('alert alert-danger');
            $("#message").html('');

            $("#reset").html('Requesting..');
            },
        });
    

        }
        
     });



    });
</script>
<?php
include_once("footer.php");
?>
