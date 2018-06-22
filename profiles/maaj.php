<?php

require_once '../config.php';


try {
    $conn = new PDO("mysql:host=". DB_HOST. ";dbname=". DB_DATABASE , DB_USER, DB_PASSWORD);
} catch (PDOException $pe) {
    die("Could not connect to the database " . DB_DATABASE . ": " . $pe->getMessage());
}

$sec = $conn->query("Select * from secret_word LIMIT 1");
$sec = $sec->fetch(PDO::FETCH_OBJ);
$secret_word = $sec->secret_word;



//querying the database
$query = $conn->query("Select * from interns_data where username = 'maaj'");
$row = $query->fetch();

// Secret Word and others 

$name = $row['name'];
$username= $row['username'];
$image_url = $row['image_filename'];

?>
<?php
// chatbot
if(isset($_GET['text_in'])) {
	
	$question = $_GET['text_in'];
	
	
	 // bot version
    if(stripos($question,'aboutbot') !== false){
      echo json_encode([
        'status' => 1,
        'answer' => "Hello, I am maaj's assistant. Version 1.0, currently running on PHP 5.7."
      ]);
      return;
    }
	
	//age
	if(stripos($question, 'age') !== false){
	
	$question = preg_replace('([\s]+)', ' ', trim($question));
	$question = preg_replace("([?.])", "", $question);
	$question = $question;
	$age_string  = preg_replace('([\s]+)', ' ', trim($question));
	    $age_string  = preg_replace("([?.])", "",  $age_string); 
	    //get the question and answer by removing the 'train'
	    
	    $age_string = explode("#", $age_string);
        //get the index of the user question
        $dateofbirth = trim($age_string[1]);
		$today = date("Y-m-d");
		$diff = date_diff(date_create($dateofbirth), date_create($today));
		
		header('Content-Type: application/json');
		echo json_encode([
		  'status' => 1,
		  'answer' => "Age is ".$diff->format('%y')
		]);
	return; 
	     
	
	
	}
	
	
	// time
	if(stripos($question,'time') !== false){
		
		
		// Get IP address
		$ip_address = getenv('HTTP_CLIENT_IP') ?: getenv('HTTP_X_FORWARDED_FOR') ?: getenv('HTTP_X_FORWARDED') ?: getenv('HTTP_FORWARDED_FOR') ?: getenv('HTTP_FORWARDED') ?: getenv('REMOTE_ADDR');

		// Get JSON object
		$jsondata = file_get_contents("http://timezoneapi.io/api/ip/?" . $ip_address);

		// Decode
		$data = json_decode($jsondata, true);

		// Request OK?
		if($data['meta']['code'] == '200'){

		

		// Example: Get the users time
		$time = $data['data']['datetime']['date_time_txt'];
		
		}
		
		
		 
		echo json_encode([
        'status' => 1,
        'answer' => $time 
      ]);
      return;
		
	
	}
	//training
	$check_train = stripos($question, "train:");
    if($check_train === false){ //then user is asking a question
	
	//remove extra white space, ? and . from question
	$question = preg_replace('([\s]+)', ' ', trim($question));
	$question = preg_replace("([?.])", "", $question); 
	
	 //check database for the question and return the answer
	$question = $question;
        $sql = 'SELECT * FROM chatbot WHERE question = "'. $question . '"';
        $q = $GLOBALS['conn']->query($sql);
        $q->setFetchMode(PDO::FETCH_ASSOC);
        $data = $q->fetchAll();
        if(empty($data)){ //That means your answer was not found on the database
            echo json_encode([
        		'status' => 1,
       			 'answer' =>  "I dont have answers to your question! Please train me by typing-->  train: question #answer #password"
     		 ]);
          return;
        }else {
            $rand_keys = array_rand($data);
            $answer = $data[$rand_keys]['answer'];
            echo json_encode([
        		'status' => 1,
       			 'answer' => $answer,  //return one of the the answers to client
     		 ]);
           return;
        	}      
	    
	    
	}else{		  
		//train the chatbot to be more smarter 
		//remove extra white space, ? and . from question
	    $train_string  = preg_replace('([\s]+)', ' ', trim($question));
	    $train_string  = preg_replace("([?.])", "",  $train_string); 
	    //get the question and answer by removing the 'train'
	    $train_string = substr( $train_string, 6);
	    $train_string = explode("#", $train_string);
        //get the index of the user question
        $user_question = trim($train_string[0]);
	        if(count($train_string) == 1){ //then the user only enter question and did'nt enter answer and password
		        echo json_encode([
		          'status' => 1,
		          'answer' => "Oooh! sorry....you entered an invalid training format. Please the correct format its-->  train: question #answer #password"
		        ]);
	        return; 
	        }
	        //get the index of the user answer
	        $user_answer = trim($train_string[1]);    
	        if(count($train_string) < 3){ //then the user only enter question and answer But did'nt enter password
		        echo json_encode([
		          'status' => 1,
		          'answer' => "Please enter training password to train me. The password is--> password"
		        ]);
	        return;
	        }
	         //get the index of the user password
		    $user_password = trim($train_string[2]);
	        //verify if training password is correct
	        define('TRAINING_PASSWORD', 'password'); //this is a constant variable
	        if($user_password !== TRAINING_PASSWORD){ //the password is incorrect
		        echo json_encode([
		          'status' => 1,
		          'answer' => "The password you entered is wrong! Please enter the correct password which is-->  password "
		        ]);
	     	return;
	    	}
		    //check database if answer exist already
		    $user_answer = "$user_answer"; 
		    $sql = "select * from chatbot where answer like :user_answer";
		    $stmt = $conn->prepare($sql);
		    $stmt->bindParam(':user_answer', $user_answer);
		    $stmt->execute();
		    $stmt->setFetchMode(PDO::FETCH_ASSOC);
		 	$rows = $stmt->fetchAll();
		    if(empty($rows)){// then it means the database could not fetch any existing question and answer, so	we can insect the query.      
			    $sql = "insert into chatbot (question, answer) values (:question, :answer)";  //insert into database
			    $stmt = $conn->prepare($sql);
			    $stmt->bindParam(':question', $user_question);
			    $stmt->bindParam(':answer', $user_answer);
			    $stmt->execute();
			    $stmt->setFetchMode(PDO::FETCH_ASSOC);
			    
			    echo json_encode([
			    	'status' => 1,
			        'answer' => "Cool. I just got smarter. Thanks a lot! You can ask me that same question right now and i will tell you the answer OR just keep training me "
			      ]);			
	     	return;
	     	
	     	}else{ //then it means the the question already in the database and no need to insert it again
	     		 echo json_encode([
			    	'status' => 1,
			        'answer' => "Sorry! Answer already exist. Try train me again with the same question AND provide an altanative answer different from the previous one you entered OR just train me with a new question and a new answer."
			      ]);
			return;		
	     	}
	    return;
	 	}
	
	
	
	  
} 
	
	

	
	
	
else{
	
	
	
}
?> 
<!DOCTYPE html>
<!--
 Copyright (c) 2014, 2018, Oracle and/or its affiliates.
 The Universal Permissive License (UPL), Version 1.0
 -->

