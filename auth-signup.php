<?php
require_once("db.php");
include_once("header.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $val = (object) $_POST;
    // check all values are filled
    if(empty($val['firstname']))
        return "Firstname can't be empty";
    if(empty($val['lastname']))
        return "lastname can't be empty";
    if(empty($val['email']))
        return "email can't be empty";
    if(empty($val['phone']))
        return "phone can't be empty";
    if(empty($val['country']))
        return "country can't be empty";
    if(empty($val['state']))
        return "state can't be empty";
    if(empty($val['password']))
        return "password can't be empty";
    
    // check if email or phone doesn't exist
    try {
        $Estmt->$conn->prepare("SELECT * FROM users WHERE email = :email");
        $Estmt->bindParam(":email", $email);
        $email = $val['email'];

        $Pstmt->$conn->prepare("SELECT * FROM users WHERE phone = :phone");
        $Pstmt->bindParam(":phone", $phone);
        $phone = $val['phone'];

        if ($Estmt->execute()) {
            return "An account with tis email already exists.";
        }

        if ($Pstmt->execute()) {
            return "An account with tihs email already exists.";
        }
    } catch(PDOException $ex) {
        //log errors
    }
    // check if passwords match
    if( $_POST['password'] != $_POST['c_pasword']) {
        return "Passwords do not match";
        // show password 
    }
        
    // Create account insert values in db
    try {

        $stmt = $conn->prepare("INSERT INTO users (firstname, lastname, email, phone, country, state, password, token)
        VALUES (:firstname, :lastname, :email, :phone, :country, :state, :password, :token)");
    
        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':country', $country);
        $stmt->bindParam(':state', $state);    
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':token', '');
    
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $country = $_POST['country'];
        $state = $_POST['state'];
        $password = $_POST['password'];

        $stmt->execute();

        return "Account created successfully "; // redirect pages

    } catch(PDOException $ex) {
        // log errors internally
        return "We counldn't process your request, please try again latet";
    }

    

}
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
                    <input type="tel" name="phone" id="phone" class="form-control" placeholder="Phone Number">
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
                        <select name="state" id="inputState" class="form-control" style="padding: 0;">
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