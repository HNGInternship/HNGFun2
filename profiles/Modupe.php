<?php

// require 'db.php';



//$sql = "SELECT `name`, `username`, `image_filename` FROM `interns_data` WHERE `username`='$username'";

$sql0 = "SELECT * FROM `secret_word` LIMIT 1";

$stmt0 = $conn->prepare($sql0);

$stmt0->execute();

$data = $stmt0->fetch(PDO::FETCH_ASSOC);

$secret_word = $data['secret_word'];

$stmt = $conn->prepare($sql0);

$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);

$name = null;
$image_filename = null;
$username = "Modupe";
		
$sql1 = "SELECT * FROM interns_data WHERE username = :username";
$sth1 = $conn->prepare($sql1);
$sth1->bindParam(':username', $username);
$sth1->execute();
$queryResult1 = $sth1->setFetchMode(PDO::FETCH_ASSOC);
$queryResult1Rows = $sth1->fetchAll();
$queryResult1RowsCount = count($queryResult1Rows);

if($queryResult1RowsCount > 0){
	$queryResult1Row = $queryResult1Rows[0];
	$name = $queryResult1Row['name'];	
	$image_filename = $queryResult1Row['image_filename'];	
	}

?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
 
    <title>My Portfolio</title>
    <style>
    /* former styles for broken layout
        body{ margin: 0; padding: 0; }
        .mycard{ position: absolute; top:50%;  left: 70%; transform: translate(-50%, -50%); width: 500px; height: 430px; background: white; box-sizing: border-box; overflow: hidden; border-radius: 10px; box-shadow: 0 20px 20px rgba(0,0,0,0.2); display: none; }
        .myprofile{ position: absolute; top:45%; left: 50%; transform: translate(-50%, -50%); width: 300px; height: 410px; background: #008ed6; opacity: .7;
            box-sizing: border-box; border-radius: 10px; box-shadow: 0 20px 20px rgba(0,0,0,0.2); background-image: url("https://res.cloudinary.com/molyktech/image/upload/v1523876301/mo.jpg"); background-position: center;
            background-size: cover; background-repeat: no-repeat;
        }
       button{ margin-top: 110%; width: 40%; height: 50px; padding: 10px; font-size: 14px; text-align: center; margin-left: 25%; border-radius: 10px; background-color:#008ed6;
           color:white; box-shadow: 2px 2px 5px #000; -webkit-transition: -webkit-transform ease-out 0.1s, background 0.2s; -moz-transition: -moz-transform ease-out 0.1s, background 0.2s;
           transition: transform ease-out 0.1s, background 0.2s; 
        }
        button:active { background: black; opacity: .6; transform: translateY(9px); }
        button:hover{ background: rgba(255, 255, 255, 0.05); -webkit-transform: scale(0.93); -moz-transform: scale(0.93); -ms-transform: scale(0.93); transform: scale(0.93); color: #fff; }
        #name{ left:35%; position: absolute; color: #0000ff; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; }
        .about{ margin-top: 20%; margin-left: 100px; text-decoration: underline; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; text-align: center; }
        .paragraph{ margin-left: 160px; overflow: hidden; }
        .ulList { margin: 0; padding: 0; position: absolute; top: 80%; left: 60%; transform: translate(-50%, -50%); display: flex; }
        .ulList li { position: relative; list-style: none; text-align: center; cursor: pointer; }
        .ulListl li .text { position: absolute; width: 0; left: 50%; margin-top: 10px;margin-left: 0; transition: 1s; overflow: hidden; white-space: nowrap; font-size: 18px; color: #0000ff; }
        .ulList li .fa { font-size: 2em; color: 	 #0000e6; padding: 15px; }
        .ulList li:hover .text { width: 120px;  margin-left: -60px; }
    */
        .container{ margin-top: 30px;}
        .social{ list-style: none; text-align: center;}
        .social li{ display: inline; margin-right: 20px; }
    </style>
</head>
<body>

    <div class="container">
        <div class="card mb-3">
            <img class="card-img-top" src="<?php echo $image_filename; ?>" alt="Adebayor Modupe Aisha">
            <div class="card-body">
                <h1 class="card-title text-center"><?php echo $name;?></h1>
                <h3 class="about text-center">About Me</h3>
                <p class="paragraph">I am a full-stack web developer/designer in the making. MERN(Mongo, Express, React and Node) to be precise.
                        Comfortable with HTML5, CSS3, BOOTSTRAP and JavaScript. I've got great communication skills, attention to detail,
                        ability to work independently and in mixed teams . 
                </p>
                <ul class="social">
                        <li><a href="https://www.facebook.com/dupsy.dby"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</a></li>
                        <li><a href="https://twitter.com/motuswit"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                        <li><a href="https://www.instagram.com/motuswit"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a></li>
                        <li><a href="https://www.linkedin.com/in/modupe-adebayo-129b3896"><i class="fa fa-linkedin" aria-hidden="true"></i> Linkedin</a></li>
                        <li><a href="https://github.com/Molyktech/Hotels_ng-project.git"><i class="fa fa-github" aria-hidden="true"></i> Github</a></li>
                </ul>
            </div>
        </div>
    </div>




<!-- former broken layout
    <div class="mycard"> 
        <h1 id="name"></h1>
        <h3 class="about">About Me</h3>
        <p class="paragraph">I am a full-stack web developer/designer in the making. MERN(Mongo, Express, React and Node) to be precise.
            Comfortable with HTML5, CSS3, BOOTSTRAP and JavaScript. I've got great communication skills, attention to detail,
            ability to work independently and in mixed teams . 
        </p>
        <div class="container">
            <ul>
                <li><a href="https://www.facebook.com/dupsy.dby"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                    <div class="text">facebook</div>
                </li>
                <li><a href="https://twitter.com/motuswit"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <div class="text">twitter</div>
                </li>
                <li><a href="https://www.instagram.com/motuswit"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <div class="text">Instagram</div>
                </li>
                <li><a href="https://www.linkedin.com/in/modupe-adebayo-129b3896"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    <div class="text">linkedin</div>
                </li>
                <li><a href="https://github.com/Molyktech/Hotels_ng-project.git"><i class="fa fa-github" aria-hidden="true"></i></a>
                    <div class="text">github</div>
                </li>
            </ul>
        </div>
    </div>
</script>
-->
</body>
</html>
