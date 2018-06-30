<?php
// session_start();
// $_SESSION["user_id"];
// require_once('db.php');
// include_once("dashboard-header.php");
?>
<!-- <script type="text/javascript" src="./web3.min.js"></script>
  <script type="text/javascript" src="./human_standard_token_abi.js"></script>
  <script type="text/javascript" src="./coin.js"></script>
<head>
<style>
 .box{
        box-shadow: 2px 0px 2px 1px #888888;
        text-align: center;
        border: 4px solid #FFFFFF;
        background-color: #FFFFFF;
        margin-top:5%;
        font-family: 'Lato', sans-serif;
        
    }
      .sp {
         width: 70%;
         margin: 0 auto;
    }
    .head, spa{
        color:#2196F3;
    }
    .pro{
        border-radius:50%;
        height:40px;
        width:40px;
    }
    .btn{
        width:150px;
    }
    .noun{
        height:90px;
        width:70px;
        padding-top:20px;
    
    
 }

 body{
    background-color: red;
 }

</style>
</head>
 <body onload="checkBalance()">
   
 wallet board -->
  <!-- <section id="board">
 <div class="container">
    <div class="box">
	<p> Current Coin Balance </p>
        <h1 id="accountbalance"></h1>
        <p> HNG Wallet Address : <?php  //if(isset($_SESSION['address'])){
            //echo $_SESSION['address'];
        //} else{
           //echo "You have not set an address yet";
       // }?></p>
    <div>
 </div>
 </div>
 </section>
    <br> -->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="css/coin.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

  </head>
  <body>
    <header class="banner">
        <div class="layer">

          <!-- Image and text -->
<nav class="container navbar navbar-expand-lg navbar-dark main-bg-colour">
  <a class="navbar-brand" href="/coin">
    <img src="img/hngcoin_logo.png" class="d-inline-block align-top coin-logo" alt="HNG coin Logo">
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
  <ul class="navbar-nav justify-content-md-end">
<li class="nav-item">
    <a class="nav-link d-flex align-items-center justify-content-center" href="index.php">ABOUT</a>
  </li>
  <li class="nav-item">
    <a class="nav-link d-flex align-items-center justify-content-center" href="about.php">TOKEN SALES</a>
  </li>
  <li class="nav-item">
    <a class="nav-link d-flex align-items-center justify-content-center" href="team.php">WHITEPAPER</a>
  </li>
  <li class="nav-item">
    <a class="nav-link d-flex align-items-center justify-content-center" href="#">TEAM</a>
  </li>
  <li class="nav-item dropdown dropdown-nav d-flex align-items-center justify-content-center">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          English
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">English</a>
          <a class="dropdown-item" href="#">French</a>
          <a class="dropdown-item" href="#">Dutch</a>
        </div>
      </li>
</ul>
</div>

</nav>


    
    <h1 class="banner-text-colour banner-header mb-3">The HNG Crypt-Token</h1>
    <h2 class="banner-text-colour banner-subheader mb-5 sp">A token that is used to support the development of software developers in Africa through the HNG Internship</h2>
    <div class="d-flex justify-content-center mt-3 mb-5">
