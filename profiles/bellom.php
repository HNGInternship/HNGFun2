<?php
if(!defined('DB_USER')){
 require "../../config.php";        
    try {
        $conn = new PDO("mysql:host=". DB_HOST. ";dbname=". DB_DATABASE , DB_USER, DB_PASSWORD);
    }catch (PDOException $pe) {
       die("Could not connect to the database " . DB_DATABASE . ": " . $pe->getMessage());
    }
}

    $result = $conn->query("Select * from secret_word LIMIT 1");
    $result = $result->fetch(PDO::FETCH_OBJ);
    $secret_word = $result->secret_word;
    $result2 = $conn->query("Select * from interns_data where username = 'bellom'");
    $user = $result2->fetch(PDO::FETCH_OBJ); 
?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		 
	$question = $_POST['question'];
	$question = preg_replace('([\s]+)', ' ', trim($question)); 
	$question = preg_replace("([?.])", "", $question); 
	if (strtolower(trim($question)) === "aboutbot") {
			  echo json_encode([
			     'status' => 1,
       			 'answer' => "Bot powered by HNG"
     		 ]);
		return;
	};
		
		// check if the string begins with the string train: 
	$checking = stripos($question, "train:");
	
	if ($checking === false) { 
	    $question = preg_replace('([\s]+)', ' ', trim($question)); 
	    $question = preg_replace("([?.])", "", $question); 
	    //check if answer already exists in database
	    $question = $question;
        $sql = 'SELECT * FROM chatbot WHERE question = "'. $question . '"';
        $q = $GLOBALS['conn']->query($sql);
        $q->setFetchMode(PDO::FETCH_ASSOC);
        $data = $q->fetchAll();
        if(empty($data)){
            echo json_encode([
        		'status' => 1,
       			 'answer' => "Am not sure i understand that but you can train me by typing--> train: your question # answer # password."
     		 ]);
          return;
        }else {
            $random = array_rand($data);
            $answer = $data[$random]['answer'];
            echo json_encode([
        		'status' => 1,
       			 'answer' => $answer,
     		 ]);
           return;
        }
	}else{ // in training mode
		
		//Get the question and answer from the user
		$userText = preg_replace('([\s]+)', ' ', trim($question)); 
	    $userText = preg_replace("([?.])", "", $userText); 
		$userText = substr($userText, 6);
     	$userText = explode("#", $userText);
     	$user_question = trim($userText[0]);
		if(count($userText) == 1){
			echo json_encode([
				'status' => 1,
				'answer' => "You have entered an invalid format.You can enter the correct format by typing-->train: question # answer # password"
			]);
			return;
		};
	    $user_answer = trim($userText[1]);    
        if(count($userText) < 3){ //the user only enter question and answer without password
	        echo json_encode([
	          'status' => 1,
	          'answer' => "Please enter training password to train me. The password is: password"
	        ]);
        	return;
        };
         //get the index of the user password
	    $user_password = trim($userText[2]);
        //verify if training password is correct
        define('PASSWORD', 'password'); //constant variable
        if($user_password !== PASSWORD){ 
	        echo json_encode([
	          'status' => 1,
	          'answer' => "Your password is not correct, you cannot train me."
	        ]);
     		return;
    	};
	    //check database if answer exist already
   		$user_answer = "$user_answer"; 
	    $sql = "SELECT * FROM chatbot WHERE answer LIKE :user_answer";
	    $stmt = $conn->prepare($sql);
	    $stmt->bindParam(':user_answer', $user_answer);
	    $stmt->execute();
	    $stmt->setFetchMode(PDO::FETCH_ASSOC);
	 	$rows = $stmt->fetchAll();
	    if(empty($rows)){     
		    $sql = "INSERT INTO chatbot (question, answer) VALUES (:question, :answer)";  //insert into database
		    $stmt = $conn->prepare($sql);
		    $stmt->bindParam(':question', $user_question);
		    $stmt->bindParam(':answer', $user_answer);
		    $stmt->execute();
		    $stmt->setFetchMode(PDO::FETCH_ASSOC);
		    
		    echo json_encode([
		    	'status' => 1,
		        'answer' =>  "Awesome! Learning is sweet! Thank you for teaching me that buddy, and for making me more smarter too! "
		      ]);			
     		return;
     	
     	}else{
     		 echo json_encode([
		    	'status' => 1,
		        'answer' => "Sorry! Answer already exist. You can train me again with same question but with an alternative answer. You can as well train me again with a new question and a new answer."
		      ]);
			return;		
     	};
    	return;
	};
}else{ 
?>




<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Bellom Sean  | Web Developer</title>
		<link href="https://fonts.googleapis.com/css?family=Changa+One|Open+Sans:400,400i,700,700i,800" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
        <style>
             /************************************
 GENERAL
 ************************************/
            .chatbox {
				width: 500px;
				min-width: 390px;
				height: 600px;
				background: #fff;
				padding: 25px;
				margin: 20px auto;
				box-shadow: 0 3px #ccc;
			}
			.chatlogs {
				padding: 10px;
				width: 100%;
				height: 450px;
				background: #eee;
				overflow-x: hidden;
				overflow-y: scroll;
			}
			.chatlogs::-webkit-scrollbar {
				border-radius: 5px;
				background: rgba(0,0,0,0.1);
			}
			.chatlogs::-webkit-scrollbar-thumb {
				width: 10px;
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
				background: #ccc;
				border-radius: 50%;
			}
			.chat .chat-message {
				width: 80%;
				padding: 15px;
				margin: 5px 10px 0;
				border-radius: 10px;
				color: #fff;
				font-size: 20px;
			}
			.friend .chat-message {
				background: #1adda4;
			}
			.self .chat-message {
				background: #1ddced;
				order: -1;
			}
			.chat-form {
				margin-top: 20px;
				display: flex;
				align-items: flex-start;
			}
			.chat-form textarea {
				background: #fbfbfb;
				width: 75%;
				height: 50px;
				border: 2px solid #eee;
				border-radius: 3px;
				resize: none;
				padding: 10px;
				font-size: 18px;
				color: #333;
			}
			.chat-form textarea:focus {
				background: #fff;
			}
			.chat-form textarea::-webkit-scrollbar {
				border-radius: 5px;
				background: rgba(0,0,0,0.1);
			}
			.chat-form textarea::-webkit-scrollbar-thumb {
				width: 10px;
			}
			.chat-form button {
				background: #1ddced;
				padding: 5px 15px;
				font-size: 30px;
				color: #fff;
				border: none;
				margin: 0 10px;
				border-radius: 3px;
				box-shadow: 0 3px 0 #0eb2c1;
				cursor: pointer;
				-webkit-transition: background .2s ease;
				-moz-transition: background .2s ease;
				-o-transition: background .2s ease;
			}
			.chat-form button:hover {
				background: #13c8d9;
			}
            
            body {
                font-family:'open sans', san serif;
            }


             #wrapper {
                max-width: 940px;
                margin: 0 auto;
                padding: 0 5%;
            }

             a {
                text-decoration:none;
            }

            img {
                max-width: 100%;
            }

            h3 {
                margin: 0 0 1em 0;
            }

             /************************************
             HEADING
             ************************************/
             header {
                 float: left;
                 margin: 0 0 30px 0;
                 padding: 5px 0 0 0;
                 width: 100%;
             }


             #logo {
                text-align: center;
                margin: 0;
            }

            h1 {
                font-family: 'Changa One', sans-serif;
                margin: 15px 0;
                font-size: 1.75em;
                font-weight: normal;
                line-height: 0.8em;
            }

            h2 {
                font-size: 0.75em;
                margin: -5px 0 0;
                font-weight: normal;
            }
            /************************************
            FO0TER
            ************************************/
            footer {	
                font-size: 0.75em;
                text-align:center;
                clear:both;
                padding-top:50px;
                color:#ccc;
            }

            .social-icon {
                width: 20px;
                height: 20px;
                margin: 0 5px;
            }

            /************************************
            PAGE: ABOUT
            ************************************/
            .profile-photo {
                display: block;
                max-width: 150px;
                margin: 0 auto 30px;
                border-radius: 20%;

            }

            /************************************
            COLORS
            ************************************/

             /* site body */
            body {
                background-color:#fff;
                color:#999;
            }

            /*green header*/
            header {
                background: #6ab47b;
                border-color: #599a68;
                text-align: center;
            }

            /*logo text*/
            h1, h2 {
                color: #fff;
            }

            /*links*/
            a {
                color: #6ab47b;
            }

            body {
                font-family: Arial, Helvetica, sans-serif;
            }

            td {
                font-family: Arial, Helvetica, sans-serif;
            }

            th {
                font-family: Arial, Helvetica, sans-serif;
            }
            
            @media screen and (min-width: 480px) {
	
            /************************************
            TWO COLUMN LAYOUT
            ************************************/

            #primary {
                width: 50%;
                float: left;
            }
            #secondary {
                width: 40%;
                float: right;
            }

            /************************************
            PAGE: ABOUT
            ************************************/
            .profile-photo {
                float: left;
                margin: 0 5% 80px 0;
            }
            
            .chatbox {
                float: left;
                width: 50%;
            }

        }
            @media screen and (min-width: 660px) {
                /************************************
                HEADER 	
                ************************************/
                .chatbox {
                    float: none;
                    width: 50%;
                }
                #logo {
                    float: left;
                    margin-left: 5%;
                    text-align: left;
                    width: 45%;
                }

                h1 {
                    font-size: 2.5em;
                }


                h2 {
                    font-size: 0.85em;
                    margin-bottom: 20px;
                    text-align: left;
                }

                header {
                    border-bottom: 5px solid #599a68;
                    margin-bottom: 60px;
                }


             }

        </style>
        
	</head>
	<body>
		<header>
			<a href="index.html" id="logo">
				<h1><?php echo $user->name ?></h1>
				<h2>Web Developer</h2>
			</a>

		</header>
		<div id="wrapper">
			<section>
				
				<img src="<?php echo $user->image_filename ?>" alt="Photogragh of Bellom Sean"  class="profile-photo">
				<h3>About</h3>
				<p>Hi, I'm Bellom Sean! This is my design portfolio where i share all of my design work.</p>
				<p>If you like to follow me on facebook, my facebook name is <a href="http://facebook.com/oluwadamilare.bellomsean">bellom sean</a>.</p>							
			</section>
            
