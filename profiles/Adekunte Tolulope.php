<?php
include_once("../answers.php"); 
if (!defined('DB_USER')){
            
  require "../../config.php";
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
  $sql = "SELECT * FROM interns_data WHERE `username` = 'juliet' LIMIT 1";
  $q = $conn->query($sql);
  $q->setFetchMode(PDO::FETCH_ASSOC);
  $my_data = $q->fetch();
} catch (PDOException $e) {
  throw $e;
}
function decider($string){
  
  if (strpos($string, ":") !== false)
  {
    $field = explode (":", $string, 2);
    $key = $field[0];
    $key = strtolower(preg_replace('/\s+/', '', $key));
  if(($key == "train")){
     $password ="password";
     $trainer =$field[1];
     $result = explode ("#", $trainer);
  if($result[2] && $result[2] == $password){
    echo"<br>Training mode<br>";
    return $result;
  } 
  else echo "opssss!!! Looks like you are trying to train me without permission";   
  }
   }
}
function assistant($string)
{    $reply = "";
    if ($string == 'what is my location') {
       
      
      $ip=$_SERVER['REMOTE_ADDR'];
      $reply =unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
      $reply =var_export('you are in '. $reply['geoplugin_regionName'] .' in '. $reply['geoplugin_countryName']);
      return $reply;
        
    }
    elseif ($string == 'tell me about your author') {
        $reply= 'Her name is <i class="em em-sunglasses"></i> Chidimma Juliet Ezekwe, she is Passionate, gifted and creative backend programmer who love to create appealing Web apps solution from concept through to completion. An enthusiastic and effective team player and always challenge the star to quo by taking up complex responsibilities. Social account ';
        return $reply;    
    }
    elseif ($string == 'open facebook') {
        $reply= "<p>Facebook opened successfully </p> <script language='javascript'> window.open(
    'https://www.facebook.com/',
    '_blank' //
    );
    </script>
    ";
    return $reply;
    }
    elseif ($string == 'open twitter') {
        $reply = "<p>Twitter opened successfully </p> <script language='javascript'> window.open(
    'https://twitter.com/',
    '_blank' //
    );
    </script>
    ";
    return $reply;
    }elseif ($string == 'open linkedin') {
        $reply= "<p>Linkedin opened successfully </p> <script language='javascript'> window.open(
    'https://www.linkedin.com/jobs/',
    '_blank' //
    );
    </script>
    ";
    return $reply;
    }
    elseif ($string == 'shutdown my pc') {
        $reply =  exec ('shutdown -s -t 0');
        return $reply;
    }elseif ($string == 'get my pc name') {
        $reply = getenv('username');
        return $reply;
    }
    else{
        $reply = "";
        return $reply;
    }
  
}
$existError =false;
$reply = "";//process starts
//echo "This is the POST message " + $_POST['msg'];
if(isset($_GET['msg'])){ 
  if ($_GET['msg'] == 'commands') {
    $reply = 'These are my commands <p>1. what is my location, 2. tell me about your author, 3. open facebook, 6. open twitter, 7. open linkedin, 8. shutdown my pc, 9. get my pc name.</p>';
    echo $reply;
  } 
      if($reply==""){
       $reply = assistant($_GET['msg']);
       echo $reply;
       
     }
  if($reply =="") {
    $post= $_GET['msg'];
    $result = decider($post);
    if($result){
      $question=$result[0]; 
      $answer= $result[1];
      $sql = "SELECT * FROM chatbot WHERE question = '$question' And answer = '$answer'";
      $stm = $conn->query($sql);
      $stm->setFetchMode(PDO::FETCH_ASSOC);
      $result = $stm->fetchAll();
        
        if (count(($result))> 0) {
              
          // while($result) {
          //   $strippedQ = strtolower(preg_replace('/\s+/', '', $question));
          //   $strippedA = strtolower(preg_replace('/\s+/', '', $answer));
          //   $strippedRowQ = strtolower(preg_replace('/\s+/', '', $result['question']));
          //   $strippedRowA = strtolower(preg_replace('/\s+/', '', $result['answer']));
          //   if(($strippedRowQ == $strippedQ) && ($strippedRowA == $strippedA)){
          //   $reply = "I know this already, but you can make me smarter by giving another response to this command";
          //   $existError = true;
          //   break;
            
          //   }
              
          // }  
          $existError = true; 
          echo "I know this already, but you can make me smarter by giving another response to this command";
            
        } 
      else
        if(!($existError)){
          $sql = "INSERT INTO chatbot(question, answer)
          VALUES(:quest, :ans)";
          $stm =$conn->prepare($sql);
          $stm->bindParam(':quest', $question);
          $stm->bindParam(':ans', $answer);
          $saved = $stm->execute();
            
          if ($saved) {
              echo  "Thanks to you, I am smarter now";
          } else {
              echo "Error: could not understand";
          }
            
          
        }  
  }
  else{
    $input = trim($post); 
 
  if($input){
    
    $sql = "SELECT * FROM chatbot WHERE question = '$input'";
    $stm = $conn->query($sql);
    $stm->setFetchMode(PDO::FETCH_ASSOC);
    $res = $stm->fetchAll();
    
    if (count($res) > 0) {
    
      $index = rand(0, count($res)-1);
      $response = $res[$index]['answer'];  
      echo $response;
    
    }
    else{
       echo "I did'nt get that, please rephrase or try again later";
    }       
  }
}
          
      
    
      }       
  
 
return;
}
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link id="css" rel="stylesheet" href="https://static.oracle.com/cdn/jet/v4.2.0/default/css/alta/oj-alta-min.css" type="text/css"/>


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
				<button>Submit</button>
			</div>
		</div>
		<div id="foot">
		<kbd>ADTREX</kbd>
		</div>
	</div>
