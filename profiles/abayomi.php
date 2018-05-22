  <?php
session_start();
if (!isset($_SESSION["all"])){
    $_SESSION["all"] = [];
}if(!defined('DB_USER')){
    require_once "../config.php";
    $servername = DB_HOST;
    $username = DB_USER;
    $password = DB_PASSWORD;
    $dbname = DB_DATABASE;
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }}
global $conn;
$solution = '';
if (isset($_POST['restart'])){
    session_destroy();
}if (isset($_POST['button'])) {
    if (isset ($_POST['input']) && $_POST['input'] !== "") {

        $asked_question_text = $_POST['input'];
        $solution = askQuestion($asked_question_text) . "<br/>";
        $_SESSION["all"][] = array($solution, $asked_question_text);

    }
}
function askQuestion($input)
{$input = strtolower($input);
    $input = trim($input);
    $action = "train:";
    $time = "time";
    global $conn;
    $train = strpos($input,$action);
    if ($input!==""||$input!==" ") {
        if ($train === 0) {
            $explode = explode(':', $input, 2);
            if (isset($explode[1])) {
                $explode2 = explode('#', $explode[1], 2);
                if (isset($explode2[1])) {
                    $explode3 = explode('#', $explode2[1], 2);
                    if (isset($explode3[1])){
                        if (  $explode3[1] == "password") {
                            $query = $conn->query("SELECT question, answer FROM chatbot WHERE LOWER(question) ='" . $explode2[0] . "' and LOWER(answer) =  '" . $explode3[0] . "'");
                            $row_cnt = $query->rowCount();
                            if ($row_cnt > 0) {
                                return "QUESTION ALREADY EXISTS ";
                            } else
                                $the_queried = $conn->query("INSERT INTO chatbot(question, answer) VALUES ('" . $explode2[0] . "', '" . $explode3[0] . "')");
                            if ($the_queried) {
                                $saved_message = "Saved " . $explode2[0] . " -> " . $explode3[0];
                                return $saved_message;
                            } else
                                return "Please try again";
                        } else
                            return "Please enter the right password";
                    }else
                        return "Please enter the password after your answer";
                } else
                    return "The right format is train:yourquestion#youranswer#password";
            } else
                return "The right format is train:yourquestion#youranswer#password";
        } else {
            if (preg_match('/\baboutbout\b/',$input)) {
                return "Dragon shield v1.0";
            } else if (preg_match("/\b($time)\b/",$input)) {
                return gettTime();
            }
            else {
                $input = $_POST['input'];
                $question = strtolower($input);
                $question = str_replace('?', '', $question);
                $question = trim($question);
                $query = "SELECT * FROM chatbot WHERE LOWER(question) like '$question'";
                $result = $conn->query($query);
                $row_cnt = $result->rowCount();
                $records = $result->fetchAll(PDO::FETCH_ASSOC);
                $rand = rand(0, $row_cnt - 1);
                if ($row_cnt > 0) {
                    return $records[$rand]['answer'];
                } else
                    return "Am sorry, this question wasn't found,Please ENTER train:question#answer#password to make me smarter";
            }
        }
    }
}
function gettTime(){
    date_default_timezone_set('Africa/Lagos');
    return "The time is " . date("h:i:sa");
}
?>
<?php 

$result = $conn->query("SELECT * FROM secret_word LIMIT 1");
$result = $result->fetch(PDO::FETCH_OBJ);
$secret_word = $result->secret_word;

$result2 = $conn->query("SELECT * FROM interns_data where username = 'Adebayo'");
$user = $result2->fetch(PDO::FETCH_ASSOC);

