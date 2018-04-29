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

<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	</head>
	<body style=" width: 100%">
		<div style="text-align: center; margin-top: 75px">
			<div>
				<img src="img/logo.png" style="width: 150px; height: 70px; padding: 10px;" />
				<img src="img/slack.png" style="width: 150px; height: 70px; padding: 10px;" />
			</div>
			<h2 style="font-family: 'Roboto', sans-serif; color: #ffffff">Join <?=SUBDOMAIN?> on Slack!</h2>



        <!-- Please Code the form here -->



			
			
		</div>
	</body>
</html>


