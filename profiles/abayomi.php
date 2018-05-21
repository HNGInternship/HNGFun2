<?php
require "../../config.php";
if ($_SERVER['REQUEST_METHOD'] === "GET") {
try
	{
	$sql = 'SELECT * FROM secret_word LIMIT 1';
	$query = $conn->query($sql);
	$query->setFetchMode(PDO::FETCH_ASSOC);
	$data = $query->fetch();
	$secret_word = $data['secret_word'];
	}

catch(PDOException $e)
	{
	throw $e;
	}

try
	{
	$sql = "SELECT * FROM interns_data WHERE `username` = 'abayomi' LIMIT 1";
	$query = $conn->query($sql);
	$query->setFetchMode(PDO::FETCH_ASSOC);
	$my_data = $query->fetch();
	}

catch(PDOException $e)
	{
	throw $e;
	}

?>
<?php
date_default_timezone_set('Africa/Lagos');



if (!defined('DB_USER'))
	{
	require "../../config.php";

	}

try
	{
	$conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_DATABASE, DB_USER, DB_PASSWORD);
	}

catch(PDOException $pe)
	{
	die("Could not connect to the database " . DB_DATABASE . ": " . $pe->getMessage());
	}

global $conn;

function checkQuestionExistence($question, $conn) {
    $sql = "SELECT * FROM chatbot WHERE question='$question'";
    $stm = $conn->query($sql);
    $stm->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stm->fetchAll();
    return $result;
}


if ($_SERVER['REQUEST_METHOD'] === "POST")
	{
	$query = $_POST['sent_messages'];

	if (empty($query))
		{
		echo json_encode(['status' => 0]);
		}


		elseif ($query == 'aboutbot')
		{
		echo json_encode(['status' => 6]);
		}
		else {
	$first_test_str = explode(':', $query);
	if ($first_test_str[0] == 'train')
		{
		$password = 'password';
		$trim_messages = explode('#', $first_test_str[1]);
		if (!count($trim_messages) < 3 && trim($password) === trim($trim_messages[2]))
			{
			if (trim($trim_messages[0]) != '' && trim($trim_messages[1] != ''))
				{
				$question = trim($trim_messages[0]);
				$answer = trim($trim_messages[1]);
                // We'll only attempt to insert a question if the question doesnt exist before
                if(count(checkQuestionExistence($question, $conn)) > 0) {
                    echo json_encode(['status' => 3, 'response' => 'Sorry that quetion already exists.']);
                } else {
                    $sql = "INSERT INTO chatbot(question, answer) VALUES(:question, :answer)";
    				$stm = $conn->prepare($sql);
    				$stm->bindParam(':question', $question);
    				$stm->bindParam(':answer', $answer);
    				$trained = $stm->execute();
    				if ($trained)
    				{
    					echo json_encode(['status' => 1, 'answer' => 'Thanks for educating me. You deserve some accolades.']);
    				}
                    else
  					{
  					$sql = "INSERT INTO chatbot(question, answer)
                                          VALUES(:question, :answer)";
  					$stm = $conn->prepare($sql);
  					$stm->bindParam(':question', $question);
  					$stm->bindParam(':answer', $answer);
  					$trained = $stm->execute();
  					if ($trained)
  						{
  						echo json_encode(['status' => 1, 'answer' => 'Thanks for educating me. You deserve some accolades.']);
  						}
  					  else
  						{
  						echo json_encode(['status' => 3, 'response' => 'So sorry but i dont understand your message. But you could teach me. train: this is a question # this is an answer # your password.']);
  						}
  					}
                }


				// if it's a new question, save into db


				}
			  else
				{
				echo json_encode(['status' => 3, 'response' => 'You got it wrong. train: this is a question # this is an answer # your password. ']);
				}
			}
		  else
			{
			echo json_encode(['status' => 3, 'response' => 'Sorry but for security you cant educate me.']);
			}
		}
	  else
		{
		$sql = "SELECT * FROM chatbot WHERE question='$query'";
		$stm = $conn->query($sql);
		$stm->setFetchMode(PDO::FETCH_ASSOC);
		$result = $stm->fetchAll();
		if ($result)
			{
			$answer_index = rand(0, (count($result) - 1));
			$answer = $result[$answer_index]['answer'];
			echo json_encode(['status' => 1, 'answer' => $answer]);
			}
		  else
			{
			echo json_encode(['status' => 2]);
			}
		}
	}

	}







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
        height: 600px;
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
   #letsChat {

    padding: 9px 13px !important;
    border-radius: 2px;
    margin-bottom: 20px;
    background: #ff9800;

}




