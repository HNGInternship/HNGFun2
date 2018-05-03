<?php
include_once("header.php");
function custom_styles() {
    $styles = 'body{
            background-color: #fff !important;
        }
        .overlay{
             background-color: #56CCF2 !important;
            background-image: url("img/core-value.png") !important;
            background-repeat: no-repeat;
            background-position: 50% 0;
            -ms-background-size: cover;
            -o-background-size: cover;
            -moz-background-size: cover;
            -webkit-background-size: cover;
            background-size: cover;
        }
        h3{
            color: #56CCF2 !important;
            font-size: 25px !important;
        }
        .content{
            margin-top: -100px !important;
        }
        .under-line{
             background-color: #56CCF2; height: 2px; border: 0;
        } 
        .brief{
            font-size: 20px;

        }
        .hero-main-text{
            margin-top: -180px !important;
        }
        p {margin-left: 50px !important;
        }';
    echo $styles;
};
?>
<!-- head ends -->

<header class="masthead " style="background-image: url('img/core-values.jpg')">
    <div class="overlay h-75"></div>
    <div class="jumbotron jumbotron-fluid hero-div text-center bg-transparent mb-5 pb-5">
  <p class="hero-main-text font-weight-bold"> OUR</p>
  <p class="hero-sub-text-1 font-weight-bold"> Core Values</p>
  <p class="hero-sub-text-2 text-white"> Become a better Software Developer</p>
</div>
</header>


<div class="container content">
    <div class="row">
        <div class="col-lg-10 col-md-10 mx-auto">
            <h3 class="text-primary">DIVERSITY</h3>
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
            <h3 class="text-primary">INNOVATION</h3>
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
            <h3 class="text-primary">QUALITY</h3>
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
            <h3 class="text-primary">SUSTAINABILITY</h3>
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