</div>
                    <div class="chatbox-messages" >
                      <div class="messages clear"><span class="avatar"><img src="http://res.cloudinary.com/julietezekwe/image/upload/v1523964204/robot.jpg"alt="Debby Jones" /></span><div class="sender"><div class="message-container"><div class="message"><p>
                      Hi My name is Cutie <i class="em em-sunglasses"></i> I can tell you about My Author <i class="em em-smiley"></i></p>
                              <p>You can tell me what to do i promise not to fail you, just type "commands' to see the list of what i can do.<br>You can train me too by simply using the key word "train", seperate the command and response with "#", and ofourse, the password</p>
                              </div><span class="delivered"><?php
            echo "" . date("h:i:a");
            ?></span></div><!-- /.message-container -</div><!-- /.sender --></div><!-- /.messages -->
                            </div>
                            <div class="push"></div>

                    </div><!-- /.chatbox-messages -->


                    <div class="message-form-container">

                      <script type="text/javascript">
                                  $(document).ready(function(){
               $('#msg').keypress(
                function(e){
                    if (e.keyCode == 13) {
                        e.preventDefault();
                        var msg = $(this).val();
                  $(this).val('');
                        if(msg !== '' )
                  $('<div class="messages clear"><div class="user"><div class="message-container"><div class="message"><p>'+msg+'</p></div><span class="delivered"><?php
            echo "" . date("h:i:a");
            ?></span></div></div><!-- /.user --></div>').insertBefore('.push');
                  $('.chatbox-messages').scrollTop($('.chatbox-messages')[0].scrollHeight);
                  formSubmit();
                    }
                function formSubmit(){
                var message = $("#msg").val();
                    var dataString = 'msg=' + msg;
                    jQuery.ajax({
                        url: "/profiles/Adekunte Tolulope.php",
                        data: dataString,
                        type: "GET",
                         cache: false,
                             success: function(response) {
            setTimeout(function(){
                     $(' <div class="messages clear"><span class="avatar"><img src="http://res.cloudinary.com/julietezekwe/image/upload/v1523964204/robot.jpg"alt="Debby Jones" /></span><div class="sender"><div class="message-container"><div class="message"><p>'+response+'</p></div><span class="delivered"><?php
            echo "" . date("h:i:a");
            ?></span></div><!-- /.message-container -</div><!-- /.sender --></div><!-- /.messages --></div>').insertBefore('.push');
                  $('.chatbox-messages').scrollTop($('.chatbox-messages')[0].scrollHeight);
                  play();
                },  1000);
                  },
                        error: function (){}
                    });
                return true;
                }
                    });
            });
                  function play(){
                   var audio = document.getElementById("audio");
                   audio.play();
                             }                
            </script>
            <audio id="audio" src="https://res.cloudinary.com/julietezekwe/video/upload/v1523964158/beep.mp3" ></audio>

                      <form class="message-form" method="POST" action="" >
                        <textarea id="msg" name="msg" value=""  placeholder="Type a message here..."></textarea>
                          </form><!-- /.search-form -->


                    </div><!-- /.message-form-container -->

                  </div><!-- /.chatbox -->

                </div><!-- /.content -->

              </div><!-- /.wrapper -->


        </div>
      </div>
      <!-- /.row -->

    

    </div>
    <!-- /.container -->



    <!-- Bootstrap core JavaScript -->
    

    <!-- Custom scripts for this template -->
    <script src="../js/hng.min.js"></script>
  
</div><!-- /ko --><div data-bind="_ojNodeStorage_" style="display: none;" class="oj-subtree-hidden">
        </div></oj-module>
      </div>
      </div>
 </div>
</body>
<!-- end jet -->


  <body>

  

        

      
   
          
            

  </body>

</html>
