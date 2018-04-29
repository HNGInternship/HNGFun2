<?php
include_once("header.php");
?>


<div class="container" >
    <div class="row justify-content-md-center">
        <form style='text-align: center; padding: 100px'>
            <h1>Reset Password</h1>
            <p style="width: 480px; margin-left: 150px;">
                Enter your email address and we'll send you an email with instructions to reset your password.
            </p>
            <div style="padding: 20px 200px 0px 200px;  width: 800px;">
                <input type="text" class="form-control form-control-lg rounded-right" placeholder="johndoe@example.com" aria-label="Username" aria-describedby="basic-addon1">
                <br />
                <button class="btn btn-primary btn-block" type="submit" style="border-radius: 8px; background-color: #0475CE;">Reset Password</button>
                <p style='color: #ADADAD '>
                    Already have account? <span style="color: #1E99E0">Log In</span>
                </p>
            </div>
        </form>
    </div> 
</div>

<?php
include_once("footer.php");
?>
