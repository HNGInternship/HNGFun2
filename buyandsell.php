<?php
include_once("coin_header.php");
//include_once("xconfig_slayers.php");
?>

<?php

// 	$sql = "select sell_requests.id, amount, trade_limit, price_per_coin, status, sell_requests.created_at, concat(interns_data.first_name, ' ', interns_data.last_name) as full_name, image_filename from sell_requests inner join interns_data on sell_requests.intern_id=interns_data.id";
// 	$stmt = $db->prepare($sql);
// 	$stmt->setFetchMode(PDO::FETCH_ASSOC);
// 	$stmt->execute();
// 	$sell_requests = $stmt->fetchAll();

// 	$sql = "select buy_requests.id, amount, trade_limit, bid_per_coin, status, buy_requests.created_at, concat(interns_data.first_name, ' ', interns_data.last_name) as full_name, image_filename from buy_requests inner join interns_data on buy_requests.intern_id=interns_data.id";
// 	$stmt = $db->prepare($sql);
// 	$stmt->setFetchMode(PDO::FETCH_ASSOC);
// 	$stmt->execute();
// 	$buy_requests = $stmt->fetchAll();

	
?>

<style>
.top{
	background-color: #2196F3;
	color: #ffffff;
	width: 392px;
	height: 70px;
	border-radius: 5px;
	font-weight: bold;
	font-family: lato;
	font-size: 24px;
}
.btn{
	background-color: #2196F3;
	color: #ffffff;
	border-radius: 5px;
	font-weight: bold;
	font-family: lato;
}

.mod{
	width: 100%;
	height: 75px;
}
.body{
	font-family: lato;
	background-color: #ffffff;
	margin: 0;
	padding-top: 100px;
	font-size: 16px;

}

h3{
	font-family: work sans;
	font-size: 42px;
	font-weight: Bold;
	
}

.trad{
	color:#2196F3;
	text-decoration: underline;
}

.heading{
	background-color: #F2F2F2;
	font-weight: bold;
	height: 86px;
	border-radius: 3px;
	padding-top: 30px;
	padding-left: 20px;

}

.sell{
	background-color: #FAFAFA;
	height: 500px;
	overflow-y: scroll;
	padding: 0px;
	
}

.listing{
	background-color: #ffffff;
	margin: 20px 20px 20px 20px;
	border-radius: 3px;
	height: 99.58px;
	padding-top: 30px;
	padding-left: 10px;
}
.blue{
	color: #2196F3;
}
.space{
	margin-top: 20px;
	margin-bottom: 100px;

}
</style>

<section style="margin-bottom: 0px;">
	<header class="masthead" style="background-image: url('img/head-buy.png'); height: 264px; margin: 0px;">
		<div class="container mx-auto text-center">
			<div class="row mx-auto">
				<div class="col">
					<button type="button" class="btn top" data-toggle="modal" data-target="#sellModal">Sell my coin</button>
				</div>
				
			</div>
		</div>

	</header>
</section>
<section class="body">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-md-6 col-lg-9 mx-auto">
				<h3> Buy HNGcoin</h3><p>To buy coin: Simply click on the BUY icon respective to the seller, fill the details and complete transaction</p>
			</div>
			<div class="col-sm-2 col-md-6 col-lg-3 mx-auto">
				<div class="row mx-auto">
					<div class="col mx-auto">
						<span class="trad">Trade on</span>
					</div>
					<div class="col mx-auto">
						<img src="img/stellar.png">
					</div>

				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="container heading">
				<div class="row mx-auto ">
				
					<div class="col mx-auto">
						Seller
					</div>
					<div class="col mx-auto">
						Payment Methods
					</div>

					<div class="col mx-auto">
						Price/coin
					</div>

					<div class="col-3 mx-auto">
						Limits
					</div>

				</div>
			</div>
				
			<div class="container sell">
				
				<?php
					foreach($sell_requests as $r){
				?>
					<div class="listing">
						<div class="row mx-auto">
							<div class="col-1">
								<img src="<?php ///echo $r['image_filename']; ?>" width="50">
							</div>
							
							<div class="col-2">
								<span class="blue"><?php echo $r['full_name']; ?> </span><br/>(500+;98%)
							</div>
							
							<div class="col-3">
								<span class="blue">National Bank Transfer </span><br/>Nigeria
							</div>
							
							<div class="col-3">
							<?php// echo $r['price_per_coin']; ?> <br/>NGN
							</div>
							
							<div class="col-2">
							<?php //echo $r['trade_limit']; ?> 3000 <br/> NGN
							</div>
							
							<div class="col-1">
								<a href="buy_coins.php?request_id=<?php echo $r['id']; ?>" type="button" class="btn"> BUY</a>
							</div>
							
						</div>
					</div>
				
				<?php } ?>
				
				
				
			</div>
			
		
		</div>
	</div>
