<?php

        require_once 'db.php';
        try {
            $select = 'SELECT * FROM secret_word';
            $query = $conn->query($select);
            $query->setFetchMode(PDO::FETCH_ASSOC);
            $data = $query->fetch();

            $result2 = $conn->query("SELECT * from interns_data where username = 'ekumamait'");
            $user = $result2->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            throw $e;
        }
        $secret_word = $data['secret_word'];
?>

<?php
/*******************************Chat Bot Server Side Brain************************************/
// This is where the chat message will be received, I'm using $_GET because i'll pass the message via AJAX
if(isset($_GET['send_chat'])){//if chat was sent
  require('../../config.php');
  try {
          $conn = new PDO("mysql:host=". DB_HOST. ";dbname=". DB_DATABASE , DB_USER, DB_PASSWORD);
      } catch (PDOException $e) {
          die("Could not connect to the database " . DB_DATABASE . ": " . $e->getMessage());
      }
 if(isset($_GET['q'])&& isset($_GET['a'])&& isset($_GET['p'])){//For training
  $question = $_GET['q'];
  $answer = $_GET['a'];
  $password = $_GET['p'];
  if($password == 'password'){
    $stmt = $conn->prepare("INSERT INTO chatbot (question,answer) VALUES(:q,:a)");
    $stmt->bindValue(':q',$question,PDO::PARAM_STR);
    $stmt->bindValue(':a',$answer,PDO::PARAM_STR);
    $stmt->execute();
    if($stmt->rowCount() == 1){
      echo "You just trained me to respond to <strong>$question</strong>, Next time I'm been asked, I'll answer <strong>$answer</strong>";
    }
    else{
      echo "My brain could not process that training for now";
    }
  }
  else{
    echo "That's not the correct password to my brain, the password is <strong>password</strong>";
  }
}
else if(isset($_GET['message'])){//Normal chat
  $msg = str_replace('?','',trim($_GET['message'])); // remove question mark
  $getAnswer = $conn->prepare("SELECT answer FROM chatbot WHERE question LIKE :q ");
  $getAnswer->bindValue(':q',"%$msg%",PDO::PARAM_STR);
  $getAnswer->execute();
  if($getAnswer->rowCount() == 1){
    $answer = $getAnswer->fetch(PDO::FETCH_ASSOC);
    echo $answer['answer'];
  }
  else if($getAnswer->rowCount() > 1){//If there is more than one answer
    $answers = array(); 
    $a = 0;
    while($answer = $getAnswer->fetch(PDO::FETCH_ASSOC)){
      $answers[$a] =  $answer['answer'];//store the answers in an array
      $a++;
    }
    //echo "There are ".count($answers)." answers for you";
    echo $answers[rand(0,count($answers)-1)]; // randomize the answer to be served
  }
  else{
    echo "I don't understand what you meant, you can train me to respond to <strong>'$msg'</strong> with the command <strong class=\"command\">train: #$msg #answer #password</strong>";
  }
}
  
  die();
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eric Ebulu — UI/UX Designer and Software Engineer based in Uganda</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="preload" href="http://res.cloudinary.com/dghqhkadc/image/upload/v1526547784/imp.png" as="image">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--<script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script> -->
    <link rel="icon" type="image/png" href="http://res.cloudinary.com/dghqhkadc/image/upload/v1526547782/favicon.png">
    <link rel="shortcut icon" type="image/png" href="http://res.cloudinary.com/dghqhkadc/image/upload/v1526547782/favicon.png">

    
    <style>

       *,:after,:before {
 -webkit-box-sizing:border-box;
 box-sizing:border-box
}
html {
 font-size:16px;
 background-color:#fff;
 -webkit-font-smoothing:antialiased;
 -moz-osx-font-smoothing:grayscale;
 -webkit-tap-highlight-color:transparent
}
footer,header {
 display:block
}
 /**************Chat Bot Styling*******************/
      #bot-wrapper{
        position: fixed;
        bottom: 0;
        z-index: 10000;
        left: 80%;
        width: 20%;
        right:5%;
      }
      #bot-container{
        font-size: 14px;
        background-color: #FFF;
        border-radius:5px 5px 0px 0px ;
        box-shadow: 5px 5px 0px rgba(0, 0, 0, 0.1);
      }
      #chat-toggler{
        height: 60px;
        color: #FFF;
        text-align: center;
        padding: 10px;
        cursor: pointer;
        font-size: 20px;
      }
      #chat-toggler[data-chat-role='open'],#manage-chat[data-chat-role='restore']{
        background-color: #959eaf;
      }
      #chat-toggler[data-chat-role='close'],#manage-chat[data-chat-role='clear']{
        background-color: #727885;
      }

      #chat-area{
        padding: 10px;
        max-height: 300px;
        overflow-y: auto;
      }
      input#message-input{
        width: 100%;
        border-radius: 5px;
        padding: 8px 10px;
      }
      .incoming-chat,.outgoing-chat{
        border-radius: 5px;
        padding: 10px;
        margin-top: 5px;
        margin-bottom: 5px;
      }
      .outgoing-chat{
        margin-right: 40px;
        background-color: rgba(0,200,0,0.2);
      }
      .incoming-chat{
        margin-left: 40px;
        background-color: #E3E3E3;
      }
      
      #chat-container[data-bot-active = 'true']{
        display: block;
      }
      #chat-container[data-bot-active = 'false']{
        display: none;
      }
      #message-input-area{
        padding: 10px;
      }
      #chat-log{
        font-size: 12px;
        color: grey;
        font-style: italic;
        margin: 0px;
        margin-bottom: 5px;
      }
      #manage-chat{
        color: #FFF;
        border: none;
        border-radius: 3px;
      }
      .command{
         font-family:Consolas; 
        background-color: rgba(0,0,0,0.5);
        color: #FFF;
        padding: 2px 5px;
      }
      .messenger-name{
        color: grey;
        font-size: 10px;
      }
      @media all and (max-width: 768px){/*In mobile view*/
        #bot-wrapper{
          width: 100%;
          left: 0;
          right:0;
        }
      }
