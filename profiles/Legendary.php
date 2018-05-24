<?php

if(isset($_POST['chat'])){

    $chat = $_POST['chat'];
    $explosion = explode(':', $chat);
    $oneWord = strtolower(trim($explosion[0]));
    

    echo '<div style="display: none;"class="chat friend">
                <p class="chat-message" id="user">'. $chat .'</p>
            </div>';

    function aboutbot(){
        echo '<div style="display: none;"class="chat friend">
        <p class="chat-message" id="result">My  name is Le-Bot v1.0 - I\'m like human with fast brain of understanding, I get input and process it in other to display the result, if there is no result you can instruct me on how to get such result!</p>
        </div>';
    }

    function getAnswer($question){

        $sql = 'SELECT * FROM chatbot WHERE question = "'. $question . '"';
        $stmt = $GLOBALS['conn']->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $data = $stmt->fetchAll();

        if(empty($data)){
            echo '<div style="display: none;"class="chat friend">
            <p class="chat-message" id="result">oops... I do not know that yet, train me</p>
            </div>';
        } else {
            $random = array_rand($data);
            echo '<div style="display: none;"class="chat friend">
            <p class="chat-message" id="result">'. $data[$random]["answer"]. '</p>
            </div>';
        }
    }

    function train($input){
        $input = explode('#', $input);
        $question = trim($input[0]);
        $answer = trim($input[1]);
        $password = trim($input[2]);

        if ( $password == 'password') {
            $sql = 'SELECT * FROM chatbot WHERE question = "'. $question . '" and answer = "'. $answer .'" LIMIT 1';
            $stmt = $GLOBALS['conn']->query($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $data = $stmt->fetchAll();

            if(empty($data)){
                $trainsql = 'INSERT INTO chatbot(question,answer) VALUES(:question, :answer)';
                $train = $GLOBALS['conn']->prepare($trainsql);
                $train->execute(['question' => $question, 'answer' => $answer]);
                echo '<div style="display: none;"class="chat friend">
                <p class="chat-message" id="result">Training successful,
                 thank you for making me smarter</p>
                </div>';
            } else {
                echo '<div style="display: none;"class="chat friend">
                <p class="chat-message" id="result">oops... I already know this,
                 you can teach me something else</p>
                </div>';
            }

        } else {
            echo '<div style="display: none;"class="chat friend">
                <p class="chat-message" id="result">Invalid password or format..
                 example: train:question#answer#password</p>
                </div>';
            
        }
        
    }

    if ( $oneWord === 'aboutbot'){
        aboutbot();

    } elseif ( $oneWord === 'help'){
        echo '<div style="display: none;"class="chat friend">
                <p class="chat-message" id="result">Type \'aboutbot\' to see my current version.
                 To train me type \'train:question#answer#password\'</p>
                </div>';

    } elseif( $oneWord === 'train'){
        $second = strtolower(trim($explosion[1]));
        train($second);

    } elseif ( $oneWord === 'i am') {
        $second = strtolower(trim($explosion[1]));
        echo '<div style="display: none;"class="chat friend">
        <p class="chat-message" id="result"> Welcome '. ucfirst($second) .',you can ask me anything. <br>
        To see what i can do type \'help\' </p>
        </div>';
    } else {
        getAnswer($oneWord); 
    }
}


?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>Internship 4</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Ubuntu" rel="stylesheet">
    </head>
    <body>
    <style>

    footer{
      display: none;
    }
  .fadeIn {
  -webkit-animation-name: fadeIn;
  animation-name: fadeIn; }
   
    .message{
      background-color: #1380FA;
      color: white;
      font-size: 0.8em;
      width: 300px;
      display: inline-block;
              padding: 10px;
      margin: 5px;
              border-radius: 10px;
                line-height: 18px;
    }
    
        .oj-panel-alt1{
            background-color: #333333;
            color: #ffffff;
            text-align: center;
            background: -webkit-linear-gradient(top, #aaaaaa 0%, #333333);
            background: -moz-linear-gradient(top, #aaaaaa 0%, #333333);
            background: -o-linear-gradient(top, #aaaaaa 0%, #333333);
            background: -ms-linear-gradient(top, #aaaaaa 0%, #333333);
            background-color: white;
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .image{
            display: block;
            width: 20%;
            height: 20%;
            border-style: groove;
            border-width: 2px;
            border-radius: 100%;
            margin:0 auto;
            opacity: 0.8;
        }

        .name{
            font-family: verdana;
            font-size: 2em;
            margin-top: 7px;
            color: #ffffff;
        }

        .username{
            font-family: verdana;
            font-size: 2em;
            color: #ffffff;
        }

        section{
            background-color: rgba(255,255,255,0.5);
            font-family: verdana;

        }

        section h3{
            font-size: 1.5em;
            background: -webkit-linear-gradient(top, #aaaaaa 0%, #333333);
        }

        
        .chatbox {
            font-family: tahoma, sans-serif;
            text-align: start;
            box-sizing: border-box;
            width: 500px;
            min-width: 100px;
            height: 600px;
            background-color: rgba(255, 255, 255, 0.4);
            padding: 25px;
            margin: 20px auto;
            box-shadow: 0 3px #cccccc;
            display: none;
        }

        .chatlogs{
            padding: 10px;
            width: 100%;
            height: 450px;
            overflow-x: hidden;
            overflow-y: scroll;
        }

        .chatlogs::-webkit-scrollbar{
            width: 10px;
        }

        .chatlogs::-webkit-scrollbar-thumb {
            border-radius: 5px;
            background: rgba(0, 0, 0, .1);
        }

        .chat {
            display: flex;
            flex-flow: row wrap;
            align-items: flex-start;
            margin-bottom: 10px;
        }

        .chat .user-photo {
            width: 60px;
            height: 60px;
            background: #cccccc;
            border-radius: 50%;
            overflow: hidden; 
        }

        .chat .user-photo img {
            width: 100%;
        }

        .chat .chat-message{
            width: 70%;
            padding: 15px;
            margin: 5px 10px 0;
            border-radius: 10px;
            color: #ffffff;
            font-size: 20px;
            overflow-x: auto;
        }

        .chat-message::-webkit-scrollbar{
            width: 10px;
        }

        .chat-message::-webkit-scrollbar-thumb {
            border-radius: 5px;
            background: rgba(0, 0, 0, .1);
        }

        .friend .chat-message{
            background: -webkit-linear-gradient(top, #ffffff 0%, #aaaaaa);
            color: #333333;
        }

        .self .chat-message{
            background: -webkit-linear-gradient(top, #aaaaaa 0%, #333333);
            order: -1;
        }

        .chat-form {
            margin-top: 20px;
            display: flex;
            align-items: flex-start;
        }

        .chat-form #chat {
            background: #fbfbfb;
            width: 75%;
            height: 50px;
            border: 2px solid #eee;
            border-radius: 3px;
            resize: none;
            padding: 10px;
            font-size: 18px;
            color: #333333;
        }

        .chat-form #chat:focus{
            background: #ffffff;
        }

        .chat-form #chat::-webkit-scrollbar{
            width: 10px;
        }

        .chat-form #chat::-webkit-scrollbar-thumb {
            border-radius: 5px;
            background: rgba(0, 0, 0, .1);
        }

        #button, #chat-btn {
            background: -webkit-linear-gradient(top, #aaaaaa 0%, #ed1d2e);
            padding: 5px 15px;
            font-size: 30px;
            color: #ffffff;
            border: none;
            margin: 0 10px;
            border-radius: 3px;
            box-shadow: 0 3px 0 #fa1a2c;
            cursor: pointer;

            -webkit-transition: background .2s ease;
            -moz-transition: background .2s ease;
            -o-transition: background .2s ease;
        }


        .chat-form #button:hover {
            background: #fa1a2c;
        }

        #chat-btn:hover{
            background: -webkit-linear-gradient(top, #ffffff 0%, #ed1d2e);
        }

        @media only screen and (max-width: 768px) {

            .chatbox {
                font-family: tahoma, sans-serif;
                text-align: start;
                box-sizing: border-box;
                width: 300px;
                min-width: 100px;
                height: 400px;
                background-color: rgba(255, 255, 255, 0.4);
                padding: 10px;
                margin: 10px auto;
                box-shadow: 0 3px #cccccc;
            }

            .chatlogs{
                padding: 10px;
                width: 100%;
                height: 70%;
                overflow-x: hidden;
                overflow-y: scroll;
            }
            
            .chatlogs::-webkit-scrollbar{
                width: 10px;
            }

            .chatlogs::-webkit-scrollbar-thumb {
                border-radius: 5px;
                background: rgba(0, 0, 0, .6);
            }
            .user-photo{
                display: none;
            }
            .chat .chat-message{
                width: 70%;
                padding: 15px;
                margin: 5px 10px 0;
                border-radius: 10px;
                color: #ffffff;
                font-size: 20px;
                overflow-x: auto;
            }
        }
        
    </style>
    <?php      


        $sql = $conn->query("SELECT * FROM secret_word LIMIT 1");
        $sql = $sql->fetch(PDO::FETCH_OBJ);
        $secret_word = $sql->secret_word;

        $result = $conn->query("SELECT * FROM interns_data WHERE username = 'Legendary'");
        $user = $result->fetch(PDO::FETCH_OBJ);

    ?>
    <section class="py-5" id="projects">
  <div class="container">
    <div class="fadeIn">
      <h2 class="text-center h1 my-4">Internship Program</h2>
      <p class="px-5 mb-5 pb-3 lead blue-grey-text text-center">
       Internship (4) program is the best program so far, it allow me to rethink about my career as a developer right after my examination at Federal Polytechnic, Ukana. I will never forget to thank Mr David Iyang-Etoh because without him I wouldn't have know any thing about INTERNSHIP. My big thanks to INTERNSHIP for this opportunity that they created in other to blow up my brain to discover new shit as a developer, to share knowledge, Teach and Research. I REMAIN LEGENDARY, A BIG THANKS.
      </p>
    </div>
    <div class="row wow fadeInLeft" data-wow-delay=".3s">
      <div class="col-lg-6 col-xl-5 pr-lg-5 pb-5"><img class="img-fluid rounded z-depth-2" height="5" src="<?php echo $user->image_filename ?>"/></div>
      <div class="col-lg-6 col-xl-7 pl-lg-5 pb-4">
        <div class="row mb-3">
          <div class="col-1 mr-1"><i class="fa fa-book fa-2x cyan-text"></i></div>
          <div class="col-10">
            <h5 class="font-bold">Name:</h5>
            <p class="grey-text">
             <h1><?php echo $user->name ?></h1>
            </p>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-1 mr-1"><i class="fa fa-code fa-2x red-text"></i></div>
          <div class="col-10">
            <h5 class="font-bold">Technology</h5>
            <div class="grey-text"><strong>
              CEO & Founder, of <a href="https//excellentloaded.com" _target="blank"> Excellentloaded.com </a>
              </strong></div>
          </div>
        </div>
          </div>
        </div>
      </div>
    </div>
    <hr/>




     <div class="container">
    <div class="row wow fadeInLeft" data-wow-delay=".3s">
      <div class="col-lg-6 col-xl-5 pr-lg-5 pb-5"><div class="bot_chat">
        <div class="message">
          <p class="grey-text">It wasn't  possible, until I put on my Laptop. It can take days to research for a particular thing, when you realize, you gonna be happy. <b>Remember, programmers are not robot, but they are researchers. A good programmer is a good researcher!!! </b></p>
      </div></div> </b></div>
      <div class="col-lg-6 col-xl-7 pl-lg-5 pb-4">
        <div class="row mb-3">
          <div class="col-10">
            <p class="grey-text">
             <div class="chatbot-container">

                <!-- CHAT BOT HERE -->
                <main  class="oj-web-applayout-body">
                  <div class="oj-panel oj-panel-alt1 oj-margin demo-mypanel">
                    <h1>Le-Bot Chatbot</h1>
      <button id="chat-btn">
                Chatbot
            </button>
            <div class="chatbox">
                <div class="chatlogs" id="chatlogs">
                    <div class="chat self">
                        <div class="user-photo"><img src="http://res.cloudinary.com/uyo-obong/image/upload/v1527061749/stock-vector-postman-white-bird-171697730.jpg" alt=""></div>
                        <p class="chat-message" id="chat-message">Hello!! I am Le-Bot, What's your name?</p>
                    </div>
                    
                    
                </div>
                <form action="" class="chat-form" id="chat-form" method="post">
                    <input name="chat" id="chat" type="text" value="I am:">
                    
                    <input type="submit" name="submit" value="send" id="button">
                </form>
            </div>
          </main>
        </div>
  </div>  

    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){

            $("#chat-btn").click(function(){
                $(".chatbox").slideToggle("slow");
            });

            $("#chat-form").submit(function(event){
                event.preventDefault();

                var $form = $(this),
                term = $form.find( "input[name='chat']").val(),
                url = $form.attr("action");

                var forming = $(this).serialize();
                

                var posting = $.post( url, { chat: term});
                // var posting = $.post( url, forming);

                posting.done(function(data){
                    var user = $($.parseHTML(data)).find("#user").text();
                    var result = $($.parseHTML(data)).find("#result").text();
            
                    $("#chatlogs").append('<div class="chat friend"><div class="user-photo"><img src="http://res.cloudinary.com/uyo-obong/image/upload/v1527061285/stock-vector-a-little-bird-postman-320016032.jpg" alt=""></div><p class="chat-message">' + user + '</p></div>');
                    
                    

                    setTimeout(function(){

                        $("#chatlogs").append('<div class="chat self"><div class="user-photo"><img src="http://res.cloudinary.com/uyo-obong/image/upload/v1527061539/stock-vector-flying-bird-with-postal-envelope-sitting-on-hand-robot-pigeon-with-mail-or-emale-sending-or-772650082.jpg" alt=""></div><p class="chat-message">' + result + '</p></div>');
                        $("#chatlogs").animate({
                            scrollTop: $("#chatlogs").get(0).scrollHeight
                        }, 1500);

                    }, 250);
                    
                });
                $('#chat').val('');

            });
        });
  </script>
    
        
    </body>
</html>