<a href="#"><button class="banner-button"><span class="button-text" href="#">Support the mission</span></button></a></div>
    </div>

        
    </header>

    <div class="container-fluid">

    <section class="row py-5 justify-content-center grey-bg phone-section">

        <h2 class="body-header text-center col-12 mb-5 pb-5">What's this all about?</h2>


        <div class="col-4 text-right pt-5 justify-content-end">
            <div class="py-2 text-center mb-3"  style="width: 50px;
                            height: 50px;
                            background: #FBFAFA;
                            border: 1px solid #E6E5E5;
                            box-sizing: border-box;
                            border-radius: 50%;
                            display: inline-block;
                            ">
                <img src="img/chain-doctor.png" class="small-icons" width="100%">
        </div>

            <h3 class="row justify-content-end body-normal-font body-black-normal text-right" style="font-size: 18px">Proof of Improvement</h3>
           <p class="row body-small-font body-black-light text-right mb-5 justify-content-end"><span  style="width:72%;">Make your professional profile accessible anytime anywhere on the blockchain. Stand out by visualizing your individual career path in a stunning way.</span></p>

            <div class="py-2 text-center mb-3 mt-5"  style="width: 50px;
                            height: 50px;
                            background: #FBFAFA;
                            border: 1px solid #E6E5E5;
                            box-sizing: border-box;
                            border-radius: 50%;
                            display: inline-block;
                            ">
                <img src="img/chain-person.png" class="small-icons" width="100%">
        </div>

            <h3 class="row justify-content-end body-normal-font body-black-normal text-right" style="font-size: 18px">Make the world better</h3>
            <p class="row body-small-font body-black-light text-right mb-5 justify-content-end"><span  style="width:76%;">Get your skills validated in an anonymous, simple and objective way. Through consensus of other expert users or by interacting with AI based systems like chatbots</span></p>
            
        </div>





        <div class="col-3 mx-5 mb-5"><img src="img/coin-phone.png" width="100%" height="617px"></div>




            <div class="col-4 text-left pt-5">
            <div class="py-2 text-center mb-3"  style="width: 50px;
                            height: 50px;
                            background: #FBFAFA;
                            border: 1px solid #E6E5E5;
                            box-sizing: border-box;
                            border-radius: 50%;
                            display: inline-block;
                            ">
                <img src="img/chain-doctor.png" class="small-icons" width="100%">
        </div>

            <h3 class="row justify-content-start body-normal-font body-black-normal text-left" style="font-size: 18px">Technology</h3>
           <p class="row body-small-font body-black-light text-left mb-5 justify-content-start"><span  style="width:72%;">Make your professional profile accessible anytime anywhere on the blockchain. Stand out by visualizing your individual career path in a stunning way.</span></p>

            <div class="py-2 text-center mb-3 mt-5"  style="width: 50px;
                            height: 50px;
                            background: #FBFAFA;
                            border: 1px solid #E6E5E5;
                            box-sizing: border-box;
                            border-radius: 50%;
                            display: inline-block;
                            ">
                <img src="img/chain-person.png" class="small-icons" width="100%">
        </div>

            <h3 class="row justify-content-start body-normal-font body-black-normal text-left" style="font-size: 18px">Exchange listing</h3>
            <p class="row body-small-font body-black-light text-left mb-5 justify-content-start"><span  style="width:76%;">Get your skills validated in an anonymous, simple and objective way. Through consensus of other expert users or by interacting with AI based systems like chatbots</span></p>
        </div>

        
    </section>

</div>

    <div class="container-fluid" style="background:url('img/grey-square.png');background-repeat: no-repeat space;background-color: #CFD2D9;">

    <section class="row">
        <div class="col-sm-12 col-md-5 offset-md-1">
            <img src="img/mark-essien-coin-2.png" width="100%" height="100%">
        </div>

        <div class="col-md-5 col-sm-12 ml-4 mt-5 pt-4" style="background:url('img/grey-square.png');background-repeat: no-repeat space;background-position: right bottom">
            <h3 class="banner-subheader body-black-deep text-left mb-4">Understand the HNG Internship</h3>
            <p class="body-normal-font body-black-normal text-left">We have built one of the best ways to rapidly increase the number of coders in African Eco-system.</p>
            <p class="body-small-font body-black-light text-left mb-4">We have reached over 10,000 people so far, and expect more to come in the coming years.</p>
            <div class="d-flex  mt-3 mb-5">
<a href="#"><button class="banner-button"><span class="button-text" href="#">Read More</span></button></a></div>
    </div>

    </section>
