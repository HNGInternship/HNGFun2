<<<<<<< HEAD
<?php
include_once("header.php");
?>
<style>
    body {
        font-size: inherit !important;
    }
			.btn-signup {
				background: #2196F3;
                    padding: 0.4em 8em !important;
                    color: white;
                    border-radius: 4px;
            }
            p, label {
                font-size: 14px !important;
            }
a {
    font-size: 14px !important;
    color: #2196F3 !important;
}
        </style>
        <br><br>
<div class="row h-100">
    <div class="col-md-6  mx-auto">
        <h1 class="login-title text-center">Register</h1>
        <p style="font-size: 16px" class="text-center">Just a few clicks away from joining the biggest software development internship in Africa
        </p>
        <p>Already have an account? <a href="/login.php">Login</a></p>
        <form action="" class="text-center">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" name="firstname" id="firstname" class="form-control" placeholder="First Name">
                </div>
                <div class="form-group col-md-6">
                    <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Last Name">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email Address">
                </div>
                <div class="form-group col-md-6">
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone Number">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <select id="country" name="country" class="form-control" style="padding: 0;">
                        <option selected>Choose Country...</option>
                        <option>Nigeria</option>
                        <option>Ghana</option>
                        <option>Cameroun</option>
                        <option>Kenya</option>
                        <option>Sout Africa</option>
                    </select>
        </div>
                    <div class="form-group col-md-6">
                        <select id="inputState" class="form-control" style="padding: 0;">
                            <option selected>Choose State...</option>
                            <option>...</option>
                        </select>
                    </div>
        </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="password" name="c_password" id="c_password" class="form-control" placeholder="Confirm Password ">
                        </div>
                    </div>
                    <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="terms" name="terms">
      <label class="form-check-label" for="terms">I agree to <a href="">Terms and Conditions</a>
      </label>
    </div>
  </div>
                    <br>
                    <button type="submit" class="btn btn-signup">Sign Up </button>
        </form>

        </div>
        </div>

        <?php
        include_once("footer.php");
        ?>
=======
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
		.main-form label {
		    display: block;
		    font-weight: 400;
		    padding-left: 10px;
		    color: #808080;
		    font-size: 95%;
		}
		.main-form label:after {
		    content: "* ";
		    color: red;
		    font-size: 80%;
		    padding-left: 1px;
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
						<div class="form-group pr-sm-3">
						    <label for="firstname">First Name</label>
						    <input type="text" class="form-control" id="firstname" aria-describedby="nameerr" placeholder="John" required="required">
						    <!-- <small id="emailHelp" class="has-danger form-text">We'll never share your email with anyone else.</small> -->
					    </div>
					  
					</div>
					<div class="col-sm-6">
						<div class="form-group pl-sm-3">
						    <label for="lastname">Last Name</label>
						    <input type="text" class="form-control" id="lastname" placeholder="Doe" required="required" required="required">
						  </div>
					</div>
				
					<div class="col-sm-6">
						<div class="form-group pr-sm-3">
						    <label for="email">Email Address</label>
						    <input type="email" class="form-control" id="email" aria-describedby="mailerr" placeholder="johndoe@mail.com" required="required">
						    <!-- <small id="mailerr" class="has-danger form-text">We'll never share your email with anyone else.</small> -->
					    </div>
					  
					</div>
					<div class="col-sm-6">
						<div class="form-group pl-sm-3">
						    <label for="phone">Phone Number</label>
						    <input type="telephone" class="form-control" id="phone" placeholder="+2348012345678" required="required">
						  </div>
					</div>

					<div class="col-sm-6">
						<div class="form-group pr-sm-3 has-danger">
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
						<div class="form-group pl-sm-3" id="chose_state">
						    <label for="state">State</label> 
						    
						    <select class="form-control" id="state" name="state">
						      <option>Select your state</option>
						      <?php
						      foreach ($states as $key => $state) { ?>
						      	<option value="<?php echo $key;?>"><?php echo $state?></option>"
						      <?php }
						      ?>
						    </select>
						    <input type="text" class="form-control d-none" id="enter_state" placeholder="Enter your state" name="state">
						</div>
					</div>

					<div class="col-sm-6">
						<div class="form-group pr-sm-3">
						    <label for="password">Password</label>
						    <input type="password" class="form-control" id="password" placeholder="Enter your password" required="required">
						  </div>
					</div>
				
					<div class="col-sm-6">
						<div class="form-group pl-sm-3">
						    <label for="confirm_password">Confirm Password</label>
						    <input type="password" class="form-control" id="confirm_password" aria-describedby="cpwderr" placeholder="johndoe@mail.com" required="required">
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
>>>>>>> a8667a330dfdc4d84bf4deb0e69e71d87429e320
