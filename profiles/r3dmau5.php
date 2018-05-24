<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require "../answers.php";
   
    if(!defined('DB_USER')){
        require "../../config.php";		
        try {
            $conn = new PDO("mysql:host=". DB_HOST. ";dbname=". DB_DATABASE , DB_USER, DB_PASSWORD);
        } catch (PDOException $pe) {
            die("Could not connect to the database " . DB_DATABASE . ": " . $pe->getMessage());
        }
    }
    $question = $_POST['question'];
    $question_lower = strtolower($question);
    $testvar = "?".$question_lower;  #Make Data Easier to compare
    if(strrpos($testvar, "train") != NULL){
        
        $trainInfo = explode("#", $question_lower);
        $questionInfo = explode(":", $trainInfo[0]);
        $question_temp = $questionInfo[1];
        $answer_temp = $trainInfo[1];
        $question_temp = trim(preg_replace("([?.])", "", $question_temp));
        $answer_temp = trim(preg_replace("([?.])", "", $answer_temp));
        $password_temp = trim(preg_replace("([?.])", "", $trainInfo[2] ));
        $password = $password_temp ;
        if ($password !== "password"){
            echo json_encode([
                'status' => 1,
                'reply' => "Wrong password, you are not authorized to train me",
              ]);
              return;
        }else{
            try{
            $sql = "insert into chatbot (question, answer) values (:question, :answer)";
            $initiate = $conn->prepare($sql);
            $initiate->bindParam(':question', $question_temp);
            $initiate->bindParam(':answer', $answer_temp);
            $initiate->execute();
            $initiate->setFetchMode(PDO::FETCH_ASSOC);
            if($initiate){
                echo json_encode(['status' => 1, 'reply' => "I have been trained, now you can ask me anything"]);
                return; 
            } }
            catch (PDOException $e) {
                throw $e;
            }
          
              
            }
           
        }
        else if(strrpos($testvar, "train") == NULL){
            if(strrpos($testvar, "help") != NULL){
                echo json_encode([
                    'status' =>1,
                    'reply' => "Hello, thanks for talking to me, Here is a list of commands I accept, <i>type</i> <b> Train: question # answer # password</b> in this format to train me , 
                    <i>Type</i> <b>aboutbot</b> to know my version number,
                    <i>Type</i> <b>aboutowner</b> to know more about my master
                    <i>Type</i> <b>quadratic: a # b # c </b> in this format so i can solve your quadratic equation for you;
                    "
                ]);
                return;
                
            }
            else if(strrpos($testvar, "hi") || strrpos($testvar, "hello") || strrpos($testvar, "what's up") || strrpos($testvar, "Fuck you")){
                echo json_encode([
                    'status' => 1,
                    'reply' => "Hey, How do you do?"
                ]);
                return;
            }
            else if(strrpos($testvar, "quadratic")){
                $trainInfo = explode("#", $question_lower);
                $firstInfo = explode(":", $trainInfo[0]);
                $thirdValue = trim(preg_replace("([?.])", "", $trainInfo[2]));
                $secondValue = trim(preg_replace("([?.])", "", $trainInfo[1]));
                $firstValue = trim(preg_replace("([?.])", "", $firstInfo[1] ));
                $result = davidQuadraticEquation($firstValue, $secondValue, $thirdValue);
                echo json_encode([
                    'status'=> 1,
                    'reply' => " ".$result
                ]);
                
               
                return;
            }
           
           else{
            $question = "%$question%";
            try{
                $sql = "select * from chatbot where question like :question";
                $initiate = $conn->prepare($sql);
                $initiate->bindParam(':question', $question);
                $initiate->execute();
                $initiate->setFetchMode(PDO::FETCH_ASSOC);
                $rows = $initiate->fetchAll();
                if($rows){
                 $rows_value = count($rows);
                if($rows_value>0){
                    $random = rand(0, $rows_value - 1);
                    $row = $rows[$random];
                    $answer = $row['answer'];
                    echo json_encode([
                        'status' => 1,
                        'reply' => $answer,
                      ]);
                      return;
                    }
                }
    
            }
            catch (PDOException $e) {
                throw $e;
            }
           }
            
        }
    
        
    }
   
 
