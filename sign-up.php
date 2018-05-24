<?php
require_once('country-array.php');
include_once("header.php");
    
?>

<style>

 #img1 {
    width: 30px;
    height: 30px;
}


 #img2 {
    height: 30px;
}

  .signup-jumbotron{
    padding-top:4% !important;
  }
  .signup{
    font-size:0.75em;
    padding-top:0 !important;
    margin-top:0 !important;
  }
  .signup-btn{
    width:50%;
    /*font-size:0.8em;*/
    padding:2%;
    border-radius:3px;
  }
  .signup-img{
    width:30%;
    height:80px;
    text-align:left !important;
  }
.signup-img2{
    width:130%;
    height:80px;
  }
  .signup-text{
    padding-top:5% !important;
  }
  .label{
    color:#5F5F5F !important;
  }



</style>


  <div class="account">
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron signup-jumbotron">
      <div class="container signup ">
          <div class="row">
          <div class="col-md-6 signup-text" >
            <img src="http://res.cloudinary.com/dikethelma/image/upload/v1526104829/mtraeogklpzkytbhmh9g.svg" class="pl-0 ml-0 signup-img" id="img1" >
            <div class="row style="text-align: center; font-size:1em; line-height: 250%;">
                <span style="color: grey ">
                   The HNG Internship is a remote training program, it centres on picking out indiviuals with relevant software development skills. For a period of about 3 months these skills are developed. The internship holds annually. Its organised by Hotels.ng in partnership with top companies around the globe. Fill the form to join the biggest and best remote software internship in the world!
                </span>
            </div> 
            <img src="http://res.cloudinary.com/dikethelma/image/upload/v1526104829/fn3ncrihrqwsqzutwh58.svg" class="pl-5 ml-5 signup-img2" id="img2" >                 
            <p class="pt-0 mt-0" style="font-size: 3em !important; text-align: center; color: #2196F3; font-family: 'Qwigley', cursive;">Mark Essien</p>
        </div> 

          <div class="col-md-6 pt-0">
            <div class="signup-form">
                  <h2 class="text-justify">Sign Up</h2>
            <p class="text-justify mt-2" style="color:#ADADAD;">Already have an account? <span><a href="login.php" style="text-decoration:none; color:#008DDD;">Log In</a></span></p>

            <h6 class="text-danger" id="signUpInfo"></h6>

            <form class="form-signin signup " id="register_form">
            <div class="row">
            <div class="col-md-6 col-sm-12">
            <label class="label" for="firstName">First Name</label>
            <div class="form-style"><input  type="text" id="firstName" style="height: 40px;" name="firstName" class="form-control" placeholder="" autofocus required></div>
            </div>

            <div class="col-md-6 col-sm-12">
            <label class="label" for="lastName">Last Name</label>
            <input type="text" style="height: 40px;" id="lastName" name="lastName" class="form-control" placeholder="" required>
            </div>
            
            <div class="col-md-6 col-sm-12">
            <label class="label" for="userName">Username</label>
            <input type="text" style="height: 40px;" id="userName" name="userName" class="form-control" placeholder="" required>
            </div>

            <div class="col-md-6 col-sm-12">
            <label class="label" for="email">Email Address</label>
            <input type="email" style="height: 40px;" id="email" name="email" class="form-control" placeholder="" required value="<?php echo $_POST['email']; ?>">
            </div>

             <div class="col-md-6 col-sm-12">
            <label class="label">Nationality</label>
            <select class="form-control" name="nationality" id="nationality" required style="height: 41.5px;">
                <option value="">Select Country</option>
              <?php
                  foreach ($countrylist as $key => $country) {
                    echo "<option id='".strtolower($country)."'>$country</option>";
                  }
                ?>
            </select>
            </div>


           <div class="col-md-6 col-sm-12">
            <label class="label" for="phone">Phone number</label>
            <input type="tel" id="phone" style="height: 40px;" name="phone" class="form-control" placeholder="" required>
            </div>

           <div class="col-md-6 col-sm-12">
            <label class="label">State</label>
            <select class="form-control" id="state" name="state" required style="height: 40px;">
              <option value=""></option>
              <?php
                  foreach ($states as $key => $state) { ?>
                    <option value="<?php echo $key;?>"><?php echo $state?></option>
                  <?php }
                  ?>
             </select>
             <input type="text" class="form-control d-none" id="enter_state" placeholder="Enter your state" name="state">
            </div>
            
            <div class="col-md-6 col-sm-12">
            <label class="label" for="password">Password</label>
            <input type="password" id="password"  style="height: 40px;" name="password" class="form-control" placeholder="" required>
            </div>

            <div class="col-md-6 col-sm-12">
            <label class="label" for="passwordCheck">Retype Password</label>
            <input type="password" id="passwordCheck"  style="height: 40px;" name="passwordCheck" class="form-control" placeholder="" required>
            </div>
          </div>

                <input type="hidden" name="registration" value="yes">

            
            <button class="btn btn-primary signup-btn mt-4" style="font-weight: bold; font-size: 18px" id="register" type="submit">Sign Up</button>

            <!-- <button type="submit" name="register" class="btn btn-signup" id="register">Sign Up </button> -->

          
          </form>

          </div><!-- /col -->
          </div><!-- /row -->
            
            </div>

        </div> <!-- /container -->
    </div>
  </div>