#botBox {

    height: 100%;
    min-height: 100vh;
    box-shadow: -4px 0 4px rgba(0,0,0,0.23);
    background: #fff;
    background: url('../img/bgn.jpg');
    background-position: 20% 80%;
    background-attachment: fixed;
    padding: 10px 0;
    position: fixed;
    float: none;
    overflow: auto;
    transition: transform .15s



}




@media screen and (max-width: 992px){


    #letsChat {

        display: block;

    }

    #botBox.mobile-hide {

        transform: translate3d(100%, 0,0);


    }



    #botBox {


        position: fixed;
        top: 0;
        left: 0;

    }


}


#messages {

    float: left;
}


.message-block {

    height: auto;


}


.message-block ul {

    padding: 0;
    list-style-type: none;
    float: left;
    margin-top: 8px;
    width: 100%;
    min-width: 100%;

}

.message-block ul:last-child {

    margin-bottom: 80px;

}


.message-block ul li {

    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
    padding: 12px 15px;
    margin-top: 1px;
    background: linear-gradient(60deg, #26c6da, #0097a7);
    color: #fff;
    max-width: 70%;
    /*min-width: 20%;*/
    width: auto;

}

.message-block ul li:nth-child(1) {


    border-top-right-radius: 20px;


}



.message-block ul li:last-child {


    border-bottom-right-radius: 20px;


}


.message-block ul.right {


    float: right !important;

}




.message-block ul.right li {

    border-radius: unset;
    background: linear-gradient(60deg, #eee, #fff);
    color: #666;
    border-top-left-radius: 6px;
    border-bottom-left-radius: 6px;
    float: right;


}



.message-block ul.right li:nth-child(1) {


    border-top-left-radius: 20px;


}



.message-block ul.right li:last-child {


    border-bottom-left-radius: 20px;


}
#pendingMessageBox {

    background: linear-gradient(60deg, #26c6da, #0097a7);
    border-radius: 0 20px 20px 0;
    float: left;
    margin-left: -15px;
    left: 0;
    padding: 12px 9px;


}


#pendingMessageBox img {

    height: 10px;
    width: 100px;

}



















#messageInputContainer {


    position: fixed;
    bottom: 0;
    width: inherit;
    /*right: 0;*/
    display: flex;
    align-items: center;
    border-top: 2px solid #00bcd4;
    background: #fff;
    float: right;



}



#messageInput {

    border: none;
    height: 100%;
    resize: none;
    padding: 8px;
    font-size: 15px;
    background: #fff;
    overflow: hidden;
    width: calc(100% - 80px);
    /*position: absolute;*/
}


#sendButton, #closeButton {


    border-radius: 50%;
    height: 50px;
    width: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-left: 15px;
    color: #fff !important

}





