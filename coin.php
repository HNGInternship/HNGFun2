<?php
session_start();
$_SESSION["user_id"];
require_once('db.php');
include_once("dashboard-header.php");
?>
<script type="text/javascript" src="./web3.min.js"></script>
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

</style>
</head>
 <body onload="checkBalance()>
   
 <!-- wallet board -->
 <section id="board">
 <div class="container">
    <div class="box">
        <p>Current Coin Balance</p>
        <h1 id="accountbalance"></h1>
        <p> HNG Wallet Address : <?php  if(isset($_SESSION['address'])){
            echo $_SESSION['address'];
        } else{
           echo "You have not set an address yet";
        }?></p>
    <div>
 </div>
 </div>
 </section>
    <br>

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
<script type="text/javascript">
  //var address = document.getElementById('address').value;
  var address = "<?php  if(isset($_SESSION['address'])){ echo $_SESSION['address'];} else{echo "";}?>";
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
  //console.log(tokenContract.balanceOf(address).toNumber())
</script>

<?php
include_once("footer.php");
?>
