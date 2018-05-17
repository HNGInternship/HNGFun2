<!DOCTYPE html>

<html>
<head>
	<title>Hotelsng User Profile </title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	
body {
	background: #e9e9e9;
	color: #3d3d3d;
	font: 100%/1.5em "Droid Sans", sans-serif;
	margin: 0;
}
p {
	font-size: 12px;
	font-family: Ubuntu;
	color: #000000;
	text-align: center;
}
h1 {
	font-size: 50px;
	font-family: Ubuntu;
	color: #bcbaba;
	background: #000000;
	text-align: center;
}
h3 {
	font-size: 15px;
	font-family: Ubuntu;
	color: #FFFF00;
	background: #000000;
	text-align: center;
}
h4, h5 {
	line-height: 1.5em;
	margin: 0;
}

a {
	text-align: center;
	text-decoration: none;
}
fieldset {
	border: 0;
	margin: 0;
	padding: 0;
}
.row {
	background: #ececec;
	font-family: Ubuntu;
	font-weight: bold;
	width: 500px;
	margin-right: auto;
	margin-left: auto;

}

@font-face {
      font-family: 'FontAwesome';
      src: url('../font/fontawesome-webfont.eot');
    }
.column {
    float: left;
    width: 50%;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
hr {
	background: #e9e9e9;
    border: 0;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    height: 1px;
    margin: 0;
    min-height: 1px;
}

img {
    border: 0;
    display: block;
    height: auto;
    max-width: 100%;
}

input {
	border: 0;
	color: inherit;
    font-family: inherit;
    font-size: 100%;
    line-height: normal;
    margin: 0;
}

p { margin: 0; }

.clearfix { *zoom: 1; } /* For IE 6/7 */
.clearfix:before, .clearfix:after {
    content: "";
    display: table;
}
.clearfix:after { clear: both; }

/* ---------- LIVE-CHAT ---------- */

#live-chat {
	bottom: 0;
	font-size: 12px;
	right: 24px;
	position: fixed;
	width: 300px;
}

#live-chat header {
	background: #293239;
	border-radius: 5px 5px 0 0;
	color: #fff;
	cursor: pointer;
	padding: 16px 24px;
}

#live-chat h4:before {
	background: #1a8a34;
	border-radius: 50%;
	content: "";
	display: inline-block;
	height: 8px;
	margin: 0 8px 0 0;
	width: 8px;
}

#live-chat h4 {
	font-size: 12px;
}

#live-chat h5 {
	font-size: 10px;
}

#live-chat form {
	padding: 24px;
}

#live-chat input[type="text"] {
	border: 1px solid #ccc;
	border-radius: 3px;
	padding: 8px;
	outline: none;
	width: 234px;
}

.chat-message-counter {
	background: #e62727;
	border: 1px solid #fff;
	border-radius: 50%;
	display: none;
	font-size: 12px;
	font-weight: bold;
	height: 28px;
	left: 0;
	line-height: 28px;
	margin: -15px 0 0 -15px;
	position: absolute;
	text-align: center;
	top: 0;
	width: 28px;
}

.chat-close {
	background: #1b2126;
	border-radius: 50%;
	color: #fff;
	display: block;
	float: right;
	font-size: 10px;
	height: 16px;
	line-height: 16px;
	margin: 2px 0 0 0;
	text-align: center;
	width: 16px;
}

.chat {
	background: #fff;
}

.chat-history {
	height: 252px;
	padding: 8px 24px;
	overflow-y: scroll;
}

.chat-message {
	margin: 16px 0;
}

.chat-message img {
	border-radius: 50%;
	float: left;
}

.chat-message-content {
	margin-left: 56px;
}

.chat-time {
	float: right;
	font-size: 10px;
}

.chat-feedback {
	font-style: italic;	
	margin: 0 0 0 80px;
}
	</style>
</head>
<body>
  
<h1> Hotelsng </br>User Profile for </br> Code-X

</h1>

 <div class="row">
  <div class="column">
<img src="http://res.cloudinary.com/code-x/image/upload/v1525118313/code-x.jpg" alt="Ndueze Ifeanyi Code-X" width="250" height="250">
</br>
<h3>Ndueze Ifeanyi David (Code-X) </br> Web Apps || Mobile Apps </h3>
  <a href="https://www.facebook.com/engrify"><i class="fa fa-facebook-official  fa-3x" aria-hidden="true"></i></a>
  <a href="https://twitter.com/IfeanyiOghene"> <i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></a>
  <a href="https://www.instagram.com/davidify/"> <i class="fa fa-instagram fa-3x" aria-hidden="true"></i></i></a>
  <a href="https://github.com/DavidIfeanyichukwu"> <i class="fa fa-github fa-3x" aria-hidden="true"></i></a>
  </div>
  <div class="column">
