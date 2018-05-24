
<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){

        //die('Hi');
          require('../../config.php"');
        $conn =  mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD,DB_DATABASE );

       // $conn = new mysqli('localhost', 'root', 'root', 'hng_fun');    
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
                        'results'=> 'Trained Successfully'
                    ]);
                    return;
                }else{
                    echo json_encode([
                        'results'=> 'Error training'.$conn->error
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
            'reply'=>  'working'
        ]);
        
    return ;
    }else{
        //echo 'HI';
        //return;
    }
?>

<!DOCTYPE html>

<html>
	<head>
		<Title> Chidinma </Title>

		<style> 
		
		body{
			background-color:  #A394CD;
			height: auto;
		}
		
		img  {width: 100px;
			height: 100px;
			border-radius: 40%;
			margin-top: 80px;
			margin-left:10px;
		}
		h5 {
			margin-top: 1px;
			margin-left:20px;
			padding-top: 5px;
			padding-left: 5px;
		}

		h4 {font-style: italic;
			color: #052638;
			text-align: left;
			margin-top: -15px;
			margin-left:20px;
			}

		h3 {
			font-size: 16px;
			font-weight: bold;
			color: white;
		}
		
		h2{
			margin-left:20px;
			text-align: left;
		}
		h1{
			color: black;
			text-align: center;
		}
		.fab-fa-twitter-square{font-size:7px;}


		.mybot{background-color: #333333;
			float:right;
			width: 380px;
			height: 450px;
			margin-top: 6%;

		}

		.title{
			background-color: #C4C4C4;
			width:380px;
			height:40px;
			align-self: center;
			margin-top: -21px;
		}
		
		.intro{
			
			background-color: #C4C4C4;
			width:370px;
			height:100px;
			border-top: 5px;
			border-left: 5px;
			margin-top: 15px;
			margin-left: 5px;
			margin-right: 5px;
		}
		.text{
			background-color: #C4C4C4;
			width:180px;
			height:40px;
			border-radius: 20px;
			border-left: 10px;
			margin-top: 30px;
			margin-left: 10px;
			}
		
		

		.reply{

			background-color: #C4C4C4;
			width:180px;
			height:40px;
			border-radius: 20px;
			float: right;
			border-top: 15px;

		}
		.text_area{
			background-color: #C4C4C4;
			width:275px;
			height:45px;
			border-left: 15px;
			border-top:10px;
			padding-top: 5px;
			margin-left: 10px;


		}
		.send {
			background-color: #2995D2;
			width:90px;
			height:30px;
			border-radius: 20px;
			color: white;
			font-weight: bold;
		}

		#chat_area{
   			margin-top:10px;
    		height:180px;
    		overflow-y: scroll;
   
		}

		#message {
			width: 250px;
			margin-left: 15px;
			height: 30px;
			border-top: 10px;
			background-color: white;
		}
		
		#time {color: white;}

		#user {color: white;
			background-color: #A394CD;
			margin-left: 15px;
			border-left: 2px;
			border-radius: 10px;
			max-width: 200px;

			}
		#bot{color: white;
			margin-left: 15px;
			border-left: 2px;
			background-color: #A394CD;
			border-radius: 10px;
			max-width: 200px;

			}

	

		</style>	
		
	</head>
	
	<body>
		<div class = "container">
		
				<div class = "mybot"> 
					<div class = "title"> <h1> NMA'S BOT </h1>
					</div>
					<span id = "time"><h5>
                    <?php date_default_timezone_set('Africa/lagos');
					echo  date("d:m:Y | h:ia"); ?> </h5>
                	</span>
					<div class = "intro"><p><h5> Hi there!, welcome. Type "aboutbot" to learn about me. To train me,type "train : question # answer # password</h5></p>
					</div>
					
					<div id = "chat_area">
						
					</div>
					<br/>

					 <input type="text" name="message" id="message">
                	<button class = "send"  onclick="loadDoc()">SEND</button>	
				</div>	
				<img src = "http://res.cloudinary.com/chidinma/image/upload/v1525710987/IMG_20161231_171852.jpg" alt="Chidinma's_pix" width=200 height=200>
				

				<p><h2> ORJI CHIDINMA N. </h2></p>
				<p><h4>Tech enthusiast, Intern @HNGInternship 4.0, <br/> web development student. </h4> <p>
			
				<p> <h5> email: <u>chypearlnel@gmail.com</u></h5></p>
				<p><h5> Phone no: 09022181787 </h5></p>
					
				<p> <h5>Twitter<a href="https://twitter.com/Pearlynma"> <i class="fab fa-twitter-square" ></i> </a></h5></p>	
		</div>

    <script>
    function loadDoc() {
        //alert('Hello');
        var message = document.querySelector('#message');
        //alert(message.value);
        var p = document.createElement('p');
        p.id = 'user';
        var chatarea = document.querySelector('#chat_area');
        p.innerHTML = message.value;
        chatarea.appendChild(p);
        
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
            console.log(xhttp.responseText);
            var result = JSON.parse(xhttp.responseText);
            
            var pp = document.createElement('p');
            pp.id = 'bot';
            if(result.results == ''){
                pp.innerHTML = 'Not in database. please train me';
                chatarea.appendChild(pp)
                return;
            }
            console.log(typeof(result.results))
            if(typeof(result.results) == 'object' ){
                var res = Math.floor(Math.random() * result.results.length);
                pp.innerHTML = result.results[res];
                chatarea.appendChild(pp)
            }else{
                var res = Math.floor(Math.random() * result.results.length);
                pp.innerHTML = result.results;
                chatarea.appendChild(pp)
            }
            
            }
        };
        xhttp.open("POST", "profiles/chidinma");
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("message="+message.value);
    }
    </script>
	</body>
	
</html>