<script type="text/javascript">
       $( document ).ready(function() {
        $('#signUpInfo').hide();
    $("#register_form").submit(function(e){
        e.preventDefault();
         $("#password").removeClass('is-invalid');
            $("#passwordCheck").removeClass('is-invalid');
        $('#signUpInfo').hide();
          var firstname = $("#firstName").val();
          var lastname = $("#lastName").val();
          var email = $("#email").val();
          var password = $("#password").val();
          var password2 = $("#passwordCheck").val();
        
        // var terms = $('#terms').is(':checked'); 
        if(password !==password2){
            $("#password").addClass('is-invalid');
            $("#passwordCheck").addClass('is-invalid');
            $("#signUpInfo").html('Password mismatch');
            $("#signUpInfo").attr("class","text-danger");
        $('#signUpInfo').show();
        return;
        }
       
              
      // $("#signUpInfo").html('Registering...');
      //       $("#signUpInfo").attr("class","text-warning");
      //   $('#signUpInfo').show();
             var data = $("#register_form").serialize();
             $.ajax('process_access',{
            type : 'post',
            data : data,
            success: function(data){
            $("#register").html('Sign Up');
              if(data==="1"){
                $("#signUpInfo").html("Account created successfully");
            $("#signUpInfo").attr("class","text-success");
            $("#signUpInfo").show();
                window.location.href="activateaccount?email="+email+"&name="+firstname;
                return;
              }
            
            $("#signUpInfo").html(data);
            $("#signUpInfo").attr("class","text-danger");
            $("#signUpInfo").show();
            // $("#register").html('Registration successful');
            // window.location.href ="https://hng.fun/activateaccount";
             // }  
             // else{
                // alert(data);
                // $("#message").html(data);
                //  $("#register").html('Failed');
             // } 
            
            },
           error : function(jqXHR,textStatus,errorThrown){
                 if(textStatus ='error'){
                    // alert('Request not completed');
           $("#register").html('Sign Up');
                     $("#signUpInfo").html('An error occured, please try again later ');
                $("#signUpInfo").attr("class","text-danger");
            $('#signUpInfo').show();
                     }
                // $("#register").html('Failed');
            },
            beforeSend :function(){
            $("#register").html('Registering..');
      // $("#signUpInfo").html('Registering...');
      //       $("#signUpInfo").attr("class","text-warning");
      //   $('#signUpInfo').show();
         
            },
        });
    
        
     });
    });
    
</script>
<?php
include_once("footer.php");
?>
