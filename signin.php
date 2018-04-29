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
                    <select id="inputState" class="form-control" style="padding: 0;">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
        </div>
                    <div class="form-group col-md-6">
                        <select id="inputState" class="form-control" style="padding: 0;">
                            <option selected>Choose...</option>
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