</div>

    <section class="container-fluid pt-5 big-section pb-5">
        <h2 class="row justify-content-center body-header col-12 mb-5 pb-5">How to Buy HNGC Tokens</h2>

        <div class="row">

         <div class="col-sm-12 col-md-6 pr-5 pl-4">
           <div class="row mb-4 justify-content-center"> <div class="blue-number text-center py-2">1</div></div>
           <div class="row align-items-start justify-content-center">
            <div class="col-2 py-2 mr-3" style="padding: 0">
            <img src="img/us-dollar.png" width= "56px" height= "56px">
        </div>
            <div class="col-9 pl-4" style="padding: 0">

                <h4 class="row body-normal-font body-black-light">SEND ETH</h4>
                <p class="row body-small-font body-black-light">You can send the eth to Our contract address to recive an equivalent amount of HNGC tokens</p>
                
            </div>
           </div>

        </div>

         <div class="col-sm-12 col-md-6 pl-4">
           <div class="row mb-4 justify-content-center"> <div class="blue-number text-center py-2">2</div></div>
           <div class="row align-items-start justify-content-center">
            <div class="col-2 py-2 mr-3" style="padding: 0">
            <img src="img/us-dollar-sack.png" width= "57px" height= "57px">
        </div>
            <div class="col-9 pl-4" style="padding: 0">

                <h4 class="row body-normal-font body-black-light">RECEIVE TOKEN</h4>
                <p class="row body-small-font body-black-light">On successful payment comfirmation, your equavalent tokenss will be send to you.</p>
                
            </div>
           </div>

        </div>
    </div>
        
    <!-- </section>

    <section class="container-fluid" style="padding: 0% 10% 0% 10%"> -->

        <h2 class="row justify-content-center body-header col-12 mb-5 pb-5 pt-5">The Team</h2>

        <div class="row justify-content-between mb-2">
            <div class="card" style="text-align: center;">
                <div class="row justify-content-center pt-3">
              <img class="card-avi" src="img/person.png" alt="Card image cap">
          </div>
              <div class="card-body">
                <h5 class="card-main-text">Aurang Torvekar</h5>
                <p class="card-small-text">CEO and Co-Founder</p>
                <div class="row justify-content-center">
                    <span class="col-2"><i class="fab fa-facebook-f card-contacts"></i></span>
                    <span class="col-2"><i class="fab fa-twitter card-contacts"></i></span>
                    <span class="col-2"><i class="fab fa-linkedin-in card-contacts"></i></span>

                </div>
              </div>
            </div>

            <div class="card" style="text-align: center;">
                <div class="row justify-content-center pt-3">
              <img class="card-avi" src="img/person.png" alt="Card image cap">
          </div>
              <div class="card-body">
                <h5 class="card-main-text">Dike Thelma</h5>
                <p class="card-small-text">Developer</p>
                <div class="row justify-content-center">
                    <span class="col-2"><i class="fab fa-facebook-f card-contacts"></i></span>
                    <span class="col-2"><i class="fab fa-twitter card-contacts"></i></span>
                    <span class="col-2"><i class="fab fa-linkedin-in card-contacts"></i></span>

                </div>
              </div>
            </div>

            <div class="card" style="text-align: center;">
                <div class="row justify-content-center pt-3">
              <img class="card-avi" src="img/person.png" alt="Card image cap">
          </div>
              <div class="card-body">
                <h5 class="card-main-text">Jeremiah Righteous</h5>
                <p class="card-small-text">Product Manager</p>
                <div class="row justify-content-center">
                    <span class="col-2"><i class="fab fa-facebook-f card-contacts"></i></span>
                    <span class="col-2"><i class="fab fa-twitter card-contacts"></i></span>
                    <span class="col-2"><i class="fab fa-linkedin-in card-contacts"></i></span>

                </div>
              </div>
            </div>

            <div class="card" style="text-align: center;">
                <div class="row justify-content-center pt-3">
              <img class="card-avi" src="img/person.png" alt="Card image cap">
          </div>
              <div class="card-body">
                <h5 class="card-main-text">Seyikemi Sojiron</h5>
                <p class="card-small-text">Designer</p>
                <div class="row justify-content-center">
                    <span class="col-2"><i class="fab fa-facebook-f card-contacts"></i></span>
                    <span class="col-2"><i class="fab fa-twitter card-contacts"></i></span>
                    <span class="col-2"><i class="fab fa-linkedin-in card-contacts"></i></span>

                </div>
              </div>
            </div>

        </div>




    </section>

    <section class="container-fluid grey-bg mt-3 pb-5" style="padding: 0 10%">

        <h2 class="row justify-content-center body-header col-12 mb-5 pb-4 pt-5">Our Partners</h2>

        <div class="row justify-content-around mb-4 pb-5">
            <img src="img/nike-logo.png">
            <img src="img/youtube-logo.png">
            <img src="img/git-logo.png">
            <img src="img/blender-logo.png">

        </div>

        
    </section>

    <section class="container-fluid footer py-5" style="padding: 0 10%">

        <div class="row align-items-baseline mb-3">
            <div>
                <img src="img/hngcoin_logo_dark.png" class="coin-logo">
            </div>

            <p class="col text-right footer-text pr-0">Don’t Miss The Limited Whitelist! Notify Me About Token Sales</p>
                
            
        </div>

        <div class="row align-items-baseline mb-5">
            <div class="col-4 row footer-text justify-content-between">
                <a href="#" class="footer-text">About</a> | 
            </div>

            <div class="col row">
            <div class="col text-right footer-text"><input type="textbox" class="footer-text p-2" placeholder="Enter your email here..." name="" style="
            background: #F5F7FA;
            border: 1px solid #C4C4C4;
            box-sizing: border-box;
            border-radius: 4px;
            color: rgba(33, 37, 41, 0.54);
            opacity: 0.6;
            margin-bottom: 0;
            width: 54%;"
            ></div>

            <button class="btn btn-primary" style="
            background: #2196F3;
            border-radius: 4px;
            color:#ffffff;
            height: 100%">SUBSCRIBE</button>
        </div>
                
            
        </div>
        <hr class="row mb-5"/>

        <div class="row">

            <p class="col-6 text-left footer-text pl-0">Copyright © 2018 Hngcoin Project. All rights reserved</p>


            <div class="col row justify-content-end">
                    <span class="fa-stack ml-3">
                        <i class="fas fa-circle fa-stack-2x socials"></i>
                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                    </span>

                    <span class="fa-stack ml-3">
                        <i class="fas fa-circle fa-stack-2x socials"></i>
                        <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                    </span>

                    <span class="fa-stack ml-3">
                        <i class="fas fa-circle fa-stack-2x socials"></i>
                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                    </span>

                    <span class="fa-stack ml-3">
                        <i class="fas fa-circle fa-stack-2x socials"></i>
                        <i class="fab fa-linkedin-in fa-stack-1x fa-inverse"></i>
                    </span>

                    <span class="fa-stack ml-3">
                        <i class="fas fa-circle fa-stack-2x socials"></i>
                        <i class="fab fa-pinterest-p fa-stack-1x fa-inverse"></i>
                    </span>

                    <span class="fa-stack ml-3">
                        <i class="fas fa-circle fa-stack-2x socials"></i>
                        <i class="fab fa-medium fa-stack-1x fa-inverse"></i>
                    </span>
                    

                </div>
                
            
        </div>
        
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>














