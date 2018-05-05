<?php
session_start();// Starting Session
// Storing Session
//Check whether the session variable SESS_MEMBER_ID is present or not
if(!isset($_SESSION['user_id']) || (trim($_SESSION['user_id']) == '')) {
    header("location: login.php");
    exit();
}else
define ('DB_USER', "root");
//define ('DB_PASSWORD', "29gE9t*dJ2#2f-BS");
define ('DB_PASSWORD', "");
define ('DB_DATABASE', "dragons_shield");
define ('DB_HOST', "localhost");
$servername = DB_HOST;
$username = DB_USER;
$password = DB_PASSWORD;
$database = DB_DATABASE;
try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
    $id = $_SESSION['user_id'];
    $query = "SELECT * from users_data where user_id ={$id}";
    $result = $conn->query($query);
    $rec = $result->fetchAll();
    $username = $rec[0]['username'];
    $private = $rec[0]['private_key'];
    $public = $rec[0]['public_key'];
?>
<?php
include_once("dashboard-header.php");
?>

<div class="row wallet">
    <div class="col-md-12">
        <p>HNG Coin Wallet</p>
        <h2><span id='balnce'>0</span> HNG</h2>
        <p>Wallet Address: <span id="wadd"><?php echo $public ?></span></p>
    </div>
</div>

<div class="row dash-table col-md-12">
    <div class="col-md-5 dash-block">
        <h3 class="thead sun-die">Your Coin</h3>

        <table class="your-coins" style="width:100%">
            <tr>
                <td>HNG Coin</td>
                <td class="text-right">3.000 HNG
                    <br/><span class="ngn-price">NGN5000.00</span></td>
            </tr>

            <tr>
                <td>HNG Coin</td>
                <td class="text-right">3.000 HNG
                    <br/><span class="ngn-price">NGN5000.00</span></td>
            </tr>

            <tr>
                <td>HNG Coin</td>
                <td class="text-right">3.000 HNG
                    <br/><span class="ngn-price">NGN5000.00</span></td>
            </tr>

            <tr>
                <td>HNG Coin</td>
                <td class="text-right">3.000 HNG
                    <br/><span class="ngn-price">NGN5000.00</span></td>
            </tr>

        </table>
    </div>

    <div class="margin col-md-1">

    </div>

    <div class="col-md-5 dash-block">
        <h3 class="thead">
            Transaction History
        </h3>

        <table class="your-coins transaction-history" style="width:100%">
            <tr>
                <td class="text-center">APR
                    <br/><span class="date-num">30</span></td>

                <td class="text-left">Transferred HNG Coin
                    <br/>
                    <span class="payee">Ogbeni Ore</span></td>

                <td class="text-left">2.300 HNG</td>
            </tr>

            <tr>
                <td class="text-center">APR
                    <br/><span class="date-num">30</span></td>

                <td class="text-left">Transferred HNG Coin
                    <br/>
                    <span class="payee">Ogbeni Ore</span></td>

                <td class="text-left">-2.300 HNG</td>
            </tr>

            <tr>
                <td class="text-center">APR
                    <br/><span class="date-num">30</span></td>

                <td class="text-left">Transferred HNG Coin
                    <br/>
                    <span class="payee">Ogbeni Ore</span></td>

                <td class="text-left">-2.300 HNG</td>
            </tr>

            <tr>
                <td class="text-center">APR
                    <br/><span class="date-num">30</span></td>

                <td class="text-left">Transferred HNG Coin
                    <br/>
                    <span class="payee">Ogbeni Ore</span></td>

                <td class="text-left">-2.300 HNG</td>
            </tr>

        </table>
    </div>
</div>

<div class="row dash-table col-md-12">
    <div class="col-md-5 dash-block">
        <h3 class="thead sun-die">Top Buyers and Sellers</h3>

        <table class="your-coins tops" style="width:100%">
            <tr>
                <td><img src="img/dashboard/user-pic.png"></td>
                <td>Ogbeni Ore</td>
                <td class="text-right"><a href=""><button class="btn">Sell</button></a></td>
            </tr>

            <tr>
                <td><img src="img/dashboard/user-pic.png"></td>
                <td>Ogbeni Ore</td>
                <td class="text-right"><a href=""><button class="btn">Buy</button></a></td>
            </tr>

            <tr>
                <td><img src="img/dashboard/user-pic.png"></td>
                <td>Ogbeni Ore</td>
                <td class="text-right"><a href=""><button class="btn">Buy</button></a></td>
            </tr>

            <tr>
                <td><img src="img/dashboard/user-pic.png"></td>
                <td>Ogbeni Ore</td>
                <td class="text-right"><a href=""><button class="btn">Buy</button></a></td>
            </tr>

        </table>
    </div>

    <div class="margin col-md-1">

    </div>

    <div class="col-md-5 dash-block coin-share">
        <div class="encourage">
            <img src="img/dashboard/coin-share.png">
            <h2>Share HNG Coins with Friends</h2>
            <p>Encourage your friends and learn coding by offering them HNG Coins today!</p>
        </div>

        <div class="invite-friends">
            <a href="">Invite Friends</a>
        </div>
    </div>
