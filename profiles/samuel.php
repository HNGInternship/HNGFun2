<?php
	header("Access-Control-Allow-Origin: *");
	if($_SERVER['REQUEST_METHOD'] === "GET"){
		if(!defined('DB_USER')){
			require "../../config.php";
			try {
			    $conn = new PDO("mysql:host=". DB_HOST. ";dbname=". DB_DATABASE , DB_USER, DB_PASSWORD);
			} catch (PDOException $pe) {
			    die("Could not connect to the database " . DB_DATABASE . ": " . $pe->getMessage());
			}
		}

		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$stmt = $conn->prepare("select secret_word from secret_word limit 1");
		$stmt->execute();

		$secret_word = null;

		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		$rows = $stmt->fetchAll();
		if(count($rows)>0){
			$row = $rows[0];
			$secret_word = $row['secret_word'];
		}

		$name = null;
		$username = "somiari";
		$image_filename = '';

		$stmt = $conn->prepare("select * from interns_data where username = :username");
		$stmt->bindParam(':username', $username);
		$stmt->execute();

		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		$rows = $stmt->fetchAll();
		if(count($rows)>0){
			$row = $rows[0];
			$name = $row['name'];
			$image_filename = $row['image_filename'];
		}
	}
?>


<?php
		// require_once '../../config.php';
		// require_once '../db.php';

		// $result = $conn->query("Select * from secret_word LIMIT 1");
		// $result = $result->fetch(PDO::FETCH_OBJ);
		// $secret_word = $result->secret_word;

		// $result2 = $conn->query("Select * from interns_data where username = 'somiari'");
		// $user = $result2->fetch(PDO::FETCH_OBJ);

	// Function to return Date
	function respondDate(){
		date_default_timezone_set("Africa/Lagos");
		$time = date("Y/m/d");
		$respondTime = array( 'Today\'s date is '.$time,
								'it\'s '. $time,
								'Today is '. $time,
								$time);
		$index = mt_rand(0, 3);
		return $anwerSam = $respondTime[$index];
	}// Date function ends here

	// Function to return Time
	function respondTime(){
		date_default_timezone_set("Africa/Lagos");
		$time = date("h:i A");
		$respondTime = array( 'The time is '.$time,
								'it\'s '. $time,
								$time);
		$index = mt_rand(0, 2);
		return $anwerSam = $respondTime[$index];
	} // Time function ends here

	// function to train bot
	// pass message as arguement
	function trainAlan($newmessage){
		require_once '../db.php';
		$message = explode('#', $newmessage);
		$question = explode(':', $message[0]);
		$answer = $message[1];
		$password = $message[2];

		$question[1] = trim($question[1]); //triming off white spaces
		$password = trim($password); //triming off white spaces

		// check if password matches
		if ($password != "password"){
			echo "You are not authorized to train me.";
		}else{
			$chatbot= array(':id' => NULL, ':question' => $question[1], ':answer' => $answer);
			$query = 'INSERT INTO chatbot ( id, question, answer) VALUES ( :id, :question, :answer)';

			try {
				$execQuery = $conn->prepare($query);
				if ($execQuery ->execute($chatbot) == true) {
					// call a function that handles successful training response
					echo repondTraining();
				};
			} catch (PDOException $e) {
				echo "Oops! i did't get that, Something is wrong i guess, <br> please try again";
			} // End Catch
		} // End Else
	} // Train Function Ends here

	// Returns random respond to training
	// called if training is successful
	function repondTraining(){
		$repondTraining = array(  'Noted! Thank you for teaching me',
									'Acknowledged, thanks, really want to learn more',
									'A million thanks, I\'m getting smarter',
									'i\'m getting smarter, I really appreciate');
		$index = mt_rand(0, 3);
		return $anwerSam = $repondTraining[$index];
	} // respondTraining Ends Here


	// Function to check if question is in database
	// Returns 1 if question is not found in database
	function checkDatabase($question){
		try{
			require_once '../db.php';
			$stmt = $conn->prepare('select answer FROM chatbot WHERE (question LIKE "%'.$question.'%") LIMIT 1');
			$stmt->execute();

			// checking if query retrieves data
			if($stmt->rowCount() > 0){
				while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ echo $row["answer"];}
			}else{
				return 1; // returns 1 is no data was retrieved
			}
		}catch (PDOException $e){
			 echo "Error: " . $e->getMessage();
		} // Catch Ends here

		$conn = null; // close database connection
	}

	//////////// CHATBOT STARTS HERE //////////////////////////////////////////////////////////////
		// if (isset($_POST['message'])) {
			if ($_SERVER["REQUEST_METHOD"] == "POST"){

			// Retrieve form data from ajax
			// Change message to all lowercase
			// trim off white spaces
			$message = trim(strtolower($_POST['message']));

			//Analyse message to determine response
			// if (strtok($message, ":") == "train"){
				if (strpos($message, 'train') !== false) {
					trainAlan($message); // Call function to handle training
			}else if ($message != "" ){
				// Check if question exist in database
				// returns 1 if question does not exist in database
				$tempVariable = checkDatabase($message);

				if ($tempVariable == 1){
					if ($message == "what is the time"){
						echo respondTime();
					}else if ($message == "today's date"){
						echo respondDate();
					}else{
						echo "I didn't quite get that but I'm a fast learner.
						To teach me something, just type and send:
						train: question # answer # password";
					} // end else
				} // end if
			}
			die();
		}

		// if ($_SERVER["REQUEST_METHOD"] == "GET"){
	?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<link href='https://fonts.googleapis.com/css?family=Angkor' rel='stylesheet'>
	<link href="https://static.oracle.com/cdn/jet/v4.0.0/default/css/alta/oj-alta-min.css" rel="styleshet" type="text/css">
	<style>
	/*Global*/
			body{
				 max-width: 100%;
      height: auto;
			font-family: 'Angkor';
			font-size: 15px;
			line-height: 1.5;
			padding: 0;
			background-color: #1B1829;
		}
		.profiles{ 
			margin: auto;
			background-color: #ffffff;
			max-width: 290px;
			min-height: 380px;
			margin-top: 150px;
			border-radius: 10px;
			position: relative;
		}
		a{
			color: #000000;
		}

		hr{
			margin-top: 5px;
			margin-bottom: 5px;
			 background-color: #DECBBA; 
			 height: 1px; 
			 border: 0;
			}

		h2{
			padding-top: 22px;
			margin-bottom: 0;
			font-family: 'Angkor';
			font-size: 29px;
			color: #ffffff;
			padding-bottom: 10px;
		}
		h4{
			margin-top: 8px;
			font-size: 18px;
			margin-bottom: 35px;
			font-family: 'Angkor';

		}
		.top-box{
			min-height: 180px;
			background-color:  #FF4C48;
			border-radius: 10px 10px 0 0;
			color: #ffffff;
			text-align: center;
		}
		img{
		    border-radius: 50%;
		    height: 140px;
		    width: 140px;
		    /* center .blue-circle inside .main */
		    position: absolute;
		    top: 41%;
		    left: 50%;
		    margin-top: -70px;
		    margin-left: -70px;

		}

		.bottom-box{
			background-color: #ffffff;
			 min-height: 180px;
			 border-radius: 0 0 10px 10px;
		}

		.down-box{
			padding-top: 90px;
		}

		.text{
			color: #1C1B1A;
			padding-left: 10px;
			font-weight: bold;
		}
		.fa-whatsapp{
			padding-left: 110px;
			font-size: 20px;
		}
		.fa-envelope-open{
			padding-left: 68px;
			padding-bottom: 10px;
			font-size: 17px;
		}
		.end{

		}
		.bottom{
			min-height: 40px;
			background-color: #F0E1DF;
			padding-top: 5px;
			border-radius: 0 0 10px 10px;
			font-size: 25px;
			text-align: center;

		}

		.chat-box {
				display: flex;
				flex-direction: column;
				margin: 50px auto 30px auto;
				border: 1px solid rgba(0, 0, 0, .3);
				border-radius: 30px;
				width: 90%;
				padding-bottom: 10px;
			}

			.chat-box .chat-box-header {
				display: block;
				padding-top: 20px;
				padding-bottom: 20px;
				border-bottom: 1px solid rgba(0, 0, 0, .3);
				font-size: 18px;
			}

			.chat-msgs {
				height: 300px;
				margin: 30px auto 15px auto;
				overflow-y: scroll;
				width: 98%;
			}

			.guest,
			.alan {
				width: auto;
				max-width: 80%;
				border: 1px solid lightgrey;
				padding: 5px;
				clear: both;
				margin: 0 5px 5px 8px;
				border-radius: 10px;
				font-size: 16px;
			}

			.alan {
				text-align: left;
				padding-left: 20px;
			}

			.guest {
				float: right;
				text-align: left;
				padding-right: 20px;
			}

			.chat-type {
				position: relative;
				width: 100%;
				margin: 0 auto;
			}

			.chat-msg {
				width: 95%;
				margin: 0 auto;
				outline: none;
				border: 1px solid rgba(0, 0, 0, .3);
				background: transparent;
				/* position: relative; */
				resize: none;
				padding: 10px;
				padding-right: 75px;
				height: 90px;
				border-radius: 10px;
				font-size: 18px;
			}

			.chat-send {
				position: absolute;
				border-radius: 50%;
				border: 1px solid rgba(0, 0, 0, .3);
				height: 50px;
				width: 50px;
				background: transparent;
				right: 20px;
				bottom: 23px;
				color: rgba(0, 0, 0, .6);
				cursor: pointer;
				outline: none;
				/* overflow: hidden; */
			}

			@media only screen and (min-width: 600px) {
				.socials .fa-icon {
					flex-basis: 0;
				}
				.name {
					font-size: 4.1rem;
					font-weight: bolder;
				}
				.labels {
					font-size: 1.4rem;
				}
				.footer {
					font-size: 1.2rem;
				}
				.footer .icon {
					font-size: 1.4rem;
				}
				.guest,
				.alan {
					width: auto;
					max-width: 60%;
				}

				.chat-send {
					line-height: 50px;
					position: absolute;
					border-radius: 50%;
					border: 1px solid rgba(0, 0, 0, .3);
					;
					height: 50px;
					width: 50px;
					background: transparent;
					right: 40px;
					bottom: 23px;
					color: rgba(0, 0, 0, .6);
					cursor: pointer;
					outline: none;
					/* overflow: hidden; */
				}
				.chat-msg {
					width: 95%;
					margin: 0 auto;
					outline: none;
					border: 1px solid rgba(0, 0, 0, .3);
					background: transparent;
					/* position: relative; */
					resize: none;
					padding: 10px;
					padding-right: 85px;
					height: 90px;
					border-radius: 10px;
					font-size: 18px;
				}

				.chat-box .chat-box-header {
					font-size: 24px;
				}
			}

		
	</style>

	</head>

	<body>

		<div class="profiles oj-flex oj-flex-items-pad oj-contrast-marker">
			<div class="top-box oj-sm-12 oj-md-6 oj-flex-item">
				<h2>Weke Samuel</h2>
				<h4>Full Stack Developer</h4>
			</div>
			<div class="circle oj-flex-item alignCenter">
				<img src="https://res.cloudinary.com/samuelweke/image/upload/v1523620154/2017-11-13_21.01.13.jpg" alt="Samuel Weke" >
			</div>
			<div class="bottom-box oj-flex">
				<div class="down-box">
					<hr>
					<span class="text" >+234 817 280 9245 <i class="fa fa-whatsapp " ></i></span>
					<hr>
					<span class="text" >wekesamuel@yahoo.com <i class="fa fa-envelope-open " ></i></span>
			   </div>
				<div class="bottom">
					<a href="https://web.facebook.com/segun.weke">..<i class="fa fa-facebook" ></i></a>
					<a href="https://twitter.com/samuelweke"><i class="fa fa-twitter" style="padding-left: 10px" ></i></a>
					<a href="#"><i class="fa fa-instagram" style="padding-left: 10px" ></i></a>
				</div>
			</div>
		</div>
		<form class="chat-box" id="ajax-contact" method="post" action=""  style="background-color: #ffffff; width: 400px;">
				<span class="chat-box-header" style="text-align: center;">Chat with Bot</span>
				<div class="chat-msgs">
					<p class="alan">Hello! I am a bot</p>
					<p class="alan">I'm a fast learner. To teach me something, just type and send: train: question # answer # password</p>
				</div>
				<div class="chat-type" style="padding-left: 10px;">
					<textarea class="chat-msg" name="message" required></textarea>
					<button class="chat-send" type="submit">
						<i class="icon fa fa-fw fa-paper-plane"></i>
					</button>
				</div>
			</form>
		
	</body>

	<script src="vendor/jquery/jquery.min.js"></script>
		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script> -->
		<script>
			const chatMsgs = document.querySelector(".chat-msgs");
			const chatMsg = document.querySelector(".chat-msg");
			const callAJAX = document.querySelector(".chat-send");

			callAJAX.addEventListener("click", function () {
				if (chatMsg.value != "") {
					chatMsgs.innerHTML += '<p class="guest">' + chatMsg.value + '</p>';
				}
				fixScroll(); // call function to fix scroll bottom
			});



			$(function () {
				// Get the form.
				var form = $('#ajax-contact');

				// Set up an event listener for the contact form.
				$(form).submit(function (event) {
					// Stop the browser from submitting the form.
					event.preventDefault();

					// Serialize the form data.
					var formData = $(form).serialize();

					// ignore question mark
					formData = formData.replace("%3F", "");

					// Submit the form using AJAX.
					sendTheMessage(formData);

					// Clearing text filled
					chatMsg.value = "";
				}); // End of form event handler
			});

			// function to handle ajax
			function sendTheMessage(formData) {
				var form = $('#ajax-contact');

				$.ajax({
					type: 'POST',
					url: "profiles/somiari.php",
					data: formData,
				}).done(function (response) {
					console.log(response);
					chatMsgs.innerHTML += '<p class="alan">' + response + '</p>';
					fixScroll(); // call function to fix scroll bottom
				}) // end ajax handler
			} // end send message fuction

			// function to fix scroll bottom
			function fixScroll() {
				chatMsgs.scrollTop = chatMsgs.scrollHeight - chatMsgs.clientHeight;
			}
		</script>

</html>