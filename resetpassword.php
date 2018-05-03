<style>
    .text-holder {
        color: #aaaaaa;
        text-align: center;
        padding-top: 40px;
    }

    .button-holder {
        padding-top: 100px;
    }

    #btn-reset {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-color: #007bff;
        border: 2px solid #007bff;
        border-radius: 10px;
        color: #FFFFFF;
        font-size: 17px;
        cursor: pointer !important;
        outline: none;
    }

    #btn-reset:hover {
        background-color: #222222;
    }

    .loading {
        font-size: 0;
        width: 30px;
        height: 30px;
        margin-top: 5px;
        border-radius: 15px;
        padding: 0;
        border: 3px solid #FFFFFF;
        border-bottom: 3px solid rgba(255, 255, 255, 0.0);
        border-left: 3px solid rgba(255, 255, 255, 0.0);
        background-color: transparent !important;
        animation-name: rotateAnimation;
        -webkit-animation-name: wk-rotateAnimation;
        animation-duration: 1s;
        -webkit-animation-duration: 1s;
        animation-delay: 0.2s;
        -webkit-animation-delay: 0.2s;
        animation-iteration-count: infinite;
        -webkit-animation-iteration-count: infinite;
    }

    @keyframes rotateAnimation {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }

    @-webkit-keyframes wk-rotateAnimation {
        0% {
            -webkit-transform: rotate(0deg);
        }
        100% {
            -webkit-transform: rotate(360deg);
        }
    }

    .fa {
        color: #000000;
        font-size: 18px !important;
        position: absolute;
        margin-left: -9px;
        margin-top: -9px;
        -webkit-transform: scaleX(0) !important;
        transform: scaleX(0) !important;
    }

    .finish {
        -webkit-transform: scaleX(1) !important;
        transform: scaleX(1) !important;
    }

    .hide-loading {
        opacity: 0;
        -webkit-transform: rotate(0deg) !important;
        transform: rotate(0deg) !important;
        -webkit-transform: scale(0) !important;
        transform: scale(0) !important;
    }
</style>
<?php
include_once("header.php");
?>
<!--form for getting email for password reset-->
<?php 
    if(!isset($_GET['token'])){
?>
<div id="get-email-reset" class="container">
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
                <div class="fa fa-check done"></div>
                <div class="fa fa-close failed"></div>
                <button id="btn-reset" name="pword-reset" class="btn btn-primary btn-block" type="submit" style="border-radius: 8px;">Reset Password</button> Already have account? <a href="login.php" style="text-decoration: none; "><span style="color: #1E99E0">Log In</span></a>
                </p>
            </div>
        </form>
    </div>
</div>
<?php }else{ ?>
<!--form for changing password-->
<div id="password-change" class="container">
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
                <button id="btn-change" name="pword-change" class="btn btn-primary btn-block" type="submit" style="border-radius: 8px;">Change Password</button>
                <div class="fa fa-check done"></div>
                <div class="fa fa-close failed"></div>
                Already have account? <a href="login.php" style="text-decoration: none; "><span style="color: #1E99E0">Log In</span></a>
                </p>
            </div>
        </form>
    </div>

    <?php } ?>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            //ajax for password reset
            $("#form-reset").submit(function(e) {
                e.preventDefault();
                $('#btn-reset').html("Resetting...");
                $('#btn-reset').attr("disabled", "disabled");

                var data = $("#form-reset").serialize();
                $.ajax('process.php', {
                    type: 'post',
                    data: data,
                    success: function(response2) {
                        try{
                            response = JSON.parse(response2);
                            if (response.status == 1) {
                                // $("#btn-reset").addClass("loading");
                                // setTimeout(function() {
                                //     $("#btn-reset").addClass("hide-loading");
                                //     // For failed icon just replace ".done" with ".failed"
                                //     $(".done").addClass("finish");
                                // }, 3000);
                                // setTimeout(function() {
                                //     $("#btn-reset").removeClass("loading");
                                //     $("#btn-reset").removeClass("hide-loading");
                                //     $(".done").removeClass("finish");
                                //     $(".failed").removeClass("finish");
                                // }, 5000);
                                $("#message").addClass('alert alert-success');
                                $("#message").html(response.message);
                                $('#form-reset').hide();
                            } else {
                                // $("#btn-reset").addClass("loading");
                                // setTimeout(function() {
                                //     $("#btn-reset").addClass("hide-loading");
                                //     // For failed icon just replace ".done" with ".failed"
                                //     $(".failed").addClass("finish");
                                // }, 3000);
                                // setTimeout(function() {
                                //     $("#btn-reset").removeClass("loading");
                                //     $("#btn-reset").removeClass("hide-loading");
                                //     $(".done").removeClass("finish");
                                //     $(".failed").removeClass("finish");
                                // }, 5000);
                                $("#message").addClass('alert alert-danger');
                                $("#message").html(response.message);
                            }
                        }catch(err){
                            $("#message").addClass('alert alert-danger');
                            $("#message").html(response2);
                        }
                        $('#btn-reset').html("Reset Password");
                        $('#btn-reset').removeAttr('disabled');
                    }
                });
            });
            //ajax for password change
            $("#form-change").submit(function(e) {
                e.preventDefault();
                $('#btn-change').html("Submitting...");
                $('#btn-change').attr("disabled", "disabled");
                var data = $("#form-change").serialize();
                $.ajax('process.php', {
                    type: 'post',
                    data: data,
                    success: function(response) {
                        response = JSON.parse(response);
                        if (response.status == 1) {
                            $("#message2").addClass('alert alert-success');
                            $("#message2").html(response.message);
                            window.location = "login.php";
                        } else if (response.status == 0) {
                            $("#message2").addClass('alert alert-danger');
                            $("#message2").html(response.message);
                        }
                        $('#btn-change').html("Change Password");
                        $('#btn-change').removeAttr("disabled");
                    }
                });
            });
        })
    </script>



    <?php
include_once("footer.php");
?>