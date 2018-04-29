<?php 
require_once('country-array.php');
include_once("header.php");

function custom_styles()
{
	echo <<<_END

		.page-body{
			font-family: 'Open Sans', sans-serif;
		}
		.description{
			width: 70%;
			max-width: 500px;
			margin-left: auto;
			margin-right: auto;
		}
		.jumbotron{
			background-color: inherit !important; 

		}
		.jumbotron h1{
			font-size: 32px;
			font-weight: normal;
			font-family: 'Open Sans', sans-serif !important;
		}
		.main-form{
			width: 80%;
			max-width: 700px;
		}
_END;
}
?>



	<main class="page-body container">
		<div class="jumbotron text-center py-4 mb-0">
			<h1><b>Register</b></h1>
			<p class="description">Just a few clicks away from joining the biggest software development internship in Africa</p>
		</div>
		<div class="main-form ml-auto mr-auto">
			<form>
				<p class="form-text">Already have an account? <a href="login.php">Log in</a></p>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group pr-3">
						    <label for="firstname">First Name</label>
						    <input type="text" class="form-control" id="firstname" aria-describedby="nameerr" placeholder="John">
						    <!-- <small id="emailHelp" class="has-danger form-text">We'll never share your email with anyone else.</small> -->
					    </div>
					  
					</div>
					<div class="col-sm-6">
						<div class="form-group pl-3">
						    <label for="lastname">Last Name</label>
						    <input type="text" class="form-control" id="lastname" placeholder="Doe">
						  </div>
					</div>
				
					<div class="col-sm-6">
						<div class="form-group pr-3">
						    <label for="email">Email Address</label>
						    <input type="email" class="form-control" id="email" aria-describedby="mailerr" placeholder="johndoe@mail.com">
						    <!-- <small id="mailerr" class="has-danger form-text">We'll never share your email with anyone else.</small> -->
					    </div>
					  
					</div>
					<div class="col-sm-6">
						<div class="form-group pl-3">
						    <label for="phone">Last Name</label>
						    <input type="telephone" class="form-control" id="phone" placeholder="+2348012345678">
						  </div>
					</div>

					<div class="col-sm-6">
						<div class="form-group pr-3 has-danger">
						    <label for="nationality">Nationality</label>
						    <select class="form-control" id="nationality" name="nationality">
						      <option>Select your country</option>
						      <?php
						      foreach ($countrylist as $key => $country) {
						      	echo "<option id='".strtolower($country)."'>$country</option>";
						      }
						      ?>
						    </select>
					    </div>
					  
					</div>
					<div class="col-sm-6">
						<div class="form-group pl-3" id="chose_state">
						    <label for="state">State</label> 
						    
						    <select class="form-control" id="state" name="state">
						      <option>Select your state</option>
						      <?php
						      foreach ($states as $key => $state) { ?>
						      	<option value="<?php echo $key;?>"><?php echo $state?></option>"
						      <?php }
						      ?>
						    </select>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="form-group pr-3">
						    <label for="password">Password</label>
						    <input type="password" class="form-control" id="password" placeholder="Enter your password">
						  </div>
					</div>
				
					<div class="col-sm-6">
						<div class="form-group pl-3">
						    <label for="confirm_password">Confirm Password</label>
						    <input type="password" class="form-control" id="confirm_password" aria-describedby="cpwderr" placeholder="johndoe@mail.com">
						    <!-- <small id="cpwderr" class="has-danger form-text">We'll never share your email with anyone else.</small> -->
					    </div>
					  
					</div>
					<div class="col-sm-12">
						<div class="form-group form-check">
						    <input type="checkbox" class="form-check-input" id="agree">
						    <label class="form-check-label" for="agree">I agree to the <a href="#">terms and conditions</a></label>
						</div>
					</div>
					<div class="col-12">
						<div class="form-group d-flex justify-content-center">
							<button type="submit" id="submit" class="w-50 btn btn-primary ml-auto mr-auto">Sign Up</button>
						</div>
					</div>
					
				</div>

				
			</form>
		</div>
			
		</div>
	</main>
	

<?php
function custom_scripts(){
	echo <<<_END
	<script>
		
	$("select[name='nationality']").on('change', function() {
		if (!($("#nigeria").is(":selected"))) {
			$("#state").addClass("d-none");
			$("#chose_state").append('<input type="text" class="form-control" id="enter_state" placeholder="Enter your state">');

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