<!-- ************************ IMPORTANT INFORMATION ************************************
  This hybrid navigation bar template is provided as an example of how to configure
  a JET hybrid mobile application with a navigation bar as a single page application
  using ojRouter and oj-module.  It contains the Oracle JET framework and a default
  requireJS configuration file to show how JET can be setup in a common application.
  This project template can be used in conjunction with demo code from the JET
  website to test JET component behavior and interactions.

  Any CSS styling with the prefix "demo-" is for demonstration only and is not
  provided as part of the JET framework.

  Please see the demos under Cookbook/Patterns/App Shell: Hybrid Mobile and the CSS documentation
  under Support/API Docs/Non-Component Styling on the JET website for more information on how to use 
  the best practice patterns shown in this template.

  Aria Landmark role attributes are added to the different sections of the application
  for accessibility compliance. If you change the type of content for a specific
  section from what is defined, you should also change the role value for that
  section to represent the appropriate content type.
  ***************************** IMPORTANT INFORMATION ************************************ -->
<html lang="en-us" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Maaj's Profile</title>
    <meta charset="UTF-8"/>
    <meta http-equiv="Content-Security-Policy" content="default-src *; script-src 'self' *.oracle.com 'unsafe-inline' 'unsafe-eval' localhost:* 127.0.0.1:*; style-src 'self' *.oracle.com 'unsafe-inline'; img-src * data:"/>
    <meta name="viewport" content="viewport-fit=cover, width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
    <link rel="icon" href="css/images/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <!-- This is the main css file for the default Alta theme -->
