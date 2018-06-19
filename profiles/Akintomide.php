<!doctype html>
<html>
<?php
    require "db.php";
		$query = $conn->query("SELECT * FROM secret_word");
$result = $query->fetch(PDO::FETCH_ASSOC);
$secret_word = $result['secret_word'];
	
?>
<?php
	
	
	try{
		$q = 'SELECT * FROM secret_word';
		$sql =  $conn->query($q);
		$sql->setFetchMode(PDO::FETCH_ASSOC);
		$data = $sql->fetch();
		$secret_word = $data["secret_word"];
		}
	catch(PDOException $err){
		throw $err;
	}

		
	?>
	
<head>

<meta charset="utf-8">
<title>Akintomide</title>
<style>
h2{
	font-family: 'Montserrat',sans-serif;
	font-size: 60px;
	font-weight: 4400;
	letter-spacing: -1px;
	margin: 0 0 22px 0;
	color: black;
	}
	h1{
	font-family: 'Montserrat',sans-serif;
	font-size: 25px;
	font-weight: 40;
	letter-spacing: -1px;
	margin: 0 0 22px 0;
	color: #000;
	}
	h3{
	font-family: 'Montserrat',sans-serif;
	font-size: 30px;
	font-weight: 40;
	letter-spacing: -1px;
	margin: 0 0 22px 0;
	color: #000;
	}
	.profilee {
		box-shadow: 0 4px 8px 0 rgb(0, 0, 0, 0.2 );
		max-width: 500px;
		margin: auto;
		text-align: center;
		}
	.title {
		color: grey;
		font-size: 18px;
	}
	button {
		border: none;
		outline: 0;
		display: inline-block;
		padding: 8px;
		color:  white;
		background-color: #000;
		text-align: center;
		cursor: pointer;
		width: 100%;
		font-size: 18px;
	}
	a {
		text-decoration: none;
		font-size: 22px;
		color: black;
	}
	button: hover, a:hover{
		opacity: 0.7;
	}
	.fa {
		padding: 20px;
		font-size: 30px;
		width: 50px;
		text-align: center;
		text-decoration: none;
		border-radius: 50%;
	}
	
	.clear {
			clear: both;
		}
		.bottom {
			margin-bottom: 50px;}

		
		.top {
			margin-top: 50px;}

#bodybox {
  margin: auto;
  max-width: 550px;
  font: 15px arial, sans-serif;
  background-color: white;
  border-style: solid;
  border-width: 1px;
  padding-top: 20px;
  padding-bottom: 25px;
  padding-right: 25px;
  padding-left: 25px;
  box-shadow: 5px 5px 5px grey;
  border-radius: 15px;
}

#chatborder {
  border-style: solid;
  background-color: #f6f9f6;
  border-width: 3px;
  margin-top: 20px;
  margin-bottom: 20px;
  margin-left: 20px;
  margin-right: 20px;
  padding-top: 10px;
  padding-bottom: 15px;
  padding-right: 20px;
  padding-left: 15px;
  border-radius: 15px;
}

.chatlog {
   font: 15px arial, sans-serif;
}

#chatbox {
  font: 17px arial, sans-serif;
  height: 22px;
  width: 100%;
}
	
 #wrapper {
    perspective: 1000px;
    position: relative;
    min-height: 100%;
    padding: 1.5em;
    z-index: 2;
  }
	
	</style>
	
</head>

<body>
<div class="top clear"></div>

<div style="margin-top: 30px;">
 <h2 align="center">My Profile</h2>
 </div>


<div class="profilee">
<img src="https://res.cloudinary.com/akintomide/image/upload/v1523798928/michael.png" style="width: 100%">
<!--<img src="michael.png" style="width: 100%">-->
<?php
require 'db.php';
$username = "Akintomide";
$data = $conn->query("SELECT * FROM  interns_data WHERE username = '".$username."' ");
$my_data = $data->fetch(PDO::FETCH_BOTH);
$name = $my_data['name'];
$img = $my_data['image_filename'];
$username =$my_data['username'];
?>

<h1><?php echo $name;?></h1>
<p class="title">Embedded Systems Designer</p>
<p>C++ </p>

<p>Front End Developper </p>
<p class="title">HNGinternship</p>
<p>HTML CSS </p>
<p><button>contact</button></p>	
<div>
	 <div id='chatborder'>
    <p id="chatlog7" class="chatlog">&nbsp;</p>
    <p id="chatlog6" class="chatlog">&nbsp;</p>
    <p id="chatlog5" class="chatlog">&nbsp;</p>
    <p id="chatlog4" class="chatlog">&nbsp;</p>
    <p id="chatlog3" class="chatlog">&nbsp;</p>
    <p id="chatlog2" class="chatlog">&nbsp;</p>
    <p id="chatlog1" class="chatlog">&nbsp;</p>
    
    
    <input type="text" name="message" id="chatbox" placeholder="Hi there! Type here to talk to me." onfocus="placeHolder()">
  </div>
</div>
</div>
  <div class="bottom clear"></div>
</body>
		
<script>
	//links
//http://eloquentjavascript.net/09_regexp.html
//https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Regular_Expressions
nlp = window.nlp_compromise;

var messages = [], //array that hold the record of each string in chat
  lastUserMessage = "", //keeps track of the most recent input string from the user
  botMessage = "", //var keeps track of what the chatbot is going to say
  botName = 'Wizard of oz', //name of the chatbot
 version = 'am still evolving , so lets stick to a version 1 for now',
	
	talking = true; //when false the speach function doesn't work