#closeButton {

    background: #fff !important;
    color: #666 !important;
    float: left;
    box-shadow: none !important

}
 .col-md-2,
        .col-md-10 {
            padding: 0;
        }

        .panel {
            margin-bottom: 0px;
        }

        .messenger_boxed .card{
            width: 100%;
         margin: 0 auto;
        }
        .messenger_boxed.col-xs-12 {
            left: 10px;
        }

        .messenger_boxed>div>.panel {
            border-radius: 5px 5px 0 0;
        }

        .reacher {
            padding: 2px 10px;
        }

        .messenger_dez {
            background: #17a2b8;
            margin: 0 auto;
            width: 100%;
            padding: 0 10px 10px;
            max-height: 350px;
            overflow-x: hidden;
        }
        /* .messenger_dezs{
            width:100%;
        } */
        .heads {
            background: #00b2c5;
            color: white;
            padding: 10px;
            position: relative;
             overflow: hidden;
        }

        .outbox_msg {
            padding-left: 0;
            margin-left: 0;
            background: #00b2c5 !important;
            color: #FFF;
        }

        .inbox_msg {
            padding-bottom: 20px !important;
            margin-right: 0;

        }

        .responses {
            background: white;
            padding: 10px;
            border-radius: 2px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
            max-width: 80%;
        }

        .responses>p {
            font-size: 13px;
            margin: 0 0 0.2rem 0;
            overflow-wrap: break-word;
        }

        .responses>time {
            font-size: 11px;
            color: #ccc;
        }

        .messenger_dezs {
            padding: 10px;
            overflow: hidden;
            display: flex;
        }

        .response_got>.avatar:after {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            width: 0;
            height: 0;
            border-left-color: rgba(0, 0, 0, 0);
            border-bottom-color: rgba(0, 0, 0, 0);
        }

        .response_sent {
            justify-content: flex-end;
            align-items: flex-end;

        }

        .response_sent>.avatar:after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 0;
            border: 5px solid white;
            border-right-color: transparent;
            border-top-color: transparent;
            box-shadow: 1px 1px 2px rgba(black, 0.2); // not quite perfect but close } .inbox_msg > time{
            float: right;
        }

        .messenger_dez::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            background-color: #F5F5F5;
        }

        .messenger_dez::-webkit-scrollbar {
            width: 12px;
            background-color: #F5F5F5;
        }

        .messenger_dez::-webkit-scrollbar-thumb {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
            background-color: #555;
        }

        .messengerbody{

           border-radius: 20px;
            max-width: 90%;
            margin: 0 auto;
            margin-bottom: 50px;

        }

        .iconn:hover{
            color: #00AEFF !important;
        }
        .icon-container{
            padding: 20px;
        }
        .connect{

            color:red !important;
            padding: 10px 0;
        }

        #intro{
            padding: 0 20px;
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
	<div class="section-main">
        <div class="row chat-border">
            <div class="col-md-12 col-sm-12 col-xs-12 session-one bg-primary">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-6 col-xs-6 left-session-one">
                        <p id="chatbot-heading" class="blink"><i class="fa fa fa-question-circle"></i> Let's Chat</p>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-6 right-session-one">
                        <a href="#"><i class="fa fa-minus" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-clone" aria-hidden="true" id="maximize"></i></a>
                        <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
       <div class="col-lg-12  no-padding" align="right">
							<div class="col-md-12 no-padding">
						<div class="col-lg-4 col-sm|md|xs-10">
                                <div class="row messenger_boxed" id="chat_window_1">
                                    <div class="card">
                                        <div class="row card-header heads">
                                            <div class="col-md-8 col-xs-8">
                                                <h3>ChatMe Bot</h3>
                                            </div>
                                        </div>
                                        <div class="card-body  messenger_dez">

                                            <div class="row messenger_dezs response_sent">
                                                <div class="col-md-10 col-xs-10">
                                                    <div class="responses inbox_msg">
                                                        <p>Hello, I am ChatMe bot. Feel Free to teach, I love learning new things.</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-xs-2"></div>
                                            </div>
                                            <div class="row messenger_dezs response_sent">
                                                <div class="col-md-10 col-xs-10">
                                                    <div class="responses inbox_msg">
                                                        <p>To teach me use the format below</p>
                                                        <p>train: your question # your answer # password</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-xs-2"></div>
                                            </div>

                                        </div>   <!-- message form -->
                                        <div class="card-footer message-div">
                                            <form action="" id="messenger" method="post">
                                                <div class="input-group mb-3">
                                                    <input class="form-control message chat_input" name="sent_messages" aria-label="With input" placeholder="Send Message...">
                                                    <div class="input-group-append">
                                                        <button type="submit" class="btn btn-primary btn-sm send-message" id="btn-chat"><i class="fa fa-envelope"></i></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
           </div>
        </div>
    </div>

        <div class="footer-main">
          <?php include('../footer.php'); ?>
        </div>

