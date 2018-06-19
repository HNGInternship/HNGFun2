<?php
  // error_reporting(E_ALL);
  // ini_set('display_errors', 'On');
  // var_dump($_POST);


  if(!isset($_GET['question_sent'])){
    $result = $conn->query("Select * from secret_word LIMIT 1");
    $result = $result->fetch(PDO::FETCH_OBJ);
    $secret_word = $result->secret_word;

    $result2 = $conn->query("Select * from interns_data where username = 'vewere'");
    $user = $result2->fetch(PDO::FETCH_OBJ);

  }else{
    if (!defined('DB_USER')){
      require "../../config.php";
    }
    try {
      $conn = new PDO("mysql:host=". DB_HOST. ";dbname=". DB_DATABASE , DB_USER, DB_PASSWORD);
    } catch (PDOException $pe) {
      die("Could not connect to the database " . DB_DATABASE . ": " . $pe->getMessage());
    }
    if (substr($_GET['question'], 0, 5) == 'train'){
      
      $input = preg_replace('/\s*#\s*/', '#', $_GET['question']);

      $indexof1 = strpos($input, '#');
      $indexof2 = strpos($input, '#', 6);
      $indexof3 = strpos($input, '#', $indexof2+1);

      $new_question = substr($input, $indexof1+1, $indexof2-$indexof1-1);
      $new_answer = substr($input, $indexof2+1, $indexof3-$indexof2-1);
      $password = substr($input, $indexof3+1);

      if ($password == "password"){
        $sql = "INSERT INTO chatbot (question, answer) VALUES ('$new_question', '$new_answer')";
        $conn->exec($sql);

        $response = "Training Successful";
      } else {
        $response = "Training was not successful. Please use the correct training password.";
      }
      
      echo $response;
      exit();
    }
    
    if (isset($_GET['question'], $_GET['question_sent'])){
      $question = $_GET['question'];
      $result3 = $conn->query("Select answer from chatbot where question LIKE '$question' ORDER BY rand() LIMIT 1");
      $result3 && ($answer = $result3->fetch(PDO::FETCH_OBJ));
      if (isset($answer) && $answer){
        $response = $answer->answer;
      } else {
        $response = "Well, this is embarrassing. I don't know what to say. You can teach me by entering the question and answer in this format: train#your-question#your-answer#training-password";
      }

      echo $response;
      exit();
    }
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Victor's Profile</title>
  <link href="https://static.oracle.com/cdn/jet/v4.0.0/default/css/alta/oj-alta-min.css" rel="stylesheet" type="text/css">
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	
  <style type="text/css">


    /* General Styles */

    body {
			margin: 0px;
			background-color: #958080;
			height: 100%;
		}

    .text {
      font-family: "Rajdhani", sans-serif;
      color: #ffffff;
      text-align: center;
      display: vertical;
		}

    h1 {
      padding-bottom: 0;
    }

    h2 {
      padding-top: 0;
    }

    #toggle-visibility {
      border-radius: 5px;
      border-style: solid;
      border-width: thin;
      border-color: #ffffff;
      width: 20px;
      margin-left: auto;
      margin-right: auto;
    }

    #toggle-visibility:hover {
      cursor: pointer;
    }


    /* Profile Styles */

		#profile {
      background-color: #513e3e;
      margin-top: 70px;
      margin-left: auto;
      margin-right: auto;
      height: 480px;
      margin-bottom: 3%;
      box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.25);
    }

    img {
      border-radius: 50%;
      border: 6px solid #958080;
      display: block;
      margin-left: auto;
      margin-right: auto;
      margin-top: 10%;
    }


    /* Chat Styles */
    
    #outer-chat {
      display: none;
    }

    #outer-profile {

    }

    #chat {
      margin-left: auto;
      margin-right: auto;
      margin-top: 70px;
      height: 480px;
      margin-bottom: 3%;
      box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.25);
    }

    #chat-area {
      background-color: #513e3e;
      height: 427px;
      overflow-y: auto;
      scroll-behaviour: auto;
      box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.25);
      padding: 15px;
      
    }

    #input-area {
      margin-top: 0;
      height: 53px;
      background: #000000;
      margin-bottom: 3%;
      box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.25);
    }

    #request {
      margin-left: 15px;
      font-family: "Rajdhani", sans-serif;
      font-size: 12pt;
      margin-top: 10px;
      margin-right: 0;
      border-radius: 5px 0px 0px 5px; 
      border:none; 
      padding-top: 5px; 
      padding-bottom: 5px;
    }

    #send {
      margin-top: 10px;
      margin-left: 0;
      background:#809595; 
      border-radius: 0px 5px 5px 0px; 
      border:none; 
      padding-top: 5px; 
      padding-bottom: 5px;
    }

    table { 
      width: 100%;
    }

    .bot-bubble {
      background-color: #fffff0;
      border-radius: 10px;
      word-wrap: break-word;
      width: fit-content;
      padding: 1px;
      max-width: 80%;
      margin-bottom: 10px;
      display: block;
    }

    .user-bubble {
      background: #809595;
      border-radius: 10px;
      word-wrap: break-word;
      width: fit-content;
      max-width: 80%;
      float: right;
      margin-bottom: 10px;
      display: block;
    }

    p {
      margin: 5px 8px 5px 8px;
      font-family: "Rajdhani", sans-serif;
      font-size: 12pt;
      font-weight: bold;
    }

  </style>
  <script>
    var outer_profile = true;
    var version = "Bot v1.0.24";
    $(function (){    
      
      // Switch between Profile and Chat screens
      $("#toggle-visibility").click(function (){
        if (outer_profile) {
          $("#outer-profile").css('display', 'none');
          $("#outer-chat").css('display', 'block');
          $("#toggle-text").html("VIEW PROFILE")
          outer_profile = false;
        } else {
          $("#outer-chat").css('display', 'none');
          $("#outer-profile").css('display', 'block');
          $("#toggle-text").html("TEST BOT")
          outer_profile = true;
        }
      });

      // Add user's request and bot's response to chat interface
      $("#send").click(function() {
        var input = $("#request").val();        
        if ($.trim(input)) {
          $("#chat-area table").append("<tr><td><div class='user-bubble'><p>"+input+"</p></div></td></tr>");
          
          $("#request").val("");

          if (input.toLowerCase() == 'aboutbot'){
            $("#chat-area table").append("<tr><td><div class='bot-bubble'><p>"+version+"</p></div></td></tr>");
          } else {
            formdata = new FormData();
            formdata.append("question", input);
            formdata.append("question_sent", 1);
            $.ajax({
              type: "GET",
              url: "profiles/vewere.php",
              data: {question: input, question_sent: 1},
              success: function(data){
                console.log(data);
               $("#chat-area table").append("<tr><td><div class='bot-bubble'><p>"+data+"</p></div></td></tr>");
              $("#chat-area").scrollTop($("#chat-area")[0].scrollHeight);

              }
            });
          }

        }
        $("#chat-area").scrollTop($("#chat-area")[0].scrollHeight);
      });

      $('#request').keypress(function (e) {
        if (e.which == 13) {
          $("#send").click(); 
          return false; 
        } 
      });

    });
  </script>