body {
 margin:0;
 color:#727885;
 font-family:-apple-system,BlinkMacSystemFont,"Segoe UI","Roboto","Helvetica Neue",sans-serif;
 font-size:1rem;
 font-weight:400;
 text-align:center
}
img {
  display:inline-block; url(); 
 max-width:100%
}
h1,h2,h3,h4,h5,h6 {
 margin:0 0 1rem;
 font-family:inherit;
 color:#2e294e;
 font-weight:700
}
h1,h2,h3 {
 line-height:1.1
}
body,h4,h5,h6,p {
 line-height:1.5
}
h1 {
 font-size:3rem
}
h2 {
 font-size:2.5rem
}
h3 {
 font-size:2rem
}
h4 {
 font-size:1.5rem
}
h5 {
 font-size:1rem
}
h6 {
 font-size:.875rem
}
p {
 margin:0 0 1.5rem;
 color:#727885;
 font-size:16px
}
ol,ul {
 margin:1.5rem 0;
 padding-left:1.5rem
}
a,a:visited {
 color:#8661c1;
 text-decoration:underline;
 -webkit-transition:color .3s;
 transition:color .3s
}
a:active,a:focus,a:hover {
 color:#603c99;
 cursor:pointer
}
::-moz-selection {
 background:rgba(134,97,193,.875);
 color:#fff
}
::selection {
 background:rgba(134,97,193,.875);
 color:#fff
}
.text-red {
 color:#c14953
}
.outdated {
 margin:0;
 padding:.75rem 1rem;
 color:#2d2a23;
 background:#ffc53a
}
@media screen and (min-width:48em) {
 .outdated {
  padding:1rem 1.5rem
 }
}
.outdated a {
 color:#1a1a1a;
 font-weight:700;
 text-decoration:underline
}
.outdated a:active,.outdated a:focus,.outdated a:hover,.outdated a:visited {
 color:#6f46b1;
 text-decoration:underline
}
.profile {
  width:100%;
 margin:0 0 7rem;
 padding:0 1rem
}
@media screen and (min-width:37.5em) {
 .profile {
  padding:0 1.5rem
 }
}
@media screen and (min-width:48em) {
 .profile {
  margin-bottom:8rem
 }
}
.profile-image-wrap {
  position:relative;
 width:10rem;
 height:10rem;
 margin:7.5% auto 1rem
}
.profile-image-wrap img {
 display:block;
 width:100%;
 height:100%;
 border-radius:50%
}
@media screen and (min-width:37.5em) {
 .profile-image-wrap {
  margin-top:7%
 }
}
@media screen and (min-width:48em) {
 .profile-image-wrap {
  margin-top:6.5%;
  width:12rem;
  height:12rem
 }
}
@media screen and (min-width:81.25em) {
 .profile-image-wrap {
  margin-top:5%;
  width:13rem;
  height:13rem
 }
}
@media screen and (min-width:100em) {
 .profile-image-wrap {
  width:14rem;
  height:14rem
 }
}
.profile-name {
 margin-bottom:.5rem;
 color:#2e294e;
 font-size:2.25rem
}
@media screen and (min-width:37.5em) {
 .profile-name {
  font-size:2.4rem
 }
}
@media screen and (min-width:48em) {
 .profile-name {
  font-size:2.5rem
 }
}
@media screen and (min-width:81.25em) {
 .profile-name {
  font-size:2.75rem
 }
}
.profile-headline {
 margin-bottom:2rem;
 color:#788399;
 font-size:1.25rem;
 font-weight:400
}
@media screen and (min-width:37.5em) {
 .profile-headline {
  margin-bottom:2.5rem
 }
}
@media screen and (min-width:48em) {
 .profile-headline {
  font-size:1.4rem;
  margin-bottom:3rem
 }
}
@media screen and (min-width:81.25em) {
 .profile-headline {
  font-size:1.5rem;
  margin-bottom:3.5rem
 }
}
@media screen and (min-width:100em) {
 .profile-headline {
  margin-bottom:4rem
 }
}
.profile-description {
 max-width:60rem;
 margin:0 auto 1.4rem;
 color:#a4abba;
 font-size:1.2rem;
 font-weight:300
}
.profile-description a {
 position:relative;
 text-decoration:none;
 color:#a4abba
}
.profile-description a:after {
 content:"";
 position:absolute;
 left:0;
 right:0;
 top:100%;
 height:1px;
 background-color:#a4abba;
 -webkit-transition:all .3s;
 transition:all .3s
}
@media screen and (min-width:48em) {
 .profile-description a:after {
  height:2px
 }
}
.profile-description a:active,.profile-description a:focus,.profile-description a:hover {
 color:#788399
}
.profile-description a:active:after,.profile-description a:focus:after,.profile-description a:hover:after {
 background-color:#8661c1
}
@media screen and (min-width:37.5em) {
 .profile-description {
  font-size:1.4rem;
  margin-bottom:1.6rem
 }
}
@media screen and (min-width:48em) {
 .profile-description {
  font-size:1.6rem;
  margin-bottom:2rem
 }
}
@media screen and (min-width:62.5em) {
 .profile-description {
  margin-bottom:2.5rem
 }
}
@media screen and (min-width:81.25em) {
 .profile-description {
  margin-bottom:3rem
 }
}
.profile-links {
 position:relative
}
.profile-link,.profile-link:visited {
 position:relative;
 display:inline-block;
 width:1.5rem;
 height:1.5rem;
 margin:0 .375rem;
 color:#959eaf;
 text-decoration:none;
 vertical-align:top
}
.profile-link img {
 opacity:.4;
 -webkit-transition:opacity .3s;
 transition:opacity .3s
}
.profile-link svg {
 display:block;
 width:100%;
 height:100%;
 fill:#959eaf;
 -webkit-transition:fill .3s;
 transition:fill .3s
}
.profile-link:active,.profile-link:focus,.profile-link:hover {
 text-decoration:none;
 color:#603c99
}
.profile-link:active img,.profile-link:focus img,.profile-link:hover img {
 opacity:.9
}
.profile-link:active svg,.profile-link:focus svg,.profile-link:hover svg {
 fill:#603c99
}
@media screen and (min-width:37.5em) {
 .profile-link {
  width:1.6rem;
  height:1.6rem;
  margin:0 .5rem
 }
}
@media screen and (min-width:48em) {
 .profile-link {
  width:1.8em;
  height:1.8em;
  margin:0 .65rem
 }
}
@media screen and (min-width:62.5em) {
 .profile-link {
  width:2em;
  height:2em
 }
}
.footer {
 padding:.75rem 1rem;
 position:fixed;
 bottom:0;
 left:0;
 right:0;
 background:#fff
}
@media screen and (min-width:48em) {
 .footer {
  padding:1rem 1.5rem
 }
}
.footer.is-overlayed {
 border-top:1px solid #eaeaea;
 -webkit-box-shadow:0 -2px 6px rgba(0,0,0,.05);
 box-shadow:0 -2px 6px rgba(0,0,0,.05)
}
.sr-only {
 position:absolute;
 width:1px;
 height:1px;
 padding:0;
 margin:-1px;
 overflow:hidden;
 clip:rect(0,0,0,0);
 border:0
}
.fade {
 opacity:0;
 -webkit-transition:opacity .3s;
 transition:opacity .3s
}
.fade.in {
 opacity:1
}
  
    </style>

