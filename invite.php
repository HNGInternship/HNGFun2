<?php
include_once("header.php");
?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HNG FUN</title>

    <!-- Bootstrap core CSS -->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


      <!-- Custom fonts for this template -->
  <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

   <!-- Custom styles for this template -->
   <link href="css/dragonSh.css" rel="stylesheet">
    <style>
		
		.btn{
			width:300px;
		}
	p{
		font-size: 15px;
	}
	 
    </style>

  </head>

  <body>

    <!-- Page Content -->
    <div class="container invite-bd">
      <div class="row">
        <div class="col-lg-12 text-center">
		<strong>
          <h3 class="mt-5">Invite to HNG</h3>
          <p class="lead">You can send out invites to your friends all over the world to join <br>
			this amazing community</p>
		</strong>
        </div>
		<div class="col-lg-2">
		</div>
		<div class="col-lg-4">
          <form>
			  <div class="form-group">
				<label for="exampleInputEmail1">Email Address</label>
				<input type="email" class="form-control" id="email1" aria-describedby="emailHelp" placeholder="Enter email">
			  </div>
			  <br/>
			  <div class="form-group">
				<label for="exampleInputPassword1">Email Address</label>
				<input type="text" class="form-control" id="fName" placeholder="Full Name">
			  </div>
			</form>
        </div>
		
		<div class="col-lg-4">
          <form>
			  <div class="form-group">
				<label for="exampleInputEmail1">Full Name</label>
				<input type="email" class="form-control" id="email1" aria-describedby="emailHelp" placeholder="Enter email">
			  </div>
			  <br/>
			  <div class="form-group">
				<label for="exampleInputPassword1">Full Name</label>
				<input type="text" class="form-control" id="fName" placeholder="Full Name">
			  </div>
			  
			</form>
        </div>
		<div class="col-lg-2">
		</div>
		<div class="col-lg-12 text-center">
			<br/><br/>
			<button type="submit" class="btn btn-primary">Send Invite</button>
        </div>
      </div>
    </div>
  </body>

</html>
<?php
include_once("footer.php");
?>