<!-- injector:theme -->
<link rel="stylesheet" href="css/alta/5.0.0/web/alta.css" id="css"/>
<!-- endinjector -->
    <!-- This contains icon fonts used by the starter template -->
    <!-- This is where you would add any app specific styling -->
	<link href="https://static.oracle.com/cdn/jet/v4.0.0/default/css/alta/oj-alta-min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://static.oracle.com/cdn/jet/v4.0.0/3rdparty/require-css/css.min" type="text/css"/>
    
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="http://code.jquery.com/jquery-latest.min.js"type="text/javascript"></script>	

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
        .j-web-applayout-body{
            background-color: #153643;
            vertical-align: middle;
            color: #FFFFFF;
            align-content: left;
            margin: auto;
            
			width: 100%;
        }
		.page{
			vertical-align: middle;
            color: #FFFFFF;
            align-content: left;
            margin: auto;
            
			width: 40%;
		}
        .oj-profile{
            background-image: url('https://res.cloudinary.com/maaj/image/upload/v1523621615/profile.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            width: 200px;
			height: 200px;
            border-radius: 50%;
			float: center;
			margin: 20px 30%;
			box-shadow: 3px 4px 8px #888888;
        }
        .oj-title{
            color: #000000;
            text-align: center;
			font-family: Lato;
			 
			
            
        }
		.oj-links{
			text-align: center;
			margin: 5px 30px;
			width: 100%;
			
		}
		table, th, td {
			border: 1px solid #ffffff;
		}
		
        .oj-head{
            color: #ffffff;
            text-align: center;
            font-size: 60px;
            text-transform: capitalize;
            font-weight: bold;
        }
		
		body{
			margin:0;
			
		}
		#header{
			width: 40%;
			padding: 10px;
			margin: 0px auto;
			background-color:#dce354;
			border: 1px solid #dce354;
			color:#ffffff;
		}
		#header h3{
			margin: 0px;
			padding: 0px;
			color:#ffffff;
		}
		#contain{
			width:40%; 
			height: 400px;
			margin-top:10px;
			margin:0px auto;
			
			background-color:#403f45;
			border:1px solid #dce354;
			overflow:scroll;
		}
		#controls{
			width:40%;
			margin:0px auto;
			
		}
		#textbox{
			margin:0 0 0 0;
			width:82%;
			border: 1px solid #403f45;			
		}
		#send{

		}
		
		.username{
			margin:5px;
			padding:10px;
			font-size:14px;
			background-color: #f1f1f1;
			border-radius:5px;
			height: auto;
			float: right;
			width: 70%;
			color:blue;
			font-weight: regular;
			}
			
		.bot{
			margin: 5px;
			padding:10px;
			background-color: #ddd;
			font-size:14px;
			border-radius:5px;
			height: auto;
			float: left;
			color:green;
			font-weight: regular;
			width: 70%;
			}
		.oj-flex{
			margin: 0px 100px !important;
		}
		.list{
			border: 1px solid #ffffff;
			width: 100%;
			color: #ffffff !important;
		}
		table{
			border-collapse: collapse;
			background-color: #403f45;
		}
		
		td:nth-child(odd){
			background-color: #dce354;
		}
		
     </style>

  </head>
 

  <body class="oj-web-applayout-body">
	<div class="oj-web-applayout-page">
	
	<div class=" oj-flex oj-lg-align-self-center">
		<div class="oj-flex-item">
		<div class="oj-profile"></div>
		  <div class="oj-title">
                  <h3 class="oj-title"><?php echo $name;?></h3>
				  <span>Hi, I am a Front-End and Backend software developer. I also develop mobile apps. <br/> </span>
                  <span class="oj-title">HNG Internship Slack username: <?php echo $username;?></span>
				  </div>
			</div>
		  </div>
		  
		  <div class="oj-flex oj-lg-align-self-center page">
		  
			<div class="oj-links oj-align-self-center">
				  <table class="list">
				  <tr>
				<td>
				  <a href="https://github.com/dmaaj"><i class="fa fa-2x fa-github"></i></a></td>
				  <td>https://github.com/dmaaj </td>
				  </tr>
				  <tr>
				<td>
				  <a href="https://instagram.com/wale_j"><i class="fa fa-2x fa-instagram"></i></a></td>
				  <td>www.instagram.com/wale_j </td>
				  </tr>
				  <tr>
				<td>
				  <a href="https://www.twitter.com/kng_maaj"><i class="fa fa-2x fa-twitter"></i></a></td>
				  <td>www.twitter.com/kng_maaj </td>
				  </tr>
				  <tr>
				<td>
				  <a href="https://www.facebook.com/jimohmuheezadewale"><i class="fa fa-2x fa-facebook"></i></a></td>
				  <td>www.facebook.com/jimohmuheezadewale </td>
				  </tr>
				  <tr>
				<td>
				  <a href="https://www.linkedin.com/in/jimoh-muheez-09640480/"><i class="fa fa-2x fa-linkedin"></i></a></td>
				  <td>https://www.linkedin.com/in/jimoh-muheez-09640480/</td>
				  </tr>
				  
				<tr>
				<td>
				  <a href=""><i class="fa fa-2x fa-envelope"></i></a></td>
				  <td>jamuheez2009@gmail.com </td>
				  </tr>
          </table>
		  <button class="btn btn-secondary" id="toggle" style="float: right !important;"> <i class="fa fa-circle" style="color: #00FF00;"></i> Chat now</button>
		</div>
              </div>
			  
	
      
	  <div class="oj-flex oj-lg-align-self-center">
		
		  <div class="oj-flex-item" id="dmaaj">
			<div id ="header">

				<h3 class="text-center">Maaj's bot</h3>
			</div>
				<div id="contain">
					
					<div class='bot'>
						<img src='https://res.cloudinary.com/maaj/image/upload/v1524822457/bot.png' width='30px'/> Hi... I'm Maaj's assistant. My boss is away, but i am available to answer all your questions
					</div>
					<div class='bot'>
						<img src='https://res.cloudinary.com/maaj/image/upload/v1524822457/bot.png' width='30px'/> I can tell the current time and date with 'time' and i can tell you your current age with 'age # 23-01-1994'
					</div>
					
				</div>
				<div id ="controls">
					<form method="post" action="" id="chat">
					<input type="text" id="textbox" name="text_in" required class="text_in"></input>
					<input id="send" class="btn btn-secondary" type="submit" value="Send"></input>
					</form>
					
				</div>
	
          </div>
		  </div>
                            
    
      </div>
	  
     
	 
