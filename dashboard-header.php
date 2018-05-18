<?php

$username = "Amy Xandra";
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HNG FUN Dashboard</title>

    <!-- Bootstrap core CSS -->
      
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

      <!-- Custom fonts for this template -->
  <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'> -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Lato|Work+Sans:400,900&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../assets/css/custom.css" type="text/css"> -->
    <link rel="shortcut icon" href="images/favicon.png">

    <!-- Custom styles for this template -->
      <link href="css/style2.css" rel="stylesheet">
      <link href="css/style1.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <link href="css/learn.css" rel="stylesheet">
      <link href="css/custom.css" rel="stylesheet">
      <link rel="stylesheet" href="css/login.css">
      <link rel="stylesheet" href="css/signout.css">
      <link href="css/landing-page.min.css" rel="stylesheet">
      <link href="css/shield-invite.css" rel="stylesheet">
        <link href="css/404.css" rel="stylesheet">
      <!-- <link href="css/carousel.css" rel="stylesheet"> -->

      <script src="js/jquery.min.js" ></script>
      <script src="js/stellar-sdk.js"></script> 
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

      <style>
        body{
            background-color: #fafafa;
            font-family: 'Lato', sans-serif;
        }
		.dash-b{
			background-color: #FFFFFF;
			padding-left: 30px;
		}
        #navbar{
            font-size: 15px;
            font-weight: bold;
        }

        .nav-item{
            padding-right: 15px;
            padding-left: 15px;
			font-size: 13px !important;
        }
        .nav-item:hover {
            background-color: rgba(199, 196, 196, 0.1);
            border-bottom: 3px solid rgb(90, 145, 247);
        }
        li.nav-item {
            padding-bottom: 0px;
        }
        ul.navbar-nav {
            height: auto !important;
        }
  <?php if (function_exists('custom_styles')) {
      custom_styles();
    }
    ?>
    nav.navbar {
        box-sizing: border-box !important;
        padding: 0px 50px !important;
        font-size: 15px;
        font-weight: bold;
        display: inline-block;
        width: 100%;
            padding: 10px 50px !important;
    }
    .navbar-logo {
        width: auto !important;
    }
    .navbar-brand {
    width: auto !important;
    }
    @media (min-width: 992px){
    .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: .5rem;
        padding-left: .5rem;
        padding-top: 20px;
        font-size: 15px !important;
    }
    ul.navbar-nav.collapse.ml-auto {
        display: -webkit-inline-box;
        height: 100% !important;
        float: right;
    }
    nav.navbar {
        padding: 0 16px 0 50px !important;
        height: 100px;
    }
    .navbar-logo {
        width: auto !important;
        margin-top: 30px;
    }
    }
    .navbar-toggler {
    float: right;
    }
    .nav-item.active {
        background-color: rgba(199, 196, 196, 0.1);
        border-bottom: 3px solid rgb(90, 145, 247);
    }
    .navbar-fixed {
      background: #f4f4f4 !important;
    }
    .box{
        box-shadow: 2px 0px 2px 1px #888888;
        text-align: center;
        border: 4px solid #FFFFFF;
        background-color: #FFFFFF;
        margin-top:5%;
        font-family: 'Lato', sans-serif;
        
    }
    .head, spa{
        color:#2196F3;
    }
    img{
        border-radius:50%;
        height:40px;
        width:40px;
    }
    .btn{
        width:150px;
    }
    .logo{
        height:90px;
        width:70px;
        padding-top:20px;
    
    
 }
    </style>

    <link href="css/dashboard-menu.css" rel="stylesheet">

  </head>

  <body>
    <!-- Navigation -->
    <div id="navbar-fixed" class="navbar-fixed">
        <nav class="navbar navbar-expand-lg navbar-light"  style="background-color: #f2f2f2;">
        <a class="navbar-brand" href="./index.php"><img src="./img/logo.png" alt="" class="navbar-logo"></a>

			<div class="navbar-right acc">
				
				<div class="dropdown" id="">
					<img class="acc-img" src="img/dashboard/amy.png">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"  id="note" aria-haspopup="true"><?php 
					echo $username; ?><span><img class="dashb-icons" src="img/dashboard/arrow-down.png"></span>
					</a>
					 
					<ul class="dropdown-menu">
							<li><span class="dropdown-item"><img class="dashb-icons" src="img/dashboard/profile.png"><a href="profile.php">Your Profile</a>
							</span></li>

							<li><span class="dropdown-item">
							<img class="dashb-icons" src="img/dashboard/invite.png"><a href="invite2.php">Invite to HNG</a></span></li>

							<li><span class="dropdown-item">
							<img class="dashb-icons" src="img/dashboard/settings.png">Settings</span></li>

							<span href="logout.php" class="dropdown-item">
							<img class="dashb-icons" src="img/dashboard/logout.png">Logout</span>

					</ul>
					
				</div>

			</div>

        </nav>
    </div>

    <div class="dash-b">
        <ul class="navbar-nav collapse ml-auto dashmenu">
            <li class="nav-item active">
                <a href="index.php" class="nav-link"><img class="dashb-icons" src="img/dashboard/dashboard-active.png">Dashboard</a>
            </li>
            <li class="nav-item">
                <a href="buyandsell.php" class="nav-link"><img class="dashb-icons" src="img/dashboard/trade.png">Trade</a>
            </li> <li class="nav-item">
                <a href="profile.php" class="nav-link"><img class="dashb-icons" src="img/dashboard/profile.png">Profile</a>
            </li> <li class="nav-item">
                <a href="help.php" class="nav-link"><img class="dashb-icons" src="img/dashboard/help.png">Help & Feedback</a>
            </li>
        </ul>
