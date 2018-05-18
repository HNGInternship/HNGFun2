<?php
error_reporting(0);
if (empty($_SESSION)) {
    session_start();
}
if(!defined('DB_USER')){
    require "../../config.php";		
    try {
        define('DB_CHARSET', 'utf8mb4');
        $dsn = 'mysql:host='.DB_HOST.';dbname='.DB_DATABASE.';charset='.DB_CHARSET;
        $opt = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ];
        $conn = new PDO($dsn, DB_USER, DB_PASSWORD, $opt);
    } catch (PDOException $pe) {
        die("Could not connect to the database " . DB_DATABASE . ": " . $pe->getMessage());
    }
}
$intern_details_query = $conn->query(
    "SELECT     interns_data.name, 
                interns_data.username, 
                interns_data.image_filename
    FROM        interns_data
    WHERE       interns_data.username = 'cortehz' LIMIT 1");
$secret_word_query = $conn->query(
    "SELECT     secret_word.secret_word 
    FROM        secret_word LIMIT 1");
$intern_detail = $intern_details_query->fetch();
$secret_word = $secret_word_query->fetch();
// Secret Word
$secret_word = $secret_word['secret_word'];
// Profile Details
$name = $intern_detail['name'];
$username = $intern_detail['username'];
$filename = $intern_detail['image_filename'];
$padding = '58px 80px';
$home_url = '';
if (!stristr($_SERVER['REQUEST_URI'], 'id')) {
    $padding = '80px 70px';
    $home_url = '../';
}
?>

<?php if (empty($_POST['bot_query']) and empty($_POST['bot_train']) and empty($_POST['bot_command'])): ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Samuel Enyi Omanchi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive"
	/>
	<meta name="author" content="freehtml5.co" />

	<link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">

	<link href="https://use.fontawesome.com/releases/v5.0.2/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
	 crossorigin="anonymous">

	<!-- Animate.css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">

	<style>
		/* =======================================================
	  *
	  * 	Template Style 
	  *
	  * ======================================================= */

		body {
			font-family: "Space Mono", Arial, serif;
			font-weight: 400;
			font-size: 16px;
			line-height: 1.7;
			color: #4d4d4d;
			background: #fff;
		}

		#page {
			position: relative;
			overflow-x: hidden;
			width: 100%;
			height: 100%;
			-webkit-transition: 0.5s;
			-o-transition: 0.5s;
			transition: 0.5s;
		}

		.offcanvas #page {
			overflow: hidden;
			position: absolute;
		}

		.offcanvas #page:after {
			-webkit-transition: 2s;
			-o-transition: 2s;
			transition: 2s;
			position: absolute;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			z-index: 101;
			background: rgba(0, 0, 0, 0.7);
			content: "";
		}

		a {
			color: #FF9000;
			-webkit-transition: 0.5s;
			-o-transition: 0.5s;
			transition: 0.5s;
		}

		a:hover,
		a:active,
		a:focus {
			color: #FF9000;
			outline: none;
			text-decoration: none;
		}

		p {
			margin-bottom: 30px;
		}

		h1,
		h2,
		h3,
		h4,
		h5,
		h6,
		figure {
			color: #000;
			font-family: "Space Mono", Arial, serif;
			font-weight: 400;
			margin: 0 0 20px 0;
		}

		::-webkit-selection {
			color: #fff;
			background: #FF9000;
		}

		::-moz-selection {
			color: #fff;
			background: #FF9000;
		}

		::selection {
			color: #fff;
			background: #FF9000;
		}

		#fh5co-header,
		.fh5co-cover {
			background-color: transparent;
			background-size: cover;
			background-attachment: fixed;
			position: relative;
			height: 600px;
			width: 100%;
		}

		#fh5co-header .overlay,
		.fh5co-cover .overlay {
			position: absolute;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			background: #fff;
		}

		#fh5co-header .display-t,
		.fh5co-cover .display-t {
			width: 100%;
			display: table;
		}

		#fh5co-header .display-tc,
		.fh5co-cover .display-tc {
			display: table-cell;
			vertical-align: middle;
			height: 600px;
		}

		#fh5co-header .display-tc h1,
		#fh5co-header .display-tc h2,
		#fh5co-header .display-tc h3,
		.fh5co-cover .display-tc h1,
		.fh5co-cover .display-tc h2,
		.fh5co-cover .display-tc h3 {
			margin: 0;
			padding: 0;
			color: white;
		}

		#fh5co-header .display-tc h1,
		.fh5co-cover .display-tc h1 {
			font-family: "Kaushan Script", cursive;
			margin-bottom: 30px;
			font-size: 50px;
			line-height: 1.3;
			font-weight: 300;
			-webkit-transform: rotate(-5deg);
			-moz-transform: rotate(-5deg);
			-ms-transform: rotate(-5deg);
			-o-transform: rotate(-5deg);
			transform: rotate(-5deg);
		}

		#fh5co-header .display-tc h1 span,
		.fh5co-cover .display-tc h1 span {
			padding: 4px 15px;
			position: relative;
		}

		#fh5co-header .display-tc h1 span:before,
		.fh5co-cover .display-tc h1 span:before {
			position: absolute;
			top: 40px;
			left: 0;
			width: 30px;
			height: 4px;
			content: '';
			background: #fff;
			margin-left: -30px;
		}

		#fh5co-header .display-tc h1 span:after,
		.fh5co-cover .display-tc h1 span:after {
			position: absolute;
			top: 40px;
			right: 0;
			width: 30px;
			height: 4px;
			content: '';
			background: #fff;
			margin-right: -30px;
		}

		@media screen and (max-width: 768px) {
			#fh5co-header .display-tc h1,
			.fh5co-cover .display-tc h1 {
				font-size: 34px;
			}
			#fh5co-header .display-tc h1 span:before,
			.fh5co-cover .display-tc h1 span:before {
				top: 28px;
				width: 20px;
				height: 3px;
				margin-left: -15px;
				color: #FF9000;
			}
			#fh5co-header .display-tc h1 span:after,
			.fh5co-cover .display-tc h1 span:after {
				top: 28px;
				width: 20px;
				height: 3px;
				margin-right: -15px;
				color: #FF9000;
			}
		}

		#fh5co-header .display-tc h2,
		.fh5co-cover .display-tc h2 {
			font-size: 20px;
			line-height: 1.5;
			margin-bottom: 30px;
		}

		#fh5co-header .display-tc h3,
		.fh5co-cover .display-tc h3 {
			font-size: 16px;
			color: #FF9000;
		}

		@media screen and (max-width: 768px) {
			#fh5co-header .display-tc h3,
			.fh5co-cover .display-tc h3 {
				font-size: 14px;
			}
		}

		#fh5co-header .display-tc .profile-thumb,
		.fh5co-cover .display-tc .profile-thumb {
			background-size: cover !important;
			background-position: center center;
			background-repeat: no-repeat;
			position: relative;
			height: 200px;
			width: 200px;
			margin: 0 auto;
			margin-bottom: 30px;
			-webkit-border-radius: 50%;
			-moz-border-radius: 50%;
			-ms-border-radius: 50%;
			border-radius: 50%;
		}

		#fh5co-header .display-tc .fh5co-social-icons li a,
		.fh5co-cover .display-tc .fh5co-social-icons li a {
			color: #FF9000;
		}

		#fh5co-header .display-tc .fh5co-social-icons li a i,
		.fh5co-cover .display-tc .fh5co-social-icons li a i {
			font-size: 30px;
		}

		#fh5co-features {
			background: #FF9000;
		}

		#fh5co-features h2 {
			color: #fff;
		}

		#fh5co-features .services-padding {
			padding: 7em 0;
		}

		#fh5co-features .feature-left {
			margin-bottom: 40px;
			float: left;
		}

		@media screen and (max-width: 992px) {
			#fh5co-features .feature-left {
				margin-bottom: 30px;
			}
		}

		#fh5co-features .feature-left .icon {
			display: table;
			text-align: center;
			width: 100px;
			height: 100px;
			margin: 0 auto;
			background: #fff;
			margin-bottom: 20px;
			-webkit-border-radius: 50%;
			-moz-border-radius: 50%;
			-ms-border-radius: 50%;
			border-radius: 50%;
		}

		#fh5co-features .feature-left .icon i {
			font-size: 50px;
			display: table-cell;
			vertical-align: middle;
			height: 100px;
			color: #FF9000 !important;
		}

		#fh5co-features .feature-left .feature-copy {
			width: 100%;
		}

		#fh5co-features .feature-left h3 {
			font-size: 24px;
			font-weight: 400;
			color: #fff;
		}

		#fh5co-features .feature-left p {
			font-size: 16px;
			color: rgba(255, 255, 255, 0.7);
		}

		#fh5co-features .feature-left p:last-child {
			margin-bottom: 0;
		}

		#fh5co-features .feature-left p a {
			color: #000 !important;
		}

		#fh5co-about,
		#fh5co-resume,
		#fh5co-skills,
		#fh5co-started,
		#fh5co-work,
		#fh5co-blog,
		#fh5co-pricing,
		#fh5co-contact {
			padding: 7em 0;
			clear: both;
		}

		@media screen and (max-width: 768px) {
			#fh5co-about,
			#fh5co-resume,
			#fh5co-skills,
			#fh5co-started,
			#fh5co-work,
			#fh5co-blog,
			#fh5co-pricing,
			#fh5co-contact {
				padding: 3em 0;
			}
		}

		#fh5co-started {
			border-bottom: none;
		}

		.fh5co-bg-dark {
			background: #2F3C4F;
			background: #FF9000;
		}

		.fh5co-bg-dark .fh5co-heading h2 {
			color: #fff !important;
		}

		.info {
			margin: 0;
			padding: 0;
			width: 90%;
			float: left;
		}

		@media screen and (max-width: 768px) {
			.info {
				margin-bottom: 3em;
			}
		}

		.info li {
			width: 100%;
			float: left;
			list-style: none;
			padding: 10px 0;
		}

		.info li:first-child {
			padding-top: 0;
		}

		.info li .first-block {
			width: 40%;
			display: inline-block;
			float: left;
			color: #000;
			font-weight: bold;
		}

		.info li .second-block {
			width: 60%;
			display: inline-block;
			color: rgba(0, 0, 0, 0.5);
		}

		.fh5co-social-icons {
			margin: 0;
			padding: 0;
		}

		.fh5co-social-icons li {
			margin: 0;
			padding: 0;
			list-style: none;
			display: -moz-inline-stack;
			display: inline-block;
			zoom: 1;
			*display: inline;
		}

		.fh5co-social-icons li a {
			display: -moz-inline-stack;
			display: inline-block;
			zoom: 1;
			*display: inline;
			color: #FF9000;
			padding-left: 10px;
			padding-right: 10px;
		}

		.fh5co-social-icons li a i {
			font-size: 20px;
		}

		#fh5co-about .fh5co-social-icons {
			margin: 0;
			padding: 0;
		}

		#fh5co-about .fh5co-social-icons li {
			padding: 0;
			list-style: none;
			display: -moz-inline-stack;
			display: inline-block;
			zoom: 1;
			*display: inline;
		}

		#fh5co-about .fh5co-social-icons li a {
			display: -moz-inline-stack;
			display: inline-block;
			zoom: 1;
			*display: inline;
			color: #fff;
			background: #2F3C4F;
			padding: 10px 10px 2px 10px;
			-webkit-border-radius: 2px;
			-moz-border-radius: 2px;
			-ms-border-radius: 2px;
			border-radius: 2px;
		}

		#fh5co-about .fh5co-social-icons li a i {
			font-size: 20px;
		}

		#fh5co-about .fh5co-social-icons li a:hover {
			background: #FF9000;
		}

		.fh5co-heading {
			margin-bottom: 5em;
		}

		.fh5co-heading.fh5co-heading-sm {
			margin-bottom: 2em;
		}

		.fh5co-heading h2 {
			font-size: 40px;
			margin-bottom: 20px;
			line-height: 1.5;
			color: #000;
		}

		.fh5co-heading p {
			font-size: 18px;
			line-height: 1.5;
			color: #828282;
		}

		.fh5co-heading span {
			display: block;
			margin-bottom: 10px;
			text-transform: uppercase;
			font-size: 12px;
			letter-spacing: 2px;
		}

		.btn {
			margin-right: 4px;
			margin-bottom: 4px;
			font-family: "Space Mono", Arial, serif;
			font-size: 16px;
			font-weight: 400;
			-webkit-border-radius: 30px;
			-moz-border-radius: 30px;
			-ms-border-radius: 30px;
			border-radius: 30px;
			-webkit-transition: 0.5s;
			-o-transition: 0.5s;
			transition: 0.5s;
			padding: 8px 20px;
		}

		.btn.btn-md {
			padding: 8px 20px !important;
		}

		.btn.btn-lg {
			padding: 18px 36px !important;
		}

		.btn:hover,
		.btn:active,
		.btn:focus {
			box-shadow: none !important;
			outline: none !important;
		}

		.btn-primary {
			background: #FF9000;
			color: #fff;
			border: 2px solid #FF9000;
		}

		.btn-primary:hover,
		.btn-primary:focus,
		.btn-primary:active {
			background: #ff9b1a !important;
			border-color: #ff9b1a !important;
		}

		.btn-primary.btn-outline {
			background: transparent;
			color: #FF9000;
			border: 2px solid #FF9000;
		}

		.btn-primary.btn-outline:hover,
		.btn-primary.btn-outline:focus,
		.btn-primary.btn-outline:active {
			background: #FF9000;
			color: #fff;
		}

		.btn-success {
			background: #5cb85c;
			color: #fff;
			border: 2px solid #5cb85c;
		}

		.btn-success:hover,
		.btn-success:focus,
		.btn-success:active {
			background: #4cae4c !important;
			border-color: #4cae4c !important;
		}

		.btn-success.btn-outline {
			background: transparent;
			color: #5cb85c;
			border: 2px solid #5cb85c;
		}

		.btn-success.btn-outline:hover,
		.btn-success.btn-outline:focus,
		.btn-success.btn-outline:active {
			background: #5cb85c;
			color: #fff;
		}

		.btn-info {
			background: #5bc0de;
			color: #fff;
			border: 2px solid #5bc0de;
		}

		.btn-info:hover,
		.btn-info:focus,
		.btn-info:active {
			background: #46b8da !important;
			border-color: #46b8da !important;
		}

		.btn-info.btn-outline {
			background: transparent;
			color: #5bc0de;
			border: 2px solid #5bc0de;
		}

		.btn-info.btn-outline:hover,
		.btn-info.btn-outline:focus,
		.btn-info.btn-outline:active {
			background: #5bc0de;
			color: #fff;
		}

		.btn-warning {
			background: #f0ad4e;
			color: #fff;
			border: 2px solid #f0ad4e;
		}

		.btn-warning:hover,
		.btn-warning:focus,
		.btn-warning:active {
			background: #eea236 !important;
			border-color: #eea236 !important;
		}

		.btn-warning.btn-outline {
			background: transparent;
			color: #f0ad4e;
			border: 2px solid #f0ad4e;
		}

		.btn-warning.btn-outline:hover,
		.btn-warning.btn-outline:focus,
		.btn-warning.btn-outline:active {
			background: #f0ad4e;
			color: #fff;
		}

		.btn-danger {
			background: #d9534f;
			color: #fff;
			border: 2px solid #d9534f;
		}

		.btn-danger:hover,
		.btn-danger:focus,
		.btn-danger:active {
			background: #d43f3a !important;
			border-color: #d43f3a !important;
		}

		.btn-danger.btn-outline {
			background: transparent;
			color: #d9534f;
			border: 2px solid #d9534f;
		}

		.btn-danger.btn-outline:hover,
		.btn-danger.btn-outline:focus,
		.btn-danger.btn-outline:active {
			background: #d9534f;
			color: #fff;
		}

		.btn-outline {
			background: none;
			border: 2px solid gray;
			font-size: 16px;
			-webkit-transition: 0.3s;
			-o-transition: 0.3s;
			transition: 0.3s;
		}

		.btn-outline:hover,
		.btn-outline:focus,
		.btn-outline:active {
			box-shadow: none;
		}

		.btn.with-arrow {
			position: relative;
			-webkit-transition: 0.3s;
			-o-transition: 0.3s;
			transition: 0.3s;
		}

		.btn.with-arrow i {
			visibility: hidden;
			opacity: 0;
			position: absolute;
			right: 0px;
			top: 50%;
			margin-top: -8px;
			-webkit-transition: 0.2s;
			-o-transition: 0.2s;
			transition: 0.2s;
		}

		.btn.with-arrow:hover {
			padding-right: 50px;
		}

		.btn.with-arrow:hover i {
			color: #fff;
			right: 18px;
			visibility: visible;
			opacity: 1;
		}

		.form-control {
			box-shadow: none;
			background: transparent;
			border: 2px solid rgba(0, 0, 0, 0.1);
			height: 54px;
			font-size: 18px;
			font-weight: 300;
		}

		.form-control:active,
		.form-control:focus {
			outline: none;
			box-shadow: none;
			border-color: #FF9000;
		}

		.row-pb-md {
			padding-bottom: 4em !important;
		}

		.row-pb-sm {
			padding-bottom: 2em !important;
		}

		.nopadding {
			padding: 0 !important;
			margin: 0 !important;
		}

		.col-padding {
			padding: 6px !important;
			margin: 0px !important;
		}

		.my-name{
			
		}

		/*# sourceMappingURL=style.css.map */

		/* chatbot styles */
		* {
  box-sizing: border-box;
}

