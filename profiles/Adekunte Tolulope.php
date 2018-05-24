<?php
if($_SERVER['REQUEST_METHOD'] !== "POST"){
    if(!defined('DB_USER')){
        require_once __DIR__."/../../config.php";
        try {
            $conn = new PDO("mysql:host=". DB_HOST. ";dbname=". DB_DATABASE , DB_USER, DB_PASSWORD);
        } catch (PDOException $e) {
            die("Could not connect to the database " . DB_DATABASE . ": " . $e->getMessage());
        }
    }
    try{
        $result = $conn->query("Select * from secret_word LIMIT 1");
        $result = $result->fetch(PDO::FETCH_OBJ);
        $result2 = $conn->query("Select * from interns_data where username='Adekunte Tolulope'");
        $user = $result2->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $e){
        throw $e;
    }
    $secret_word = $result->secret_word;
}
?>

<?php
if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    if(!defined('DB_USER')){
        require_once __DIR__."/../../config.php";
        try {
            $conn = new PDO("mysql:host=". DB_HOST. ";dbname=". DB_DATABASE , DB_USER, DB_PASSWORD);
        } catch (PDOException $e) {
            die("Could not connect to the database " . DB_DATABASE . ": " . $e->getMessage());
        }
    }
    //require "../answers.php"; // This is the offending line that caused all the problem. I need to figure out how to use it correctly.
    date_default_timezone_set("Africa/Lagos");
    // header('Content-Type: application/json');
    if(!isset($_POST['question'])){
        echo json_encode([
            'status' => 1,
            'answer' => "Please type in a question"
        ]);
        return;
    }
    $question = $_POST['question']; //get the entry into the chatbot text field
    //check if in training mode
    $index_of_train = stripos($question, "train:");
    if($index_of_train === false){//then in question mode
        $question = preg_replace('([\s]+)', ' ', trim($question)); //remove extra white space from question
        $question = preg_replace("([?.])", "", $question); //remove ? and .
        //check if answer already exists in database
        $question = "%$question%";
        $sql = "select * from chatbot where question like :question";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':question', $question);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $rows = $stmt->fetchAll();
        if(count($rows)>0){
            $index = rand(0, count($rows)-1);
            $row = $rows[$index];
            $answer = $row['answer'];
            //check if the answer is to call a function
            $index_of_parentheses = stripos($answer, "((");
            if($index_of_parentheses === false){ //then the answer is not to call a function
                echo json_encode([
                    'status' => 1,
                    'answer' => $answer
                ]);
            }else{//otherwise call a function. but get the function name first
                $index_of_parentheses_closing = stripos($answer, "))");
                if($index_of_parentheses_closing !== false){
                    $function_name = substr($answer, $index_of_parentheses+2, $index_of_parentheses_closing-$index_of_parentheses-2);
                    $function_name = trim($function_name);
                    if(stripos($function_name, ' ') !== false){ //if method name contains whitespaces, do not invoke any method
                        echo json_encode([
                            'status' => 0,
                            'answer' => "The function name should be without white spaces"
                        ]);
                        return;
                    }
                    if(!function_exists($function_name)){
                        echo json_encode([
                            'status' => 0,
                            'answer' => "I am unable to find the function you require"
                        ]);
                    }else{
                        echo json_encode([
                            'status' => 1,
                            'answer' => str_replace("(($function_name))", $function_name(), $answer)
                        ]);
                    }
                    return;
                }
            }
        }else{
            echo json_encode([
                'status' => 0,
                'answer' => "I can't answer that right now, please train me.The format...<br> <b>train: question#answer#password</b>"
            ]);
        }
        return;
    }else{
        //in training mode
        //get the question and answer
        $question_and_answer_string = substr($question, 6);
        //remove excess white space in $question_and_answer_string
        $question_and_answer_string = preg_replace('([\s]+)', ' ', trim($question_and_answer_string));
        $question_and_answer_string = preg_replace("([?.])", "", $question_and_answer_string); //remove ? and . so that questions missing ? (and maybe .) can be recognized
        $split_string = explode("#", $question_and_answer_string);
        if(count($split_string) == 1){
            echo json_encode([
                'status' => 0,
                'answer' => "I can't answer that right now, please train me.The format...<br> <b>train: question#answer#password</b>"
            ]);
            return;
        }
        $que = trim($split_string[0]);
        $ans = trim($split_string[1]);
        if(count($split_string) < 3){
            echo json_encode([
                'status' => 0,
                'answer' => "training password required"
            ]);
            return;
        }
        $password = trim($split_string[2]);
        //verify if training password is correct
        define('TRAINING_PASSWORD', 'password');
        if($password !== TRAINING_PASSWORD){
            echo json_encode([
                'status' => 0,
                'answer' => "invalid training password"
            ]);
            return;
        }
        //insert into database
        $sql = "insert into chatbot (question, answer) values (:question, :answer)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':question', $que);
        $stmt->bindParam(':answer', $ans);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        echo json_encode([
            'status' => 1,
            'answer' => "Thank you, I am now smarter"
        ]);
        return;
    }
    echo json_encode([
        'status' => 0,
        'answer' => "I can't answer that right now, please train me.The format...<br> <b>train: question#answer#password</b>"
    ]);
}
?>
<?php
$result = $conn->query("SELECT * FROM secret_word LIMIT 1");
 $res = $result->fetch(PDO::FETCH_OBJ);
  $secret_word = $res->secret_word;
 $result2 = $conn->query("SELECT * FROM interns_data WHERE username = 'Adekunte Tolulope'");
 $user = $result2->fetch(PDO::FETCH_OBJ);
$name = $user-> name;
$image = $user-> image_filename;
$username = $user-> username;
?>