</head>

<body>
<!--[if lt IE 9]>
<p class="outdated">You're using an outdated browser. <a href="http://browsehappy.com/" rel="noopener">Upgrade to a
    different browser</a> to better experience this site.</p>
<![endif]-->

<div class="profile">
    <div class="profile-image-wrap">
        
            <img src="<?php echo $user->image_filename ?>" alt="Eric Ebulu">
        
    </div>
    <h1 class="profile-name">ERIC <?php echo $user->name ?></h1>
    <h4>@<?php echo $user->username ?></h4>
    <h3 class="profile-headline">Intern, Aspiring Rockstar Software Engineer.<br>Open Sourcerer</h3>
    <p class="profile-description">
        I am currently learning Design and Full-stack development at
        <a target="_blank" rel="noopener" href="https://hotels.ng/">Hotels.ng</a>.
        <br>Learning how to collaborate and work remotely has been a wonderful experience for me.
        <br>Anytime, Anywhere. Get in touch.
    </p>
    <div class="profile-links">
        <a target="_blank" rel="noopener" class="profile-link" href="https://github.com/ekumamait">
            <span class="sr-only">GitHub</span>
            <svg width="438.549" height="438.549" viewBox="0 0 438.549 438.549"><path d="M409.132 114.573c-19.608-33.596-46.205-60.194-79.798-79.8-33.598-19.607-70.277-29.408-110.063-29.408-39.781 0-76.472 9.804-110.063 29.408-33.596 19.605-60.192 46.204-79.8 79.8C9.803 148.168 0 184.854 0 224.63c0 47.78 13.94 90.745 41.827 128.906 27.884 38.164 63.906 64.572 108.063 79.227 5.14.954 8.945.283 11.419-1.996 2.475-2.282 3.711-5.14 3.711-8.562 0-.571-.049-5.708-.144-15.417a2549.81 2549.81 0 0 1-.144-25.406l-6.567 1.136c-4.187.767-9.469 1.092-15.846 1-6.374-.089-12.991-.757-19.842-1.999-6.854-1.231-13.229-4.086-19.13-8.559-5.898-4.473-10.085-10.328-12.56-17.556l-2.855-6.57c-1.903-4.374-4.899-9.233-8.992-14.559-4.093-5.331-8.232-8.945-12.419-10.848l-1.999-1.431c-1.332-.951-2.568-2.098-3.711-3.429-1.142-1.331-1.997-2.663-2.568-3.997-.572-1.335-.098-2.43 1.427-3.289 1.525-.859 4.281-1.276 8.28-1.276l5.708.853c3.807.763 8.516 3.042 14.133 6.851 5.614 3.806 10.229 8.754 13.846 14.842 4.38 7.806 9.657 13.754 15.846 17.847 6.184 4.093 12.419 6.136 18.699 6.136 6.28 0 11.704-.476 16.274-1.423 4.565-.952 8.848-2.383 12.847-4.285 1.713-12.758 6.377-22.559 13.988-29.41-10.848-1.14-20.601-2.857-29.264-5.14-8.658-2.286-17.605-5.996-26.835-11.14-9.235-5.137-16.896-11.516-22.985-19.126-6.09-7.614-11.088-17.61-14.987-29.979-3.901-12.374-5.852-26.648-5.852-42.826 0-23.035 7.52-42.637 22.557-58.817-7.044-17.318-6.379-36.732 1.997-58.24 5.52-1.715 13.706-.428 24.554 3.853 10.85 4.283 18.794 7.952 23.84 10.994 5.046 3.041 9.089 5.618 12.135 7.708 17.705-4.947 35.976-7.421 54.818-7.421s37.117 2.474 54.823 7.421l10.849-6.849c7.419-4.57 16.18-8.758 26.262-12.565 10.088-3.805 17.802-4.853 23.134-3.138 8.562 21.509 9.325 40.922 2.279 58.24 15.036 16.18 22.559 35.787 22.559 58.817 0 16.178-1.958 30.497-5.853 42.966-3.9 12.471-8.941 22.457-15.125 29.979-6.191 7.521-13.901 13.85-23.131 18.986-9.232 5.14-18.182 8.85-26.84 11.136-8.662 2.286-18.415 4.004-29.263 5.146 9.894 8.562 14.842 22.077 14.842 40.539v60.237c0 3.422 1.19 6.279 3.572 8.562 2.379 2.279 6.136 2.95 11.276 1.995 44.163-14.653 80.185-41.062 108.068-79.226 27.88-38.161 41.825-81.126 41.825-128.906-.01-39.771-9.818-76.454-29.414-110.049z"/></svg>
        </a>
        <a target="_blank" rel="noopener" class="profile-link" href="https://linkedin.com/in/ericebulu">
            <span class="sr-only">LinkedIn</span>
            <svg width="438.536" height="438.535" viewBox="0 0 438.536 438.535"><path d="M5.424 145.895H99.64v282.932H5.424zm403.418 25.844c-19.791-21.604-45.967-32.408-78.512-32.408-11.991 0-22.891 1.475-32.695 4.427-9.801 2.95-18.079 7.089-24.838 12.419-6.755 5.33-12.135 10.278-16.129 14.844-3.798 4.337-7.512 9.389-11.136 15.104v-40.232h-93.935l.288 13.706c.193 9.139.288 37.307.288 84.508 0 47.205-.19 108.777-.572 184.722h93.931V270.942c0-9.705 1.041-17.412 3.139-23.127 4-9.712 10.037-17.843 18.131-24.407 8.093-6.572 18.13-9.855 30.125-9.855 16.364 0 28.407 5.662 36.117 16.987 7.707 11.324 11.561 26.98 11.561 46.966V428.82h93.931V266.664c-.007-41.688-9.897-73.328-29.694-94.925zM53.103 9.708c-15.796 0-28.595 4.619-38.4 13.848C4.899 32.787 0 44.441 0 58.529 0 72.42 4.758 84.034 14.275 93.358c9.514 9.325 22.078 13.99 37.685 13.99h.571c15.99 0 28.887-4.661 38.688-13.99 9.801-9.324 14.606-20.934 14.417-34.829-.19-14.087-5.047-25.742-14.561-34.973C81.562 14.323 68.9 9.708 53.103 9.708z"/></svg>
        </a>
        <a target="_blank" rel="noopener" class="profile-link" href="https://twitter.com/ekumamait">
            <span class="sr-only">Twitter</span>
            <svg width="449.956" height="449.956" viewBox="0 0 449.956 449.956"><path d="M449.956 85.657c-17.702 7.614-35.408 12.369-53.102 14.279 19.985-11.991 33.503-28.931 40.546-50.819-18.281 10.847-37.787 18.268-58.532 22.267-18.274-19.414-40.73-29.125-67.383-29.125-25.502 0-47.246 8.992-65.24 26.98-17.984 17.987-26.977 39.731-26.977 65.235 0 6.851.76 13.896 2.284 21.128-37.688-1.903-73.042-11.372-106.068-28.407C82.46 110.158 54.433 87.46 31.403 59.101c-8.375 14.272-12.564 29.787-12.564 46.536 0 15.798 3.711 30.456 11.138 43.97 7.422 13.512 17.417 24.455 29.98 32.831-14.849-.572-28.743-4.475-41.684-11.708v1.142c0 22.271 6.995 41.824 20.983 58.674 13.99 16.848 31.645 27.453 52.961 31.833a95.543 95.543 0 0 1-24.269 3.138c-5.33 0-11.136-.475-17.416-1.42 5.9 18.459 16.75 33.633 32.546 45.535 15.799 11.896 33.691 18.028 53.677 18.418-33.498 26.262-71.66 39.393-114.486 39.393-8.186 0-15.607-.373-22.27-1.139 42.827 27.596 90.03 41.394 141.612 41.394 32.738 0 63.478-5.181 92.21-15.557 28.746-10.369 53.297-24.267 73.665-41.686 20.362-17.415 37.925-37.448 52.674-60.097 14.75-22.651 25.738-46.298 32.977-70.946 7.23-24.653 10.848-49.344 10.848-74.092 0-5.33-.096-9.325-.287-11.991 18.087-13.127 33.504-29.023 46.258-47.672z"/></svg>
        </a>
        <a target="_blank" rel="noopener" class="profile-link"
           href="mailto:ericebuluochol@gmail.com?subject=Hello%20Ekumamait">
            <span class="sr-only">Email</span>
            <svg width="511.626" height="511.627" viewBox="0 0 511.626 511.627"><path d="M498.208 68.235c-8.945-8.947-19.701-13.418-32.261-13.418H45.682c-12.562 0-23.318 4.471-32.264 13.418C4.471 77.18 0 87.935 0 100.499v310.633c0 12.566 4.471 23.312 13.418 32.257 8.945 8.953 19.701 13.422 32.264 13.422h420.266c12.56 0 23.315-4.469 32.261-13.422 8.949-8.945 13.418-19.697 13.418-32.257V100.499c-.001-12.564-4.469-23.319-13.419-32.264zm-23.13 342.89c0 2.475-.903 4.616-2.714 6.424-1.81 1.81-3.949 2.706-6.42 2.706H45.679c-2.474 0-4.616-.896-6.423-2.706-1.809-1.808-2.712-3.949-2.712-6.424V191.858a167.121 167.121 0 0 0 19.7 18.843c51.012 39.209 91.553 71.374 121.627 96.5 9.707 8.186 17.607 14.561 23.697 19.13 6.09 4.571 14.322 9.185 24.694 13.846 10.373 4.668 20.129 6.991 29.265 6.991h.571c9.134 0 18.894-2.323 29.263-6.991 10.376-4.661 18.613-9.274 24.701-13.846 6.089-4.569 13.99-10.944 23.698-19.13 30.074-25.126 70.61-57.291 121.624-96.5a166.295 166.295 0 0 0 19.694-18.843v219.267zm0-303.205v3.14c0 11.229-4.421 23.745-13.271 37.543-8.851 13.798-18.419 24.792-28.691 32.974a43121.052 43121.052 0 0 0-114.495 90.506c-1.14.951-4.474 3.757-9.996 8.418-5.514 4.668-9.894 8.241-13.131 10.712-3.241 2.478-7.471 5.475-12.703 8.993-5.236 3.518-10.041 6.14-14.418 7.851-4.377 1.707-8.47 2.562-12.275 2.562h-.571c-3.806 0-7.895-.855-12.275-2.562-4.377-1.711-9.185-4.333-14.417-7.851-5.231-3.519-9.467-6.516-12.703-8.993-3.234-2.471-7.614-6.044-13.132-10.712-5.52-4.661-8.854-7.467-9.995-8.418a42000.437 42000.437 0 0 0-114.487-90.506c-27.981-22.076-41.969-49.106-41.969-81.083 0-2.472.903-4.615 2.712-6.421 1.809-1.809 3.949-2.714 6.423-2.714H465.95c1.52.855 2.854 1.093 3.997.715 1.143-.385 1.998.331 2.566 2.138.571 1.809 1.095 2.664 1.57 2.57.477-.096.764 1.093.859 3.571.089 2.473.137 3.718.137 3.718v3.849h-.001z"/></svg>
        </a>
    </div>
    Made in 2018 with <span class="text-red">♥</span> from Kampala, Uganda.
