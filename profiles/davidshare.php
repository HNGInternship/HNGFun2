<?php 
	function getUserInfo($username="davidshare"){
		try {
			$conn = new PDO("mysql:host=". DB_HOST. ";dbname=". DB_DATABASE , DB_USER, DB_PASSWORD);
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    $stmt = $conn->prepare("SELECT intern_id, name, username, image_filename FROM interns_data WHERE username =:username");
		    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
		    $stmt->execute();

		    // set the resulting array to associative
		    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		    if(!empty($result)){
		    	return $result[0];
		    }
		    
		}
		catch(PDOException $e) {
		    echo "Error: " . $e->getMessage();
		}
		$conn = null;
	}

	$user_info = getUserInfo();

	function getSecretWord(){
		try {
			$conn = new PDO("mysql:host=". DB_HOST. ";dbname=". DB_DATABASE , DB_USER, DB_PASSWORD);
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    $stmt = $conn->prepare("SELECT * FROM secret_word");
		    $stmt->execute();

		    // set the resulting array to associative
		    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		    if(!empty($result)){
		    	return $result[0]['secret_word'];
		    }
		    
		}
		catch(PDOException $e) {
		    echo "Error: " . $e->getMessage();
		}
		$conn = null;
	}

	$secret_word = getSecretWord($user_info['intern_id']);
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title></title>
		<style>
			body{
				margin:0;
				padding:0;
				font-family: roboto;
				background: url('http://res.cloudinary.com/dym4cxzrk/image/upload/v1523651131/background.jpg') no-repeat;
				background-size: cover;
				line-height: 1px;
				color:#fff;
			}

			#content{
				background: rgba(0, 0, 0, 0.6);
				width:50%;
				margin:auto;
				padding:30px;
				margin-top: 3%;
				margin-bottom: 3%;
				color:#fff;
				text-align: center;
				border-radius: 10px;
			}

			.head-section img{
				border-radius: 50%;
				width:200px;
				height: 200px;
			}

			.title{
				font-size:1.5em;
				font-weight: bold;
			}

			.mission{
				line-height: 1.3;
				margin-bottom: 20px;
			}

			.lang-title, .mission-title, .username-title{
				margin-top: 30px;
				color:#fff;
			}

			.socials i.fab:hover{
				color:#000;
				background: #fff;

			}

			.socials i{
				margin-left: 5px;;
			}

			.secret{
				font-size: 1.3em;
				background:white;
				padding:20px;
				color:black;
				border-radius: 5px;
				margin:5px;
				margin-bottom: 15px;
			}

			@media only screen and (max-width: 700px) {
				body{
					line-height: 1em;
				}

				#content{
					width: 60%;
				}
			}


		</style>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="ha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
	</head>
	<body>
		<div id="content">
			<header class="head-section">
				<img src=<?php echo $user_info['image_filename']?> alt="davidshare profile picture">
				<p class="title">
					<?php echo $user_info['name']?>
				</p>
				<p class="sub">Developer, Graphic Designer, Writer, Singer</p>
			</header>
			<section class="profile-info">
				<h2 class="username-title">Username</h2>
				<h4 class="langs"><?php echo $user_info['username'];?></h4>				
				<h2 class="lang-title">Languages</h2>
				<h5 class="langs">HTML, CSS, PHP, JavaScript, Python, SQL</h5>
				<h2 class="mission-title">Mission</h2>
				<h5 class="mission">To source for information, understand it, simplify it, organize it and present it in such a way that anyone: created a dummy, born a dummy and/or annointed a dummy can understand it and use it for the develoment of his/herself and immediate community</h5>
			</section>
			<div class="secret">
				<?php echo $secret_word; ?>
			</div>
			<footer class="socials">
				<i class="fab fa-github-square fa-2x"></i>
				<i class="fab fa-facebook-square fa-2x"></i>
				<i class="fab fa-twitter-square fa-2x"></i>
				<i class="fab fa-linkedin fa-2x"></i>
			</footer>
		</div>
	</body>
</html>