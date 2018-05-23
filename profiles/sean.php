
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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    
	
	<meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>Seun Adebanwo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	
	<!------ Include the above in your HEAD tag ---------->
	
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	
	
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	
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
                inn.innerHTML = 'Not in database. You can also train me  to answer your questions by using the format <strong>train: question # answer # password</strong>.';
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
        

        
        xhttp.open("POST", "/profiles/sean", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("message="+message.value);
        $('#chat-output').animate({
                scrollTop: chatOutput.scrollHeight,
                scrollLeft: 0
            }, 500);
    }
	</script>

	<script type="text/javascript">
		$(function() {
		var Accordion = function(el, multiple) {
			this.el = el || {};
			this.multiple = multiple || false;

			// Variables privadas
			var links = this.el.find('.link');
			// Evento
			links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
		}

		Accordion.prototype.dropdown = function(e) {
			var $el = e.data.el;
				$this = $(this),
				$next = $this.next();

			$next.slideToggle();
			$this.parent().toggleClass('open');

			if (!e.data.multiple) {
				$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
			};
		}	

		var accordion = new Accordion($('#accordion'), false);
	});


	</script>
	<!------ Include the above in your HEAD tag ---------->
	
	<style>

@import url(https://fonts.googleapis.com/css?family=Oswald:400,300);
@import url(https://fonts.googleapis.com/css?family=Open+Sans);
* {
    margin: 0;
	padding: 0;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

body {
	background: #2d2c41;
	font-family: 'Open Sans', Arial, Helvetica, Sans-serif, Verdana, Tahoma;
}

.img-responsive {
    display: block;
    max-width: 100%;
    height: auto;
}

.iamgurdeep-pic {
    position: relative;
}
.username {
    bottom: 0;
    color: #ffffff;
    padding: 30px 15px 4px;
    position: absolute;
    width: 100%;
    text-shadow: 1px 1px 2px #000000;
    
background: -moz-linear-gradient(top, rgba(0,0,0,0) 0%, #2d2c41 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top, rgba(0,0,0,0) 0%, #2d2c41 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom, rgba(0,0,0,0) 0%, #2d2c41 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#a64d4d4d',GradientType=0 ); /* IE6-9 */
}
.iamgurdeeposahan {
    border-radius: 4px 4px 0 0;
}
.username > h2 {
    font-family: oswald;
    font-size: 27px;
    font-weight: lighter;
    margin: 31px 0 4px;
    position: relative;
    text-shadow: 1px 1px 2px #000000;
    text-transform: uppercase;
}
.username > h2 small {
    color: #ffffff;
    font-family: open sans;
    font-size: 13px;
    font-weight: 400;
    position: relative;
}
.username .fa{
    color: #ffffff;
    font-size: 14px;
    margin: 0 0 0 4px;
    position: static;
}
.edit-pic a {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    border: 1px solid #ffffff;
    border-radius: 50%;
    color: #2d2c41;
    font-size: 21px;
    height: 39px;
    line-height: 38px;
    margin: 8px;
    text-align: center;
    width: 39px;
    -webkit-transition: all 0.4s ease;
    -o-transition: all 0.4s ease;
	transition: all 0.4s ease;
    text-decoration: none !important;
     display: list-item;
     background-color: rgba(255, 255, 255, 0.1)
}
.edit-pic a:hover {
   font-size: 17px;
   opacity: 0.9;
  }
.edit-pic a:focus {
   background:#b63b4d;
    color: #fff;
    border: 1px solid #b63b4d;
}
a:focus {
    outline: none;
    outline-offset: 0px;
}
.edit-pic {
    position: absolute;
    right: 0;
    top: 0;
    opacity: 0;
    -webkit-transition: all 0.4s ease;
    -o-transition: all 0.4s ease;
    transition: all 0.4s ease;
}
.tags {
    background: rgba(255, 255, 255, 0.1) none repeat scroll 0 0;
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 2px;
    display: inline-block;
    font-size: 13px;
    margin: 4px 0 0;
    padding: 2px 5px;
     -webkit-transition: all 0.4s ease;
    -o-transition: all 0.4s ease;
    transition: all 0.4s ease;
}
.tags:hover {
    background: rgba(255, 255, 255, 0.3) none repeat scroll 0 0;
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-radius: 2px;
    display: inline-block;
    font-size: 13px;
    margin: 4px 0 0;
    padding: 2px 5px;
}
#accordion:hover .edit-pic {
    opacity: unset;
    -webkit-transition: all 0.4s ease;
    -o-transition: all 0.4s ease;
    transition: all 0.4s ease;
}


.btn-o {
    
    background-color: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-radius: 2px;
    color: #ffffff !important;
    display: inline-block;
    font-family: open sans;
    font-size: 15px !important;
    font-weight: normal !important;
    margin: 0 0 10px;
    padding: 5px 11px;
    text-decoration: none !important;
    text-transform: uppercase;
    
   background-color: rgba(255, 255, 255, 0.1);
    -webkit-transition: all 0.4s ease;
    -o-transition: all 0.4s ease;
    transition: all 0.4s ease;
}
.btn-o:hover {
  background-color: rgba(255, 255, 255, 0.4);
    color: #fff !important;
  }
.btn-o:focus {
   background:#b63b4d;
    color: #fff;
    border: 1px solid #b63b4d;
}
.submenu .iamgurdeeposahan {
    background: rgba(255, 255, 255, 0.1) none repeat scroll 0 0 !important;
    border-radius: 50%;
    height: 60px;
    padding: 2px;
    width: 60px;
}
.photosgurdeep > a {
    background: #ffffff none repeat scroll 0 0;
    border-radius: 50%;
    display: inline-block !important;
    padding: 0 !important;
}
.view-all {
    background: rgba(255, 255, 255, 0.1) none repeat scroll 0 0 !important;
    border: 1px solid;
    float: right;
    font-family: oswald;
    font-size: 26px;
    height: 60px;
    line-height: 61px;
    text-align: center;
    width: 60px;
}
.photosgurdeep {
    padding: 10px 9px 4px 35px;
}
ul {
	list-style-type: none;
}

a {
	color: #b63b4d;
	text-decoration: none;
}

/** =======================
 * Contenedor Principal
 ===========================*/
h1 {
 	color: #FFF;
 	font-size: 24px;
 	font-weight: 400;
 	text-align: center;
 	margin-top: 40px;
 }

h1 a {
 	color: #c12c42;
 	font-size: 16px;
 }

 .accordion {
 	width: 100%;
 	max-width: 360px;
 	margin: 30px auto 20px;
 	background: #FFF;
 	-webkit-border-radius: 4px;
 	-moz-border-radius: 4px;
 	border-radius: 4px;
 }

.accordion .link {
	cursor: pointer;
	display: block;
	padding: 15px 15px 15px 42px;
	color: #4D4D4D;
	font-size: 14px;
	font-weight: 700;
	border-bottom: 1px solid #CCC;
	position: relative;
	-webkit-transition: all 0.4s ease;
	-o-transition: all 0.4s ease;
	transition: all 0.4s ease;
}

.accordion li:last-child .link {
	border-bottom: 0;
}

.accordion li i {
	position: absolute;
	top: 16px;
	left: 12px;
	font-size: 18px;
	color: #595959;
	-webkit-transition: all 0.4s ease;
	-o-transition: all 0.4s ease;
	transition: all 0.4s ease;
}

.accordion li i.fa-chevron-down {
	right: 12px;
	left: auto;
	font-size: 16px;
}

.accordion li.open .link {
	color: #b63b4d;
}

.accordion li.open i {
	color: #b63b4d;
}
.accordion li.open i.fa-chevron-down {
	-webkit-transform: rotate(180deg);
	-ms-transform: rotate(180deg);
	-o-transform: rotate(180deg);
	transform: rotate(180deg);
}

.accordion li.default .submenu {display: block;}
/**
 * Submenu
 -----------------------------*/
 .submenu {
 	display: none;
 	background: #444359;
 	font-size: 14px;
 }

 .submenu li {
 	border-bottom: 1px solid #4b4a5e;
 }

 .submenu a {
 	display: block;
 	text-decoration: none;
 	color: #d9d9d9;
 	padding: 12px;
 	padding-left: 42px;
 	-webkit-transition: all 0.25s ease;
 	-o-transition: all 0.25s ease;
 	transition: all 0.25s ease;
 }

 .submenu a:hover {
 	background: #b63b4d;
 	color: #FFF;
 }
















.nav.navbar-nav .dropdown-toggle {
    padding: 0 !important;
}

.dropdown-toggle span {
    background: rgba(255, 255, 255, 0.1) none repeat scroll 0 0;
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-radius: 50px;
    font-size: 23px !important;
    height: 38px;
    line-height: 40px;
    margin: 0 !important;
    padding: 0 !important;
    text-align: center;
    width: 38px;
    text-shadow:none !important;
}

.nav.navbar-nav {
    bottom: 10px;
    position: absolute;
    right: 12px;
    transition: all 0.4s ease 0s;
}

.navbar-nav > li > .dropdown-menu {
    border-radius: 2px !important;
    margin-top: 10px;
    min-width: 101px;
    padding: 0;
}
.navbar-nav > li > .dropdown-menu li a {
    color: #333333 !important;
    font-size: 13px !important;
    font-weight: 600 !important;
    padding: 2px 8px !important;
    text-align: right !important;
    text-shadow:none !important;
}
.dropdown-toggle {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0 !important;
    font-size: 15px !important;
}

.dropdown {
  -webkit-transition: all 0.4s ease;
    -o-transition: all 0.4s ease;
    transition: all 0.4s ease;
}
.dropdown-menu>li>a {
    color:#428bca;
    -webkit-transition: all 0.4s ease;
    -o-transition: all 0.4s ease;
    transition: all 0.4s ease;
}
.dropdown ul.dropdown-menu {
    border-radius:4px;
    box-shadow:none;
}
.dropdown ul.dropdown-menu:before {
    content: "";
    border-bottom: 10px solid #fff;
    border-right: 10px solid transparent;
    border-left: 10px solid transparent;
    position: absolute;
    top: -8px;
    right: 8px;
    z-index: 10;
}




:before, :after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
	
@media (min-width: 768px)
.navbar-nav {
    float: left;
    margin: 0;
}

.navbar-nav {
    margin: 7.5px -15px;
}

.nav {
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}

.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 160px;
    padding: 5px 0;
    margin: 2px 0 0;
    font-size: 14px;
    text-align: left;
    list-style: none;
    background-color: #fff;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    border: 1px solid #ccc;
    border: 1px solid rgba(0,0,0,.15);
    border-radius: 4px;
    -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
    box-shadow: 0 6px 12px rgba(0,0,0,.175);
}

.dropdown-menu.pull-right {
    right: 0;
    left: auto;
}

.open>.dropdown-menu {
    display: block;
}

.navbar-nav > li > .dropdown-menu {
    border-radius: 2px !important;
    margin-top: 10px;
    min-width: 101px;
    padding: 0;
}

.dropdown ul.dropdown-menu {
    border-radius: 4px;
    box-shadow: none;
}

/***********************
CHATBOT CSS
**************/



</style>


</head>
<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


    

<div class="container">
	<div class="row">
	
        
    <h1>@Sean <br><small>Chaos is a ladder</small></h1>
	<!-- Contenedor -->
	<ul id="accordion" class="accordion">
    <li>
<div class="col col_4 iamgurdeep-pic">
<img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" src="http://res.cloudinary.com/findseun/image/upload/v1526568848/TADLXHY5C-UALFCDWSY-ae04f7662e4c-512.png">
<div class="edit-pic">
<a href="https://web.facebook.com/findseun" target="_blank" class="fa fa-facebook"></a>
<a href="https://www.instagram.com/findseun/" target="_blank" class="fa fa-instagram"></a>
<a href="https://twitter.com/findseun" target="_blank" class="fa fa-twitter"></a>



</div>
<div class="username">
    <h2>Seun 'Banwo  <small><i class="fa fa-map-marker"></i> Nigeria (Lagos)</small></h2>
    <p><i class="fa fa-briefcase"></i> Web Design and Development.</p>
    
    <a href="https://web.facebook.com/findseun" target="_blank" class="btn-o"> <i class="fa fa-user-plus"></i> Add Friend </a>
    <a href="https://www.instagram.com/findseun/" target="_blank"  class="btn-o"> <i class="fa fa-plus"></i> Follow </a>
    
    
     <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-ellipsis-v pull-right"></span></a>
          <ul class="dropdown-menu pull-right">
            <li><a href="#">Video Call <i class="fa fa-video-camera"></i></a></li>
            <li><a href="#">Poke <i class="fa fa-hand-o-right"></i></a></li>
            <li><a href="#">Report <i class="fa fa-bug"></i></a></li>
            <li><a href="#">Block <i class="fa fa-lock"></i></a></li>
          </ul>
        </li>
      </ul>
   
</div>
    
</div>
        
    </li>
		<li>
			<div class="link"><i class="fa fa-globe"></i>About<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
				<li><a href="#"><i class="fa fa-calendar left-none"></i> Date of Birth : 24/06/2018</a></li>
				<li><a href="#">Address : NIGERIA,Lagos</a></li>
				<li><a href="mailto:findseun@gmail.com">Email : findseun@gmail.com</a></li>
				<li><a href="#">Phone : +234-800-000-0000</a></li>
			</ul>
		</li>
		<li class="default open">
			<div class="link"><i class="fa fa-code"></i>Professional Skills<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
				<li><a href="#"><span class="tags">Adobe Photoshop</span> <span class="tags">Magento</span> <span class="tags">CSS</span> <span class="tags">Phyton</span> 
                <span class="tags">Graphic Design</span> <span class="tags">HTML</span> <span class="tags">HTML5</span> <span class="tags">JavaScript</span> 
                <span class="tags">Django</span> <span class="tags">bootstrap</span> <span class="tags">User Interface Design</span> <span class="tags">Wordpress</span></li></a>
			</ul>
		</li>
		<li>
			<div class="link"><i class="fa fa-picture-o"></i>Photos <small>1,120</small><i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
				<li class="photosgurdeep"><a href="#"><img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" src="http://res.cloudinary.com/findseun/image/upload/v1526568848/TADLXHY5C-UALFCDWSY-ae04f7662e4c-512.png">                 
				</a>
                <a href="#"><img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" src="http://res.cloudinary.com/findseun/image/upload/v1526568848/TADLXHY5C-UALFCDWSY-ae04f7662e4c-512.png">                 
    			</a>
                <a href="#"><img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" src="http://res.cloudinary.com/findseun/image/upload/v1526568848/TADLXHY5C-UALFCDWSY-ae04f7662e4c-512.png">                 
    			</a>
                <a href="#"><img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" src="http://res.cloudinary.com/findseun/image/upload/v1526568848/TADLXHY5C-UALFCDWSY-ae04f7662e4c-512.png">                 
    			</a>
               
                <a class="view-all" href="https://web.facebook.com/findseun" target="_blank" >15+
        		</a>
    			    
				</li>
			</ul>
		</li>
		<li><div class="link"><i class="fa fa-users"></i>Friends <small>1,053</small><i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
    			<li class="photosgurdeep"><a href="#"><img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" src="http://res.cloudinary.com/findseun/image/upload/v1526568848/TADLXHY5C-UALFCDWSY-ae04f7662e4c-512.png">                 
				</a>
                <a href="#"><img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" src="http://res.cloudinary.com/findseun/image/upload/v1526568848/TADLXHY5C-UALFCDWSY-ae04f7662e4c-512.png">                 
    			</a>
                <a href="#"><img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" src="http://res.cloudinary.com/findseun/image/upload/v1526568848/TADLXHY5C-UALFCDWSY-ae04f7662e4c-512.png">                 
    			</a>
                <a href="#"><img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" src="http://res.cloudinary.com/findseun/image/upload/v1526568848/TADLXHY5C-UALFCDWSY-ae04f7662e4c-512.png">                 
    			</a>
                <a href="#"><img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" src="http://res.cloudinary.com/findseun/image/upload/v1526568848/TADLXHY5C-UALFCDWSY-ae04f7662e4c-512.png">                 
        		</a>
                <a href="#"><img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" src="http://res.cloudinary.com/findseun/image/upload/v1526568848/TADLXHY5C-UALFCDWSY-ae04f7662e4c-512.png">                 
    			</a>
                <a href="#"><img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" src="http://res.cloudinary.com/findseun/image/upload/v1526568848/TADLXHY5C-UALFCDWSY-ae04f7662e4c-512.png">                 
    			</a>
                <a href="#"><img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" src="http://res.cloudinary.com/findseun/image/upload/v1526568848/TADLXHY5C-UALFCDWSY-ae04f7662e4c-512.png">                 
        		</a>
                <a href="#"><img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" src="http://res.cloudinary.com/findseun/image/upload/v1526568848/TADLXHY5C-UALFCDWSY-ae04f7662e4c-512.png">                 
    			</a>
               
                <a class="view-all" href="https://web.facebook.com/findseun" target="_blank">50+
        		</a>
    			    
				</li>
			</ul>
		</li>
	</ul>
	
	
	
</div>

<div class="chatbox" style="position: fixed; right: 0px; bottom: 0px; ">
        <div class="oj-sm-12 oj-md-6 oj-flex-item" style="-webkit-flex: 0 1 50%; flex: 0 1 50%; max-width: 50%; width: 50%; ">
            <div class="chatbody" style="width: 200%; ">
          <div class="under2" style="position: relative; height: 49.71px; width: 100%; line-height: normal; font-size: 32px; text-align: center; color: #000830; background-color: #ffffff; "><span>SEANBOT</span></div>
            <div class="body1" style="font-family: 'Source Sans Pro', sans-serif; font-size: 75%; display: flex; flex-direction: column; max-width: 700px; margin: 0 auto; color: #ffffff; ">
                <div class="chat-output" id="chat-output" style="flex: 1; padding: 20px; display: flex; background: #5a596d; flex-direction: column; overflow-y: scroll; max-height: 500px; ">
                    <div class="user-message" style="margin: 0 0 20px 0; ">
                        <div class="message" style="background: #2d2c41; color: white; ">Hello! My name is Sean.<br>I'm willing to assist you with any of your questions.<br>Type <span style="color: #FABF4B;"><strong> aboutsean</strong></span> to know more about me. </div>
                    </div>
                </div>

                <div class="chat-input" style="padding: 20px; border: 1px solid #fff; border-bottom: 0; background-color: #2d2c41; ">
                        <input type="text" name="user-input" id="user-input" class="user-input" placeholder="Say something here" style="width: 100%; border: 1px solid #ccc; border-radius: 4px; padding: 8px; ">
                        <button onclick="chat()" class="send_button" id="send" style="width: 75px; height: 35px; padding: 5px; margin-top: 8px; color: black; border: none; border-radius: 5px; background-color: #1380FA; ">Send</button>
                </div>
            

            </div>
        </div>
        </div>
    </div>
    
</body
</html>