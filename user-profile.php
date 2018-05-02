<?php
include_once("header.php");
?>

		<link href="css/user-profile.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		
		
		
		<div id="navbar">
			<nav class="navbar navbar-expand-lg navbar-light"  style="background-color: #ffffff; padding: 0px 0px 0px 200px;">
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						
						<li class="nav-item">
							<a href="index.php" class="nav-link"><img src="https://res.cloudinary.com/dzwrncue8/image/upload/v1525188272/windows.png" alt="" class="navbar-icon">Dashboard</a>
						</li>
						
						<li class="nav-item">
							<a href="learn.php" class="nav-link"><img src="https://res.cloudinary.com/dzwrncue8/image/upload/v1525188272/hand.png" alt=""  class="navbar-icon">Trade</a>
						</li> 
						<li class="nav-item">
							<a href="listing.php" class="nav-link"><img src="https://res.cloudinary.com/dzwrncue8/image/upload/v1525188272/perso.png" alt="" class="navbar-icon">Profile</a>
						</li> 
						<li class="nav-item">
							<a href="testimonies.php" class="nav-link"><img src="https://res.cloudinary.com/dzwrncue8/image/upload/v1525188272/help.png" alt="" class="navbar-icon">Help & Feedback</a>
						</li> 
					</ul>
				</div> 
			</nav>
		</div>
		
		<section>
			<div class="container container-main">
				<img src="https://res.cloudinary.com/dzwrncue8/image/upload/v1525188272/person1.jpg" class="profile-img img-circle" />
			
				
				
					<h4 class="hh">User Profile</h4>
			
				<hr>
				
				<div class="row">
					<div class="col-md-6">
						<form>
							<div class="form-group">
								<label for="inputFname">First Name</label>
								<input type="text" class="form-control" id="fName" placeholder="First Name">
							</div>
						
						  <div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
							
						  </div>
						  
						  
						  <div class="form-group">
							  <div class="btn-group">
								<label for="exampleInputPassword1">Gander</label><br>
								  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Male
								  </button>
								  <div class="dropdown-menu dropdown-menu-right">
									<button class="dropdown-item" type="button">Male</button>
									<button class="dropdown-item" type="button">Female</button>
								  </div>
								</div>
							</div>
						  
						  
						</form>
					</div>
					<div class="col-md-6">
						<form>
						  <div class="form-group">
							<label for="inputText">Last Name</label>
							<input type="Text" class="form-control" id="inputText" placeholder="Last Name">
							
						  </div>
						  <div class="form-group">
							<label for="inputPhone">Phone Number</label>
							<input type="Text" class="form-control" id="inputPhone" placeholder="Phone Number">
						  </div>
						  
						  <div class="dropdown">
								<label for="exampleInputPassword1">Date of Birth</label><br>
							  <button class="btn btn-default dropdown-toggle dropdownBirth" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Month
							  </button>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
								<button class="dropdown-item" type="button">#</button>
								<button class="dropdown-item" type="button">#</button>
								<button class="dropdown-item" type="button">#</button>
							  </div>
							
							  <button class="btn btn-default dropdown-toggle dropdownBirth" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Day
							  </button>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
								<button class="dropdown-item" type="button">#</button>
								<button class="dropdown-item" type="button">#</button>
								<button class="dropdown-item" type="button">#</button>
							  </div>
							
							  <button class="btn btn-default dropdown-toggle dropdownBirth" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Year
							  </button>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
								<button class="dropdown-item" type="button">#</button>
								<button class="dropdown-item" type="button">#</button>
								<button class="dropdown-item" type="button">#</button>
							  </div>
							</div>
						  
						</form>
					</div>
					<div class="col-md-12 text-center"><br>
						<button type="submit" class="btn btn-change">Cancle Changes</button><button type="submit" class="btn btn-change">Save Changes</button>
					</div>
				</div>
				
			
			</div>
		
		</section>
		
		

<?php
include_once("footer.php");
?>






























