</section>


<section class="body">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-md-6 col-lg-9 mx-auto">
				<h3> Sell HNGcoin</h3><p>To sell coin: Simply click on the SELL icon respective to the seller, fill the details and complete transaction</p>
			</div>
			<div class="col-sm-2 col-md-6 col-lg-3 mx-auto">
				<div class="row mx-auto">
					<div class="col mx-auto">
						<span class="trad">Trade on</span>
					</div>
					<div class="col mx-auto">
						<img src="img/stellar.png">
					</div>

				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="container heading">
				<div class="row mx-auto ">
				
					<div class="col mx-auto">
						Seller
					</div>
					<div class="col mx-auto">
						Payment Methods
					</div>

					<div class="col mx-auto">
						Price/coin
					</div>

					<div class="col-3 mx-auto">
						Limits
					</div>

				</div>
			</div>
			<div class="container sell">
				
			<?php
				foreach($buy_requests as $r){
			?>
				<div class="listing">
					<div class="row mx-auto">
						<div class="col-1">
							<img src="<?php echo $r['image_filename']; ?>" width="50">
						</div>
						
						<div class="col-2">
							<span class="blue"><?php echo $r['full_name']; ?> </span><br/>(500+;98%)
						</div>
						
						<div class="col-3">
							<span class="blue">National Bank Transfer </span><br/>Nigeria
						</div>
						
						<div class="col-3">
						<?php echo $r['bid_per_coin']; ?> <br/>NGN
						</div>
						
						<div class="col-2">
						<?php echo $r['trade_limit']; ?> <br/> NGN
						</div>
						
						<div class="col-1">
						<a href="" type="button" class="btn"> SELL</a>
						</div>
						
					</div>
				</div>
			
			<?php } ?>
				
			</div>
			
		
		</div>
	
	
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-9 col-md-6 col-lg-8 mx-auto">
			
			</div>
			
			<div class="col space">
				<nav aria-label="Page navigation example">
				<ul class="pagination justify-content-end">
				<li class="page-item"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item"><a class="page-link" href="#">4</a></li>
				<li class="page-item">
				<a class="page-link" href="#">.......</a>
				</li>
				</ul>
				</nav>
			</div>
		</div>
	</div>
</section>

<!---Modal--->
<div class="modal fade bd-example-modal-lg" id="sellModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header mx-auto text-center">
        <h5 class="modal-title" id="sellModalLabel">Sell MY Coin</h5>
      </div>
      <div class="modal-body">
        <div class="row">
			<div class="col">
				Wallet ID: <br/>
				<input type="text" placeholder="Marvelous350" class="form-control" id="wallet-id"></input> <br/>
				Amount of HNGcoin: <br/>
				<input type="text" placeholder="0.00118811" class="form-control" id="HNGcoin"></input><br/>
				Send as notification <br/>
				<input type="text" placeholder="Buyer Wallet ID" class="form-control" id="buyer-wallet-id"></input>
			</div>
			<div class="col">
				Payment Information <br/>
				<input type="text" placeholder="Payment method" class="form-control" id="payment info"></input><br/>
				Price/coin <br/>
				<input type="text" placeholder="3,340,345.64" class="form-control" id="price"></input> <br/>
				<button type="button" class="btn btn-primary mod">Sell</button>
			</div>
		</div>
      </div>
      <div class="modal-footer mx-auto text-center">
		<div class="col mx-auto text-center">
			
		</div>
        
      </div>
    </div>
  </div>
</div>

<?php
include_once("footer.php");
?>
