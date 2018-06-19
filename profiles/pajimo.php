<?php
session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = preg_replace("([?.!])", "", $data);
        $data = preg_replace("(['])", "\'", $data);
        return $data;
    }
    require '../../config.php';
    
  $conn = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD,DB_DATABASE );
    
    if(!$conn){
        die('Unable to connect');
    }
    $question = $_POST['message'];
    $pos = strpos($question, 'train:');
    if($pos === false){
        $sql = "SELECT answer FROM chatbot WHERE question like '$question' ";
        $query = $conn->query($sql);
        if($query){
            echo json_encode([
                'results'=> $query->fetch_all()
            ]);
            return;
        }
    }else{
        $trainer = substr($question,6 );
        $data = explode('#', $trainer);
        $data[0] = trim($data[0]);
        $data[1] = trim($data[1]);
        $data[2] = trim($data[2]);
        if($data[2] == 'password'){
            $sql = "INSERT INTO chatbot (question, answer)
            VALUES ('$data[0]', '$data[1]')";
            $query = $conn->query($sql);
            if($query){
                echo json_encode([
                    'results'=> 'Successfully trained'
                ]);
                return;
            }else{
                echo json_encode([
                    'results'=> 'Training error'
                ]);
                return;
            }
            
        }else{
            echo json_encode([
                'results'=> 'Wrong Password'
            ]);
            return;
        }
        
    }
    
    echo json_encode([
        'results'=>  'Good to go'
    ]);
    
return ;
}
if (!defined('DB_USER')){
            
  require "../config.php";
}
try {
  $conn = new PDO("mysql:host=". DB_HOST. ";dbname=". DB_DATABASE , DB_USER, DB_PASSWORD);
} catch (PDOException $pe) {
  die("Could not connect to the database " . DB_DATABASE . ": " . $pe->getMessage());
}
 global $conn;
 try {
  $sql = 'SELECT * FROM secret_word LIMIT 1';
  $q = $conn->query($sql);
  $q->setFetchMode(PDO::FETCH_ASSOC);
  $data = $q->fetch();
  $secret_word = $data['secret_word'];
} catch (PDOException $e) {
  throw $e;
}    
try {
  $sql = "SELECT * FROM interns_data WHERE `username` = 'pajimo' LIMIT 1";
  $q = $conn->query($sql);
  $q->setFetchMode(PDO::FETCH_ASSOC);
  $my_data = $q->fetch();
} catch (PDOException $e) {
  throw $e;
}?>
<?php if ($_SERVER['REQUEST_METHOD'] == "GET") {?>
   
<!DOCTYPE html>

  <style type="text/css">
    #globalBody{
      width: 70%;
      margin: 0 auto;
    }
    #begin{
      background-image:url(https://images.unsplash.com/photo-1499428665502-503f6c608263);
  background-size: cover;
  background-position: center;
    }
    #first_lare{
      padding-top: 15%;
  padding-left: 25%;
  padding-right: 25%;
  padding-bottom: 10%;
  text-align: center;
  font-size: 24px;
  text-transform: uppercase;
  font-weight: 700;
    }
    .oj-flex-item{
      font-size: 20px;
      color: grey
    }
    .oj-flex-items-pad{
      text-align: center;
    }
  </style>
