<?php
include_once("header.php");
?>

<style>
   

    p {
       font-size: 14px; 
    }

    
    .rightColumn {
        padding: 40px 5px 5px 35px;
		
    }

    ul {
    list-style-type: circle;
    }
	

    
	
	.voffset {
	margin-top: 300px; 
	
	}
	
	span{
	  font-size: 14px; 
    }
	
	.listing{
		
		font-size: 14px; 
	}
	.cont{
		
		padding-top: 20px;
		padding-left: 10px;
		padding-bottom: 10px;
		background-color: #ffffff;
		width: 100%;
		
	}
	
	.head{
		margin-top: 40px;
		margin-left: 40px;
		color: #ffffff;
		}
	.circle{
		width: 43px;
		height: 43px;
		border-radius: 50%;
		background-color: #48BBFC;
		z-index: 100;
	}
	.btn{
		margin-top: -130px;
		font-weight: bold;
		z-index: 10;
		background-color: #ffffff;
		border-radius: 50px;
		color: #48BBFC;
		margin-left: 100px;
		width: 181px;
		height: 39px;
	}
	
	.my-deck .card {
		margin-left: 50px;
		width: 250px !important;
		height: 502px;
	}

</style>


<section>

<header class="masthead" style="background-image: url('img/head-part.png'); height: 406px;">
	<div class="overlay" style="background-color: #2A3135"></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-md-6 col-lg-4 mx-auto">
					<img src="img/overlay.jpg">
					<button type="button" class="btn">VISIT WEBSITE</button>
				</div>
				<div class="col head">
					<h3>Hotels.ng <img src="img/value.png" width="67px" height="87px"> <span class="circle"></span> </img></h3>
					<h5>Yaba, Lagos, Nigeria</h5>
				</div>
		</div>
</header>
</section>
<section class="mx-auto col-md-10 mt-5 mb-5">
<div class="row">
	<div class="col-sm-3 col-md-6 col-lg-4">
		<div class="cont voffset">
				<h3 style="border-bottom: 2px solid #2196F3; display: inline block; ">About</h3>

				<p class="text-center"> An online travel agency specialising in hotel bookings withing Nigeria. 
					The HNG Internship program was started by Hotels.ng CEO Mark Essien and was designed to 
					locate the most talented software developers in Nigeria and Africa as a whole. Creating an 
					interactive platform for software development leanrning that is both fun and rewarding.</p>
				
				<div class="row mx-auto">
					<div class="col">
						<i class="fa fa-twitter fa-lg"></i>
					</div>
					<div class="col">
						<i class="fa fa-facebook fa-lg"></i>
					</div>
					<div class="col">
						<i class="fa fa-github fa-lg"></i>
					</div>
				</div>
				
		</div>
	</div>
						
	<div class="col-sm-9 col-md-6 col-lg-8 rightColumn">
					<div class="cont">
						<div class="row">
							<div class="col-sm-3 col-md-6 col-lg-4">

									<img src="img/hng-square.png" width="204px" height="204px">
							</div> 

							<div class="col">
								<span class="listing"><h6>Headquarters:</h6>Yaba, Lagos</span>
								<span class="listing"><h6>Address:</h6> No 3, Birrel Avenue</span>  
								<span class="listing"><h6>Industry:</h6>Hotel Booking Services</span>
							</div>
							
							<div class="col">
								
								<div class="listing"><h6>Phone:</h6>0806 621 2033</div>
								<div class="listing"><h6>Founded:</h6>1972</div> 
							</div> 
						</div>
						</div>
						<div class="cont mt-5">
							<h3 style="border-bottom: 2px solid #2196F3; display: inline block; "> Contributions</h3>

							
							<p>The Primary constraints with the interns: <br/> Interns in Nigeria may be passionate about coding, but they often lack the basic infrastructure to even start -access to steady power, to internet and some do not even have laptops (a few interns have completed the entire programme on their mobile phones. <br/></p>
							
							<p> We solve these in three ways:</p>

							<ul>
							<li><span>We generally pay the interns, because without pay, they simply would not be able to afford to continue</span>
							</li>
							<li><span> The interns use the pay to get their own infrastructure(power, internet). in the last internship, the Akwa Ibom state Government provided the infrastructure for us.</span>
							</li>
							<li><span>We have a 'laptop fund' where people without devices can borrow money to buy a laptop, so long their peers vouch for them.</span>
							</li>
							</ul>  

						
						</div>
					</div>
				
	</div>
</div>
</section>
<?php
include_once("footer.php");
?>