$username = $user['username'];
$name = $user['name'];
$image_filename = $user['image_filename'];
?>
<?php
include_once("header.php");
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- Custom fonts for this template -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="js/jScrollPane/jScrollPane.css">
	<title>HNGFun | Abayomi</title>
	
	<style>
        body{
            width: 100%;
        background: #fff;
        padding: 0;
        margin: 0;
        font-family: 'Montserrat',sans-serif;
        }
        .header-main{
            margin-bottom: 30px;
        }
        .main {
        width: 360px;
        height: 500px;
        left: 50%;
        top:55%;
        background: rgb(43, 108, 167);
        position: absolute;
        transform: translate(-50%, -50%);
        }
         img{
        height: 150px;
        width: 150px;
        top: -80px;
        position: absolute;
        left: calc(50% - 80px);
        border: 3px solid rgb(115, 169, 219);
        border-radius: 50%;
        -moz-box-shadow: #2a3132 0px 4px 7px; 
        -webkit-box-shadow: #2a3132 0px 4px 7px; 
        box-shadow: #2a3132 0px 4px 7px; 
        background: #fff;   
        }
        h1 {
        margin-top: 100px;
        font-size: 24px;
        color: #fff;
        text-align: center;
        }
        h3 {
        margin: -10px;
        font-size: 20px;
        text-align: center;
        color: #fff;
        }
        p{
        margin:20px 35px;
        width: 80%;
        text-align: center;
        line-height:1.4em;
        
        }
        .connect_me {
        margin-bottom: 10px;
        font-weight: bold;
        font-size: 16px;
        }
        .footer-main{
         margin-left: 50px;
            margin-top: 20px;
        }
        .fa {
        position: relative;
        padding: 20px;
        font-size: 20px;
        width: 20px;
        height: 20px;
        text-align: center;
        text-decoration: none;
        border-radius: 50%;
        }
        .fa:hover {
        opacity: 0.7;
        }
        .fa-facebook {
        background: #3B5998;
        color: white;
        }
        .fa-twitter {
        background: #55ACEE;
        color:#fff;
        }
        .fa-github {
        background: rgb(50, 73, 90);
        color:#fff;
        }
        .fa-linkedin {
        background: rgb(47, 136, 204);
        color:#fff;
        }
        .date{
        margin-bottom: 10px;
        }
        
        /* ChatBot section */
        .main-bot {
            margin-bottom: 500px;
        }
        .d-flex{
            margin-left: 200px;
        }
	</style>
</head>
<body>
    <div class="header-main">
        <?php include('../header.php'); ?>
    </div>
    <div class="main">
        <div class="image"><img src="<?php echo $user->image_filename; ?>" alt="Author's Picture"></div>
        <div class="details">
            <h1><?php echo $user->name; ?></h1>
            <h3>Slack Username: @<?php echo $user->username; ?></h3>
            <p>Exceptionally well organised, self taught, self motivated and resourceful Professional with few years of experience in Website Development and Design using HTML, CSS, Bootstrap, JAVASCRIPT, JQuery, Laravel, PHP, MYSQL.  Excellent analytical and problem solving skills.</p>
            <p class="connect_me">Connect with me</p>
    </div>
    </div>
<!--  Starting up the Chatbot Design  -->

         <!-- Chatbot Section -->
    <div class="main-bot"></div>
<div class="d-flex justify-content-center align-items-center mt-5 pt-5 pl-5 ">
    <div class="d-block w-50 mt-5 ml-10 main_bot">
        <div class="w-50">
            <h2 class="text-center my-0 py-0" style="margin-bottom: 10px">ChatMe</h2>
            <p class="text-center text-lighte" style="font-size: 15px; opacity: 0.7">Hi, My name is ChatMe <br> How can I help you?</p>
        </div>

        <form class="w-50 mt-2" method = post>
            <input name="input" type="text" class="form-control mb-3" id="chat bot" placeholder="Type your message here">
            <input name="button" type="submit"  class="btn btn-blue w-100 rounded py-2"style="margin-bottom: 10px" id="button" value="SEND">
            <input name="restart" type="submit"  class="btn btn-blue w-100 rounded py-2" style="margin-bottom: 10px" value="Restart">
        </form>
  </div>
</div><div style="text-align: center;
                     -o-text-overflow: ellipsis;
                     text-overflow: ellipsis;
                     width: 500px;
                     height: auto;
            margin: auto;"> <p>
    <?php foreach($_SESSION["all"] as list($asked,$soln )){ ?>
    <span style="color:midnightblue"><?=  "YOU : $soln <br/>";echo "</span>";echo "<span style=\"color:black\">";
        echo "BOT : $asked<br/>" ?></span>
<?php }?></p></div>
        <div class="footer-main">
          <?php include('../footer.php'); ?>
        </div>

</body>
</html> 


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery.min.js"></script>