</div>
        
        <div id="bot-wrapper">
        <div id="bot-container">
          <div id="chat-container" data-bot-active="false">
            <div style="padding: 5px 10px; box-shadow: 0px 10px 10px rgba(0,0,0,0.1)">
              <p class="help-text text-left" style="font-size:20px;margin: 0px; color: #959eaf">MODE:  <strong id="bot-mode">Chat</strong></p>
            </div>
            <div id="chat-area" >
              <div id="chats">
                <noscript>
                  <div class="outgoing-chat">
                    Ooops! I'm sorry, i can't talk to you without JavaScript enabled on your browser
                  </div>
                </noscript>
              </div>
            </div>
            <div id="message-input-area">
              <p id="chat-log"></p>
              <form id="chat-msg" action="<?php $_PHP_SELF ?>" method="POST">
                <input type="text" name="message"  placeholder="Enter your message here" id="message-input">
                <input type="submit" name="send_chat" value="send" style="visibility: hidden;background-color: rgb(0,200,0); color: #FFF; width: 20%">
                <p class="help-text text-center" style="margin: 2px 0px">Press <strong>Enter</strong> to send message</p>
              </form> 
              <div class="text-right">
                <button id="manage-chat" data-chat-role="clear"> &times clear chats </button>
              </div>
            </div>
          </div>
          <div id="chat-toggler" data-chat-role="open">Chat with Eko</div>
        </div>
      </div>

      
    </div>  


 
  <script>
      USER = "";
      CLEAREDCHATS = "";
      RETURNING = false;
      MODE = 'Chat';
    
    /*initializing AJAX*/
      var AJAX = function(url){
        this.connect = function(){
        ajax = null;
          try{
          //opera 8+, firefox,safari,chrome
          ajax = new XMLHttpRequest();
        }
        catch(e){
          //Internet Explorer
          try{
            ajax = new ActiveXObject('Msxml2.XMLHTTP');
          }
        catch(e){
          try{
          ajax = new ActiveXObject('Microsoft.XMLHTTP');
          }
          catch(e){
            console.log("This browser does not support AJAX");
            }
          } 
        } 
        return ajax;
        };
      this.load = function(callback){
          ajaxObject = this.connect();
        if(ajaxObject != null){
          ajaxObject.onreadystatechange = function(){
            if(ajaxObject.status == 200){//if url is found
                switch(ajaxObject.readyState){
                  case 0:
                  console.log("Request not yet initialized. initializing...");
                  trackCode = 0;
                  trackMsg = "Your request is intializing...";
                  break;
                  case 1:
                  console.log("Request set up!");
                  trackCode = 1;
                  trackMsg = "Your request is set up!";
                  break;
                  case 2:
                  console.log("Request sent!");
                  trackCode = 2;
                  trackMsg = "Your request is sent!";
                  break;
                  case 3: 
                  console.log("Request in process...");
                  trackCode = 3;
                  trackMsg = "Your request is processing...";
                  break;
                  case 4:
                  trackCode = 204;
                  trackMsg = "Response ready!";
                  console.log("Request completed!");
                  break;
                }
                
      if(typeof(callback) == 'function'){//if there is a valid callback function
              try{
                callback(trackCode,ajaxObject.responseText);
                }catch(err){
                  console.log("The function "+callback+" did not execute well: "+err);
            }
          }
        
       }
        else if(ajaxObject.status == 404){
            console.log("The ajax returns a status code of 404."+url+" is not found");
            }
          
          
          }
         ajaxObject.open("GET",url, true);
         ajaxObject.send(); 
          }
        };

      };
