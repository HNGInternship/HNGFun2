<?php
if($_SERVER['REQUEST_METHOD'] === 'GET'){

    try {
        $sql = 'SELECT * FROM secret_word';
        $q = $conn->query($sql);
        $q->setFetchMode(PDO::FETCH_ASSOC);
        $data = $q->fetch();
    } catch (PDOException $e) {
        throw $e;
    }
    $secret_word = $data['secret_word'];
}

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
?>
<!DOCTYPE html>
<html>
<head>
    <link href='https://fonts.googleapis.com/css?family=Alegreya|Allura|Almendra SC|Romanesco|Source+Sans+Pro:400,700' rel='stylesheet'>
    <link href="https://static.oracle.com/cdn/jet/v4.0.0/default/css/alta/oj-alta-min.css" rel="stylesheet" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

    <style type="text/css">


           .innerTop {
                padding: 45px;
                background-color: rgba(25,92,90,0.7);
                background-image: linear-gradient(35deg, #64b5f6 36%, #536dfe 65%);
                text-align: center;
                font-family: Arial, monospace;
                font-size: 25px;
                color:white;
            }

            /* Style The Dropdown Button */
            .dropbtn {
                background-color: #1a237e;
                color: white;
                padding: 16px;
                font-size: 16px;
                border: none;
                cursor: pointer;
            }

            h1{
                color: white;
            }
            h2{
                color: white;
            }

            /* The container <div> - needed to position the dropdown content */
            .dropdown {
                position: relative;
                display: inline-block;
            }

            /* Dropdown Content (Hidden by Default) */
            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #CFD8DC;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            /* Links inside the dropdown */
            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            /* Change color of dropdown links on hover */
            .dropdown-content a:hover {
                background-color: #f1f1f1;
            }

            /* Show the dropdown menu on hover */
            .dropdown:hover .dropdown-content {
                display: block;
            }

            /* Change the background color of the dropdown button when the dropdown content is shown */
            .dropdown:hover .dropbtn {
                background-color: #00838f;
            }

        .container{
            width: 100%;
            min-height: 100%
            background-color: rgba(25,92,90,0.7);
             background-image: linear-gradient(35deg, #64b5f6 36%, #536dfe 65%);
        }
        .body0 { 
            height: 100%;
            width: 150%;
        }

        span {
            display: inline-block;
            vertical-align: middle;
            line-height: normal;
        }

        .Bio{
            background-color:white;
            padding: 30px;
             border-radius: 50px;
             border: 2px black solid;
        }

        .main {
            position: relative;
            /*top:20px;*/
            width: 100%;
            /*padding-top: 300px;*/
            min-height: 100px;
            max-height: 230px;
            font-family: "Romanesco";
            line-height: 150px;
            font-size: 96px;
            text-align: center;

        }
        .text {
            background: -webkit-linear-gradient(0deg, #FF0F00, rgba(17, 26, 240, 0.55), #EC0F13);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .under {
            position: relative;
            /*top:450px;*/
            max-height: 100px;
            width: 100%;
            font-family: "Alegreya";
            line-height: normal;
            font-size: 32px;
            text-align: center;
            color: #000830;
        }
        .box-grey{
                background-color:white ;
                border-radius: 50px;
                box-shadow: 0 3px 12px -2px rgba(0,0,0,0.08);
                margin-top: 100px;
                margin-bottom: 30px;
                padding: 30px 25px 25px;
                text-align: center;
                height:contain;
            }
      .feat-title h2{
                color: #010101;
                text-align: center;
                font-size: 34px;
                text-transform: uppercase;
            }
        .under1 {
            position: relative;
            /*top:500px;*/
            height: 40px;
            width: 100%;
            font-family: "Alegreya";
            line-height: normal;
            font-size: 32px;
            text-align: center;
    
        }
        .under2 {
            position: relative;
            /*top:540px;*/
            height: 49.71px;
            width: 100%;
            font-family: "Alegreya";
            line-height: normal;
            font-size: 32px;
            text-align: center;
            color: #000830;
            background-color: #1380FA;
        }

        .imagee{
            height: 400px;
            width: 70%;
            text-align: center;
            border-radius: 10px;
            margin-top: 45px;
            margin-left: 45%;

        }

        body{
            background-image: url(boats.jpg);
            background-size: cover;
            padding: 0px;
        }
        
        .chatbox{
            position: fixed;
            right:0px;
            bottom: 0px;
            
        }

        .chatbody{
            
            width: 200%;

        }

        .body1 {
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 75%;
            display: flex;
            flex-direction: column;
            max-width: 700px;
            margin: 0 auto;
            color: #010101;

        }
        .chat-output {
            flex: 1;
            padding: 20px;
            display: flex;
            background: white;
            flex-direction: column;
            overflow-y: scroll;
            max-height: 500px;
        }
        .chat-output > div {
            margin: 0 0 20px 0;
        }
        .chat-output .user-message .message {
            background: #0fb0df;
            color: white;
        }
        .chat-output .bot-message {
            text-align: right;
        }
        .chat-output .bot-message .message {
            background: #eee;
        }
        .chat-output .message {
            display: inline-block;
            padding: 12px 20px;
            border-radius: 10px;
        }
        .chat-input {
            padding: 20px;
            background: #eee;
            border: 1px solid #ccc;
            border-bottom: 0;
        }
        .chat-input .user-input {
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 8px;
        }
        .send_button{
      width: 75px;
      height: 35px;
      padding: 5px;
      margin-top: 8px;
      color: black;
      border:none;
      border-radius: 5px;
      background-color: #1380FA;
    }
        

    </style>
</head>
<body>
 <section>
    <div class="innerTop">
        <h1> <strong> HNG FUN INTERNSHIP 4.0 </strong> </h1>
        <h2> <strong> PROFILE </strong> </h2>
            <div class="dropdown">
                 <button class="dropbtn">MENU</button>
                    <div class="dropdown-content">
                        <a href="file:///C:/Users/Gbemmy/Desktop/index.html#">Biography</a>
                        <a href="file:///C:/Users/Gbemmy/Desktop/index.html#">Skillset</a>
                        <a href="file:///C:/Users/Gbemmy/Desktop/index.html#">Connect with me</a>
                    </div>
                </div>

            </div>
 </section>
<div class="container">
    <div class="oj-flex oj-flex-items-pad oj-contrast-marker">
        <div class="oj-sm-12 oj-md-6 oj-flex-item">
            <div class="oj-flex oj-sm-align-items-center oj-sm-margin-2x">
                <div role="img" class="oj-flex-item alignCenter" src="http://res.cloudinary.com/michelletakuro/image/upload/v1526025467/DSC_0491.jpg" height="300px" width="30%">
                    <oj-avatar role="img" size="[[avatarSize]]" initials='[[initials]]'
                    data-bind="attr:{'aria-label':'Avatar of Gbemisola Takuro'}">
                    </oj-avatar>
                    <img class="imagee" onerror="this.src='http://res.cloudinary.com/michelletakuro/image/upload/v1526025467/DSC_0491.jpg'" src="<?=$my_data['image_filename'] ?>" >
                </div>
            </div>
            <div class="body0">
                <div class="main"><span class="text"><?=$my_data['name'] ?></span></div>
                <div class="Bio">
                 <div class="feat-title"><h2><strong>Biography</strong></h2></div>
                <p class="small-text"> <strong>Takuro Gbemisola</strong> is a technology enthusiast with a keen interest in programming language as well as community impact.She is an avid reader, open learner and is constantly seeking opportunities to develop herself.She has worked with several notable organisations like AIESEC,Wecyclers,Ignite Africa etc. She is a fellow of the YALI West Africa RLC,
        Young Professional Network (YPB) and the Andela Learning Community.Takuro Gbemisola is a graduate of the University of Lagos Quantity surveying department.
                </p>
                </div>
                 <div class="box-grey">
                  <div class="feat-title"><h2><strong>SKILLSET<strong></strong></h2></div>
                <div class="Image2">
                    <img src="http://res.cloudinary.com/michelletakuro/image/upload/v1526025462/download_2.png" height="50%" width="25%">
                    <img src="http://res.cloudinary.com/michelletakuro/image/upload/v1526025462/download_1.png" height="50%" width="25%">
                    <img src="http://res.cloudinary.com/michelletakuro/image/upload/v1526025462/download.png" height="50%" width="25%">
                    <img src="http://res.cloudinary.com/michelletakuro/image/upload/v1526025462/images.png" height="50%" width="20%">
                </div>
            </div>
                <div class="under1"><span>
                        <div class="oj-flex oj-md-align-items-center"><a href="https://github.com/mitchelletakuro">
                            <div class="oj-flex-item oj-flex oj-sm-flex-direction-column oj-sm-align-items-center oj-sm-margin-2x">
                                <img style="width:40px; height: 40px;" src="https://cdn1.iconfinder.com/data/icons/logotypes/32/github-512.png">
                            </div></a>

                            <a href="https://linkedin.com/in/gbemisola-takuro-78b34046">
                                 <div class="oj-flex-item oj-flex oj-sm-flex-direction-column oj-sm-align-items-center oj-sm-margin-2x">
                                    <img style="width:40px; height: 40px;" src="http://icons.iconarchive.com/icons/custom-icon-design/pretty-social-media/256/Linkedin-icon.png">
                                 </div>
                            </a>
                              <a href="https://twitter.com/GbemmySpeaks">
                                 <div class="oj-flex-item oj-flex oj-sm-flex-direction-column oj-sm-align-items-center oj-sm-margin-2x">
                                    <img style="width:40px; height: 40px;" src="http://res.cloudinary.com/michelletakuro/image/upload/v1526025462/images_1_1.jpg"">
                                 </div>
                            </a>
                              <a href="https://www.facebook.com/gtakuro">
                                 <div class="oj-flex-item oj-flex oj-sm-flex-direction-column oj-sm-align-items-center oj-sm-margin-2x">
                                    <img style="width:40px; height: 40px;" src="http://res.cloudinary.com/michelletakuro/image/upload/v1526025462/images_1.png">
                                 </div>
                            </a>
                        </div></span>
                </div>
                <br>
                <br>
            </div>
        </div>
        
      <br>
      <br>
      <br>

      <div class="chatbox">
        <div class="oj-sm-12 oj-md-6 oj-flex-item">
            <div class="chatbody">
          <div class="under2"><span>CYCLOBOT</span></div>
            <div class="body1">
                <div class="chat-output" id="chat-output">
                    <div class="user-message">
                        <div class="message">Hello! My name is cyclo bot.<br>I'm willing to assist you with any of your questions.<br>Type <span style="color: #FABF4B;"><strong> aboutbot</strong></span> to know more about me. </div>
                    </div>
                </div>

                <div class="chat-input">
                        <input type="text" name="user-input" id="user-input" class="user-input" placeholder="Say something here">
                        <button onclick="chat()" class="send_button" id="send">Send</button>
                </div>
            

            </div>
        </div>
        </div>
    </div>
    </div>
  



   

</div>

</body>


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
        

        
        xhttp.open("POST", "/profiles/michelletakuro", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("message="+message.value);
        $('#chat-output').animate({
                scrollTop: chatOutput.scrollHeight,
                scrollLeft: 0
            }, 500);
    }
</script>

</html>