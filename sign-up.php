<?php
require_once('country-array.php');
include_once("header.php");
?>
  <div class="account">
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">

          <form class="form-signin signup">
            <h2 class="form-signin-heading text-center">Sign Up</h2>
            <h6 class="text-center">The HNG Internship is a remote training program, it centers on pickinh out individuals with relevant software development skills, and for a period of about 3 months develop these skills. The internship holds annually. It is organised by Hotels.ng in partnership with top companies around the globe. Fill the form below to join the biggest and best remote software internship in the world!</h6>
            <p class="text-center start">Already have an account? <span><a href="">Log In</a></span></p>

            <div class="input-block mr-9">
            <label>Full Name</label>
            <input type="text" class="form-control" placeholder="" autofocus required>
            </div>

            <div class="input-block">
            <label>Username</label>
            <input type="text" class="form-control" placeholder="" required>
            </div>
            
            <div class="input-block mr-9">
            <label>Phone Number</label>
            <input type="text" class="form-control" placeholder="" required>
            </div>

            <div class="input-block">
            <label>Address</label>
            <input type="text" class="form-control" placeholder="" required>
            </div>
            
            <div class="input-block mr-9">
            <label>Nationality</label>
            <select class="form-control" name="nationality" required>
              <option value="">Select Your Country</option>
              <?php
						      foreach ($countrylist as $key => $country) {
						      	echo "<option id='".strtolower($country)."'>$country</option>";
						      }
						    ?>
            </select>
            </div>

            <div class="input-block">
            <label>City</label>
            <select class="form-control" id="state" name="state" required>
              <option value="">Select your State</option>
              <?php
						      foreach ($states as $key => $state) { ?>
						      	<option value="<?php echo $key;?>"><?php echo $state?></option>"
						      <?php }
						      ?>
						 </select>
						 <input type="text" class="form-control d-none" id="enter_state" placeholder="Enter your state" name="state">
            </div>
            
            <div class="input-block mr-9">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="" required>
            </div>

            <div class="input-block">
            <label>Retype Password</label>
            <input type="password" class="form-control" placeholder="" required>
            </div>
            
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>

          
          </form>

          

        </div> <!-- /container -->
    </div>
  </div>

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