</body>
</html> 


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script>
   $('document').ready(function() {

                            $("body").css("opacity", 0).animate({ opacity: 1}, 10);


                            $('#messenger').submit(function(e) {
                                e.preventDefault();

                                var message = $('.message').val();
				    message = message.trim();
				    if(message ==''){return;}
                                var messenger_dezs = $('.messenger_dez');

                                let bot_msg =  (answer)=>{

                                            return   '<div class="row messenger_dezs response_sent">'+
                                                            '<div class="col-md-10 col-xs-10">'+
                                                                '<div class="responses inbox_msg">'+
                                                                    '<p>'+answer+'</p>'+
                                                                '</div>'+
                                                                '</div>'+
                                                                '<div class="col-md-2 col-xs-2 avatar">'+
                                                            '</div>'+
                                                        '</div>';
                                }

                            let sent_msg =    (msg)=>{

                                              return   '<div class="row messenger_dezs response_got">'+
                                                            '<div class="col-md-2 col-xs-2 avatar"></div>'+
                                                            '<div class="col-md-10 col-xs-10">'+
                                                                '<div class="responses outbox_msg">'+
                                                                    '<p>'+msg+'</p>'+
                                                                '</div>'+
                                                            '</div>'+
                                                        '</div>';
                            }

                                       if (message != ''){

                                           if (message.split(':')[0] !='train')
                                            messenger_dezs.append(sent_msg(message));
                                             messenger_dezs.scrollTop(messenger_dezs[0].scrollHeight);
                                       }



                                $('.message-div').removeClass('')




                                $.ajax({
                                    type: 'POST',
                                    url: 'profiles/abayomi.php',
                                    dataType: 'json',
                                    data: {sent_messages: message},
                                    success: function(data) {

                                        if (data.status===1){

                                           $('.message').val('');
                                             messenger_dezs.append(bot_msg(data.answer));
                                             messenger_dezs.scrollTop(messenger_dezs[0].scrollHeight);
                                        }
                                        else if(data.status===2){
                                            $('.message').val('');
                                            messenger_dezs.append(bot_msg('So sorry but i don\'t\ understand your message. But you could teach me. train: this is a question # this is an answer # your password '));
                                            messenger_dezs.scrollTop(messenger_dezs[0].scrollHeight);
                                        }
										else if(data.status===6){
                                            $('.message').val('');
                                            messenger_dezs.append(bot_msg('ChatMe v1.0'));
                                            messenger_dezs.scrollTop(messenger_dezs[0].scrollHeight);
                                        }
                                        else if(data.status===0){
											$('.message').val('');
                                            messenger_dezs.append(bot_msg('you ought to be careful you know?'))
                                            messenger_dezs.scrollTop(messenger_dezs[0].scrollHeight);
                                        }
                                        else if(data.status===3){
                                            $('.message').val('');
                                            messenger_dezs.append(bot_msg(data.response));
                                            messenger_dezs.scrollTop(messenger_dezs[0].scrollHeight);
                                        }
                                        else if(data.status===4){
                                            $('.message').val('');
                                            messenger_dezs.append(bot_msg(data.response));
                                            messenger_dezs.scrollTop(messenger_dezs[0].scrollHeight);
                                        }
                                        else if(data.status===5){
                                            $('.message').val('');
                                            messenger_dezs.append(bot_msg(data.response));
                                            messenger_dezs.scrollTop(messenger_dezs[0].scrollHeight);
                                        }

                                    },
                                    error: function(error) {

                                        console.log(error);

                                        if (error) {

                                            $('.message-div').addClass('has-danger');
                                        }
                                    },
                                });
                            });

                            $(document).on('click', '.card-header span.reacher', function(e) {
                                var $this = $(this);
                                if (!$this.hasClass('card-collapsed')) {
                                    $this.parents('.card').find('.card-body').slideUp();
                                    $this.addClass('card-collapsed');
                                    $this.removeClass('fa-minus').addClass('fa-plus');
                                } else {
                                    $this.parents('.card').find('.card-body').slideDown();
                                    $this.removeClass('card-collapsed');
                                    $this.removeClass('fa-plus').addClass('fa-minus');
                                }
                            });
                            $(document).on('focus', '.card-footer input.chat_input', function(e) {
                                var $this = $(this);
                                if ($('#minim_chat_window').hasClass('card-collapsed')) {
                                    $this.parents('.card').find('.card-body').slideDown();
                                    $('#minim_chat_window').removeClass('card-collapsed');
                                    $('#minim_chat_window').removeClass('fa-plus').addClass('fa-minus');
                                }
                            });
                            $(document).on('click', '.icon_close', function(e) {
                                $("#chat_window_1").remove();
                            });
                });

</script>
<?php } ?>