body {
  background-color: #edeff2;
  font-family: "Calibri", "Roboto", sans-serif;
}

.chat_window {
  position: relative;
  width: calc(100% - 20px);
  max-width: 800px;
  height: 500px;
  border-radius: 10px;
  background-color: #fff;
  left: 50%;
  top: 50%;
  transform: translateX(-50%) translateY(-50%);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
  background-color: #f8f8f8;
  overflow: hidden;
}

.top_menu {
  background-color: #fff;
  width: 100%;
  padding: 20px 0 15px;
  box-shadow: 0 1px 30px rgba(0, 0, 0, 0.1);
}
.top_menu .buttons {
  margin: 3px 0 0 20px;
  position: absolute;
}
.top_menu .buttons .button {
  width: 16px;
  height: 16px;
  border-radius: 50%;
  display: inline-block;
  margin-right: 10px;
  position: relative;
}
.top_menu .buttons .button.close {
  background-color: #f5886e;
}
.top_menu .buttons .button.minimize {
  background-color: #fdbf68;
}
.top_menu .buttons .button.maximize {
  background-color: #a3d063;
}
.top_menu .title {
  text-align: center;
  color: #bcbdc0;
  font-size: 20px;
}

.messages {
  position: relative;
  list-style: none;
  padding: 20px 10px 0 10px;
  margin: 0;
  height: 347px;
  overflow: scroll;
}
.messages .message {
  clear: both;
  overflow: hidden;
  margin-bottom: 20px;
  transition: all 0.5s linear;
  opacity: 0;
}
.messages .message.left .avatar {
  background-color: #f5886e;
  float: left;
}
.messages .message.left .text_wrapper {
  background-color: #ffe6cb;
  margin-left: 20px;
}
.messages .message.left .text_wrapper::after, .messages .message.left .text_wrapper::before {
  right: 100%;
  border-right-color: #ffe6cb;
}
.messages .message.left .text {
  color: #c48843;
}
.messages .message.right .avatar {
  background-color: #fdbf68;
  float: right;
}
.messages .message.right .text_wrapper {
  background-color: #c7eafc;
  margin-right: 20px;
  float: right;
}
.messages .message.right .text_wrapper::after, .messages .message.right .text_wrapper::before {
  left: 100%;
  border-left-color: #c7eafc;
}
.messages .message.right .text {
  color: #45829b;
}
.messages .message.appeared {
  opacity: 1;
}
.messages .message .avatar {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  display: inline-block;
}
.messages .message .text_wrapper {
  display: inline-block;
  padding: 20px;
  border-radius: 6px;
  width: calc(100% - 85px);
  min-width: 100px;
  position: relative;
}
.messages .message .text_wrapper::after, .messages .message .text_wrapper:before {
  top: 18px;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}
