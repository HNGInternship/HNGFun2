<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>horpschenzy's Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <style>
    body{

background-color: #badacc;

}
.cont{
    padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;

}
.hdimg{
    background:	#26272B;
}

.con {
   border: 1px solid #DDDDDD;
   width: 100;
   position: relative;

}
.tag {
   float: left;
   position: absolute;  
   left: 12%;
   top: 36%;
   z-index: 1000;
   background-color: #badacc;
   padding: 14px;
   color: #FFFFFF;
   font-weight: bold;
}
.tag2 {
   float: left;
   position: absolute;  
   left: 600px;
   top: 450px;
   z-index: 1000;
   font-weight: 300;
    font-size:28px;
   padding: 5px;
   color: #111111;
   font-weight: bold;
   margin-bottom: 30px;
}

.col-md-4 {
	margin-bottom: 30px;
	padding: 10px;
}
.det{
    
	color:  blue;
	font-size: 30px;
	font-weight: 700px;
    padding: 10px;    
    width: 95px;
    

}
footer{

}
    </style>
</head>
<body>
<div>
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


<div class="con">
   <div class="tag">
   
    <img align="left"  src="<?= $user->image_filename; ?>" alt=""height="400px" width="399px"/>

   </div>
   <div class="tag2">
        <?= $user->name; ?> <?= $user->username; ?></h1>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>.
      <div class="row">
      <div class="col-md-4"><span class="det">BOOTSTRAP</span></div>
            	<div class="col-md-4"><span class="det">CodeIgniter</span> </div>
                
                <div class="col-md-4"><span class="det">HTML           </span></div>
                <div class="col-md-4"><span class="det"> PHP       </span></div>
            	
            	<div class="col-md-4"><span class="det">CSS    </span></div>
            	
            	<div class="col-md-4"><span class="det">JS            </span></div>
            	
            </div>
  
   </div>

   <img align="left"  src="http://res.cloudinary.com/hostnownow/image/upload/v1523974290/1.jpg " alt=""height="400px" width="100%"/>
   <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
  
</div>

</div>

    
</body>
</html>