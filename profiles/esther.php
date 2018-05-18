<!-- php code -->
<?php
error_reporting(0);
if (empty($_SESSION)) {
    session_start();
}
// if (file_exists('config.php')) {
//     include 'config.php';
// }
// else if (file_exists('../config.php')) {
//     include '../config.php';
// }
// else if (file_exists('../../config.php')) {
//     include '../../config.php';
// }
if(!defined('DB_USER')){
    require "../config.php";
    try {
        define('DB_CHARSET', 'utf8mb4');
        $dsn = 'mysql:host='.DB_HOST.';dbname='.DB_DATABASE.';charset='.DB_CHARSET;
        $opt = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ];
        $conn = new PDO($dsn, DB_USER, DB_PASSWORD, $opt);
    } catch (PDOException $pe) {
        die("Could not connect to the database " . DB_DATABASE . ": " . $pe->getMessage());
    }
}
$intern_details_query = $conn->query(
    "SELECT     interns_data.name,
                interns_data.username,
                interns_data.image_filename
    FROM        interns_data
    WHERE       interns_data.username = 'esther' LIMIT 1");
$secret_word_query = $conn->query(
    "SELECT     secret_word.secret_word
    FROM        secret_word LIMIT 1");
$intern_detail = $intern_details_query->fetch();
$secret_word = $secret_word_query->fetch();
// Secret Word
$secret_word = $secret_word['secret_word'];
// Profile Details
$name = $intern_detail['name'];
$username = $intern_detail['username'];
$filename = $intern_detail['image_filename'];
$padding = '50px 80px';
$home_url = '';
if (!stristr($_SERVER['REQUEST_URI'], 'id')) {
    $padding = '80px 70px';
    $home_url = '../';
}
?>

<?php if (empty($_POST['bot_query']) and empty($_POST['bot_train']) and empty($_POST['bot_command'])): ?>

<style media="screen">
#hero{
  background-image:url("https://res.cloudinary.com/esther/image/upload/v1525868384/pattern-3160023_1920.jpg");
  background-size:cover;
  position:relative;
  height:100vh;
}

.header{
  position:absolute;
  bottom: -5%;
  text-align:center;
  width:100%;
  color:#fff;
  font-size:12px;
  -ms-transform: translate(0,-50%); /* IE 9 */
    -webkit-transform: translate(0,-50%); /* Safari */
    transform: translate(0,-50%);

}

#content{
  padding:100px 50px;
  text-align:center;
  width:80%;
  margin:0px auto;
}

