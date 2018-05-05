<?php
  include('header.php');
?>

<style type="text/css">
	h2 {
	  font-family: 'work sans';
	}

	#img-title {
		display: flex;
		background-color: #C4C4C4;
	}

	#img-title i {
		margin: auto;
		font-size: 15rem;
		color: #A6A6A6;
	}

	section p {
	  font-size: 18px;
	  color: #3D3D3D;
	  line-height: 28px;
	  text-align: justify;
	}


	.profile-box {
		display: flex;
		justify-content: space-between;
		align-items: center;
	}

	.my-deck {
		display: flex;
		justify-content: space-between;
		flex-wrap: wrap;
	}

	.my-deck .card {
	  width: 22%;
	  background-color: #F2F2F2;
	  display: flex;
	}

	.my-deck .card img {
	  margin: auto;
	}


	#figma {
	  background-color: #222222;
	}
</style>
<main class="col-md-9 mx-auto pt-5 mb-5 pb-5">
  <h2 class="mt-5">HNG 4.0 Internship</h2>
  <hr style="width: 58px; border-top: 2px solid #3D3D3D;" class="mx-auto" />
  <div class="py-5 my-5 col-md-10 mx-auto" id="img-title">
  	<i class="fa fa-image my-5"><img class="card-img-top" src="http://http://res.cloudinary.com/devgeaks/image/upload/v1525544789/IMG_20180504_204524.jpg" alt="logo"></i>
  </div>

  <section class="mt-5 pt-5 col-md-10 mx-auto">
  	<h4>
  		About HNG 4.0 Internship
  	</h4>

  	<p>
  	The HNG is a 3-month remote internship program designed to locate the most talented software developers in Nigeria and the whole of Africa. Everyone is welcome to participate (there is no entrance exam). We create fun challenges every week on our slack channel. THose who solve them stay on. Everyone gets to learn important concepts quickly, and make connections with people they can work with in the future. The intern coders are introduced to complex programming frameworks, and get to work on real applications that scale. the finalist are connected to the best companies in the tech ecosystem and get full time jobs and contracts immediately.
  	</p>


  </section>
  <section class="row mt-5 pt-5 col-md-10 mx-auto px-0">
  	<span class="col-sm-4">
  	  <h5>
  	  	DURATION
  	  </h5>
  	  <p class="mt-0">May 1st - July 27th</p>
  	</span>
  	<span class="col-sm-4">
  	  <h5>
  	  	PARTICIPANTS
  	  </h5>
  	  <p class="mt-0">
  	  	<a href="listing.php" style="color: #2196F3">View Interns List</a>
  	  </p>
  	</span>
  </section>


  <section class="mt-5">

  	<div class="profile-box ">
  	  <span class="fa-stack">
  	  	<i class="fa fa-circle fa-stack-2x fa-inverse"></i>
  	    <i class="fa fa-chevron-left fa-stack-1x "></i>
  	  </span>
      <div class="mx-auto col-md-10">

      <h5 class="mb-4">PARTNERS &amp; TECHNOLOGIES USED</h5>

      <span class="my-deck">
	    <div class="card">
	      <img class="card-img-top" src="img/oracle_jet.png" alt="Oracle Jet logo">
	    </div>
	    <div class="card" id="figma">
	      <img class="card-img-top" src="img/figma-dark.png" alt="Figma logo">
	    </div>
	    <div class="card" >
	      <img class="card-img-top" src="img/bluechip.png" alt="Bluechip logo">
	    </div>
	    <div class="card">
	      <img class="card-img-top" src="img/php.png" alt="PHP MySQL logo">
	    </div>
      </span>
      </div>
      <span class="fa-stack">
      	<i class="fa fa-circle fa-stack-2x fa-inverse"></i>
        <i class="fa fa-chevron-right fa-stack-1x "></i>
      </span>	
  	</div>
  </section>
  

</main>
<?php
  include('footer.php');
?>
