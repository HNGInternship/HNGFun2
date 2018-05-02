<style>
#pageloader
{
  background: rgba( 255, 255, 255, 0.8 );
  display: none;
  height: 100%;
  position: fixed;
  width: 100%;
  z-index: 9999;
}

#pageloader img
{
  left: 50%;
  margin-left: -32px;
  margin-top: -32px;
  position: absolute;
  top: 50%;
}
</style>
<?php
include_once("header.php");
?>
<!--form for getting email for password reset-->
<?php 
    if(!isset($_GET['token'])){
?>
<div id="get-email-reset" class="container" >
    <div class="row justify-content-md-center">
        <p id="message"></p>
        <form id="form-reset" style='text-align: center; padding: 100px' method="post">
            <h1>Reset Password</h1>
            <p style="width: 480px; margin-left: 150px;">
                Enter your email address and we'll send you an email with instructions to reset your password.
            </p>
            <div style="padding: 20px 200px 0px 200px;  width: 800px;">
                <input type="text" name="email" class="form-control form-control-lg rounded-right" placeholder="johndoe@example.com" aria-label="Username" aria-describedby="basic-addon1">
                <br />
                <input type="hidden" name="pword-reset" value="yes">
                <button id="btn-reset" name="pword-reset" class="btn btn-primary btn-block" type="submit" style="border-radius: 8px;" onclick="ButtonClicked1()">Reset Password</button>
                <div id="buttonreplacement1" style="margin-left:30px; display:none;"><img src="../img/Rolling-1s-100px.gif" alt="loading..."></div>
              <p style='color: #ADADAD '>
                     Already have account? <a href="login.php" style="text-decoration: none; "><span style="color: #1E99E0">Log In</span></a> 
                </p>
            </div>
        </form>
    </div> 
</div>
    <?php }else{ ?>
<!--form for changing password-->
<div id="password-change" class="container" >
    <div class="row justify-content-md-center">
        <p id="message2"></p>
        <form id="form-change" method="post" style='text-align: center; padding: 100px'>
            <h1>Change Password</h1>
            <p style="width: 480px; margin-left: 150px;">
                Create a new password and confirm it.
            </p>
            <div style="padding: 20px 200px 0px 200px;  width: 800px;">
                <input type="password" name="pass" class="form-control form-control-lg rounded-right" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
                <br />
                <input type="password" name="pass-confirm" class="form-control form-control-lg rounded-right" placeholder="Confirm Password" aria-label="Username" aria-describedby="basic-addon1">
                <br />
                <input type="hidden" name="token" value="<?php $token = $_GET['token']; echo $token;   ?>">
                <button id="btn-change" name="pword-change" class="btn btn-primary btn-block" type="submit" style="border-radius: 8px;" onclick="ButtonClicked()">Change Password</button>
                <div id="buttonreplacement" style="margin-left:30px; display:none;"><img src="../img/Rolling-1s-100px.gif" alt="loading..."></div>
                <p style='color: #ADADAD '>
                     Already have account? <a href="login.php" style="text-decoration: none; "><span style="color: #1E99E0">Log In</span></a> 
                </p>
            </div>
        </form>
    </div> 

 <?php } ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">

    

  

  
    $(document).ready(function(){
        //ajax for password reset
        $("#form-reset").submit(function(e){
            e.preventDefault();
            var data = $("#form-reset").serialize();
                    $.ajax('process.php',{
                type: 'post',
                data: data,
                success: function(response){
                    response = JSON.parse(response);
                    if(response.status == 1){
                        $("#message").addClass('alert alert-success');
                        $("#message").html(response.message);
                        $('#form-reset').hide();
                    }
                    else{
                        $("#message").addClass('alert alert-danger');
                        $("#message").html(response.message);
                    }
                }
            });
        });
        //ajax for password change
        $("#form-change").submit(function(e){
            e.preventDefault();
            var data = $("#form-change").serialize();
          $.ajax('process.php',{
                type: 'post',
                data: data,
                success: function(response){
                    response = JSON.parse(response);
                    if(response.status == 1){
                        $("#message2").addClass('alert alert-success');
                        $("#message2").html(response.message);
                        window.location = "login.php";
                    }else if(response.status == 0){
                        $("#message2").addClass('alert alert-danger');
                        $("#message2").html(response.message);
                    }
                }
            });
        });
    })
  
  <div id="formsubmitbutton">
<input type="submit" name="submitter" value="Submit Button" onclick="ButtonClicked()">
</div>
<div id="buttonreplacement" style="margin-left:30px; display:none;">
<img src="//www.willmaster.com/images/preload.gif" alt="loading...">
</div>


</script>
  <script type="text/javascript">

function ButtonClicked()
{
   document.getElementById("btn-change").style.display = "none"; // to undisplay
   document.getElementById("buttonreplacement").style.display = ""; // to display
   return true;
}
var FirstLoading = true;
function RestoreSubmitButton()
{
   if( FirstLoading )
   {
      FirstLoading = false;
      return;
   }
   document.getElementById("btn-change").style.display = ""; // to display
   document.getElementById("buttonreplacement").style.display = "none"; // to undisplay
}
// To disable restoring submit button, disable or delete next line.
document.onfocus = RestoreSubmitButton;
</script>
</script>
  <script type="text/javascript">

function ButtonClicked1()
{
   document.getElementById("btn-reset").style.display = "none"; // to undisplay
   document.getElementById("buttonreplacement1").style.display = ""; // to display
   return true;
}
var FirstLoading = true;
function RestoreSubmitButton()
{
   if( FirstLoading )
   {
      FirstLoading = false;
      return;
   }
   document.getElementById("btn-reset").style.display = ""; // to display
   document.getElementById("buttonreplacement1").style.display = "none"; // to undisplay
}
// To disable restoring submit button, disable or delete next line.
document.onfocus = RestoreSubmitButton;
</script>

<?php
include_once("footer.php");
?>