.messages .message .text_wrapper::after {
  border-width: 13px;
  margin-top: 0px;
}
.messages .message .text_wrapper::before {
  border-width: 15px;
  margin-top: -2px;
}
.messages .message .text_wrapper .text {
  font-size: 18px;
  font-weight: 300;
}

.bottom_wrapper {
  position: relative;
  width: 100%;
  background-color: #fff;
  padding: 20px 20px;
  position: absolute;
  bottom: 0;
}
.bottom_wrapper .message_input_wrapper {
  display: inline-block;
  height: 50px;
  border-radius: 25px;
  border: 1px solid #bcbdc0;
  width: calc(100% - 160px);
  position: relative;
  padding: 0 20px;
}
.bottom_wrapper .message_input_wrapper .message_input {
  border: none;
  height: 100%;
  box-sizing: border-box;
  width: calc(100% - 40px);
  position: absolute;
  outline-width: 0;
  color: gray;
}
.bottom_wrapper .send_message {
  width: 140px;
  height: 50px;
  display: inline-block;
  border-radius: 50px;
  background-color: #a3d063;
  border: 2px solid #a3d063;
  color: #fff;
  cursor: pointer;
  transition: all 0.2s linear;
  text-align: center;
  float: right;
}
.bottom_wrapper .send_message:hover {
  color: #a3d063;
  background-color: #fff;
}
.bottom_wrapper .send_message .text {
  font-size: 18px;
  font-weight: 300;
  display: inline-block;
  line-height: 48px;
}