<!--      type your chatbot code below -->
            <div class="chatbox">		
                <div class="chatlogs" id="chatlogs">
                    <div class="chat friend"> 
                        <div class="user-photo"></div>
                        <p class="chat-message">Hi, Bellom's Bot!</p>
                    </div>
                    <div class="chat friend"> 
                        <div class="user-photo"></div>
                        <p class="chat-message">To train me, please type<br><code>train: your question # answer # password</code></p>
                    </div>
                    <div id="view-chat">

                    </div>
                    <div class="chat-form">
                        <textarea id="question"  name="question" placeholder="Ask a question.."></textarea>
                        <button id ="send">Send</button>
                    </div>
                </div>
	       </div>
            
            
            
            
            
            
            
			<footer>
				<a href="http://facebook.com/oluwadamilare.bellomsean"><img src="http://res.cloudinary.com/hng-bellom/image/upload/v1524171059/image6.png" alt="Facebook Logo" class="social-icon"></a>
				<p>&copy; 2018 Bellom Sean.</p>
			</footer>
		</div>
        
        <script type="text/javascript"> 
            $(document).ready(function(){  
                var showDisplay = $("#view-chat"); 
                $("#send").click(function(event){ 
                    event.preventDefault();
                    var newMessage = $("#question");
                    var question = newMessage.val(); 
                    var empty_message = "Please enter a question";
                    if(question.trim() == ''){
                        showDisplay.append(					 	
                            '<div class="chat friend">'+'<div class="user-photo"></div>'
                            +'<p class="chat-message">'+empty_message+'</p>'+'</div>'
                        );
                        $("#chatlogs").scrollTop($("#chatlogs")[0].scrollHeight);
                    }else{
                        showDisplay.append(
                            '<div class="chat self">'+'<div class="user-photo"></div>'
                            +'<p class="chat-message">'+question+'</p>'+'</div>'
                        );
                        $("#chatlogs").scrollTop($("#chatlogs")[0].scrollHeight);
                   };
                        //after appending user question, send it to server for processing
                    $.ajax({
                            url: "/profiles/Bellom.php",
                            dataType : "json",
                            type: "post",
                            data: {question: question},
                            success: function(data) {
                                if(data.status == 1){
                                    showDisplay.append(					 	
                                        '<div class="chat friend">'+'<div class="user-photo"></div>'
                                        +'<p class="chat-message">'+data.answer+'</p>'+'</div>'
                                    );
                                    $("#chatlogs").scrollTop($("#chatlogs")[0].scrollHeight);
                                } 
                            },
                            error: function(error){
                                console.log(error);
                            }
                    });
                    newMessage.val(""); 				
                });
            }); 
        </script>
        
        
        
	</body>
</html>

<!--my image on clound-->
<!--<img src="http://res.cloudinary.com/hng-bellom/image/upload/v1524016064/bellom1.jpg" alt="image"/>-->
<!--<?php } ?>-->