</div>
 <!-- wallet board -->
 <section id="board">
 <div class="container">
    <div class="box">
        <p>HNG Coin Wallet</p>
        <h1>9.0000 <spa>HNG</spa> </h1>
        <p> HNG Wallet Address : 1NBpecSgZ86hAPje2Rc7oFz</p>
    <div>
 </div>
 </div>
 </section>
    <br>

<!-- Transaction board -->
<Section id="Transaction">
 <div class ="container">
    <div class="row">
        <div class="col">
        <ul class="list-group">
            <button type="button" class="list-group-item list-group-item-action ">
                <h4 class="head">Your Coins</h4>
            </button>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <h4>HNG Coin</h4>                
                <span><strong>3000 HNG</strong> <br> NGN 5000.00</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <h4>HNG Coin</h4>                
                 <span><strong>3000 HNG</strong> <br> NGN 5000.00</span>               
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <h4>HNG Coin</h4>                
                <span><strong>3000 HNG</strong> <br> NGN 5000.00</span>                
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <h4>HNG Coin</h4>
                <span><strong>3000 HNG</strong> <br> NGN 5000.00</span>                
            
            
        </ul>
        </div>

        <div class="col">
        <ul class="list-group">
             <button type="button" class="list-group-item list-group-item-action ">
                <h4 class="head">Transaction History</h4>
            </button>
            <li class="list-group-item d-flex justify-content-between align-items-center"><span><strong>APR</strong> <br>30</span>
                <span><strong>Transferred HNG Coin</strong> <br><spa> Ogbeni Ore</spa></span>             
                <span><strong>3000 HNG</strong> <br> NGN 5000.00</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center"><span><strong>APR</strong> <br>30</span>
                <span><strong>Transferred HNG Coin</strong> <br> <spa>Ogbeni Ore</spa></span>                             
                <span><strong>3000 HNG</strong> <br> NGN 5000.00</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center"><span><strong>APR</strong> <br>30</span>
                <span><strong>Transferred HNG Coin</strong> <br><spa> Ogbeni Ore</spa></span>                              
                 <span><strong>3000 HNG</strong> <br> NGN 5000.00</span>               
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center"><span><strong>APR</strong> <br>30</span>
                <span><strong>Transferred HNG Coin</strong> <br><spa> Ogbeni Ore</spa></span>                        
                <span><strong>3000 HNG</strong> <br> NGN 5000.00</span>                
            </li>
        </ul>
        </div>
 </div>
 </Section>
    <br>
 <!-- Activity -->
 <section id="Activity">
    <div class="container">
        <div class="row">
        <div class="col">
        <ul class="list-group">
            <button type="button" class="list-group-item list-group-item-action ">
                <h4 class="head">Transaction History</h4>
            </button>
            <li class="list-group-item d-flex justify-content-between align-items-center"><span><img src"https://res.cloudinary.com/syfon/image/upload/v1526589888/Img.png" alt "image">
            <strong>Ogbeni Ore</strong></span>
            <span><button type="button" class="btn btn-primary">Sell</button></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center border-top-0"><span><img src"https://res.cloudinary.com/syfon/image/upload/v1526589888/Img.png" alt "image">
            <strong>Ogbeni Ore</strong></span>
            <span><button type="button" class="btn btn-primary">Buy</button></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center border-top-0"><span><img src"http://res.cloudinary.com/syfon/image/upload/v1526589888/Img.png" alt "image">
            <strong>Ogbeni Ore</strong></span>
            <span><button type="button" class="btn btn-primary">Buy</button></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center border-top-0"><span><img src"http://res.cloudinary.com/syfon/image/upload/v1526589888/Img.png" alt "image">
            <strong>Ogbeni Ore</strong></span>
            <span><button type="button" class="btn btn-primary">Buy</button></span>
            </li>
            
        </ul>
        </div>
        <div class="col">
        <div class="share">
        <ul class="list-group ">
         <li class="list-group-item text-center"><img class= "logo" src="https://res.cloudinary.com/syfon/image/upload/v1526591211/noun_106750_cc.png"><br>
         <span><strong>Share HNG Coins with Friends</strong><br><br>
         Encourage your friends to learn coding by offering <br> them HNG Coins today!
         <br><br>
         </li>
         <li class="list-group-item text-right"><spa>INVITE FRIENDS</spa></li>
         
        </ul>
        </div>
        </div>
        </div>
    </div>
 </section>

 <?php include("footer.php");?>
 