.message_template {
  display: none;
}

.chatbot-menu-header{
    background-color: orange;
    color: white;
    padding: 2%;

}

.training-menu{
    color: white;
    padding 4%;
    background-color: blue;
    border-radius: 40px;
}

.chatbot-message-sender p{
    background-color: orange;
    color: white;
    padding: 2%;
    margin: 1%;
    border-radius: 20px;
}

.chatbot-message-bot p{
    background-color: blue;
    color: white;
    padding: 2%;
    margin: 1%;
    border-radius: 20px;
}

.chatbot-menu-input{
    margin: 0 auto;
}
.message-box input{
    background-color: #666;
    color: #000;
}
.chatbot-menu-header{
    margin: 0 auto;
}

form.form-inline{
    margin: 0 auto;
}
    </style>
</head>
<body>
</body>
<script src="<?=$home_url;?>/js/jquery.min.js" type="text/javascript"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="<?=$home_url;?>vendor/bootstrap/js/bootstrap.min.js"></script>
<script>
$(document).on('click', '.chat-btn', function(){
    $('.chatbot-menu').show();
    $('.chat-btn').hide();
    if ($(window).width() <= 767) {
        $(window).scrollTop($(window).height());
    }
});
$(document).on('click', '.chatbot-close', function(){
    $('.chatbot-menu').hide();
    $('.chat-btn').show();
});
$(document).on('click', '.chatbot-help', function(){
    help_menu = $('.chatbot-message-bot:first').html();
    $('.chatbot-menu-content').append('<div class="chatbot-message-bot" id="last-message">'+help_menu+'</p></div>');
    content_height = $('.chatbot-menu-content').prop('scrollHeight');
    $('.chatbot-menu-content').scrollTop(content_height);
});
// Chatbot send button handler
$(document).on('click', '.chatbot-send', function(e){
    e.preventDefault();
    bot_query = 'bot_query';
    message_string = $('input[name="chatbot-input"]').val();
    password = true;
    aboutbot = false;
    $('input[name="chatbot-input"]').val('');
    if (message_string.trim() === '') {
        message_string = '';
        payload = {'response':'empty', 'message':'Sorry, you cannot send an empty message.'};
        $('.chatbot-menu-content').append('<div class="chatbot-message-bot" id="last-message"><p>'+payload.message+'</p></div>');
    }
    else {
        message_string = message_string.trim();
        payload = {'response':'success', 'message':message_string};
        $('.chatbot-menu-content').append('<div class="chatbot-message-sender" id="last-message"><p>'+payload.message+'</p></div>');
    }
    if (message_string.split(':')[0].trim() === 'train') {
        bot_query = 'bot_train';
        if (!message_string.includes('# password') && !message_string.includes('#password')) {
            password = false;
            $('.chatbot-menu-content').append('<div class="chatbot-message-bot" id="last-message">Sorry, you need to input a password</p></div>');
        }
        else if (message_string.trim().slice(-8) !== 'password') {
            password = false;
            $('.chatbot-menu-content').append('<div class="chatbot-message-bot" id="last-message">Sorry, I do not recognize this password, try again.</p></div>');
        }
        else {
            array_words = message_string.trim().split(':');
            parse_colon_delimiter = array_words[0].trim() + ': ' + array_words[1].trim();
            parse_hash_delimiter = parse_colon_delimiter.split('#');
            payload.message = parse_hash_delimiter[0].trim() + ' # ' + parse_hash_delimiter[1].trim();
            console.log(payload.message);
        }
    }
    else if (message_string.trim() === 'help') {
        help_menu = $('.chatbot-message-bot:first').html();
        $('.chatbot-menu-content').append('<div class="chatbot-message-bot" id="last-message">'+help_menu+'</p></div>');
    }
    else if (message_string.trim() === 'aboutbot') {
        aboutbot = true;
        version = "<div><p><span class='bot-command'>Balaclava v1.0</span></p></div> <div><p>Hi! I'm Balaclava</p><p>I can perform some basic task</p></div>";
        $('.chatbot-menu-content').append('<div class="chatbot-message-bot" id="last-message">'+version+'</div>');
    }
    else if (message_string.split(' : ').length === 2 && !message_string.includes('#')) {
        bot_query = 'bot_command';
    }
    if (message_string.slice(0, 6) === 'train:') {
        $('.chatbot-message-sender:last').addClass('chatbot-train-message');
    }
    content_height = $('.chatbot-menu-content').prop('scrollHeight');
    $('.chatbot-menu-content').scrollTop(content_height);
    
    // Use AJAX to query DB and look for matches to user's query
    if(message_string !== '' && message_string.trim() !== 'help' && password && !aboutbot) {
        $.ajax({
            url: '/profiles/christoph',
            data: bot_query+'='+payload.message,
            type: 'POST',
            dataType: 'JSON',
            beforeSend: function() {
                $('.chatbot-menu-content').append('<div class="chatbot-message-bot" id="last-message"><p>Hold on ... processing information</p></div>');
                content_height = $('.chatbot-menu-content').prop('scrollHeight');
                $('.chatbot-menu-content').scrollTop(content_height);
                $('.chatbot-send').attr('disable');
            },
            success: function(data){
                console.log(data);
                $('.chatbot-message-bot:last > p').html(data.message);
                if (data.response === 'show_direction') {
                    $('.chatbot-message-bot:last > p').html('Click on <a href="'+data.message+'" target="_blank">'+data.message+'</a> to view directions on map');
                }
                if (data.response === 'training_error') {
                    training_menu = $('.training-menu').clone();
                    $('.chatbot-message-bot:last').html(data.message);
                    $('.chatbot-message-bot:last').append(training_menu);
                }
                $('.chatbot-send').removeAttr('disable');
            }
        });
    }
});
</script>
</html>
<?php endif; ?>

