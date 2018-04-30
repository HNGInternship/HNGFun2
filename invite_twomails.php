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


<style type="text/css">

</style>

<div class="text-center" style="padding-top: 5%">
	<div>
		<h1>Invite Your Friends</h1>
	</div>
	<div style="margin-top: 50px;" id="input">
		<label for="email"></label>
		<input type="text" placeholder=" johndoe@example.com" name="email" id="email" style="border-radius: 7px; border-top: 0px; border-left-color: #2196F3; width: 350px; height: 40px; margin-left: -3px;"><br/>
		
	</div>
	<div align="center">
		<p style="height: 50px; width: 50px;  background-color: lightblue; border-radius: 100%; font-size: 30px; cursor: pointer;" id="add">+</p>
	</div>

	<div>
		<a href="invitesentmessage.php"><button style="background-color: #2196F3; color: white; font-size: 15px; height: 50px; width: 200px; border:0; margin-bottom: 50px;"">Send</button></a>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">

	$("#add").on("click", function(){
		$("#input").append('<input type="text" placeholder=" johndoe@example.com" name="email" id="email" style="width: 350px; height: 40px; margin-left: -3px margin-bottom: 15px; margin-top: 15px; border-radius: 7px; border-top: 0px;"><br/>');
	})
</script>
<?php
    include_once("footer.php");
?>