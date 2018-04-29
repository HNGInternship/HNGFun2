<?php
include_once("header.php");
?>

<div class="jumbotron jumbotron-fluid hero-div text-center bg-transparent mb-5 pb-5">
  <p class="hero-main-text font-weight-bold"> hng</p>
  <p class="hero-sub-text-1 font-weight-bold"> Internship</p>
  <p class="hero-sub-text-2 text-primary" style='color: #2196F3'> Become a better Software Developer</p>
</div>

<div class="container container-fluid bg-transparent text-center mt-5 px-5 pt-5">
  <h2>What is HNG Internship ?</h2>
  <p class="text-secondary mx-5 px-5">The HNG is a 3-month remote internship program designed to locate the most talented software developers in Nigeria and the whole of Africa. Everyone is welcome to participate (there is no entrance exam). We create fun challenges every week on our slack channel. THose who solve them stay on. Everyone gets to learn important concepts quickly, and make connections with people they can work with in the future. The intern coders are introduced to complex programming frameworks, and get to work on real applications that scale. the finalist are connected to the best companies in the tech ecosystem and get full time jobs and contracts immediately.</p>
</div>

<div class="container container-fluid bg-transparent text-center my-5 px-5 py-5">
  <h2>Why the HNG Internship ?</h2>
  <p class="text-secondary mx-5 px-5">We needed developers in Nigeria, and there were just not enough. We found that telent was hiding in different small locations all over the country - but they needed training and exposure to best practices. The initial idea was to simply do a remote internship to find coders. We did not expect 1000+ people would apply to the internship. But we saw strongly people wanted to develop their skills, and it became a mission for us to make this happen.</p>
</div>

<style>
    .btn {
        border-radius: 8px; 
        background-color: #2196F3; 
        border-color: #2196F3;
    }
    .btn-primary:hover,
    .btn-primary:active,
    .btn-primary:visited,
    .btn-primary:focus {
        background-color: #0475CE !important;
    }
    .btn-signup {
        background-color: #2196F3;
        border-color: #2196F3;
        /*padding: 0.4em 8em !important;*/
        color: white;
        border-radius: 4px;
    }
</style>

<div class="container container-fluid bg-transparent text-center" style="margin-bottom: 100px">
    <h3 class="row justify-content-center">
        Ready to get started? Register now
    </h3>
    <br />
    <div class="row justify-content-center">
         <form class="form-inline" method="POST" action="signup.php">
             <div class="input-group mb-3" >
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">@</span>
                </div>
                <input type="email" class="form-control" name="email" id="email" placeholder="example@email.com" aria-label="Username" aria-describedby="basic-addon1" required>
                <div class="input-group-append">
                    <button class="btn-signup btn-md" style="font-size: 16px;">Sign Up </button>
                </div>
              </div>
         </form>
          
    </div>
</div>
<!--
<div class="my-5 py-5">
	<div class="container container-fluid bg-transparent my-5 py-5">
		<h3 class="text-center">Ready to get started? register now</h3>
		<div class="d-flex justify-content-center mt-3">
		  <form class="w-75">
		  	<label class="mb-0 pb-0">Email</label>
		  	<div class="input-group mb-4 mt-0">
		  	  <div class="input-group-prepend ">
		  	    <span class="input-group-text bg-transparent px-5 font-icon" id="basic-addon1">@</span>
		  	  </div>
		  	  <input type="text" class="form-control  rounded-right bg-transparent" placeholder="johndoe@example.com" aria-label="Username" aria-describedby="basic-addon1">
		  	  <a href="https://join.slack.com/t/hnginternship4/shared_invite/enQtMzQwOTU4NzAwNjExLWQ0NWFlZDBmNjRkMTRkNGZmYjQ5MzA0YmUzZDBiZDEzOTBkZGE1ZWUxZTI1YjkxMTQ5N2MyZTMyMzBmMTEyOWM" class="btn btn-blue btn-lg ml-3 rounded py-0">
		  	  	<p class="font-weight-normal text-white f-4 mb-0 pt-2 mt-1 text-capitalize">Sign Up</p>
		  	  </a>
		  	</div>
		  </form>
		</div>
	</div>
</div>
-->


<?php
include_once("footer.php");
?>


   