<?php
// Check if there's a POST REQUEST from the bot
if (!empty($_POST['bot_query']) or !empty($_POST['bot_train']) or !empty($_POST['bot_command'])) {
    if (empty($conn)) {
        $response = ['response'=>'connection_error', 'message'=>"Sorry, I could not connect to the database, someone must have crashed it again."];
        echo json_encode($response);
        exit;
    }
    // Function that parses a given location string and concatenates it with '+'
    function parseLocation ($location_string) {
        $parsed_location_string = preg_replace("#[^a-zA-Z0-9/_|+ -]#", '', $location_string);
        $parsed_location_string = preg_replace("#[/_|+ -]+#", '+', $parsed_location_string);
        $parsed_location_string = trim($parsed_location_string, '+');
        return $parsed_location_string;
    }
    $url = "https://maps.googleapis.com/maps/api/distancematrix/json?origins=";
    $key = "AIzaSyCFtpq466EjoP-RImHD66upJV_OwjWL93k";
    if ($_POST['bot_query']) {
        $query_input = $_POST['bot_query'];
        // Check if query matches a distance request pattern
        if (preg_match('/(.+)(between|from)(.+)/', $query_input, $matches)) {
            $question = $matches[1];
            $question .= $matches[2];
            $query_input = trim($question);
        }
        
        // Search db for question and return a random answer if question exists
        $check_message_query = $conn->prepare(
        'SELECT     chatbot.answer,
                    chatbot.question
        FROM        chatbot
        WHERE       chatbot.question LIKE ?
        ORDER BY    RAND() LIMIT 1');
        $check_message_query->bindValue(1, "%$query_input%");
        $check_message_query->execute();
        $query_result = $check_message_query->fetch();
        // If query doesn't match any question
        if ($query_result === false) {
            $error_messages = ["That seems rather complex, it's quite embarrasing that I can't answer that now. I would like you to train me further, Pleeaaase!!! <br /> <br />", "I used to think I knew it all, but I don't. Could you train me? <br /> <br />", "I don't have an answer to this yet, would you like to can train me, so I have an answer for you next time? <br /> <br />"];
            $response = ['response'=>'training_error', 'message'=>$error_messages[rand(0, 2)]];
            echo json_encode($response);
        }
        else {
            // Check if it is a function call
            if (preg_match('/(.+)\(([A-z_]+)\)/', $query_result['answer'], $matches)) {
                $unparsed_location = substr($_POST['bot_query'], strlen($query_result['question']));
                $parsed_location = preg_match('/(.+) (and|to) (.+)/', $unparsed_location, $location_data);
                // Strip query of unwanted symbols
                $location1      = parseLocation($location_data[1]);
                $delimiter      = $location_data[2];
                $location2      = parseLocation($location_data[3]);
                $answer         = $matches[1];
                $function_name  = $matches[2];
                // Quick fix for duplicate preposition error
                $array_words = explode(' ', $answer);
                $words_length = count($array_words);
                if ($array_words[$words_length - 2] == $array_words[$words_length - 3]) {
                    array_pop($array_words);
                    array_pop($array_words);
                    $answer = trim(implode(' ', $array_words));
                }
                $_SESSION['location1'] = $location1."+Nigeria";
                $_SESSION['location2'] = $location2."+Nigeria";
                
                if ($parsed_location) {
                    include '../answers.php';
                    if (function_exists($function_name)) {
                        $distance = call_user_func($function_name, $key, $url, $location1, $location2);
                        $response = ['response'=>'christoph_bot', 'message'=>"$answer $location_data[1] $delimiter $location_data[3] : <b>$distance</b>"];
                        echo json_encode($response);
                    }
                    else {
                        $response = ['response'=>'function_error', 'message'=>'Please, check back in a bit'];
                        echo json_encode($response);
                    }
                }
                else {
                    $response = ['response'=>'parse_error', 'message'=>"Sorry, Not understood <br /><br /> I'm learning really fast. But till then, you can only use the supported delimiters <span class='bot-command highlight'>and</span> or <span class='bot-command highlight'>to</span> <br /></br> Type <span class='bot-command'>help</span> for more guides."];
                    echo json_encode($response);
                }
            }
            else {
                $response = ['response'=>'christoph_bot', 'message'=>$query_result['answer']];
                echo json_encode($response);
            }
        }
    }
    elseif (substr(strtolower(trim($_POST['bot_train'])), 0, 6) === 'train:') {
        // Regular expression to check if the training command is correct
        // Retrieve Questions, Location and Function Name
        $simple_mode_pattern = '/train: (.+[^{}]) \# (.+[^{}])/';
        $complex_mode_pattern = '/train: ?(.+) ?(between|from) ?{{(.+)}} ?(and|to) ?{{(.+)}} ?\# ?(.+) ?(between|from) ?{{(.+)}} ?(and|to) ?{{(.+)}} ?\(\((.+)\)\)/';
        $train_command = $_POST['bot_train'];
        $match_simple_mode = preg_match($simple_mode_pattern, $train_command, $match_simple);
        $match_complex_mode = preg_match($complex_mode_pattern, $train_command, $matches);
        if ($match_simple_mode or $match_complex_mode) {
            if ($match_simple_mode) {
                $question = $match_simple[1];
                $answer   = $match_simple[2];
                // Insert question into database
                $save_message = $conn->prepare(
                "INSERT INTO chatbot (question, answer) VALUES (?, ?)");
                $save_message->bindParam(1, $question, PDO::PARAM_STR);
                $save_message->bindParam(2, $answer, PDO::PARAM_STR);
                $save_message->execute();
                
                // Concatenate random answer retrieved from database with the calculated distance
                $array_responses = ["Thanks for teaching me, I'm a fast learner. Please ask me the question again.", "Now I understand this command, you can try asking me the same question again. Bloody teacher, Thanks for teaching me."];
                
                $response = ['response'=>'train_message', 'message'=>$array_responses[rand(0, 1)]];
                echo json_encode($response);
            }
            elseif ($match_complex_mode) {
                $question       = $matches[1];
                $preposition    = $matches[2];
                $location1      = parseLocation($matches[3]);
                $delimiter      = $matches[4];
                $location2      = parseLocation($matches[5]);
                $answer         = $matches[6];
                $function_name  = $matches[11];
                $_SESSION['location1'] = $location1;
                $_SESSION['location2'] = $location2;
                // Include answers.php and call the calculate_distance function if it exists
                include "../answers.php";
                if (function_exists($function_name) or $match_simple_mode) {
                    $distance = "<b>".call_user_func($function_name, $key, $url, $location1, $location2)."</br>";
                    $location1 = str_replace('+', ' ', $location1);
                    $location2 = str_replace('+', ' ', $location2);
                    
                    $concat_question = "$question $preposition";
                    $concat_answer = "$answer ($function_name)";
                    // Insert question into database
                    $save_message = $conn->prepare(
                    "INSERT INTO chatbot (question, answer) VALUES (?, ?)");
                    $save_message->bindParam(1, $question, PDO::PARAM_STR);
                    $save_message->bindParam(2, $concat_answer, PDO::PARAM_STR);
                    $save_message->execute();
                    
                    // Concatenate random answer retrieved from database with the calculated distance
                    $array_responses = ["Thanks for teaching me, I'm a fast learner. Why don't you try asking me again. <br /><br /> $answer $location1 $delimiter $location2 : $distance", "Now I've learnt this command, you can try asking me the same question again. Yaaay, thanks for teaching me. <br /><br /> $answer $location1 $delimiter $location2 : $distance"];
                    $response = ['response'=>'train_message', 'message'=>$array_responses[rand(0, 1)]];
                    echo json_encode($response);
                }
                else {
                    $response = ['response'=>'train_command_error', 'message'=>'Sorry, that command does not exist, you can only use: <br /><br /> <span class="bot-command">((calculate_distance))</span> function with the <span class="bot-command">train: </span> command to get the distance between 2 locations <br /><br /> <span class="bot-command">get duration : [mode]</span> Command to get the estimated trip duration between the last 2 locations <br /><br /><br /> <span class="bot-command">show direction : [mode]</span> Command to display the direction between the last 2 locations<br /><br /><br /> You can type <span class="bot-command">help</span> to learn more'];
                    echo json_encode($response);
                }
            }
        }
        else {
            $error_messages = ["Sorry, I do not understand this training command, please try again <br /> <br />", "This training command is new, sure you're not missing anything? <br /> <br />", "Oops!, I've not been trained to learn that training command <br /> <br />"];
            $response = ['response'=>'training_error', 'message'=>$error_messages[rand(0, 2)]];
            echo json_encode($response);
        }
        
    }
    if ($_POST['bot_command']) {
        if (substr($_POST['bot_command'], 0, 12) === 'get duration') {
            $get_command = explode(' : ', $_POST['bot_command']);
            $mode = $get_command[1];
            $location1 = $_SESSION['location1'];
            $location2 = $_SESSION['location2'];
            $function_name = trim(str_replace(' ', '_', strtolower($get_command[0])), '_');
            include '../answers.php';
            if (function_exists($function_name)) {
                $trip_duration = call_user_func($function_name, $key, $url, $location1, $location2, $mode);
                $location1 = str_replace('Nigeria', '', str_replace('+', ' ', $location1));
                $location2 = str_replace('Nigeria', '', str_replace('+', ' ', $location2));
                $response = ['response'=>'trip_duration', 'message'=>"The $mode duration from $location1 to $location2 is estimated to be about <b>$trip_duration</b>"];
                echo json_encode($response);
            }
            else {
                $response = ['response'=>'command_error', 'message'=>'Sorry, that command does not exist.'];
                echo json_encode($response);
            }
        }
        elseif (substr($_POST['bot_command'], 0, 14) === 'show direction') {
            $get_command = explode(' : ', $_POST['bot_command']);
            $mode = $get_command[1];
            $location1 = $_SESSION['location1'];
            $location2 = $_SESSION['location2'];
            $function_name = trim(str_replace(' ', '_', strtolower($get_command[0])), '_');
            include '../answers.php';
            if (function_exists($function_name)) {
                $map_url = call_user_func($function_name, $location1, $location2, $mode);
                $response = ['response'=>'show_direction', 'message'=>$map_url];
                echo json_encode($response);
            }
            else {
                $response = ['response'=>'command_error', 'message'=>'Someone must have tampered with my functions file.'];
                echo json_encode($response);
            }
        }
        else {
            $response = ['response'=>'train_command_error', 'message'=>'Sorry, that command does not exist, you can only use: <br /><br /> <span class="bot-command">((calculate_distance))</span> function with the train command to get the distance between 2 locations <br /><br /> <span class="bot-command">get duration : [mode]</span> Command to get the estimated trip duration between the last 2 locations <br /><br /> <span class="bot-command">show direction : [mode]</span> Command to display the direction between the last 2 locations'];
            echo json_encode($response);
        }
    }
}
?>


<!DOCTYPE HTML>
<html>

<head>
	

	</style>

</head>

<body>

 <?php
    try {
        $sql = 'SELECT * FROM secret_word';
        $q = $conn->query($sql);
        $q->setFetchMode(PDO::FETCH_ASSOC);
        $data = $q->fetch();
    } catch (PDOException $e) {
        throw $e;
    }
    $secret_word = $data['secret_word'];
    ?>

	 <?php
    try {
        $sqli = 'SELECT * FROM interns_data';
        $quin = $conn->query($sqli);
        $quin->setFetchMode(PDO::FETCH_ASSOC);
        $datas = $quin->fetch();
    } catch (PDOException $error) {
        throw $error;
    }
	$username = $datas['username'];
	$name = $datas['name'];
	
    ?>





	<div id="page">
		<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image:url(http://res.cloudinary.com/cortehz/image/upload/v1517224595/portfolio/Snapchat_izgfgf.jpg);"
		 data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="display-t js-fullheight">
							<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
								<div class="profile-thumb" style="background: url(https://res.cloudinary.com/cortehz/image/upload/v1517224597/portfolio/profile-1_hjigdy.jpg);"></div>
								<h1>
									<span class="my-name" style="color: orange">Samuel Omanchi</span>
								</h1>
								<h3>
									<span>Web Developer / Budding Writer<br> <hr> Check Out my bot below</span>
								</h3>
								<p>
									<ul class="fh5co-social-icons">
										<li>
											<a href="https://twitter.com/cortehzz">
												<i class="fab fa-twitter"></i>
											</a>
										</li>

										<li>
											<a href="https://www.linkedin.com/in/samuel-omanchi-aa49708a/">
												<i class="fab fa-linkedin-in"></i>
											</a>
										</li>
										<li>
											<a href="https://github.com/cortehz">
												<i class="fab fa-github" aria-hidden="true"></i>
											</a>
										</li>
									</ul>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
            </div>
		</header>
		</div>

		
        <div class="chatbot-menu container">
                    <div class='chatbot-menu-header'>
                        <span class="text-center">Cortehz's Balaclava Bot</span>
                    </div>
                    <div class="chatbot-menu-content">
                        <div class="chatbot-message-bot">
                            <div class="training-menu">
                                <p>You can train me to understand and answer new questions. </p>
                                <p>1) Simple Mode: You can train me to answer any question using: <span class="bot-command">train: question # answer # [password]</span></p> 
                                <p>eg <span class="bot-command">train: Whats my name # Cortehz # password</span></p>
                                
                                
                                <p>To get the my current version, type <span class="bot-command">aboutbot</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="chatbot-menu-input">
                        <form action="" class="form-inline">
                            <div class="form-group message-box">
                                <input type="text" name="chatbot-input" id="" class="form-control" autofocus>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary chatbot-send">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
</body>

</html>