?>
<!DOCTYPE html>
<html lang ="en-US"> 
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UDOH FAITH</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <style>
        body{
            background-image: url("http://res.cloudinary.com/r3dmau5/image/upload/o_80/v1526720037/neonbrand-262805-unsplash.jpg");
            min-height: 100vh;
            background-repeat: no-repeat;
            background-size: cover;

        } 
        .card{
            max-width: 25%;
            margin-top: 10%;
            /* border-radius: 20%; */
            height: 450px;
            
            
        }     
        .card-top{
            background-color: #00AEFF;
            height: 70%;
            /* border-radius: 5% 5% 0 0; */
        }
        } 
        .card{
            max-width: 30%;
            margin-top: 50%;
            border-radius: 60%;
        }

        .chatbotbox {
            background-color:white;
            margin-top:10px;
            float:left; 
            margin-left:100px;
            padding:20px;
            height:450px;
            width: 450px;
            border-width:2px;
            text-align: left;
            min-width:390px;
            border-style: solid;
            border-color: grey;
            box-shadow: 0, 4px grey;
       }#chatlogs {
            padding:10px;
            width:100%;
            height:400px;
            overflow-x:hidden;
            overflow-y:scroll;
       }#chatlogs::-webkit-scrollbar{
            width:10px;
        }#chatlogs::-webkit-scrollbar-thumb{
            border-radius:5px;
            background-color:grey;
        }.questionform input{
            margin-left:20px;
            height:40px;
            border:2px solid grey;
            border-radius:3px;
            color:grey;
            font-size:18px; 
            width:70%;   
        }#chatform{
            margin-top:20px;  
        }.questionform{
            width:100%;
        }.questionform button{
            padding:10px;
            margin-top:5px;
            margin-left:5px;
            border:none;
            color:white;
            font-size:20px;
            background-color:cornflowerblue;
        }.bot{
           color : black;
           font-weight:bold;
       }.username{
           color: springgreen;
           font-weight:bold;
       }       
        
    </style>
    
    </head>

    <body>

    


    <div class="d-flex justify-content-center">
        <div class="card rounded p-0 mt-5">
            <div class="card-top d-flex justify-content-center">
                <div class="d-block">
                <div class="d-flex justify-content-center mt-5">
                    <img src="http://res.cloudinary.com/r3dmau5/image/upload/v1524170442/IMG_20180203_122504_866.png" class=" w-25 h-25 img-fluid">              
                </div>                
                    <div class="card-body text-center">
                        <p class="card-title h2" style="color:white;"> Udoh Faith Edima</p>
                        <p class="card-text h4 mb-4" style="color:white;">Android | Graphics | UI/UX</p>
                        <a href="facebook.com/fudoh2">
                            <i class="fab fa-facebook-f fa-fw text-dark fa-2x"></i>
                        -</a>
                        <a href="twitter.com/FaithUdoh11">
                            <i class="fab fa-twitter fa-fw text-dark fa-2x"></i>  
                        </a>
                        <a href="github.com/drizzt401">
                            <i class="fab fa-github fa-fw text-dark fa-2x"></i>          
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <div class = "chatbotbox" >
        <div id="chatlogs"> 
        <div > <span class= "bot" > J4rvis :</span> Hello there, I'm J4rvis. How may I help you today? type <b>help</b> to see a list of the commands I accept  </div>


        
        </div> 
            
        <div id= "chatform">
            <form  id="form" class = "questionform">
            <input id="input" type="text"  placeholder="Your message goes here">
            <button id="send" type="submit">SUBMIT</button>
            </form>
           
        </div>
    </div> 
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script>
    $(function(){
        $("#form").submit(function(e){
            e.preventDefault();
            var question = $("#input").val();
            $("#input").val("");
            var client = document.getElementById('chatlogs');
            if(question.trim() !== ''){
                var text = document.createElement('div');
                    text.innerHTML = "<br>"  + "<span class= 'username' > You: </span>" + question + "<br>";
                    client.appendChild(text);
                if(question.toLowerCase().includes("aboutbot")){
                    var servertext = document.createElement('div');
                    servertext.innerHTML = "<br>"  + "<span class= 'bot' > J4rvis: </span>" + "Version : 1.1.0" + "<br>";
                    client.appendChild(servertext);
                    return false;
                }
                else if (question.toLowerCase().includes("aboutowner")){
                    var servertext = document.createElement('div');
                    servertext.innerHTML = "<br>"  + "<span class= 'bot' > J4rvis: </span>" + "Follow him on Twitter @FaithUdoh11";
                    client.appendChild(servertext);
                    return false;
                }
                $.ajax({
				url: "/profiles/r3dmau5.php",
				type: "post",
				data: {question: question},
                dataType: "json",
                success: function(response){
                    if(response.status === 1){
                       
                    var servertext = document.createElement('div');
                    servertext.innerHTML = "<br>"  + "<span class= 'bot' > J4rvis: </span>" + response.reply + "<br>";
                    client.appendChild(servertext); 
                    }
                },          
                    error: function(error){
                    console.error(error);
                    var servertext = document.createElement('div');
                    servertext.innerHTML = "<br>"  + "<span class= 'bot' > J4rvis: </span>" + "Sorry, I'm having a hard time understanding you right now, you could offer to train me" + "<br>";
                    client.appendChild(servertext); 
                    
				}                               
                   
                
            })
            }    
 
      
            
           
            
        })
    });
    
    </script>



                
                <?php
                require_once 'db.php';
                try {
                    $select = 'SELECT * FROM secret_word';
                    $query = $conn->query($select);
                    $query->setFetchMode(PDO::FETCH_ASSOC);
                    $data = $query->fetch();
                } catch (PDOException $e) {
                    throw $e;
                }
                $secret_word = $data['secret_word'];        
            ?>

        
    

</html>