<html lang="en-us">
  <head>
    <title>Olamide</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="viewport-fit=cover, width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="apple-mobile-web-app-title" content="Oracle JET">
    

    <!-- This is the main css file for the default Alta theme -->
    <!-- injector:theme -->
    
    <!-- endinjector -->
    <!-- This contains icon fonts used by the starter template -->
    <link rel="stylesheet" href="css/demo-alta-site-min.css" type="text/css"/>

    <!-- This is where you would add any app specific styling -->
    <link rel="stylesheet" href="css/app.css" type="text/css"/>

  </head>
  <body class="oj-web-applayout-body">
    <div id="globalBody" class="oj-web-applayout-page">
      <!--
         ** Oracle JET V5.0.0 web application header pattern.
         ** Please see the demos under Cookbook/Patterns/App Shell: Web
         ** and the CSS documentation under Support/API Docs/Non-Component Styling
         ** on the JET website for more information on how to use this pattern.
      -->
      <header role="banner" class="oj-web-applayout-header" style="background-color: darkblue">
        <div class="oj-web-applayout-max-width oj-flex-bar oj-sm-align-items-center">
          <div class="oj-flex-bar-middle oj-sm-align-items-baseline">
            
            <h1 class="oj-sm-only-hide oj-web-applayout-header-title" title="Application Name" style="font-weight: bold; font-size: 25px">Olamide's Portfoilio</h1>
          </div>
          <div class="oj-flex-bar-end">
            <!-- Responsive Toolbar -->
            <oj-toolbar>
              <oj-menu-button id="userMenu" display="[[smScreen() ? 'icons' : 'all']]" chroming="half">
                <span style="font-weight: bold">Contact</span>
                <span slot="endIcon" :class="[[{'oj-icon demo-appheader-avatar': smScreen(), 'oj-component-icon oj-button-menu-dropdown-icon': !smScreen()}]]"></span>
                <oj-menu id="menu1" slot="menu" style="display:none">
                  <oj-option id="pref" value="pref"><a href="https://medium.com/olamidefaniyan" target ="_blank">Medium</a></oj-option>
                  <oj-option id="help" value="help"><a href="https://twitter.com/Farry_ola" style="padding-top: 0px;" target ="_blank">Twitter</a></oj-option>
                  <oj-option id="about" value="about"><a href="https://instagram.com/olamidefaniyan_" target ="_blank">Instagram</a></oj-option>
                  <oj-option id="out" value="out"><a href="https://github.com/Pajimo" target ="_blank">Github</a></oj-option>
                </oj-menu>
              </oj-menu-button>
            </oj-toolbar>
          </div>
        </div>
      </header>
      <div role="main" class="oj-web-applayout-max-width oj-web-applayout-content" style="padding-top: 0">
        <div id="begin">
          <div id="first_lare">
            <span role="img" title="Olamide" alt="Olamide"><img class="img-responsive" id="bobo" src="https://avatars3.githubusercontent.com/u/20623732?s=460&v=4" style="width: 300px; height: 300px; border-radius: 100px;"/></span>
            <h1 style="color: blue; font-weight: bold">HI, I'M Olamide Faniyan<br/> A Software Developer/ Designer</h1>
          </div>
          <h4 align="center" style="color: grey; font-weight: bold; font-size: 25px">My Skills</h4>
          <div class="demo-flex-display oj-flex-items-pad">
            <div class="oj-flex">
              <div class="oj-flex-item">Html/Css</div>
              <div class="oj-flex-item">PHP</div>
              <div class="oj-flex-item">Javascript/jquery</div>
              <div class="oj-flex-item">Bootstrap</div>
            </div>
            
            <div class="oj-flex"
                 data-bind="css: {'oj-sm-flex-wrap-nowrap': nowrap()}">
              <div class="oj-flex-item">Figma</div>
              <div class="oj-flex-item">Git</div>
              <div class="oj-flex-item">Oraclejet</div>
              <div class="oj-flex-item">Node.js</div>
            </div>
          </div>
        
        </div>
        <style type="text/css">
          .pull-me{
    -webkit-box-shadow: 0 0 8px #FFD700;
    -moz-box-shadow: 0 0 8px #FFD700;
    box-shadow: 0 0 8px #FFD700;
    cursor:pointer;
}
.panel {
  background: #ffffbd;
    background-size:90% 90%;
    height:300px;
  display:none;
    font-family:garamond,times-new-roman,serif;
}
.panel p{
    
}
.slide {
  margin:0;
  padding:0;
  border-top:solid 2px #cc0000;
  text-align: center
}
.pull-me {
  display:block;
    position:relative;
    right:-25px;
    width:150px;
    height:20px;
  font-family:arial,sans-serif;
    font-size:14px;
  color:#ffffff;
    background:#cc0000;
  text-decoration:none;
    -moz-border-bottom-left-radius:5px;
    -moz-border-bottom-right-radius:5px;
    border-bottom-left-radius:5px;
    border-bottom-right-radius:5px;
}
.pull-me p {
    text-align:center;
}
#child4 {
    position: absolute;
    top: 80px;
}
            
            
        #chat-output {
            background: #0fb0df;
            color: white;
        }
        #chat-output .bot-message {
            text-align: right;
        }
        #chat-output .bot-message {
            background: #eee;
        }
        </style>
         
         <div style="width: 400px" id="child4" class = "bot round-corners">
          <div class="panel inner">
              <div>
                <p style="overflow: scroll; height: 250px; width: 100%; margin: 0px;" id="chat-output"></p>
                <input type="text" name="" style="width: 80%; height: 24px;" id="user-input" name="newrequest"Type" placeholder="type here">
                <button style="position: absolute; width: 19%; height: 26px" id="send">Send</button>
              </div>
          </div>
          <p class="slide"><div class="pull-me" style="text-align: center">Chat with me :)</div></p>
        </div>
  
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
function newElementsForUser(userRequest) {
   var chatArea = $("#chatarea");
   var messageElement = "<div class='form-control form-control2 text-right'>" + userRequest + "</div>";
   chatArea.html(chatArea.html() + messageElement);
   chatArea.scrollTop($("#chatarea")[0].scrollHeight);
}