</div>

		<script>
			var server = new StellarSdk.Server('https://horizon-testnet.stellar.org');
			StellarSdk.Network.useTestNetwork();
			var pkey;
			var skey;
			
			/**
				Function to create a Stellar Account(Wallet).
				@return Array of the publickey and privatekey
			**/
			
			function createAccount(){
				var pair = StellarSdk.Keypair.random();
				//console.log(pair.secret());
				//console.log(pair.publicKey());
				pkey = pair.publicKey();
				skey = pair.secret();
				activateAccount(pkey);
				return [pkey, skey];
			}
			
			/**
				Account Activation
				@return Boolean
				@params account public key
				@description This will be used to activate a newly generated wallet address as per STELLAR requirement
				
			**/
			
			function activateAccount(newAddress){
				$.ajax({
					url: 'https://friendbot.stellar.org',
					type: "POST",
					data: { addr: newAddress },
					success: function(error, resp, body){
						if(body.status == 200){
							console.log("Account activation Successful\n");
							return true;
						}
					},
					error: function(error){
						console.log(error);
						return false;
					}
				});
			}
			
			/**
				Function to get account balance of a wallet address
				@params wallet public addres
				@return Object array ['bal']
			**/
			function getAccountBalance(walletAddress){
				var bal = {};
				server.loadAccount(walletAddress).then(function(account){
					console.log("Balance for account: "+ walletAddress);
					account.balances.forEach(function(balance){
						console.log('Type:', balance.asset_type, ', Balance:', balance.balance, ', Asset Code:', balance.asset_code);
						//bal = balance.balance;
						if(balance.asset_type == 'credit_alphanum4'){
							bal[balance.asset_code.toString()] = balance.balance;
							//document.getElementById('balance').innerHTML = (balance.balance).split('.')[0];
                            document.getElementById('balnce').innerHTML = balance.balance
						}else{
							bal[balance.asset_code] = balance.balance;
						}
					});
				});
			}
			
			/**** 
				This function is for Sending HNG coin
				@params sender private key, receiver private key and Amount
			***/
			function sendHNG(topriv, frompriv, amnt){
				var issuingKeys = StellarSdk.Keypair.fromSecret(frompriv);
				var receivingKeys = StellarSdk.Keypair.fromSecret(topriv);
				var iss = "GAVNY6CI7L6YA2ZGSTP235DL3RHAHQMABXIF26H6EX5IOZ2HIK4JRSDS";

				// Create an object to represent the new asset
				var HNGCoin = new StellarSdk.Asset('HNG', iss);

				// First, the receiving account must trust the asset
				server.loadAccount(receivingKeys.publicKey())
				  .then(function(receiver) {
					var transaction = new StellarSdk.TransactionBuilder(receiver)
					  // The `changeTrust` operation creates (or alters) a trustline
					  .addOperation(StellarSdk.Operation.changeTrust({
						asset: HNGCoin
					  }))
					  .build();
					transaction.sign(receivingKeys);
					return server.submitTransaction(transaction);
				  })

				  // Second, the issuing account actually sends a payment using the asset
				  .then(function() {
					return server.loadAccount(issuingKeys.publicKey())
				  })
				  .then(function(issuer) {
					var transaction = new StellarSdk.TransactionBuilder(issuer)
					  .addOperation(StellarSdk.Operation.payment({
						destination: receivingKeys.publicKey(),
						asset: HNGCoin,
						amount: amnt.toString()
					  }))
					  .build();
					transaction.sign(issuingKeys);
					return server.submitTransaction(transaction);
				  })
				  .then(function(result){
					console.log('\nSuccess! View the transaction at: ');
					console.log(result._links.transaction.href);
				  })
				  .catch(function(error) {
					console.error('Error!', error);
				  });
			}
			
			//console.log(StellarSdk);
            var wallet = document.getElementById('wadd').textContent;
            getAccountBalance(wallet);
			
		</script>


<?php
include_once("footer.php");
?>