<!Doctype html>
<html>
   <head>
       <!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
	margin-top:70px;
  text-align: center;
  font-family: arial;
}
.title {
  color: grey;
  font-size: 18px;
}
button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}
a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}
button:hover, a:hover {
  opacity: 0.7;
}
#Chatbot-holder{
		position: fixed;
		right:5px;
		bottom:-345px;
		z-index: 4;
		height:410px;
		transition: 1s;
		
	}
	#Chatbot-holder:hover{
		bottom:5px;
	}
	#botImg{
		border-radius:100%;
		padding:6px;
		width:50px;
		height:50px;
		text-align: center;
		margin: auto;
	}
	#botImg > img{
		width:inherit;
		height: inherit;
		border:solid 1px black;
		border-radius: 100%;
	}
	#content{
		
		padding:10px 8px;
		margin-top: 2px;
	}
	#content > #head {
		background-color: #cccccc;
		color:black;
		text-align: center; 
		padding:10px;
	}
	#content > #head > span{
		text-shadow: 0px 0px 2px white;
		font-size: 20px;
		
		
	}
	#content > #body{
		background-color: #cccccc;
		color:black;
		text-align: center; 
		padding:10px;
	}
	#body > div{
		border:1px ridge gray;
		padding:10px auto; 
	}
	#body div code{
		text-shadow: 0px 1px 2px red;
	}
	#body #inpBut{
		display: flex;
	}
	#body #ans{
		padding: 10px 2px;
		overflow-y: auto;
		height:100px;
	}
	#body .ques{
		width:50%;
		background-color:rgba(50,70,200,0.8); 
		padding: 4px 0px;
		text-align: left;
		border-radius: 8px;
		text-indent: 3px;
	} 
	#body .ans{
		width:50%;
		background-color:rgba(50,200,70,0.8); 
		padding: 4px 0px;
		margin-left:50%;
		text-align: right;
		border-radius: 8px;
		padding-right: 1px;
	}
	#body #inpBut input{
		width:100%;
		border:none;
		padding:10px;
		background-color: rgba(0,0,0,0.7);
		color:white;
		text-shadow: 0px 0px 1px navy;
	}
	#body #inpBut button {
		padding:10px;
		color:navy;
		text-shadow: white;
		background-color: rgba(200,200,200,0.8);
		box-shadow: 0px 0px 4px 2px black;
	}
	#foot{
		text-align: center;
		letter-spacing: 3px;
		font-weight:bolder;
		background-color: #cccccc;
		color:black;
		text-shadow: 0px 0px 2px black;
		padding:10px;
	}
	
       
</style>
    </head>
<body>



<div class="card">
  <img src="<?php echo $image; ?>" alt="Profile Pic">
  <h1><?php echo $name; ?></h1>
  <p class="slack username"><?php echo $username; ?></p>
  <p class="title">Programmer</p>
  <p>HNG Internship</p>
  <div style="margin: 24px 0;">
  
    <a href="#"><i class="fa fa-whatsapp"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-instagram"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
 <p><button>Contact</button></p>
</div>


<div id="Chatbot-holder">
	<div id="botImg">
		<img src="http://pitdesk.com/vi/jkh/images/top-img.png">
	</div>
	<div id="content">
		<div id="head">
			<span>CHATBOT</span>
		</div>
		<div id="body">
			<div>STRINGS TO TRAIN:<br>
				<small>
					<code>train:questions #answers #password</code>
				</small>
			</div>

			<div id="ans">
			
				
			</div>
			<div id="inpBut">
				<input type="text" id="botInp" placeholder="Enter Question">
				<button onclick="processR()">Submit</button>
			</div>
		</div>
		<div id="foot">
		<kbd>ADTREX</kbd>
		</div>
	</div>
	<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</div>
<script>
    $(document).ready(function(){
        $('#submit-button').click(function(){
            $('#bot-interface').stop().animate({scrollTop: $('#bot-interface')[0].scrollHeight}, 1000);
        });
        var questionForm = $('#bot-interface');
        questionForm.submit(function(e){
            e.preventDefault();
            console.log($("#chats")[0].scrollHeight);
            var questionBox = $('#question');
            var question = questionBox.val();
            //display question in the message frame as a chat entry
            var messageFrame = $('#chat-interface');
            var chatToBeDisplayed = '<div class="row message" id="user-message">'+
                '<div class="col-md-12">'+
                '<p>'+question+'</p>'+
                '</div>'+
                '</div>';
            messageFrame.html(messageFrame.html()+chatToBeDisplayed);
            $("#chats").scrollTop($("#chats")[0].scrollHeight);
            //send question to server
            $.ajax({
                url: "/profiles/interactive_bee",
                type: "post",
                data: {question: question},
                dataType: "json",
                success: function(response){
                    if(response.status == 1){
                        var chatToBeDisplayed = '<div class="row message"id="bot-message">'+
                            '<div class="col-md-1 " >'+
                            '<p>Bot:</p>'+
                            '</div>'+
                            '<div class="col-md-11 ">'+
                            '<p>'+response.answer+'</p>'+
                            '</div>'+
                            '</div>';
                        messageFrame.html(messageFrame.html()+chatToBeDisplayed);
                        questionBox.val("");
                    }else if(response.status == 0){
                        var chatToBeDisplayed = '<div class="row message" id="bot-message">'+
                            '<div class="col-md-1 " >'+
                            '<p>Bot:</p>'+
                            '</div>'+
                            '<div class="col-md-11 ">'+
                            '<p>'+response.answer+'</p>'+
                            '</div>'+
                            '</div>';
                        messageFrame.html(messageFrame.html()+chatToBeDisplayed);
                        $("#chats").scrollTop($("#chats")[0].scrollHeight);
                    }
                },
                error: function(error){
                    console.log(error);
                }
            })
        });
    });
</script>
</body>
</html>