/*AJAX ends*/

var GAME = function(){
  this.GAMEREADY = false;
  this.PUZZLESERVED = false;
  this.PUZZLESERVED = null;
  this.puzzleBank = ['oby','tthwema','glogoe','teloh','ernnit','tobthac','potlap','ptscrivaja','aavj','yglonotehc','oofaeckb'];
  this.answerBank = ['boy','matthew','google','hotel','intern','chatbot','laptop','javascript','java','technology','facebook'];
  
  this.startGame = function(){
    MODE = "Game";
    reply("<strong>Eko Puzzle</strong><br/> "+"Hey <strong>"+USER+"</strong> , you really want to play my game, Ok, i have got this <strong>Word Game</strong> for you.");
    slowReply("This is how it works, I'll give you scrabbled letters, and let's see how many words you can make out of it.",3000);
    slowReply("Ready huh???",3000);
    slowReply("Reply with <strong class=\"command\">ready:</strong> if you are ready to play",3000);
    clearStatusIn(8000);
    }
  
  this.proceed = function(message){
    if(message == 'gameoff:'){
          this.endGame();
          setMode('Chat');
    }
    else if(this.isON() && this.isReady() && this.puzzleServed()){
      this.checkAnswer(message)
    }
    else if(this.isON() && this.isReady()){
      if(isNaN(parseInt(message))){
        reply("Invalid response");
      }
      else{
        reply("You chose the number <strong>"+(message)+"</strong>");
        var puzzleIndex = parseInt(message);
        this.PUZZLESERVED = puzzleIndex;
        reply("For your chosen number, your puzzle world is <strong>"+this.puzzleBank[puzzleIndex]+"</strong>, rearrange the letters to get the correct world");
      }
    }
    
    else if(this.isON()){
      if(message == 'ready:'){
        this.GAMEREADY = true;
        reply("You are now set for the game,reply with a number from 0 to "+(this.puzzleBank.length - 1)+" to select puzzle");
      }
      else{
        reply("Guess you are not ready for this game yet, you can quit the game mode by reply <strong class=\"command\">gameoff:</strong>");
      }
    }
    else{
      reply("I don't understand that, we are currently in Game Mode, maybe when you leave game mode with the command <strong class=\"command\">gameoff:</strong>, i'll understand");
      reply("But for now, i'm enjoying this word game with you <strong>"+USER+"</strong>");
    }
  }
  
  this.checkAnswer = function(answer){
    if(this.answerBank[this.PUZZLESERVED] == answer){
      reply("Yeah! <strong>"+USER+"</strong> that was correct, <strong>"+this.answerBank[this.PUZZLESERVED]+"</strong> is the correct arrangement for <strong>"+this.puzzleBank[this.PUZZLESERVED]+"</strong>");
      reply("Reply with another number from 0 to "+(this.puzzleBank.length - 1)+" to select another puzzle or <strong class=\"command\">gameoff:</strong> to quit playing");
      this.PUZZLESERVED = null;
    }
    else{
      reply("No <strong>"+USER+"</strong>, <strong>"+answer+"</strong> is not the correct arrangement for <strong>"+this.puzzleBank[this.PUZZLESERVED]+"</strong>");
      reply("Try again");
    }
  }
  this.endGame = function(){
    if(!this.isON()){
      slowReply("Common <strong>"+USER+"!</strong>, Game mode was never on before, reply with <strong class=\"command\">GAMEON</strong> to turn game mode on",3000);
      clearStatusIn(2000);
    }
    else{
      this.GAMEREADY = false;
      this.PUZZLESERVED = false;
      this.PUZZLESERVED = '';
      reply("Game turned off!");
      slowReply("So you want some serious talk?",3000);
      slowReply("Let's talk!",3000);
      slowReply("What's on your mind",3000);
      setMode('Chat');
      clearStatusIn(8000);
    }
  }
  
  this.isON = function(){
    return (MODE == 'Game' ? true : false);
  }

  this.isReady = function(){
    return this.GAMEREADY;
  }
  this.puzzleServed = function(){
    return (this.PUZZLESERVED == null ? false : true );
  }
}
/*Game Mode*/


