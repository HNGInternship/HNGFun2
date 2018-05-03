<?php
include_once("header.php");
function custom_styles() {
    $styles = 'body{
            background-color: #fff !important;
        }
        .hero-section {
            background-color: #56CCF2 !important;
          background: url("img/core-value.png") 50% no-repeat;
          background-size: cover;
          height: 60vh;
          text-align: center;
          display: -webkit-flex;
          display: -ms-flexbox;
          display: flex;
          -webkit-align-items: center;
          -ms-flex-align: center;
          align-items: center;
          -webkit-justify-content: center;
          -ms-flex-pack: center;
          justify-content: center;
        }
        

        .hero-section .hero-section-text {
          text-shadow: 1px 1px 2px #0a0a0a;
        }
        .hero-section .hero-section-text h3{
            color: white;
            font-size: 28px;
        }
        .hero-section .hero-section-text h1{
            color: black;
            font-size: 90px;
        }
        .hero-section .hero-section-text h2{
            color: black;
            font-size: 48px;
        }
        .page-heading{
            color: #56CCF2 !important;
            font-size: 25px !important;
        }
        .content{
             margin-top: 100px !important;
        }
        .under-line{
             background-color: #56CCF2; height: 2px; border: 0;
        } 
        .brief{
            font-size: 20px;

        }
        p  {margin-left: 50px !important;
        }';
    echo $styles;
};
?>
<!-- head ends -->
<div class="hero-section">
  <div class="hero-section-text">
  <h1 class="font-weight-bolder"> OUR</h1>
  <h2 class="font-weight-bold"> Core Values</h2>
  <h3 class=" text-white"> Become a better Software Developer</h3>
  </div>
</div>

<div class="container content">
    <div class="row">
        <div class="col-lg-10 col-md-10 mx-auto">
            <h3 class="page-heading">DIVERSITY</h3>
                <hr class="under-line">
			 <div class="container-fluid">
                    <p>
                        <span class="brief">
                        Introducing you to a world of interface design with real-time collaboration using figma. 
                        First of it's kind, Figma enables teams carry outprojects in one page, 
                        while keeping all feedback changes and updates constantly in sync.
                        </span>
                    </p>
        	</div>
		</div>
	</div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-10 col-md-10 mx-auto">
            <h3 class="page-heading">INNOVATION</h3>
            <hr class="under-line">
            <div class=" container-fluid">
                    <p>
                        <span class="brief">
                        Introducing you to a world of interface design with real-time collaboration using figma. 
                        First of it's kind, Figma enables teams carry outprojects in one page, 
                        while keeping all feedback changes and updates constantly in sync.
                        </span>
                    </p>
        	</div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-10 col-md-10 mx-auto">
            <h3 class="page-heading">QUALITY</h3>
            <hr class="under-line">
             <div class="container-fluid">
                    <p>
                        <span class="brief">
                        Introducing you to a world of interface design with real-time collaboration using figma. 
                        First of it's kind, Figma enables teams carry outprojects in one page, 
                        while keeping all feedback changes and updates constantly in sync.
                        </span>
                    </p>
        	</div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-10 col-md-10 mx-auto">
            <h3 class="page-heading">SUSTAINABILITY</h3>
            <hr class="under-line">
             <div class=" container-fluid">
                    <p>
                        <span class="brief">
                        Introducing you to a world of interface design with real-time collaboration using figma. 
                        First of it's kind, Figma enables teams carry outprojects in one page, 
                        while keeping all feedback changes and updates constantly in sync.
                        </span>
                    </p>
        	</div>
        </div>
    </div>
</div>

		
<?php
include_once("footer.php");
?>
