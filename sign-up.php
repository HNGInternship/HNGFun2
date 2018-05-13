<?php
require_once('country-array.php');
include_once("header.php");

?>

<style>
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
    font-size:0.8em;
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
            <img src="http://res.cloudinary.com/dikethelma/image/upload/v1526104829/mtraeogklpzkytbhmh9g.svg" class="pl-0 ml-0 signup-img"  >
            <div class="pl-5 pr-5 ml-5 mr-5" style="text-align: center; font-size:1em; line-height: 250%;">
                <span style="color: grey ">
                   The HNG Internship is a remote training program, it centres on picking out indiviuals with relevant software development skills. For a period of about 3 months these skills are developed. The internship holds annually. Its organised by Hotels.ng in partnership with top companies around the globe. Fill the form to join the biggest and best remote software internship in the world!
                </span>
            </div> 
            <img src="http://res.cloudinary.com/dikethelma/image/upload/v1526104829/fn3ncrihrqwsqzutwh58.svg" class="pl-5 ml-5 signup-img2"  >                 
            <p class="pt-0 mt-0" style="font-size: 4em !important; text-align: center; color: #2196F3; font-family: 'Qwigley', cursive;">Mark Essien</p>
        </div> 

          <div class="col-md-6 pt-0">
            <h2 class="text-justify">Sign Up</h2>
            <p class="text-justify mt-2" style="color:#ADADAD;">Already have an account? <span><a href="login.php" style="text-decoration:none; color:#008DDD;">Log In</a></span></p>

            <form class="form-signin signup ">
            <div class="input-block mr-9 pb-2 pt-2">
            <label class="label">Full Name</label>
            <input type="text" class="form-control" placeholder="" autofocus required>
            </div>

            <div class="input-block pb-2">
            <label class="label">Username</label>
            <input type="text" class="form-control" placeholder="" required>
            </div>
            
            <div class="input-block mr-9 pb-2">
            <label class="label">Phone Number</label>
            <input type="text" class="form-control" placeholder="" required>
            </div>

            <div class="input-block pb-2">
            <label class="label">Address</label>
            <input type="text" class="form-control" placeholder="" required>
            </div>
            
            <div class="input-block mr-9 pb-2">
            <label class="label">Nationality</label>
            <select class="form-control" name="nationality" required>
              <option value=""></option>
              <?php
						      foreach ($countrylist as $key => $country) {
						      	echo "<option id='".strtolower($country)."'>$country</option>";
						      }
						    ?>
            </select>
            </div>

            <div class="input-block pb-2">
            <label class="label">City</label>
            <select class="form-control" id="state" name="state" required>
              <option value=""></option>
              <?php
						      foreach ($states as $key => $state) { ?>
						      	<option value="<?php echo $key;?>"><?php echo $state?></option>"
						      <?php }
						      ?>
						 </select>
						 <input type="text" class="form-control d-none" id="enter_state" placeholder="Enter your state" name="state">
            </div>
            
            <div class="input-block mr-9 pb-2">
            <label class="label">Password</label>
            <input type="password" class="form-control" placeholder="" required>
            </div>

            <div class="input-block pb-2">
            <label class="label">Retype Password</label>
            <input type="password" class="form-control" placeholder="" required>
            </div>
            
            <button class="btn btn-primary signup-btn mt-4" name="submit" value="submit" type="submit">Sign Up</button>

          
          </form>

          </div><!-- /col -->
          </div><!-- /row -->

        </div> <!-- /container -->
    </div>
  </div>
<?php 
	if ( isset( $_POST["submit"] ) ) { 
	header( "Location: activateaccount.php" ); 
exit;
 } else { 
displayForm();
 } 
function displayForm() { 
	header( "Location: signup.php" ); 
	}
?> 
<?php
function custom_scripts(){
	echo <<<_END
	<script>
		
	$("select[name='nationality']").on('change', function() {
		
		if (!($("#nigeria").is(":selected"))) {
			$("#state").addClass("d-none");
			$("#enter_state").removeClass('d-none');
		}else{
			$("#state").removeClass("d-none");			
			$("#enter_state").addClass("d-none");
		}
	});
	</script>
_END;
}
include_once("footer.php");
?>