</head>
<body>

  <div class="oj-flex" id="outer-profile">
    <div id="profile" class="oj-flex-item oj-sm-10 oj-md-6 oj-lg-4"> 
      <div class="oj-flex">           
        <div class="oj-flex-item oj-sm-2">
        </div>
        <div class="oj-flex-item oj-sm-8" role="img">
          <img src="<?php echo $user->image_filename; ?>" width="168px" height="168px">
        </div>            
        <div class="oj-flex-item oj-sm-2">
        </div>
      </div>
      <div class="oj-flex">
        <div class="oj-flex-item oj-sm-3 oj-md-3 oj-lg-3">
        </div>
        <div class="oj-flex-item oj-sm-6 oj-md-6 oj-lg-6">
          <p><h1 class="text" style="font-weight: medium;"><strong><?php echo $user->name; ?></strong></h1></p>
          <p style="margin-top: 0%;"><h2 class="text" style="color: #000000;"><strong>@<?php echo $user->username; ?></strong></h2></p>
          <br>
          <p><h4 class="text">Problem Solver | Student at University of Ibadan</h4></p>
        </div>
        <div class="oj-flex-item oj-sm-3 oj-md-3 oj-lg-3">
        </div>
      </div>
    </div>
  </div>


  <div class="oj-flex hidden" id="outer-chat">
    <div id="chat" class="oj-flex-item oj-sm-10 oj-md-6 oj-lg-4"> 
      <div id="chat-area">
        <table>
          <tr><td>
            <div class="bot-bubble">
              <p>Hi there!</p>
            </div>
          </tr></td>
          <tr><td>
            <div class="bot-bubble">
              <p>My name is Bot</p>
            </div>
          </tr></td>
          <tr><td>
            <div class="bot-bubble">
              <p>Ask me a question or teach me something new by entering the question and answer in this format: train#your-question#your-answer#training-password</p>
            </div>
          </tr></td>
          
        </table>
      </div>
      <div id="input-area"> 
        <div class="oj-flex">
            <input name="question" id="request" placeholder="Ask a question" class="oj-padding-horizontal oj-flex-item oj-sm-9 oj-md-9 oj-lg-9"  type="text" style="background: white;" autocomplete="off" autofocus>
            <button name="submit" id="send" class="oj-flex-item oj-sm-2 oj-md-2 oj-lg-2" ><i class="fa fa-paper-plane"></i></button> 
        </div>
      </div>
    </div>
  </div>

  <div class="oj-flex">
    <div class="oj-flex-item oj-sm-6 oj-md-4 oj-lg-2" id="toggle-visibility">
      <h4 class="text white" id="toggle-text">TEST BOT</h4>
    </div>
  </div>

</body>
</html>