<!-- Transaction board -->
<!--
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
  Activity 
 <section id="Activity">
    <div class="container">
        <div class="row">
        <div class="col">
        <ul class="list-group">
            <button type="button" class="list-group-item list-group-item-action ">
                <h4 class="head">Transaction History</h4>
            </button>
            <li class="list-group-item d-flex justify-content-between align-items-center"><span><img class="pro" src"https://res.cloudinary.com/syfon/image/upload/v1526589888/Img.png" alt "image">
            <strong>Ogbeni Ore</strong></span>
            <span><button type="button" class="btn btn-primary">Sell</button></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center border-top-0"><span><img class="pro" src"https://res.cloudinary.com/syfon/image/upload/v1526589888/Img.png" alt "image">
            <strong>Ogbeni Ore</strong></span>
            <span><button type="button" class="btn btn-primary">Buy</button></span>
            </li>
			<li class="list-group-item d-flex justify-content-between align-items-center border-top-0"><span><img class="pro" src"https://res.cloudinary.com/syfon/image/upload/v1526589888/Img.png" alt "image">
            <strong>Ogbeni Ore</strong></span>
            <span><button type="button" class="btn btn-primary">Buy</button></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center border-top-0"><span><img class="pro"  src"http://res.cloudinary.com/syfon/image/upload/v1526589888/Img.png" alt "image">
            <strong>Ogbeni Ore</strong></span>
            <span><button type="button" class="btn btn-primary">Buy</button></span>
            </li>
            
        </ul>
        </div>
        <div class="col">
        <div class="share">
        <ul class="list-group ">
         <li class="list-group-item text-center"><img class= "noun" src="https://res.cloudinary.com/syfon/image/upload/v1526591211/noun_106750_cc.png"><br>
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
-->




















<!-- <script type="text/javascript">
  //var address = document.getElementById('address').value;
  var address = "<?php  //if(isset($_SESSION['address'])){ echo $_SESSION['address'];} else{echo "";}?>";
 //var address = "0xa105721347F229f0d7bbBD3E10D72d14E2Ba3961";
    function checkBalance() {

    var balancetokens = web3.fromWei(tokenContract.balanceOf(address).toNumber(), 'ether');//var tokenContract = web3.eth.contract(contractABI).at(contractAddress)
    var supply = web3.fromWei(tokenContract.totalSupply().toNumber(), 'ether');
    var balance = web3.fromWei( web3.eth.getBalance(address).toNumber(), 'ether');
    var symbol = tokenContract.symbol();
    //transactions = web3.eth.getTransaction();
    var decimal = tokenContract.decimals();
    var tokenName = tokenContract.name();
    document.getElementById('accountbalance').innerHTML = balancetokens + '&nbsp;<spa>' + symbol + '</spa>&nbsp;' + balance + '&nbsp;<spa>ETH</spa> &nbsp;'  ;
    // document.getElementById('supply').innerHTML = 'Total supply: ' + supply + '&nbsp;' + symbol;
    // document.getElementById('balance').innerHTML = 'Total Ethereum Balance: ' + balance + ' ETH';
    // document.getElementById('symbol').innerHTML = tokenName;
  }
  console.log(tokenContract.balanceOf(address).toNumber())
</script>
 -->
<?php
//include_once("footer.php");
?>
