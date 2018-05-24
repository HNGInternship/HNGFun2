<?php
include('header.php');
?>
<style>
section{
	padding-bottom: 20px;
}
section .section-title{
	text-align:center;
	color:#4f4f4f;
	margin-bottom:50px;
	
}
#what-we-do{
	background:#ffffff;
    margin-top:20px;
}
#what-we-do .card{
	padding: 1rem!important;
	border: none;
	margin-bottom:1rem;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
#what-we-do .card:hover{
	-webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
	-moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
	box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
}
#what-we-do .card .card-block{
	padding-left: 50px;
    position: relative;
}
#what-we-do .card .card-block a{
	color: #4f4f4f !important;
	font-weight:500;
	text-decoration:none;
    font-size:13px;
}
#what-we-do .card .card-block a i{
	display:none;
	
}
#what-we-do .card:hover .card-block a i{
	display:inline-block;
	font-weight:700;
	
}
#what-we-do .card .card-block:before{
	font-family: FontAwesome;
    position: absolute;
    font-size: 39px;
    color: #007b5e;
    left: 0;

}

#what-we-do .card:hover .card-block:before{
	
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
.card-title{
    font-size: 15px;
    padding-top: 10px;
}
.card-text{
    font-size: 13px;
}
.image-aside{
    display:inline;
    float: left;
    padding-right: 10px;
}
.image-aside img{
    display: inline;
    width: 145px;
}

#webdo{
	padding-left:55px;
	padding-right:30px;
}


/* Previous button  */
.media-carousel .carousel-control.left 
{
  margin-right:40px;
  background-image: none;
  background: none repeat scroll 0 0 #FFFFFF;
  border: 4px solid #FFFFFF;
  border-radius: 23px 23px 23px 23px;
  height: 40px;
  width : 40px;
  margin-top: 250px;
  text-align:center
}
/* Next button  */
.media-carousel .carousel-control.right 
{
right:17px;
  background-image: none;
  background: #FFFFFF;
  border: 4px solid #FFFFFF;
  border-radius: 23px 23px 23px 23px;
  height: 40px;
  width : 40px;
  margin-top: 250px;
}


