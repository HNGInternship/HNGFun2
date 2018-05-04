<?php
include_once("coin_header.php");
include_once("db.php");
?>
     
	  <form method="post" action="process.php">
        <div class="row">
			<div class="col">

				Bank Name: <br/>
				<input type="text" placeholder="First Bank" class="form-control" id="bankName" name="bankName"></input><br/>

			</div>
			<div class="col">
			
				Account Name: <br/>
				<input type="text" placeholder="Marvelous Peter John" class="form-control" id="acctName" name="acctName"></input><br/>
				

				Account Number: <br/>
				<input type="text" placeholder="1234567890" class="form-control" id="acctNumber" name="acctNumber"></input><br/>

				
			</div>
			<div class="col-md-12 offset-md-3">
			<button type="submit" name="sellCoin" class="btn btn-primary mod">Sell</button>
			</div>
		</div>
		</form>