<?php
if(!defined('DB_USER')){
    require "../../config.php";		
    try {
        $conn = new PDO("mysql:host=". DB_HOST. ";dbname=". DB_DATABASE , DB_USER, DB_PASSWORD);
    } catch (PDOException $pe) {
        die("Could not connect to the database " . DB_DATABASE . ": " . $pe->getMessage());
    }
}
global $conn;
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $result = $conn->query("select * from secret_word LIMIT 1");
    $result = $result->fetch(PDO::FETCH_OBJ);
    $secret_word = $result->secret_word;
    $result2 = $conn->query("Select * from interns_data where username = 'code-x-main'");
    $user = $result2->fetch(PDO::FETCH_OBJ);
} else {
    //require '../answers.php';
    $message = trim(strtolower($_POST['message']));
    $version = '1.0';
    //step 1: Figure out the intent of the message
    //intents: Greeting, Find the current time, Ask about the HNG Programme
    //Train the bot
    //Provide directions for HNG Stage completions
    //check the db
    $intent = 'unrecognized';
    $unrecognizedAnswers = [
        'sorry, I dont seem to understand your scribbling. i will love it if you can train me. just  type: <b>#train: Question | Answer.</b>',
        'To make me understand you, boss kindly teach me . Just type: <b>#train: Question | Answer.</b>',
        "OMG, my bad, this is serious you need to teach me just type: <b>#train: Question | Answer.</b>"
    ];
    if (strpos($message, 'aboutbot') !== false) {
        $intent = 'aboutbot';
        $response = 'CodexBot' . $version;
    }
    //check for a function call
    if (($startIndex = strpos($message, '((')) !== false && ($endIndex = strpos($message, '))')) !== false) {
        if ($startIndex < $endIndex) {
            $message = trim($_POST["message"]);
            $funcName = substr($message, $startIndex + 2, $endIndex - $startIndex - 2);
            $funcName = trim($funcName);
            
            if(!function_exists($funcName)){
                $intent = 'confusion';
                $response = 'You been try call "function" wey no dey exist. Try again';
            } else {
                $intent = 'function_call';
                $response = $funcName();
            }
        }
    }
    //check for bot training
    $trainingData = '';
    if (strpos($message, '#train:') !== false) {
        $intent = 'training';
        $parts = explode('#train:', $message);
        if (count($parts) > 1) {
            $trainingData = $parts[1];
        }
    } else if (strpos($message, '# train:') !== false) {
        $intent = 'training';
        $parts = explode('# train:', $message);
        if (count($parts) > 1) {
            $trainingData = $parts[1];
        }
    } else if (strpos($message, '#train :') !== false) {
        $intent = 'training';
        $parts = explode('#train :', $message);
        if (count($parts) > 1) {
            $trainingData = $parts[1];
        }
    }
    if ($intent === 'training' && $trainingData === '') {
        $response = 'oops!, you are not training me well. Use this format >>> "#train: Question | Answer"';
    } else if ($trainingData !== '') {
        $intent = 'training';
        $parts = explode('|', $trainingData);
        if (count($parts) > 1) {
            $question = trim($parts[0]);
            $answer = trim($parts[1]);
            //save in db
            $sql = "insert into chatbot (question, answer) values (:question, :answer)";
            $query = $conn->prepare($sql);
            $query->bindParam(':question', $question);
            $query->bindParam(':answer', $answer);
            $query->execute();
            $query->setFetchMode(PDO::FETCH_ASSOC);
            
            $response = 'Thanks for finding out time to teach me boss';
        } else {
            $response = 'OMG, I seem not to still understand you. Please use this format >>> "#train: Question | Answer"';
        }
    }
    if ($intent === 'unrecognized') {
        $answer = '';
        $stmt = $conn->prepare("SELECT answer FROM chatbot WHERE question LIKE '$message' ORDER BY rand() LIMIT 1");
        $stmt->execute();
        if($stmt->rowCount() > 0) {
            $intent = 'db_question';
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $answer = $row["answer"];
            }
        }
    }
    switch($intent) {
        case 'aboutbot':
        case 'function_call':
        case 'training':
            echo $response;
            break;
        case 'db_question':
            echo $answer;
            break;
        case 'confusion':
            echo $response;
            break;
        case 'unrecognized':
        default:
            echo $unrecognizedAnswers[rand(0, count($unrecognizedAnswers) - 1)];
            break;
    }
    exit;
}
  
?>
<div class="row">
            <div class="chat-window" id="chat-window">
                <div class="chats" id="chats">
                    <p class="chat received">Hi, This is CodexBot, How may I help you today? <br> Sorry if I don't understand you, <br> Kindly train me thus #train: Question | Answer.</p>
                </div>
                <input type="text" id="chat-input" placeholder="Type and hit enter to send a message"/>
            </div>
            <button class="chat-trigger" id="chat-trigger"><i class="fa fa-comments"></i></button>
        </section>
        
    </div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
  </div>
</div> 


    <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $("#chat-window").toggle();
            var chatTrigger = $("#chat-trigger");
            chatTrigger.on('click', function() {
                $("#chat-window").toggle(1000);
            });
            $('#chat-input').on('keypress', function (e) {
                if(e.which === 13){
                    //Disable textbox to prevent multiple submit
                    $(this).attr("disabled", "disabled");
                    if(this.value !== '') {
                        //send message
                        $("#chats").append(`<p class="chat sent">${this.value}</p>`);
                        $('#chats').animate({scrollTop: $('#chats').prop("scrollHeight")}, 1000);
                        sendMessage(this.value);
                        this.value = '';
                        
                    }
                    //Enable the textbox again if needed.
                    $(this).removeAttr("disabled");
                }
            });
            function sendMessage(message) {
                $.ajax({
                    method: 'POST',
                    url: 'profiles/code-x-main.php',
                    data: {message: message},
                    success: function(response) {
                        $("#chats").append(`<p class="chat received">${response}</p>`);
                        $("#chats").animate({scrollTop: $('#chats').prop("scrollHeight")}, 1000);
                    },
                    error: function(error) {
                        $("#chats").append(`<p class="chat received">Sorry, I cannot give you a response at this time.</p>`);
                        $("#chats").animate({scrollTop: $('#chats').prop("scrollHeight")}, 1000);
                    }
                });
            }
        });
    </script>
</body>

</html>