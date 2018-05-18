<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Bl-de - Profile</title>
 <?php 
    if($_SERVER['REQUEST_METHOD']==='POST'){
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            $data = preg_replace("([?.!])", "", $data);
            $data = preg_replace("(['])", "\'", $data);
            return $data;
        }
        function chatMode($ques){
            require '../../config.php';
            $ques = test_input($ques);
            $conn = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD,DB_DATABASE );
            if(!$conn){
                echo json_encode([
                    'status'    => 1,
                    'response'    => "Could not connect to the database " . DB_DATABASE . ": " . $conn->connect_error
                ]);
                return;
            }
            $query = "SELECT answer FROM chatbot WHERE question LIKE '$ques'";
            $result = $conn->query($query)->fetch_all();
            echo json_encode([
                'status' => 1,
                'response' => $result
            ]);
            return;
        }
        function trainerMode($ques){
            require '../../config.php';
            $questionAndAnswer = substr($ques, 6); 
            $questionAndAnswer =test_input($questionAndAnswer); 
            $questionAndAnswer = preg_replace("([?.])", "", $questionAndAnswer);  
            $questionAndAnswer = explode("#",$questionAndAnswer);
            if((count($questionAndAnswer)==3)){
                $question = $questionAndAnswer[0];
                $answer = $questionAndAnswer[1];
                $password = test_input($questionAndAnswer[2]);
            }
            if(!(isset($password))|| $password !== 'password'){
                echo json_encode([
                    'status'    => 1,
                    'response'    => "Please insert the correct training password"
                ]);
                return;
            }
            if(isset($question) && isset($answer)){
                $question = test_input($question);
                $answer = test_input($answer);
                if($question == "" ||$answer ==""){
                    echo json_encode([
                        'status'    => 1,
                        'response'    => "empty question or response"
                    ]);
                    return;
                }
                $conn = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD,DB_DATABASE );
                if(!$conn){
                    echo json_encode([
                        'status'    => 1,
                        'response'    => "Could not connect to the database " . DB_DATABASE . ": " . $conn->connect_error
                    ]);
                    return;
                }
                $query = "INSERT INTO `chatbot` (`question`, `answer`) VALUES  ('$question', '$answer')";
                if($conn->query($query) ===true){
                    echo json_encode([
                        'status'    => 1,
                        'response'    => "trained successfully"
                    ]);
                }else{
                    echo json_encode([
                        'status'    => 1,
                        'response'    => "Error training me: ".$conn->error
                    ]);
                }
                
                return;
            }else{ 
            echo json_encode([
                'status'    => 0,
                'response'    => "Wrong training pattern<br> PLease use this<br>train: question # answer"
            ]);
            return;
            }
        }
        
        $ques = test_input($_POST['ques']);
        if(strpos($ques, "train:") !== false){
            trainerMode($ques);
        }else{
            chatMode($ques);
        }
       
        return;
    }
 
?>

<style type="text/css">
font-family: Montserrat;
</style>
</head>
<body style="background-color: #d3d3d3">
<nav style="background-color: #18BC9C; border-radius: 5px">
<a href="#Profile"><b>Profile</b></a>
    <a href="#ScarJobot"><b>ScarJobot</b></a>
</nav>
<section id="Profile" align="center" style="background-color:#18BC9C; color: #fff; border-radius: 5px">
<img src="http://res.cloudinary.com/bl-de/image/upload/v1525350858/pikbl-de.png">
<h1>MANNY EKANEM</h1>
<h2>Coder - Graphic Artist - User Experience Designer</h2>
<p><img src="https://res.cloudinary.com/bl-de/image/upload/v1525982300/map_marker.png"> Niger Delta, Nigeria</p>
</section>
<section id="ScarJobot" style="background-color:#2C3E50; color: #fff; border-radius: 5px">
<h2 style="margin-left: 5px">SCARjOBOT</h2>
<img src="https://res.cloudinary.com/bl-de/image/upload/v1525528851/ScarJo.png" style="float: left; height: 210px; width: 350px; border-radius: 16px; text-align: center; margin-left: 5px; margin-right: 20px">
<div id="Chatbox" style="float: center; margin-top: 30px">
<h3>Hi, I'm ScarJo</h3>
<p>"I think you'd love a chat with me. 'You know something I don't?</br>
Train me with the sequence-> train: question#answer#password<br/>
<p>Don't be shy:)"</p>
	<div style="color: #18BC9C">user: <span id="user"></span></div>
	<div style="color: #1ddced">ScarJo: <span id="Scarjobot"></span></div>
	<div><input id="question" type="text" placeholder="Talk to me..." autocomplete="off" style="margin-bottom: 30px"/></div>