/*Game Mode ends*/

/*Chat Bot non-server brain */
      var chatForm = document.querySelector('form#chat-msg');
      var game = new GAME();
      chatForm.addEventListener('submit',function(event){
        event.preventDefault();
        var message = document.querySelector("input#message-input").value;
        if(message !== ''){ //if message is not empty
        send(message);
        clearMessage();
        
        if(message.substring(0,5) == 'name:'){ //telling the bot user name
            if(USER == ''){
            USER = message.substring(5);
            reply("Nice to meet you <strong>"+ USER+"</strong>");
            }
            else{//if name was already mentioned, change the user name
            var newName = message.substring(5);
            reply("Hmmm...you earlier mentioned that your name was <strong>"+ USER+"</strong>, and now you're mentioning <strong>"+newName+"</strong>");
            reply("Anyways, I have changed your name in my brain to <strong>"+newName+"</strong>");
            status("Name changed from <strong>"+USER+"</strong> to <strong>"+newName+"</strong>");
            USER = newName;
            }
          }
          else if(message == 'aboutbot'){
            status("About Eko");
            reply("<strong>About Eko</strong><ul><li>Bot Version: 1.0.0</li><li>Designed and Built by : Eric Ebulu</li><li>Slack username on hnginternship4.slack.com : ekumamait</li></ul>");
          }
          else if(message == 'commands:'){
            reply("So great to have you want to learn about my commands");
            slowReply("You have first learnt the <strong class=\"command\">commands:</strong> command, other commands include",3000);
            slowReply("<ul><li><strong class=\"command\">aboutbot</strong> to know abot Eko</li><li><strong class=\"command\">train: #question #answer #password</strong> to train me to answer a particular question</li><li><strong class=\"command\">gameon:</strong> to play word game with me</li><li><strong class=\"command\">gameoff:</strong> to quit playing word game with me</li></ul>",3000);
            clearStatusIn(5000);
          }
          else if(message.substring(0,6) == 'train:'){ //training the bot
            reply("Yay! I love to train!");
            var train = message.substring(6).split('#'); //Split the command to qustion,answer and password.
            status("Processing your training, just a moment...");
              //var url = "https://hng.fun/profiles/Matt.php?send_chat=send&q="+train[1]+"&a="+train[2]+"&p="+train[3];
              var url = "profiles/Matt.php?send_chat=send&q="+train[1]+"&a="+train[2]+"&p="+train[3];
                var ajax = new AJAX(url);
                ajax.load(function(responseCode,responseText){
                  if(responseCode == 204){
                    reply(responseText);
                    status("");
                  }
                });           
          }
          else{
            if(game.isON()){//In game mode
              game.proceed(message);
            }
            // for other messagess
            else{
              switch(message){
              case 'gameon:': //command GAMEON
                setMode('Game');
                game.startGame();
              break;
              case 'gameoff:':
                game.endGame();
              break;
              default: 
                var url = "profiles/Matt.php?send_chat=send&message="+message;
                var ajax = new AJAX(url);
                status("Eko is typing...");
                ajax.load(function(responseCode,responseText){
                  if(responseCode == 204){
                    reply(responseText);
                    status("");
                  }
                });
              break;
              }
            }
          }

        }
        else{
          if(GAME == true){
          reply("<strong>"+USER+"</strong> Seems like you don't want to play, reply with GAMEOFF to stop playing");
          }else{
          reply("<strong>"+USER+"</strong> You are sending me an empty message, let's talk!");
          }
        }
        document.querySelector('#bot-mode').innerHTML = MODE;
      });

