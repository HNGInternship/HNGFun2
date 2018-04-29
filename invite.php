<?php
	/**
	 * This is a simple script to invite users to your slack
	 * Replace the subdomain and token in the variables below.
	 * Upload a logo called "logo.png" to the same directory for your group
	 * Upload a logo called "slack.png" to the same directory for slack
	 */
	define('SUBDOMAIN','{hnginternship4}');
	define('TOKEN','{xoxp-340958278947-341290703349-356302020102-f943a0e1b43cd95e2ca5abb1b7a29bdb}');
?>


<?php

include_once("header.php");
?>


<style type="text/css">
	#email, #phone, #lastname, #firstname{
		width: 350px;
		border-radius: 7px;
	}

</style>
<div class="" style="padding-top: 10%">
    <div class="col-md-6  mx-auto">
        <h1 class="login-title text-center" style="font-weight: bold; font-size: 50px">Invite to HNG</h1>
        <p style="font-size: 16px; margin-bottom: 0px; margin-top: 0px; opacity: 0.7" class="text-center">You can send out invites to all your friends all over the world to join<br/> this amazing community
        </p>
        <form action="" class="text-center" style="margin-top:">
            <div class="form-row" style="margin-left: 30px;">
                <div class="form-group col-md-6">
                	<p align="left" style="font-size: 12px; margin-bottom: 0px; margin-left: 10px; opacity: 0.7">Firstname</p>
                    <input type="text" name="firstname" id="firstname" class="form-control" placeholder="">
                </div>
                <div class="form-group col-md-6">
                	<p align="left" style="font-size: 12px; margin-bottom: 0px; margin-left: 10px; opacity: 0.7">lastname</p>
                    <input type="text" name="lastname" id="lastname" class="form-control" placeholder="">
                </div>
            </div>
            <div class="form-row" style="margin-left: 30px;">
                <div class="form-group col-md-6" style="margin-left: 0px; ">
                	<p align="left" style="font-size: 12px; margin-bottom: 0px; margin-left: 10px; opacity: 0.7">Email address</p>
                    <input type="email" name="email" id="email" class="form-control" placeholder="">
                </div>
                <div class="form-group col-md-6">
                	<p align="left" style="font-size: 12px; margin-bottom: 0px; margin-left: 10px; opacity: 0.7">Phone</p>
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="">
                </div>
            </div>
                 
                    <button style="margin-top: 30px; border:0px; margin-bottom: 7px; background-color: #2196F3; color: white; width: 400px; font-size: 12px; height: 40px; border-radius: 10px" id="submitbutton" class="">Send Invite</button>
        </form>

        </div>
        </div>

        <?php
        include_once("footer.php");
        ?>