</div>
</section>

<script>
var trigger = [
	["hi", "hey", "hello", "wassup", "sup"], 
	["about", "aboutbot"],
	["your name please",  "name", "may i know your name", "what is your name"],
	["how are you", "how are you doing"],
	["what are you doing", "what is going on"],
	["what can you do", "what are your skills"],
	["how old are you"],
	["who are you", "are you real", "are you for real"],
	["who created you", "who made you"],
	["i love you", "i like you", "i hate you"],
	["ok", "happy", "good"],
	["bad", "bored", "tired"],
	["help me", "I need help"],
	["ehh", "yes", "ok", "okay", "nice", "cool"],
	["thanks", "thank you"],
	["bye", "good bye", "goodbye", "see you later"],
	["fuck you", "screw you", "bitch", "fuck", "shit", "fool", "scum"]
];
var reply = [
	["Hi, How are you doing?", "Hello", "Hey there"], 
	["ScarJo Bot. Version 1.0"],
	["I am ScarJo", "ScarJo"],
	["Fine", "Pretty well", "Fantastic"],
	["Nothing much", "About to go to sleep", "Can you guess?", "Waiting on what's next"],
	["I can talk", "I can solve math", "Why don't you find out", "I can be trained"],
	["I am ageless"],
	["I am just a bot", "I am a bot. What are you?"],
	["Manny Ekanem", "Blade. With a katana", "My sensei Blade"],
	["I love you too", "Me too", "Haha", "Thank you"],
	["Have you ever felt bad?", "Glad to hear it"],
	["Why?", "Why? You shouldn't!", "Try watching my movies"],
	["I can try. Tell me how", "Absolutely. How may I do so?"],
	["Tell me more", "Talk more to me"],
	["You're welcome", "Anytime", "De nada"],
	["Bye", "Ciao", "Goodbye", "See ya later"],
	["Seriously", "Interesting", "That's immature"]
];
var alternative = ["Sorry I didn't get that. Train me with this sequence, train: question#answer#password"];
document.querySelector("#question").addEventListener("keypress", function(e){
	var key = e.which || e.keyCode;
	if(key === 13){ //Enter button
		var input = document.getElementById("question").value;
		document.getElementById("user").innerHTML = input;
		output(input);
	}
});
function output(input){
	try{
		var product = input + "=" + eval(input);
	} catch(e){
		var text = (input.toLowerCase()).replace(/[^\w\s\d]/gi, ""); //remove all chars except words, space and 
		text = text.replace(/ a /g, " ").replace(/i feel /g, "").replace(/whats/g, "what is").replace(/please /g, "").replace(/ please/g, "");
		if(compare(trigger, reply, text)){
			var product = compare(trigger, reply, text);
		} else {
			sendMsg();
		}
	}
	document.getElementById("Scarjobot").innerHTML = product;
	speak(product);
	document.getElementById("question").value = ""; //clear input value
}
function compare(arr, array, string){
	var item;
	for(var x=0; x<arr.length; x++){
		for(var y=0; y<array.length; y++){
			if(arr[x][y] == string){
				items = array[x];
				item =  items[Math.floor(Math.random()*items.length)];
			}
		}
	}
	return item;
}
function speak(string){
	var utterance = new SpeechSynthesisUtterance();
	utterance.voice = speechSynthesis.getVoices().filter(function(voice){return voice.name == "Agnes";})[0];
	utterance.text = string;
	utterance.lang = "en-US";
	utterance.volume = 1; //0-1 interval
	utterance.rate = 1;
	utterance.pitch = 2; //0-2 interval
	speechSynthesis.speak(utterance);
}
    function sendMsg(){
    var ques = document.querySelector("#question");
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(xhttp.readyState ==4 && xhttp.status ==200){
            processData(xhttp.responseText);
        }
    };
    xhttp.open("POST", "/profiles/Bl-de.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("ques="+ques.value);
    }
    function processData (data){
    data = JSON.parse(data);
    var answer = data.response;
   
    if(Array.isArray(answer)){
        if(answer.length !=0){
            var res = Math.floor(Math.random()*answer.length);
			var answer = res[0]
        }else{
			var answer = alternative[Math.floor(Math.random()*alternative.length)];
        }
		}else{
			return answer
    }
	document.getElementById("Scarjobot").innerHTML = answer;
	speak(answer);
	document.getElementById("question").value = ""; //clear input value
    }
</script>
</body>


</html>