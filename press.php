 <?php include("header.php");?>


<style>
	body {
        font-size: inherit !important;
	}

    .banner{
    	background-image:url('img/coffee.jpg') ;
    	background-repeat: no-repeat;
    	background-size: 100% 406px;
    	width: 100%;
    	height: 406px;
    	padding-bottom: 0;
    }
    .update-container{
    	margin-top: 60px;
    	width: 100%;
    	overflow: auto;
    	clear: both;
    	/*padding-left: 4%;*/
    }

    .sidebar{
    	float: left;
    	width: 10%;
    	margin-top: 60px;
    }

    .sidebar .btn{
    	margin-bottom: 15px;
    }
    .btn{
    	border: 1px solid #2196F3;
    	color: #2196F3;
    	width: 170px;
    	height: 38px;
    	border-radius:5px;
    	padding-top: 7px;
    	padding-left: 5px;
    	font-weight: normal;
        font-family: Lato;
    	text-transform: capitalize;
    }

    .btn:hover{
    	background-color: #D3D2DE;
    }
    .btn:focus{
    	border: none;
    	border-color: none;
    }

    #boxes {
    	float: right;
    	width: 90%;
    	padding-left: 100px;
    	padding-right: 10px;
    }

    #boxes .box{
    	float: left;
    	width: 47%;
    	padding-right: 60px;
    	margin-top: 43px;
    }
    #boxes hr{
    border: none;
    height: 1.5px;
    background-color: #000000;
    margin-left: 0;
        }
    #boxes .box hr{
    border: none;
    height: 2px;
    background-color: #8D8C90;
    }
    .box img{
    	height: 250px;
    	width: 95%;
    }

    .box h3{
    	font-size: 23px;
    	padding-top: 14px;
    }

    .box p{
    	margin-top: 0;
    }

    .box .btn{
    	width: 120px;
    }

    @media screen and (max-width: 780px) {
    	.banner{
    		background-size: 100% 400px;
    	}

  .sidebar{
    	float: none;
    	width: 50%;
    	margin: auto;
    }

   #boxes{
   	float: none;
   	width: 100%;
   	padding-left: 50px;
   }
   #boxes .box{
   	float: none;
   	width: 100%;
   	padding-right: 10px;
   }
}

</style>

<section>
		<div class="banner">
		</div>
</section>

<section>
	<div class="update-container">
		<div class="sidebar" style="padding:55px;">
            <div class="row offset-1">
			<a href="#top" class="btn btn-default">Press Release</a>
			<br><a href="#mid1" class="btn btn-default">Press Release</a>
			<br><a href="#mid2" class="btn btn-default">Press Release</a>
			<br><a href="#last" class="btn btn-default">Press Release</a>
        </div>
		</div>
	    <div id="boxes">
	    	<h2 style="text-align: left;">Live Updates</h2>
	    	<hr width="10%">
			<div class="box" id="top">
				<img src="img/press.jpg" class="img-responsive">
				<h3>HNGINTERNSHIP 4.0 Officially Begins May 1st- Mark.</h3>
				<p>Posted on <strong>April 5, 2018</strong> </p>
				<hr>
				<p>So while we are being very nice now, remember that we will disable people in the future, and it can affect you. We want you to show that you are willing to learn fast and push to become the best.
				<span id="collapseOne" class="collapse show"> Our training model is different from everyone elses, because our incentive is also different. We are looking for people who can be productive in the real world, not people who are good at passing exam </span> .</p>
				<a class="btn btn-default" data-toggle="collapse" href="#collapseOne">Read More </a>
		        </div>
				

			<div class="box">
				<img src="img/book.jpg" class="img-responsive">
				<h3>Interns who haven't reached Stage 2 would soon be dropped - Mark.</h3>
				<p>Posted on <strong>April 20, 2018</strong> </p>
				<hr>
				So while we are being very nice now, remember that we will disable people in the future, and it can affect you. We want you to show that you are willing to learn fast and push to become the best.
				<span id="collapseTwo" class="collapse show"> Our training model is different from everyone elses, because our incentive is also different. We are looking for people who can be productive in the real world, not people who are good at passing exam </span> .</p>
				<a class="btn btn-default" data-toggle="collapse" href="#collapseTwo">Read More </a>
			</div>

			<div class="box" id="mid1" >
				<img src="img/city.jpg" class="img-responsive">
				<h3>Team DragonShield Won The HNGFun Task - Mark.</h3>
				<p>Posted on <strong>April 26, 2018</strong> </p>
				<hr>
				So while we are being very nice now, remember that we will disable people in the future, and it can affect you. We want you to show that you are willing to learn fast and push to become the best.
				<span id="collapseThree" class="collapse show"> Our training model is different from everyone elses, because our incentive is also different. We are looking for people who can be productive in the real world, not people who are good at passing exam </span> .</p>
				<a class="btn btn-default" data-toggle="collapse" href="#collapseThree">Read More </a>
			</div>

			<div class="box" >
				<img src="img/contact-bg.jpg" class="img-responsive">
				<h3>Its Popular Apps Week, Earn Money By Creating Apps- Mark.</h3>
				<p>Posted on <strong>May 1, 2018</strong> </p>
				<hr>
				So while we are being very nice now, remember that we will disable people in the future, and it can affect you. We want you to show that you are willing to learn fast and push to become the best.
				<span id="collapseFour" class="collapse show"> Our training model is different from everyone elses, because our incentive is also different. We are looking for people who can be productive in the real world, not people who are good at passing exam </span> .</p>
				<a class="btn btn-default" data-toggle="collapse" href="#collapseFour">Read More </a>
			</div>

			<div class="box">
				<img src="img/laptop.jpg" class="img-responsive">
				<h3>Interns who haven't reached Stage 3 would soon be dropped - Mark.</h3>
				<p>Posted on <strong>May 5, 2018</strong> </p>
				<hr>
				So while we are being very nice now, remember that we will disable people in the future, and it can affect you. We want you to show that you are willing to learn fast and push to become the best.
				<span id="collapseFive" class="collapse show"> Our training model is different from everyone elses, because our incentive is also different. We are looking for people who can be productive in the real world, not people who are good at passing exam </span> .</p>
				<a class="btn btn-default" data-toggle="collapse" href="#collapseFive">Read More </a>
			</div>

			<div class="box" id="last" >
				<img src="img/bicycle.jpg" class="img-responsive">
				<h3>Stage3 and Popular Apps has been shutdown - Mark.</h3>
				<p>Posted on <strong>May 15, 2018</strong> </p>
				<hr>
				So while we are being very nice now, remember that we will disable people in the future, and it can affect you. We want you to show that you are willing to learn fast and push to become the best.
				<span id="collapseSix" class="collapse show"> Our training model is different from everyone elses, because our incentive is also different. We are looking for people who can be productive in the real world, not people who are good at passing exam </span> .</p>
				<a class="btn btn-default" data-toggle="collapse" href="#collapseSix">Read More </a>
			</div>


		</div>
    </div>
</section>

 <?php include("footer.php");?>
