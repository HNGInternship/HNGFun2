<!DOCTYPE html>
<html>
<head>
	<title>horpschenzy's Profile</title>
</head>
<style type="text/css">
body{

	background-color: #badacc;
}
.container2 {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
@media (min-width: 768px) {
  .container2 {
    width: 750px;
  }
}
@media (min-width: 992px) {
  .container2 {
    width: 970px;
  }
}
@media (min-width: 1200px) {
  .container2 {
    width: 1170px;
  }
}
.tempp {
    margin-right: -15px;
    margin-left: -15px
}

helll img.fb-image-lg{
    z-index: 0;
    width: 100%;  
    margin-bottom: 10px;
}

.fb-image-profile
{
    margin: -90px 10px 0px 50px;
    z-index: 9;
    width: 20%; 
}

@media (max-width:768px)
{
    
.helll-text>h1{
    font-weight: 700;
    font-size:20px;
}


.helll-text>h3{
    font-weight: 300;
    font-size:18px;
    color: #ffffff;
}

.fb-image-profile
{
    margin: -45px 10px 0px 25px;
    z-index: 9;
    width: 20%; 
}

.thumbnail132 {
    display: block;
    padding: 4px;
    margin-bottom: 20px;
    line-height: 1.42857143;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 4px;
    -webkit-transition: border .2s ease-in-out;
    -o-transition: border .2s ease-in-out;
    transition: border .2s ease-in-out
}

.thumbnail132 a>img,
.thumbnail132>img {
    margin-right: auto;
    margin-left: auto
}

a.thumbnail132.active,
a.thumbnail132:focus,
a.thumbnail132:hover {
    border-color: #1e90ff
}

.thumbnail132 .caption2 {
    padding: 9px;
    color: #333
}
.listtinz {
	
	margin-left:  400px;
	padding: 10px;
}
.detailed{

	color:  blue;
	font-size: 30px;
	font-weight: 700px;
	font
}
</style>
<body>

	<?php

if(!isset($_GET['id'])){
       require '../db.php';
     }else{
        require 'db.php';
     }
    

	// require_once ('../db.php');
   $result = $conn->query("SELECT * from secret_word LIMIT 1");
   $result = $result->fetch(PDO::FETCH_OBJ);
   $secret_word = $result->secret_word;

   $result2 = $conn->query("SELECT * from interns_data where username = 'horpschenzy'");
   $user = $result2->fetch(PDO::FETCH_OBJ);
?>

	<div class="container2">
    <div class="helll tempp">
        <img align="left" class="fb-image-lg thumbnail132" src="http://res.cloudinary.com/hostnownow/image/upload/v1523974290/1.jpg
" alt="" height="400px" width="100%"/>
        <img align="left" class="fb-image-profile thumbnail132" src="<?= $user->image_filename; ?>" alt="Profile image example"/>
        <div class="helll-text">
            <h1><?= $user->name; ?> <?= $user->username; ?></h1>
            <h3>Skills: </h3>
        </div>
            
            <div class="tempp">
            	<div class="listtinz"><span class="detailed">CodeIgniter</span> <span class="detailed"> PHP</span></div>
            	<div class="listtinz"><span class="detailed">HTML</span></div>
            	<div class="listtinz"><span class="detailed">CSS</span></div>
            	<div class="listtinz"><span class="detailed">BOOTSTRAP</span></div>
            	<div class="listtinz"><span class="detailed">JS</span></div>
            	
            </div>
            


    </div>
</div> <!-- /container -->  


</body>
</html>