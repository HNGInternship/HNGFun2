<?php
	/**
	 * This is a simple script to invite users to your slack
	 * Replace the subdomain and token in the variables below.
	 * Upload a logo called "logo.png" to the same directory for your group
	 * Upload a logo called "slack.png" to the same directory for slack
	 */
	define('SUBDOMAIN','hnginternship4');
	define('TOKEN','xoxp-340958278947-341290703349-356302020102-f943a0e1b43cd95e2ca5abb1b7a29bdb');
?>


<?php

include_once("header.php");
?>

<style>
   .wrapper{
       background: white;
       width: 100%;
       margin:0;
       padding: 3rem;
   }
   .sendInvitesButton{
        width: 200px;
        height:50px;
        font-size: 1.3rem;
        display: block;
        margin: 4rem auto;
   }

	#email, #phone, #lastname, #firstname{
		/* padding: 10px; */
		margin: 5x;
		border-radius: 7px;
	}

</style>
<div class="" style="padding-top: 10%; width:100%;">
	<!-- <div style="text-align: center; margin-bottom: 20px; margin-top: -10px;">
		<img src="img/logo.png" style="width: 100px; height: 50px; margin-left: 3%;" />
		<img src="img/slack.png" style="width: 100px; height: 50px;  margin-left: 3%;" />
	</div> -->
    <div class="col-md-6  mx-auto">
        <h1 class="login-title text-center" style="font-weight: bold; font-size: 50px">Invite to HNG</h1>
        <p style="font-size: 16px; margin-bottom: 0px; margin-top: 0px; opacity: 0.7" class="text-center">Wouldn't you love to collaborate with your friends and earn HNG Coins for yourself while at it? It's fun, you get to form alliances, deliver projects and win competitions.<br/>Quick! Invite your friends to join the biggest remote software internship in Africa.<br/><br/>
        </p>

    <div class="wrapper">

        <div class="container d-flex flex-column justify-content-center mt-5">
            <h3 class="mb-5 text-center">Invite Your Friends</h3>
		  <form class="w-50 mx-auto mt-5">
		  	
		  	<div class="input-group mb-4 mt-0">
		  	  <div class="input-group-prepend ">
		  	    <span class="input-group-text bg-transparent px-5 font-icon" id="basic-addon1">@</span>
		  	  </div>
		  	  <input type="text" class="form-control  rounded-right bg-transparent" placeholder="joemark@example.com" aria-label="Username" aria-describedby="basic-addon1">
		  	</div>

              <div class="input-group mb-4 mt-0">
		  	  <div class="input-group-prepend ">
		  	    <span class="input-group-text bg-transparent px-5 font-icon" id="basic-addon1">@</span>
		  	  </div>
		  	  <input type="text" class="form-control  rounded-right bg-transparent" placeholder="joemark@example.com" aria-label="Username" aria-describedby="basic-addon1">
		  	</div>

              <div class="input-group mb-4 mt-0">
		  	  <div class="input-group-prepend ">
		  	    <span class="input-group-text bg-transparent px-5 font-icon" id="basic-addon1">@</span>
		  	  </div>
		  	  <input type="text" class="form-control  rounded-right bg-transparent" placeholder="joemark@example.com" aria-label="Username" aria-describedby="basic-addon1">
		  	</div>
            
             <a href="invitesentmessage.php"> <input type="submit" value="Send" name="submit-invites" class="btn btn-primary sendInvitesButton"></a>
          </form>
		</div>
    </div>
<?php
include_once("footer.php");
?>