/**Chat Bot non-server brain **/
      CHATS = document.querySelector('#chats');
      function openChat(){
        document.querySelector('#chat-container').setAttribute('data-bot-active','true');
          if(RETURNING == false){
          slowReply("Hey there, I am Eko, can i meet you? If you don't mind, reply your name with this command <br/> <strong class=\"command\">name:your name</strong>",2000);
          slowReply("You can play word game here, check out how by replying with <strong class=\"command\">commands:</strong> and to see other cool stuffs i can do",2000);
          slowReply("You should also know something about me <strong>I am case sensitive</strong>",2000);
          clearStatusIn(3000);
          }
          else{
          reply("Welcome back, I missed you already within that few seconds you closed our chat?");
          if(USER == ""){
            slowReply("You still haven't told me your name",3000);
            clearStatusIn(2000);
          }
          else{
            slowReply("Do i still remember your name?",3000);
            slowReply("....",3000);
            slowReply("Of course YES!, just messing with you.",3000);
            slowReply("<strong>"+USER+"</strong>",3000);
            clearStatusIn(11000);
          }
          slowReply("Forgotten my commands? just reply me with <strong class=\"command\">commands:</strong> and I'll teach you again, I'm very nice",3000);
          clearStatusIn(200);
        }
      }
      
      function closeChat(){
        document.querySelector('#chat-container').setAttribute('data-bot-active','false');
        RETURNING = true;
      }
      function clearChats(){
        CLEAREDCHATS = document.querySelector('#chats').innerHTML; //save up the chats for restoration
        document.querySelector('#chats').innerHTML = '';
      }
      function status(msg){
        document.querySelector('#chat-log').innerHTML = msg;
      }
      function clearStatusIn(sec){
        setTimeout(function(){status("")},sec);
      }

      function reply(msg){
        CHATS.innerHTML += "<div class=\"outgoing-chat\"><div class=\"messenger-name\">Eko</div>"+msg+"</div>";
        inputFocus();
        scrollDown();
        //document.querySelector('#chat-container').scrollBy(100,100);
      }
      function slowReply(msg,sec){
        status("Eko is typing...");
        setTimeout(function(){
          CHATS.innerHTML += "<div class=\"outgoing-chat\"><div class=\"messenger-name\">Eko</div>"+msg+"</div>";
          scrollDown();
          },sec);
          inputFocus();
        //document.querySelector('#chat-container').scrollBy(100,100);
      }
      
      function send(msg){
        CHATS.innerHTML += "<div class=\"incoming-chat\"><div class=\"messenger-name\">"+(USER != '' ? USER : 'You')+"</div>"+msg+"</div>";
        inputFocus();
        scrollDown();
        //document.querySelector('#chat-container').scrollBy(100,100);
      }
      function clearMessage(){
        document.querySelector("input#message-input").value = "";
      }
      function restoreChats(){
        if(CLEAREDCHATS != ""){
          var currentChats = document.querySelector('#chats').innerHTML;
          document.querySelector('#chats').innerHTML = CLEAREDCHATS + currentChats;
          scrollDown();
          return true;
        }
        else{
          return false;
        }
      }
      function setMode(mode){
        MODE = mode;
      }
      function scrollDown(){
        document.querySelector('#chat-area').scrollBy(0,document.querySelector('#chats').clientHeight);
      }
      function inputFocus(){
        document.querySelector("input#message-input").focus();
      }
        var chatToggler = document.querySelector('#chat-toggler');
        chatToggler.addEventListener('click', function(event){
          if(chatToggler.getAttribute('data-chat-role') == 'open'){
          openChat();
          chatToggler.innerHTML = "Close Chat";
          chatToggler.setAttribute('data-chat-role','close');           
          }
          else if(chatToggler.getAttribute('data-chat-role') == 'close'){
          closeChat();
          chatToggler.innerHTML = "Open Chat";
          chatToggler.setAttribute('data-chat-role','open');
          }
        });
        
        var chatManager = document.querySelector('#manage-chat');
        chatManager.addEventListener('click', function(event){
          if(chatManager.getAttribute('data-chat-role') == 'clear'){
            clearChats();
            var msg = (USER == "" ? "" : "Hey <strong>"+USER+"</strong>")+" You just cleared our chats, I hope no problem, you can restore our chats though down there";
            reply(msg);
            chatManager.setAttribute('data-chat-role','restore');
            chatManager.innerHTML = 'Restore Chats';
            status("chats cleared");
          }
          else if(chatManager.getAttribute('data-chat-role') == 'restore'){
            var msg = (USER == "" ? "" : "Hey <strong>"+USER+"</strong>");
            if(restoreChats()){
              msg += " So glad to have you back, our chat have been restored back, YAY!";
                status("chats restored");
            }else{
              msg += " We never had any chat before, so there is no chat to retore";
            }
            reply(msg);
            chatManager.setAttribute('data-chat-role','clear');
            chatManager.innerHTML = " &times Clear Chats";
          }
        });
    </script>
</body>
</html>