h1, h2 {
    font-weight: 400;
    margin: 0px 0px 5px 0px;
}
h1 {
    font-size: 24px;
}
h2 {
    font-size: 16px;
}
p {
    margin: 0px;
}
.profile-card {
	background: #FFB300;
	width: 56px;
	height: 56px;
	position: absolute;
	left: 50%;
	top: 50%;
    z-index: 2;
	overflow: hidden;
    opacity: 0;
    margin-top: 70px;
	-webkit-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
	-webkit-border-radius: 50%;
	border-radius: 50%;
	-webkit-box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16), 0px 3px 6px rgba(0, 0, 0, 0.23);
	box-shadow: 0px 3px 6px rgba(0 ,0, 0, 0.16), 0px 3px 6px rgba(0, 0, 0, 0.23);
    -webkit-animation: init 0.5s 0.2s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards, moveDown 1s 0.8s cubic-bezier(0.6, -0.28, 0.735, 0.045) forwards, moveUp 1s 1.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards, materia_landscape 0.5s 2.7s cubic-bezier(0.86, 0, 0.07, 1) forwards;
    animation: init 0.5s 0.2s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards, moveDown 1s 0.8s cubic-bezier(0.6, -0.28, 0.735, 0.045) forwards, moveUp 1s 1.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards, materia_landscape 0.5s 2.7s cubic-bezier(0.86, 0, 0.07, 1) forwards;
}
.profile-card header {
    width: 179px;
    height: 280px;
    padding: 40px 20px 30px 20px;
    display: inline-block;
    float: left;
    border-right: 2px dashed #EEEEEE;
	background: #FFFFFF;
    color: #000000;
    margin-top: 50px;
    opacity: 0;
    text-align: center;
    -webkit-animation: moveIn 1s 3.1s ease forwards;
    animation: moveIn 1s 3.1s ease forwards;
}
.profile-card header h1 {
    color: #FF5722;
}
body {
    background-size: 100% auto;
    background-color: #f2f3f5;
    overflow-x: hidden;
}
.container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
    max-width: none;
}
footer {
    padding: 50px 0 65px;
    position: absolute;
    display: block;
    top: 100%;
    width: 100%;
    background-color: #FFFFFF;
}
.profile-card header a {
    display: inline-block;
    text-align: center;
    position: relative;
    margin: 25px 30px;
}
.profile-card header a:after {
	position: absolute;
    content: "";
	bottom: 3px;
	right: 3px;
	width: 20px;
	height: 20px;
    border: 4px solid #FFFFFF;
    -webkit-transform: scale(0);
    transform: scale(0);
    background: -webkit-linear-gradient(top, #2196F3 0%, #2196F3 50%, #FFC107 50%, #FFC107 100%);
    background: linear-gradient(#2196F3 0%, #2196F3 50%, #FFC107 50%, #FFC107 100%);
    -webkit-border-radius: 50%;
    border-radius: 50%;
    -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
    -webkit-animation: scaleIn 0.3s 3.5s ease forwards;
    animation: scaleIn 0.3s 3.5s ease forwards;
}
.profile-card header a > img {
    width: 150px;
    height: 150px;
    max-width: 100%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
    -webkit-transition: -webkit-box-shadow 0.3s ease;
    transition: box-shadow 0.3s ease;
    -webkit-box-shadow: 0px 0px 0px 8px rgba(0, 0, 0, 0.06);
    box-shadow: 0px 0px 0px 8px rgba(0, 0, 0, 0.06);
}
.profile-card header a:hover > img {
    -webkit-box-shadow: 0px 0px 0px 12px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 0px 0px 12px rgba(0, 0, 0, 0.1);
}
.profile-card .profile-bio {
    width: 175px;
    height: 180px;
    display: inline-block;
    float: right;
    padding: 50px 20px 30px 20px;
	background: #FFFFFF;
    color: #333333;
    margin-top: 50px;
    text-align: center;
    opacity: 0;
    -webkit-animation: moveIn 1s 3.1s ease forwards;
    animation: moveIn 1s 3.1s ease forwards;
}
.profile-social-links {
    width: 218px;
    display: inline-block;
    float: right;
    margin: 0px;
    padding: 15px 20px;
	background: #FFFFFF;
    margin-top: 50px;
    text-align: center;
    opacity: 0;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-animation: moveIn 1s 3.1s ease forwards;
    animation: moveIn 1s 3.1s ease forwards;
}
.profile-social-links li {
    list-style: none;
    margin: -5px 0px 0px 0px;
    padding: 0px;
    float: left;
    width: 33.3%;
    text-align: center;
}
.profile-social-links li a {
    display: inline-block;
    /* width: 24px;
    height: 24px; */
    padding: 6px;
    position: relative;
    overflow: hidden!important;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}
.profile-social-links li a img {
    position: relative;
    z-index: 1;
}
.profile-social-links li a:before {
    display: block;
    content: "";
    background: rgba(0, 0, 0, 0.3);
    position: absolute;
    left: 0px;
    top: 0px;
    width: 36px;
    height: 36px;
    opacity: 1;
    -webkit-transition: transform 0.4s ease, opacity 1s ease-out;
    transition: transform 0.4s ease, opacity 1s ease-out;
    -webkit-transform: scale3d(0, 0, 1);
    transform: scale3d(0, 0, 1);
    -webkit-border-radius: 50%;
    border-radius: 50%;
}
.profile-social-links li a:hover:before {
    -webkit-animation: ripple 1s ease forwards;
    animation: ripple 1s ease forwards;
}
.profile-social-links li a img,
.profile-social-links li a svg {
    width: 24px;
}


@media screen and (min-aspect-ratio: 4/3) {
    body {
        background-size: 100% auto;
    }
    body:before {
        width: 0px;
    }
    @-webkit-keyframes puff {
        0% {
            top: 100%;
            width: 0px;
            padding-bottom: 0px;
        }
    	100% {
            top: 50%;
            width: 100%;
            padding-bottom: 100%;
        }
    }
    @keyframes puff {
        0% {
            top: 100%;
            width: 0px;
            padding-bottom: 0px;
        }
    	100% {
            top: 50%;
            width: 100%;
            padding-bottom: 100%;
        }
    }
}
@media screen and (min-height: 480px) {
	.profile-card {
		-webkit-animation: init 0.5s 0.2s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards, moveDown 1s 0.8s cubic-bezier(0.6, -0.28, 0.735, 0.045) forwards, moveUp 1s 1.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards, materia_portrait 0.5s 2.7s cubic-bezier(0.86, 0, 0.07, 1) forwards;
		animation: init 0.5s 0.2s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards, moveDown 1s 0.8s cubic-bezier(0.6, -0.28, 0.735, 0.045) forwards, moveUp 1s 1.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards, materia_portrait 0.5s 2.7s cubic-bezier(0.86, 0, 0.07, 1) forwards;
	}
	.profile-card header {
        width: auto;
        height: auto;
        padding: 30px 20px;
        display: block;
        float: none;
        border-right: none;
    }
    .profile-card .profile-bio {
        width: auto;
        height: auto;
        padding: 15px 20px 30px 20px;
        display: block;
        float: none;
    }
    .profile-social-links {
        width: 100%;
        display: block;
        float: none;
    }
}
@media screen and (min-aspect-ratio: 4/3) {
    body {
        background-size: 100% auto;
    }
    body:before {
        width: 0px;
		-webkit-animation: puff_landscape 0.5s 1.8s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards, borderRadius 0.2s 2.3s linear forwards;
		animation: puff_landscape 0.5s 1.8s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards, borderRadius 0.2s 2.3s linear forwards;
	}
}
@-webkit-keyframes init {
    0% {
    	width: 0px;
    	height: 0px;
    }
	100% {
        width: 56px;
        height: 56px;
        margin-top: 0px;
        opacity: 1;
    }
}
@keyframes init {
    0% {
    	width: 0px;
    	height: 0px;
    }
	100% {
        width: 56px;
        height: 56px;
        margin-top: 0px;
        opacity: 1;
    }
}
@-webkit-keyframes puff_portrait {
    0% {
        top: 100%;
        height: 0px;
        padding: 0px;
    }
	100% {
        top: 50%;
        height: 100%;
        padding: 0px 100%;
    }
}
@keyframes puff_portrait {
    0% {
        top: 100%;
        height: 0px;
        padding: 0px;
    }
	100% {
        top: 50%;
        height: 100%;
        padding: 0px 100%;
    }
}
@-webkit-keyframes puff_landscape {
	0% {
		top: 100%;
		width: 0px;
		padding-bottom: 0px;
	}
	100% {
		top: 50%;
		width: 100%;
		padding-bottom: 100%;
	}
}
@keyframes puff_landscape {
	0% {
		top: 100%;
		width: 0px;
		padding-bottom: 0px;
	}
	100% {
		top: 50%;
		width: 100%;
		padding-bottom: 100%;
	}
}
@-webkit-keyframes borderRadius {
    0% {
        -webkit-border-radius: 50%;
    }
	100% {
        -webkit-border-radius: 0px;
    }
}
@keyframes borderRadius {
    0% {
        -webkit-border-radius: 50%;
    }
	100% {
        border-radius: 0px;
    }
}
@-webkit-keyframes moveDown {
    0% {
   	    top: 50%;
    }
	50% {
	   top: 40%;
    }
    100% {
       top: 100%;
    }
}
@keyframes moveDown {
    0% {
   	    top: 50%;
    }
	50% {
	   top: 40%;
    }
    100% {
       top: 100%;
    }
}
@-webkit-keyframes moveUp {
    0% {
        background: #FFB300;
        top: 100%;
    }
	50% {
	   top: 40%;
    }
    100% {
       top: 50%;
       background: #E0E0E0;
    }
}
@keyframes moveUp {
    0% {
        background: #FFB300;
        top: 100%;
    }
	50% {
	   top: 40%;
    }
    100% {
       top: 50%;
       background: #E0E0E0;
    }
}
@-webkit-keyframes materia_landscape {
    0% {
        background: #E0E0E0;
    }
    50% {
        -webkit-border-radius: 4px;
    }
    100% {
        width: 440px;
        height: 280px;
        background: #FFFFFF;
        -webkit-border-radius: 4px;
    }
}
@keyframes materia_landscape {
    0% {
        background: #E0E0E0;
    }
    50% {
        border-radius: 4px;
    }
    100% {
        width: 440px;
        height: 280px;
        background: #FFFFFF;
        border-radius: 4px;
    }
}
@-webkit-keyframes materia_portrait {
	0% {
		background: #E0E0E0;
	}
	50% {
		-webkit-border-radius: 4px;
	}
	100% {
		width: 280px;
		height: 440px;
		background: #FFFFFF;
		-webkit-border-radius: 4px;
	}
}
@keyframes materia_portrait {
	0% {
		background: #E0E0E0;
	}
	50% {
		border-radius: 4px;
	}
	100% {
		width: 280px;
		height: 440px;
		background: #FFFFFF;
		border-radius: 4px;
	}
}
@-webkit-keyframes moveIn {
    0% {
        margin-top: 50px;
        opacity: 0;
    }
	100% {
        opacity: 1;
        margin-top: -20px;
    }
}
@keyframes moveIn {
    0% {
        margin-top: 50px;
        opacity: 0;
    }
	100% {
        opacity: 1;
        margin-top: -20px;
    }
}
@-webkit-keyframes scaleIn {
    0% {
        -webkit-transform: scale(0);
    }
	100% {
        -webkit-transform: scale(1);
    }
}
@keyframes scaleIn {
    0% {
        transform: scale(0);
    }
	100% {
        transform: scale(1);
    }
}
@-webkit-keyframes ripple {
    0% {
        transform: scale3d(0, 0, 0);
    }
    50%, 100% {
        -webkit-transform: scale3d(1, 1, 1);
    }
    100% {
        opacity: 0;
    }
}
@keyframes ripple {
    0% {
        transform: scale3d(0, 0, 0);
    }
    50%, 100% {
        transform: scale3d(1, 1, 1);
    }
    100% {
        opacity: 0;
    }
}
  /** Chat Bot CSS **/

  .chatbot{
    width: 300px;
    min-width: 350px;
    height: 400px;
    background: #fff;
    /* padding: 8px; */
    margin: 10px auto;
    float: right;
    margin-top: 0px;
    box-shadow: 0 3px #ccc;
  }

  .chatbot-menu-header {
    background-color: #007BFF;
    padding: 7px 25px;
    margin: -8px 0 0 -8px;
    color: #FFFFFF;
    height: 40px;
  }

  .chatbot-close {
    display: inline-block;
    margin-left: 20px;
    margin-top: 2.5px;
    }
  .fa-close, .fa-question-circle {
    font-size: 23px;
    padding-left: 85px
  }
  .chatbot-menu-header span {
    font-weight: bold;
  }
  .chatbot-menu-header a {
    color: #FFFFFF;
  }
  div.hng-logo {
    display: inline-block;
    font-size: 23px;
    font-weight: bold;
  }

  span{
    color: #000;
  }

  .chatlogs{
    padding: 10px;
    width: 100%;
    height: 300px;
    overflow-x: hidden;
    overflow-y: scroll;
  }

  .chatlogs::-webkit-scrollbar{
    width: 10px;
  }

  .chatlogs::-webkit-scrollbar-thumb{
    border-radius: 5 px;
    background: rgba(0,0,0,.1);
  }

  .chat{
    display: flex;
    flex-flow: row wrap;
    align-items: flex-start;
    margin-bottom: 10px;
  }

  .chat .user-photo{
    width: 30px;
    height: 30px;
    background: #ccc;
    border-radius: 50%;
    overflow: hidden;
  }

  .chat .user-photo img{
    width: 100%;

  }

  .chat .chat-message{
    width: 85%;
    padding: 15px;
    margin: 5p 10px 0;
    border-radius: 10px;
    color: #fff;
    font-size: 14px;
    text-align: justify;
  }

  .friend .chat-message{
    background: #1adda4;
  }

  .self .chat-message{
    background: #1ddced;
    order: -1;
  }


  .chat-form{
    display: flex;
    align-items: flex-start;
  }

  .chat-form textarea{
    background: #fbfbfb;
    width: 75%;
    height: 43px;
    border: 2px solid #eee;
    border-radius: 3px;
    resize: none;
    padding: 10px;
    font-size: 16px;
    color: #333;
  }

  .chat-form textarea:focus{
    background: #fff;
  }

  .chat-form textarea::-webkit-scrollbar{
    width: 10px;
  }

  .chat-form textarea::-webkit-scrollbar-thumb{
    border-radius: 5 px;
    background: rgba(0,0,0,.1);
  }

  .chat-form button{
    background: #007bff;
    padding: 5px 15px;
    font-size: 20px;
    color: #fff;
    border: none;
    margin: 0 10px;
    border-radius: 3px;
    box-shadow: 0 3px 0 #0eb21c1;
    cursor: pointer;

    -webkit-transition:background .2s ease;
    -moz-transition: background .2s ease;
    -o-transition: background .2s ease;
  }

.chat-trigger {
  position: absolute;
  bottom: 2em;
  right: 2em;
  background-color: #ee5327;
  border-radius: 5%;
  padding: .5em .7em;
  box-shadow: 2px 2px 1px #222;
  border-width: 0px;
  color: #222;
}
.chat-trigger:hover {
  background-color: #222;
  color: white;
}

.chat-trigger {
  position: fixed;
  bottom: 0em;
  right: 0em;
  margin-top: 2em;
}

.hidden {
  visibility: hidden;
}

</style>

<div id="hero">
    <div class="header">
      <aside class="profile-card">

      	<header>

      		<!-- here’s the avatar -->
      		<a href="#">
      			<img src="https://res.cloudinary.com/esther/image/upload/v1523975518/mine.jpg" />
      		</a>

      		<!-- the username -->
      		<h1>Esther Itolima</h1>

      		<!-- and role or location -->
      		<h2>Frontend Web Developer</h2>

      	</header>

      	<!-- bit of a bio; who are you? -->
      	<div class="profile-bio">

      		<p>Am a tech enthusiasts and also a frontend web developer</p>


      	</div>

      	<!-- some social links to show off -->
      	<ul class="profile-social-links">

      		<!-- twitter - el clásico  -->
      		<li>
      			<a href="https://www.facebook.com/itolimaesther"><img src="https://res.cloudinary.com/esther/image/upload/v1523978383/facebook.png"></a>
      		</li>

      		<!-- envato – use this one to link to your marketplace profile -->
      		<li>
      			<a href="https://twitter.com/Itolimaesther"><img src="https://res.cloudinary.com/esther/image/upload/v1523978402/twitter.png"></a>
      		</li>

      		<!-- codepen - your codepen profile-->
      		<li>
      			<a href="https://www.linkedin.com/in/itolimaesther/"><img src="https://res.cloudinary.com/esther/image/upload/v1523978414/linkedin.png" ></a>
      		</li>

      		<!-- add or remove social profiles as you see fit -->

      	</ul>
        <button  class="chat-trigger btn btn-secondary" id="chat-trigger">Lets Chat</button>

      </aside>

      <!-- Chat Bot Interfce -->

       <div class="chatbot hidden0" id="chatbot">
         <div class='chatbot-menu-header'>
                         <div class="hng-logo"><span>Esty Chatbot</span>
                         <a href="#" class="pull-right chatbot-close"><i class="fa fa-close" id="closechat"></i></a>
                     </div>
        <div class="chatlogs">
          <p class="general-message">Hi there, I am Esty, a bot created by Kelvin Gobo.</p>
          <p class="general-message">Am excited to meet you and also to answer your quetions</p>
          <p class="general-message">Type "about HNG internship" without the quotes to know about the HNG internship</p>
          </div>
          <div class="chat-form">
            <input type="text" name="chatbot-input" id="" class="form-control" autofocus>
            <button class="chatbot-send">Send</button>
          </div>
          </div>
    </div>
  </div>
  <!-- Javascript code -->
  <script>
      window.addEventListener('DOMContentLoaded', function() {
          (function($) {
              $(document).ready(function() {
                $( "#chat-trigger" ).click(function() {
                  $("#chatbot").removeClass("hidden");
                });
              });
              $(document).ready(function() {
                $( "#closechat" ).click(function() {
                  $("#chatbot").addClass("hidden");
                });
              });
              // Chatbot send button handler
              $(document).on('click', '.chatbot-send', function(e){
                  e.preventDefault();
                  bot_query = 'bot_query';
                  message_string = $('input[name="chatbot-input"]').val();
                  password = true;
                  aboutbot = false;
                  $('input[name="chatbot-input"]').val('');
                  if (message_string.trim() === '') {
                      message_string = '';
                      payload = {'response':'empty', 'message':'Sorry, you cannot send an empty message.'};
                      $('.chatlogs').append('<div class="chat friend"><div class="user-photo"><img src="https://res.cloudinary.com/esther/image/upload/v1525048014/woman-avatar.png"></div><p class="chat-message">'+payload.message+'</p></div></div>');
                  }
                  else {
                      message_string = message_string.trim();
                      payload = {'response':'success', 'message':message_string};
                      $('.chatlogs').append('<div class="chat friend"><div class="user-photo"><img src="https://res.cloudinary.com/esther/image/upload/v1525082494/bald-male-avatar.png"></div><p class="chat-message">'+payload.message+'</p></div></div>');
                  }
                  if (message_string.split(':')[0].trim() === 'train') {
                      bot_query = 'bot_train';
                      if (!message_string.includes('# password') && !message_string.includes('#password')) {
                          password = false;
                          $('.chatbot-menu-content').append('<div class="chat friend"><div class="user-photo"><img src="https://res.cloudinary.com/esther/image/upload/v1525048014/woman-avatar.png"></div><p class="chat-message">credentials are required</p></div></div>');
                      }
                      else if (message_string.trim().slice(-8) !== 'password') {
                          password = false;
                          $('.chatbot-menu-content').append('<div class="chatbot-message-bot" id="last-message">Sorry, I do not recognize this password, try again.</p></div>');
                      }
                      else {
                          array_words = message_string.trim().split(':');
                          parse_colon_delimiter = array_words[0].trim() + ': ' + array_words[1].trim();
                          parse_hash_delimiter = parse_colon_delimiter.split('#');
                          payload.message = parse_hash_delimiter[0].trim() + ' # ' + parse_hash_delimiter[1].trim();
                          console.log(payload.message);
                      }
                  }
                  else if (message_string.trim() === 'help') {
                      help_menu = $('.chatbot-message-bot:first').html();
                      $('.chatbot-menu-content').append('<div class="chatbot-message-bot" id="last-message">'+help_menu+'</p></div>');
                  }
                  else if (message_string.trim() === 'aboutbot') {
                      aboutbot = true;
                      version = "<div><p><span class='bot-command'>Locato v1.0</span></p></div> <div><p>Hi! I'm Locato</p><p>I want to help you with find distances between any two locations in Nigeria, eg distance between two addresses or cities, get the duration to move from one location to the other and also show you direction on map.</p></div>";
                      $('.chatbot-menu-content').append('<div class="chatbot-message-bot" id="last-message">'+version+'</div>');
                  }
                  else if (message_string.split(' : ').length === 2 && !message_string.includes('#')) {
                      bot_query = 'bot_command';
                  }
                  if (message_string.slice(0, 6) === 'train:') {
                      $('.chatbot-message-sender:last').addClass('chatbot-train-message');
                  }
                  content_height = $('.chatbot-menu-content').prop('scrollHeight');
                  $('.chatbot-menu-content').scrollTop(content_height);
                  url = './profiles/esther.php';
                  if (location.pathname.includes('esther.php')) {
                      url = '../profiles/esther.php'
                  }

                  // Use AJAX to query DB and look for matches to user's query
                  if(message_string !== '' && message_string.trim() !== 'help' && password && !aboutbot) {
                      $.ajax({
                          url: url,
                          data: bot_query+'='+payload.message,
                          type: 'POST',
                          dataType: 'JSON',
                          beforeSend: function() {
                              $('.chatbot-menu-content').append('<div class="chatbot-message-bot" id="last-message"><p>Give me some time, it takes some time for me to process...</p></div>');
                              content_height = $('.chatbot-menu-content').prop('scrollHeight');
                              $('.chatbot-menu-content').scrollTop(content_height);
                              $('.chatbot-send').attr('disable');
                          },
                          success: function(data){
                              console.log(data);
                              $('.chatbot-message-bot:last > p').html(data.message);
                              if (data.response === 'show_direction') {
                                  $('.chatbot-message-bot:last > p').html('Click on <a href="'+data.message+'" target="_blank">'+data.message+'</a> to view directions on map');
                              }
                              if (data.response === 'training_error') {
                                  training_menu = $('.training-menu').clone();
                                  $('.chatbot-message-bot:last').html(data.message);
                                  $('.chatbot-message-bot:last').append(training_menu);
                              }
                              $('.chatbot-send').removeAttr('disable');
                          }
                      });
                  }
              });
          })(jQuery);
      });
  </script>
<?php endif; ?>
<?php
// Check if there's a POST REQUEST from the bot
if (!empty($_POST['bot_query']) or !empty($_POST['bot_train']) or !empty($_POST['bot_command'])) {
    if (empty($conn)) {
        $response = ['response'=>'connection_error', 'message'=>"Sorry, I could not connect to the database, someone must have crashed it again."];
        echo json_encode($response);
        exit;
    }
    // Function that parses a given location string and concatenates it with '+'
    function parseLocation ($location_string) {
        $parsed_location_string = preg_replace("#[^a-zA-Z0-9/_|+ -]#", '', $location_string);
        $parsed_location_string = preg_replace("#[/_|+ -]+#", '+', $parsed_location_string);
        $parsed_location_string = trim($parsed_location_string, '+');
        return $parsed_location_string;
    }
    $url = "https://maps.googleapis.com/maps/api/distancematrix/json?origins=";
    $key = "AIzaSyCFtpq466EjoP-RImHD66upJV_OwjWL93k";
    if ($_POST['bot_query']) {
        $query_input = $_POST['bot_query'];
        // Check if query matches a distance request pattern
        if (preg_match('/(.+)(between|from)(.+)/', $query_input, $matches)) {
            $question = $matches[1];
            $question .= $matches[2];
            $query_input = trim($question);
        }

        // Search db for question and return a random answer if question exists
        $check_message_query = $conn->prepare(
        'SELECT     chatbot.answer,
                    chatbot.question
        FROM        chatbot
        WHERE       chatbot.question LIKE ?
        ORDER BY    RAND() LIMIT 1');
        $check_message_query->bindValue(1, "%$query_input%");
        $check_message_query->execute();
        $query_result = $check_message_query->fetch();
        // If query doesn't match any question
        if ($query_result === false) {
            $error_messages = ["That seems rather complex, it's quite embarrasing that I can't answer that now. I would like you to train me further, Pleeaaase!!! <br /> <br />", "I used to think I knew it all, but I don't. Could you train me? <br /> <br />", "I don't have an answer to this yet, would you like to can train me, so I have an answer for you next time? <br /> <br />"];
            $response = ['response'=>'training_error', 'message'=>$error_messages[rand(0, 2)]];
            echo json_encode($response);
        }
        else {
            // Check if it is a function call
            if (preg_match('/(.+)\(([A-z_]+)\)/', $query_result['answer'], $matches)) {
                $unparsed_location = substr($_POST['bot_query'], strlen($query_result['question']));
                $parsed_location = preg_match('/(.+) (and|to) (.+)/', $unparsed_location, $location_data);
                // Strip query of unwanted symbols
                $location1      = parseLocation($location_data[1]);
                $delimiter      = $location_data[2];
                $location2      = parseLocation($location_data[3]);
                $answer         = $matches[1];
                $function_name  = $matches[2];
                // Quick fix for duplicate preposition error
                $array_words = explode(' ', $answer);
                $words_length = count($array_words);
                if ($array_words[$words_length - 2] == $array_words[$words_length - 3]) {
                    array_pop($array_words);
                    array_pop($array_words);
                    $answer = trim(implode(' ', $array_words));
                }
                $_SESSION['location1'] = $location1."+Nigeria";
                $_SESSION['location2'] = $location2."+Nigeria";

                if ($parsed_location) {
                    include './answers.php';
                    if (function_exists($function_name)) {
                        $distance = call_user_func($function_name, $key, $url, $location1, $location2);
                        $response = ['response'=>'christoph_bot', 'message'=>"$answer $location_data[1] $delimiter $location_data[3] : <b>$distance</b>"];
                        echo json_encode($response);
                    }
                    else {
                        $response = ['response'=>'function_error', 'message'=>'Someone has tampered with my functions, check back in a bit'];
                        echo json_encode($response);
                    }
                }
                else {
                    $response = ['response'=>'parse_error', 'message'=>"Sorry, I don't understand that delimiter, very soon I would though. <br /><br /> I'm learning really hard. But till then, you can only use the supported delimiters <span class='bot-command highlight'>and</span> or <span class='bot-command highlight'>to</span> <br /></br> Type <span class='bot-command'>help</span> for more guides."];
                    echo json_encode($response);
                }
            }
            else {
                $response = ['response'=>'christoph_bot', 'message'=>$query_result['answer']];
                echo json_encode($response);
            }
        }
    }
    elseif (substr(strtolower(trim($_POST['bot_train'])), 0, 6) === 'train:') {
        // Regular expression to check if the training command is correct
        // Retrieve Questions, Location and Function Name
        $simple_mode_pattern = '/train: (.+[^{}]) \# (.+[^{}])/';
        $complex_mode_pattern = '/train: ?(.+) ?(between|from) ?{{(.+)}} ?(and|to) ?{{(.+)}} ?\# ?(.+) ?(between|from) ?{{(.+)}} ?(and|to) ?{{(.+)}} ?\(\((.+)\)\)/';
        $train_command = $_POST['bot_train'];
        $match_simple_mode = preg_match($simple_mode_pattern, $train_command, $match_simple);
        $match_complex_mode = preg_match($complex_mode_pattern, $train_command, $matches);
        if ($match_simple_mode or $match_complex_mode) {
            if ($match_simple_mode) {
                $question = $match_simple[1];
                $answer   = $match_simple[2];
                // Insert question into database
                $save_message = $conn->prepare(
                "INSERT INTO chatbot (question, answer) VALUES (?, ?)");
                $save_message->bindParam(1, $question, PDO::PARAM_STR);
                $save_message->bindParam(2, $answer, PDO::PARAM_STR);
                $save_message->execute();

                // Concatenate random answer retrieved from database with the calculated distance
                $array_responses = ["Thanks for teaching me, I'm a fast learner. Why don't you try asking me again.", "Now I've learnt this command, you can try asking me the same question again. Yaaay, thanks for teaching me."];

                $response = ['response'=>'train_message', 'message'=>$array_responses[rand(0, 1)]];
                echo json_encode($response);
            }
            elseif ($match_complex_mode) {
                $question       = $matches[1];
                $preposition    = $matches[2];
                $location1      = parseLocation($matches[3]);
                $delimiter      = $matches[4];
                $location2      = parseLocation($matches[5]);
                $answer         = $matches[6];
                $function_name  = $matches[11];
                $_SESSION['location1'] = $location1;
                $_SESSION['location2'] = $location2;
                // Include answers.php and call the calculate_distance function if it exists
                include "./answers.php";
                if (function_exists($function_name) or $match_simple_mode) {
                    $distance = "<b>".call_user_func($function_name, $key, $url, $location1, $location2)."</br>";
                    $location1 = str_replace('+', ' ', $location1);
                    $location2 = str_replace('+', ' ', $location2);

                    $concat_question = "$question $preposition";
                    $concat_answer = "$answer ($function_name)";
                    // Insert question into database
                    $save_message = $conn->prepare(
                    "INSERT INTO chatbot (question, answer) VALUES (?, ?)");
                    $save_message->bindParam(1, $question, PDO::PARAM_STR);
                    $save_message->bindParam(2, $concat_answer, PDO::PARAM_STR);
                    $save_message->execute();

                    // Concatenate random answer retrieved from database with the calculated distance
                    $array_responses = ["Thanks for teaching me, I'm a fast learner. Why don't you try asking me again. <br /><br /> $answer $location1 $delimiter $location2 : $distance", "Now I've learnt this command, you can try asking me the same question again. Yaaay, thanks for teaching me. <br /><br /> $answer $location1 $delimiter $location2 : $distance"];
                    $response = ['response'=>'train_message', 'message'=>$array_responses[rand(0, 1)]];
                    echo json_encode($response);
                }
                else {
                    $response = ['response'=>'train_command_error', 'message'=>'Sorry, that command does not exist, you can only use: <br /><br /> <span class="bot-command">((calculate_distance))</span> function with the <span class="bot-command">train: </span> command to get the distance between 2 locations <br /><br /> <span class="bot-command">get duration : [mode]</span> Command to get the estimated trip duration between the last 2 locations <br /><br /><br /> <span class="bot-command">show direction : [mode]</span> Command to display the direction between the last 2 locations<br /><br /><br /> You can type <span class="bot-command">help</span> to learn more'];
                    echo json_encode($response);
                }
            }
        }
        else {
            $error_messages = ["Sorry, I do not understand this training command, please try again <br /> <br />", "This training command is new, sure you're not missing anything? <br /> <br />", "Oops!, I've not been trained to learn that training command <br /> <br />"];
            $response = ['response'=>'training_error', 'message'=>$error_messages[rand(0, 2)]];
            echo json_encode($response);
        }

    }
    if ($_POST['bot_command']) {
        if (substr($_POST['bot_command'], 0, 12) === 'get duration') {
            $get_command = explode(' : ', $_POST['bot_command']);
            $mode = $get_command[1];
            $location1 = $_SESSION['location1'];
            $location2 = $_SESSION['location2'];
            $function_name = trim(str_replace(' ', '_', strtolower($get_command[0])), '_');
            include './answers.php';
            if (function_exists($function_name)) {
                $trip_duration = call_user_func($function_name, $key, $url, $location1, $location2, $mode);
                $location1 = str_replace('Nigeria', '', str_replace('+', ' ', $location1));
                $location2 = str_replace('Nigeria', '', str_replace('+', ' ', $location2));
                $response = ['response'=>'trip_duration', 'message'=>"The $mode duration from $location1 to $location2 is estimated to be about <b>$trip_duration</b>"];
                echo json_encode($response);
            }
            else {
                $response = ['response'=>'command_error', 'message'=>'Sorry, that command does not exist.'];
                echo json_encode($response);
            }
        }
        elseif (substr($_POST['bot_command'], 0, 14) === 'show direction') {
            $get_command = explode(' : ', $_POST['bot_command']);
            $mode = $get_command[1];
            $location1 = $_SESSION['location1'];
            $location2 = $_SESSION['location2'];
            $function_name = trim(str_replace(' ', '_', strtolower($get_command[0])), '_');
            include './answers.php';
            if (function_exists($function_name)) {
                $map_url = call_user_func($function_name, $location1, $location2, $mode);
                $response = ['response'=>'show_direction', 'message'=>$map_url];
                echo json_encode($response);
            }
            else {
                $response = ['response'=>'command_error', 'message'=>'Someone must have tampered with my functions file.'];
                echo json_encode($response);
            }
        }
        else {
            $response = ['response'=>'train_command_error', 'message'=>'Sorry, that command does not exist, you can only use: <br /><br /> <span class="bot-command">((calculate_distance))</span> function with the train command to get the distance between 2 locations <br /><br /> <span class="bot-command">get duration : [mode]</span> Command to get the estimated trip duration between the last 2 locations <br /><br /> <span class="bot-command">show direction : [mode]</span> Command to display the direction between the last 2 locations'];
            echo json_encode($response);
        }
    }
}
?>
