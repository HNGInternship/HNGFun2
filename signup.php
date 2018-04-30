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
        border-radius: 5px;
    }
    .btn-signup:hover {
        opacity: 0.8;
    }
    p, label {
        font-size: 14px !important;
    }
    a.login-link {
        font-size: 14px;
        color: #2196F3;
    }
</style>
<div class="container">
    <div class="row h-100">
        <div class="col-md-6 mx-auto">
            <h1 class="login-title text-center mt-3">Sign Up</h1>
            <p class="text-center">
            The HNG Internship is a remote training program, it centres on picking out indiviuals with relevant software development skills, 
            and for a period of about 3 months develop these skills. The internship holds annually. Its organised by Hotels.ng in partnership with 
            top companies around the globe. Fill the form below to join the biggest and best remote software internship in the world!
            </p>
            <p class="text-center" style="color: #c4c4c4">
            Already have an account? <a class="login-link "href="login.php">Login</a>
            </p>
            <form class="w-100 m-auto">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="fullname">Full Name<span class="text-danger">*</span></label>
                        <input type="text" name="firstname" id="fullname" class="form-control" placeholder="Full Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="username">Username<span class="text-danger">*</span></label>
                        <input type="text" name="lastname" id="username" class="form-control" placeholder="Username">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">Email Address<span class="text-danger">*</span></label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="phone">Phone Number<span class="text-danger">*</span></label>
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone Number">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="country">Nationality<span class="text-danger">*</span></label>
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
                        <label for="city">City<span class="text-danger">*</span></label>
                        <select id="city" class="form-control" style="padding: 0;">
                            <option selected>Choose State/City</option>
                            <option>Lagos</option>
                            <option>Accra</option>
                            <option>Kampala</option>
                            <option>Nairobi</option>
                            <option>Pretoria</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="password">Password<span class="text-danger">*</span></label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="c_password">Confirm Password<span class="text-danger">*</span></label>
                        <input type="password" name="c_password" id="c_password" class="form-control" placeholder="Confirm Password ">
                    </div>
                </div>
                <div class="w-100 m-auto text-center pb-5 pt-3">
                    <button type="submit" class="btn btn-signup">Sign Up</button>
                </div>   
            </form>
        </div>
    </div>
</div>
<?php
include_once("footer.php");
?>