//
//
//****************************************************************
//****************************************************************
//****************************************************************
//****************************************************************
//****************************************************************
//****************************************************************
//****************************************************************
//edit this function to change what the chatbot says
function chatbotResponse() {
  talking = true;
  botMessage = "I'm confused, why not train me in this sequence; question # answer # password"; //the default message

  if (lastUserMessage === 'hi' || lastUserMessage =='hello' || lastUserMessage =='Hi' || lastUserMessage =='Hello') {
    const hi = ['hi','howdy','hello']
    botMessage = hi[Math.floor(Math.random()*(hi.length))];;
  }

  if (lastUserMessage === 'name') {
    botMessage = 'My name is ' + botName;
  }
	
	if (lastUserMessage === 'version') {
    botMessage =  version;
  }
	
	if (lastUserMessage === 'time') {
    botMessage =  time;
  }
	
	if (lastUserMessage === ' ') {
	botMessage = 'if i start calling u names, they will say am too sensitive. shaa ask me a question';
				}
	
							
	
	var n = lastUserMessage.search(/\b(cat|cats|kitten|feline)\b/i);
if (n !== -1) {
  botMessage = 'I hate cats!';
} 
	var patt = /\b(dogs?|pup(s|py|pies?)?|canines?)\b/i;
var result = patt.exec(lastUserMessage);
if (result) {
  botMessage = 'I love ' + result[0];
}
	var patt = /\b(you?|are(how|py|you))\b/i;
var result = patt.exec(lastUserMessage);
if (result) {
  botMessage = 'i believe am fine. how about you?';
}
		var n = lastUserMessage.search(/\b(i am|fine|thank you)\b/i);
if (n !== -1) {
	
  botMessage = 'Good. I believe you have some questions for me';
} 
	
	
	
 
		var pat = /\b(smart)\b/i;
var result = pat.exec(lastUserMessage);
if (result) {
  botMessage = 'u think! whats the product of these two numbers 22346676 and 987867, i guess u need a calculator for that. will it be right to say you are not so smart afterall ';
} 
}	
	<?php
	function trainingWizard($lastUserMessage){
    require 'db.php';
    $message = explode('#', $lastUserMessage);
    $question = explode(':', $message[0]);
    $answer = $message[1];
    $password = $message[2];
 
    $question[1] = trim($question[1]);
    $password = trim($password);
    if ($password != "password"){
      echo "You are not authorize to train me.";
 
    }else{
    $chatbot= array(':id' => NULL, ':question' => $question[1], ':answer' => $answer);
    $query = 'INSERT INTO chatbot ( id, question, answer) VALUES ( :id, :question, :answer)';
 
    try {
        $execQuery = $conn->prepare($query);
        if ($execQuery ->execute($chatbot) == true) {
            echo repondTraining();
 
        };
    } catch (PDOException $e) {
        echo "Oops! i did't get that, Something is wrong i guess, <br> please try again";
      }
    }
  }
	?>
//****************************************************************
//****************************************************************
//****************************************************************
//****************************************************************
//****************************************************************
//****************************************************************
//****************************************************************
//
//
//
//this runs each time enter is pressed.
//It controls the overall input and output
function newEntry() {
  //if the message from the user isn't empty then run 
  if (document.getElementById("chatbox").value != "") {
    //pulls the value from the chatbox ands sets it to lastUserMessage
    lastUserMessage = document.getElementById("chatbox").value;
    //sets the chat box to be clear
    document.getElementById("chatbox").value = "";
    //adds the value of the chatbox to the array messages
    messages.push(lastUserMessage);
    //Speech(lastUserMessage);  //says what the user typed outloud
    //sets the variable botMessage in response to lastUserMessage
    chatbotResponse();
    //add the chatbot's name and message to the array messages
    messages.push("<b>" + botName + ":</b> " + botMessage);
    // says the message using the text to speech function written below
    Speech(botMessage);
    //outputs the last few array elements of messages to html
    for (var i = 1; i < 8; i++) {
      if (messages[messages.length - i])
        document.getElementById("chatlog" + i).innerHTML = messages[messages.length - i];
    }
  }
}

//text to Speech
//https://developers.google.com/web/updates/2014/01/Web-apps-that-talk-Introduction-to-the-Speech-Synthesis-API
function Speech(say) {
  if ('speechSynthesis' in window && talking) {
    var utterance = new SpeechSynthesisUtterance(say);
    //msg.voice = voices[10]; // Note: some voices don't support altering params
    //msg.voiceURI = 'native';
    //utterance.volume = 1; // 0 to 1
    //utterance.rate = 0.1; // 0.1 to 10
    //utterance.pitch = 1; //0 to 2
    //utterance.text = 'Hello World';
    //utterance.lang = 'en-US';
    speechSynthesis.speak(utterance);
  }
}

//runs the keypress() function when a key is pressed
document.onkeypress = keyPress;
//if the key pressed is 'enter' runs the function newEntry()
function keyPress(e) {
  var x = e || window.event;
  var key = (x.keyCode || x.which);
  if (key == 13 || key == 3) {
    //runs this function when enter is pressed
    newEntry();
  }
  if (key == 38) {
    console.log('hi')
      //document.getElementById("chatbox").value = lastUserMessage;
  }
}

//clears the placeholder text ion the chatbox
//this function is set to run when the users brings focus to the chatbox, by clicking on it
function placeHolder() {
  document.getElementById("chatbox").placeholder = "";
}
	
	
	
	
	</script>
</html>