.webdiv p {
	margin-top: 0;
}
.col-md-3{
	padding-right: 30px;
}
.row{
	width: 100%;
	margin: 0 auto;
}
#row{
	margin-top: 48px;
}
.col-md-4{
	border: none;
	position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
    color: #ffffff;
    margin: 0;
    padding: 0;
    padding-left: 24px;
    padding-right: 24px;
}
.col-md-4 p{
	padding-top: 0;
	margin-top: 0;
}
.col-md-4 h1{
	padding-top: 20px;
}
p.card-text{
	padding-bottom: 50px;
}
@media (max-width:  768px){
.col-md-4 {
	width: 100%;
	margin-left: 8%;
	margin-right: 7%;
	padding-right: 0;
}

.col-md-4 img{
	width: 100%;
}

</style>

<!-- </head> -->

<!-- <body> -->
<section>
<div style="background:url(img/book-bg.jpg); padding:150px; height:150px; background-position:center; background-size:cover; background-repeat:no-repeat;">
</div>
</section>

<!-- learning resources section -->
	<section id="what-we-do">
		<div class="container">
			<h2 class="section-title mb-2 h1">Design Learning Resources</h2>
			<!-- <p class="text-center text-muted h5">Having and managing a correct marketing strategy is crucial in a fast moving market.</p> -->
			<div class="row mt-5">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
					<div class="card">
						<div class="card-block block-1">
                        <div class="image-aside">
                        <img src="img/3.png">
                        </div>
							<h3 class="card-title">Light or Dark UI? Tips to Choose a Proper Color Scheme for User Interface</h3>
							<p class="card-text">by Tubik Studio, April 13</p>
							<a href="javascript:void();" title="Read more" class="read-more" >Read more...<i class="fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
					<div class="card">
						<div class="card-block block-3">
                        <div class="image-aside">
                        <img src="img/1.png">
                        </div>
							<h3 class="card-title">How we designed page reviews for Wikipedia - and what could be done with them in the future</h3>
							<p class="card-text">by Nirzir Pangakar, April 17</p>
							<a href="javascript:void();" title="Read more" class="read-more" >Read more...<i class="fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
					<div class="card">
						<div class="card-block block-4">
                        <div class="image-aside">
                        <img src="img/2.png">
                        </div>
							<h3 class="card-title">8 WORST Design Trends Every UX Designer Should Avoid</h3>
							<p class="card-text">by Roshi, 6th June</p>
							<a href="javascript:void();" title="Read more" class="read-more" >Read more...<i class="fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
					<div class="card">
						<div class="card-block block-6">
                        <div class="image-aside">
                        <img src="img/4.png">
                        </div>
							<h3 class="card-title">Rapid UX Research at Google</h3>
							<p class="card-text">by Heidi Sales, April 5</p>
							<a href="javascript:void();" title="Read more" class="read-more" >Read more...<i class="fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
                
			</div>
            <div style="text-align:center;">
                <button style="color:white; background:#2181F7;width:150px;padding:20px;font-size: 14px; font-weight:bold;border:none; border-radius:6px; margin:0 auto;margin-top:20px">LOAD MORE</button>
            </div>
		</div>	
	</section>
	<!-- /learning resources section -->

<div class="container"  style="background:#2181F7; max-width: 1349px;">
  <!-- <div class="row">
    <h2>Media Slider Carousel BS3</h2>
  </div>
  <div class='row'> -->
    <!-- <div class='col-md-8'> -->
	<h2 class="section-title mb-2 h1" style="color:white;text-align:center;padding-top:50px; ">Design Learning Resources</h2>
     
           
            <div class="row" id="row" >
              <div class="col-md-4" >
					
						<img src="img/6.png" style="margin-top:10px; width:80%; height: 150px;">
						<h1 style="font-size:20px; margin-top:15px;padding-bottom:10px;font-weight:100px;">ORACLE</h1>
						<p class="card-title" >Introducing you to a world of interface design with real time collaboration using Figma. First of it's kind. Introducing you to a world of interface design with real time collaboration using Figma. First of it's kind </p>
						<h3 class="card-title" >POSTED BY Jane Doe</h3>
						<p class="card-text" >5 mins ago</p>
					
              </div>          
              <div class="col-md-4" >
			  		
						<img src="img/6.png" style="margin-top:10px; width:80%; height: 150px;">
						<h1 style="font-size:20px;margin-top:15px;padding-bottom:10px;font-weight:100px;">ORACLE</h1>
						<p class="card-title" >Introducing you to a world of interface design with real time collaboration using Figma. First of it's kind. Introducing you to a world of interface design with real time collaboration using Figma. First of it's kind </p>
						<h3 class="card-title" >POSTED BY Jane Doe</h3>
						<p class="card-text" >5 mins ago</p>
				
              </div>
              <div class="col-md-4" >
			  		
						<img src="img/6.png" style="margin-top:10px; width:80%; height: 150px;">
						<h1 style="font-size:20px;margin-top:15px;padding-bottom:10px;font-weight:100px;">ORACLE</h1>
						<p class="card-title" >Introducing you to a world of interface design with real time collaboration using Figma. First of it's kind. Introducing you to a world of interface design with real time collaboration using Figma. First of it's kind </p>
						<h3 class="card-title" >POSTED BY Jane Doe</h3>
						<p class="card-text" >5 mins ago</p>
					
              </div>        
           
          
          </div>
       
</div>


    <!-- android learning resources section -->
	<section id="what-we-do">
		<div class="container">
			<h2 class="section-title mb-2 h1" style="padding-top: 10px;">Android Learning Resources</h2>
			<!-- <p class="text-center text-muted h5">Having and managing a correct marketing strategy is crucial in a fast moving market.</p> -->
			<div class="row mt-5">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
					<div class="card">
						<div class="card-block block-1">
                        <div class="image-aside">
                        <img src="img/3.png">
                        </div>
							<h3 class="card-title">Light or Dark UI? Tips to Choose a Proper Color Scheme for User Interface</h3>
							<p class="card-text">by Tubik Studio, April 13</p>
							<a href="javascript:void();" title="Read more" class="read-more" >Read more...<i class="fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
					<div class="card">
						<div class="card-block block-3">
                        <div class="image-aside">
                        <img src="img/1.png">
                        </div>
							<h3 class="card-title">How we designed page reviews for Wikipedia - and what could be done with them in the future</h3>
							<p class="card-text">by Nirzir Pangakar, April 17</p>
							<a href="javascript:void();" title="Read more" class="read-more" >Read more...<i class="fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
					<div class="card">
						<div class="card-block block-4">
                        <div class="image-aside">
                        <img src="img/2.png">
                        </div>
							<h3 class="card-title">8 WORST Design Trends Every UX Designer Should Avoid</h3>
							<p class="card-text">by Roshi, 6th June</p>
							<a href="javascript:void();" title="Read more" class="read-more" >Read more...<i class="fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
					<div class="card">
						<div class="card-block block-6">
                        <div class="image-aside">
                        <img src="img/4.png">
                        </div>
							<h3 class="card-title">Rapid UX Research at Google</h3>
							<p class="card-text">by Heidi Sales, April 5</p>
							<a href="javascript:void();" title="Read more" class="read-more" >Read more...<i class="fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
                
			</div>
            <div style="text-align:center;">
			<button style="color:white; background:#2181F7;width:150px;padding:20px;font-size: 14px; font-weight:bold;border:none; border-radius:6px; margin:0 auto;margin-top:20px;margin-bottom:40px">LOAD MORE</button>
            </div>
		</div>	
	</section>
	<!-- /learning resources section -->

<!-- </body> -->
<!-- </html>-->
<?php include('footer.php'); ?>