<script src="vendor/jquery/jquery.min.js"></script>
<script src="../js/hng.min.js"></script>
<script>
$(document).ready(function(){
		
	$('#dmaaj').hide();	
	
	$('#toggle').click(function(){
		$('#dmaaj').toggle();
	});

});


</script>
 <script>
    var message = $("#contain");
		
	    $("#chat").on("submit", function(e) {
	        e.preventDefault();
			if($("#textbox").val() !== ''){
	        var text_in = $("#textbox").val();
			var username = "You:  ";
	        message.append("<div class='username'>"+ username + text_in+"</div>");
	       	message.scrollTop(message[0].scrollHeight);
			//send question to server
			$.ajax({
				url: 'profiles/maaj.php', //location
				type: 'GET',
				data: {text_in: text_in},
				dataType: 'json',
				success: (response) => {
					var message = $("#contain");
			        //response.answer = response.answer.replace(/(?:\r\n|\r|\n)/g, '<br />'); 
			        //let response_answer = response.answer;
			        message.append("<div class='bot'><div class='message'><img src='https://res.cloudinary.com/maaj/image/upload/v1524822457/bot.png' width='30px'/>" + response.answer + "</div></div>");      
			       	$('#contain').animate({scrollTop: $('#contain').get(0).scrollHeight}, 1100);     
				},
				error: (error) => {
	          		alert(JSON.stringify(error));
						console.log(error);
						
				}
				
			});
			$("#textbox").val("");
			}
		});
		


</script>

  </body>

</html>