function newElementsForBot(botResponse) {
   var chatArea = $("#chatarea");
   if (botResponse.response.resultType == "find") {
      var messageElement = "<div class='form-control form-control2 text-left'>Intern ID => " + botResponse.response.users.intern_id + "<br/>Name => " + botResponse.response.users.name + "<br/>Intern Username => " + botResponse.response.users.username + "<br/>Intern Profile Picture => " + botResponse.response.users.image_filename + "</div>";
   } else { 
      var messageElement = "<div class='form-control form-control2 text-left'>" + botResponse.response + "</div>";
   }
   chatArea.html(chatArea.html() + messageElement);
   chatArea.scrollTop($("#chatarea")[0].scrollHeight);
}
             
             document.body.addEventListener('keyup', function (e) {
   if (e.keyCode == "13") {
      $("#send").click();
   }
});

$(document).ready(function() {
   response = {"response" : "<p style='color:red'>bot</p> " + "Hello. am a bot and you can chat with me a little.<br/>Train me by(train: question # answer # password)"};
   newElementsForBot(response);
});
   
   $(document).ready(function() {

  $(".pull-me").click(function() {

    $(".panel").slideToggle('slow')
  });


});

$(document).ready(function chargeBot() {
   $("#send").click(function () {
      var message = $("#message").val();
      newElementsForUser(message);
      if (message == "" || message == null) {
         response = { 'response':  "<p style='color:red'>bot</p> " + ' Please type something' };
         newElementsForBot(response);
      }else if (message.includes('open:')) {
         url = message.split('open:');
         window.open('http://' + url[1]);
      } else if (message.includes("randomquote") || message.includes("random quotes")) {
         $.getJSON("https://talaikis.com/api/quotes/random/", function (json) {
            response = json['quote'] + '<br/> Author : ' + json['author'];
            botResponse = { 'response': "<p style='color:red'>bot</p> " + response };
            newElementsForBot(botResponse);
         });
         $("#chatarea").scrollTop($("#chatarea")[0].scrollHeight);
      } else if (message.includes("aboutbot") || message.includes("about bot") || message.includes("aboutbot:")) {
         response = { 'response': "<p style='color:red'>bot</p> " + 'Version 4.0' };
         newElementsForBot(response);
      } else {
         $.ajax({
            url: "profiles/pajimo.php",
            type: "POST",
            data: { new_request: message },
            dataType: "json",
            success: function (botResponse) {
               newElementsForBot(botResponse);
            }
         });
      }
      $("#message").val("");
   });
});

</script>
            
            
<script>
    window.addEventListener("keydown", function(e){
            if(e.keyCode ==13){
                if(document.querySelector("#user-input").value.trim()==""||document.querySelector("#user-input").value==null||document.querySelector("#user-input").value==undefined){
                    //console.log("empty box");
                }else{
                    //this.console.log("Unempty");
                    chat();
                }
            }
        });
    function chat() {
        var message = document.querySelector('#user-input');
        var chatOutput = document.querySelector('#chat-output');
        var pp = document.createElement('div');
        var inner = document.createElement('div');
        pp.classList = 'user-message';
        inner.classList = 'message';
        pp.append(inner);
        inner.innerHTML = message.value;
        //console.log(message.value)
        chatOutput.appendChild(pp);
        //return
        // alert(message.value);
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
            console.log(xhttp.responseText);
            var result = JSON.parse(xhttp.responseText);
            //<div class='bot-message'><div class='message'>${message}</div></div>
            message.value = '';
            var p = document.createElement('div');
            var inn = document.createElement('div');
            p.classList = 'bot-message';
            inn.classList = 'message';
            p.append(inn);
            //console.log(result.results.length);
            
            if(result.results.length === 0){
                //alert('hello');
                inn.innerHTML = 'Not in database. please train me';
                chatOutput.append(p);
                return;
            }else{
                //console.log(typeof(result.results)) 
                if(typeof(result.results) == 'object' ){
                    var res = Math.floor(Math.random() * result.results.length);
                    
                    inn.innerHTML = result.results[res];
                    chatOutput.append(p)
                }else{
                    var res = Math.floor(Math.random() * result.results.length);
                    inn.innerHTML = result.results;
                    chatOutput.append(p)
                }   
            }
            
            
            
            }
        };
        
        
        xhttp.open("POST", "/profiles/pajimo", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("message="+message.value);
        $('#chat-output').animate({
                scrollTop: chatOutput.scrollHeight,
                scrollLeft: 0
            }, 500);
    }
</script>

</html>

<?php }?>
