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
        p  {margin-left: 0px !important;
        }
        .caro{
          margin-bottom:230px;
        }
        .emess{
          width:400px;
          padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s;
        }
        @media only screen and (max-width: 600px) {
            .caro {
                margin-bottom:270px;
            }
            .emess{
              width:400px;
            }
        }
        @media only screen and (max-width: 512px) {
            .emess{
              width:200px;
            }
        }'
        ;
    echo $styles;
};
?>
<!-- head ends -->
<style type="text/css">
.carousel-control-prev-icon,
.carousel-control-next-icon {
  height: 30px;
  width: 30px;
  background-size: 100%, 100%;
  border-radius: 50%;
  background-image: none;
  -moz-box-shadow:    3px 3px 3px 3px #ccc;
  -webkit-box-shadow: 3px 3px 3px 3px #ccc;
  box-shadow:         3px 3px 3px 3px #ccc;
}

.carousel-control-next-icon:after
{
  content: '>';
  font-size: 20px;
  color: #111;
}

.carousel-control-prev-icon:after {
  content: '<';
  font-size: 20px;
  color: #111;
}
</style>
<div class="hero-section">
  <div class="hero-section-text">
  <h1 class="font-weight-bolder"> OUR</h1>
  <h2 class="font-weight-bold"> Core Values</h2>
  <h3 class=" text-white"> Become a better Software Developer</h3>
  </div>
</div>

<div class="container content">
 <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    
    <div class="carousel-inner">
      <div class="carousel-item active" style="border-bottom: 0px;">
        <div style="padding:20px;">
          <div class="caro"><img class="d-block " style="margin:auto;" src="img/gamepad-controller.png"></div>
          <div class="carousel-caption">
            <h3 style="color:#000;">FUN</h3>
            <p style="color:#000; margin-left:0px;" >We believe humor is essential for exceptional creativity, outstandind service and thriving team members</p>
          </div>
        </div>
      </div>
      <div class="carousel-item" style="border-bottom: 0px;">
        <div style="padding:20px;">
          <div class="caro"><img class="d-block " style="margin:auto;" src="img/community.png"></div>
          <div class="carousel-caption">
            <h3 style="color:#000;">COMMUNITY</h3>
            <p style="color:#000; margin-left:0px;" >We share an infectious sense of mission to make an impact on society, empowering youths in ways never before possible.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item" style="border-bottom: 0px;">
        <div style="padding:20px;">
          <div class="caro"><img class="d-block " style="margin:auto;" src="img/excellence.png"></div>
          <div class="carousel-caption">
            <h3 style="color:#000;">EXCELLENCE</h3>
            <p style="color:#000; margin-left:0px;" >We are committed to winning with integrity by giving attention to every detail.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item" style="border-bottom: 0px;">
        <div style="padding:20px;">
          <div class="caro"><img class="d-block " style="margin:auto;" src="img/teamwork.png"></div>
          <div class="carousel-caption">
            <h3 style="color:#000;">TEAMWORK</h3>
            <p style="color:#000; margin-left:0px;" >We help each other, we collaborate, we celebrate our achievements – and we have fun doing it!</p>
          </div>
        </div>
      </div>
      <div class="carousel-item" style="border-bottom: 0px;">
        <div style="padding:20px;">
          <div style="margin-bottom:230px;"><img class="d-block " style="margin:auto;" src="img/innovation.png"></div>
          <div class="carousel-caption">
            <h3 style="color:#000;">INNOVATION</h3>
            <p style="color:#000; margin-left:0px;"> We thrive on creativity and ingenuity.</p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true" style=""></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div style="background-color:#134F8E; width:100%; height:100px;"></div>
<div style="background-color:#084482; width:100%; min-height:100px; margin-bottom:-50px;">
  <div class="row" style="margin: 0px;">
    <div class="col-md-3" style="padding:0px;"></div>
    <div class="col-md-6" style="padding:0px;">
      <div class="clear-fix pull-left" style="margin-top:20px;">
        <img src="img/emessage.png" style="width:60px;  float:left;">
        <h6 style="color:#fff; padding-left:70px;">Start <br> Learning <br> New</h6>
      </div>
      <div class="clear-fix pull-left" style="margin-top:20px;">
        <center>
        <h6 style="color:#fff; padding-left:20px;">Ready to get started? Register now!</h6>
        <form class="form-inline" action="#" style="padding-left:20px;">
          <div class="form-group" style="margin-bottom:0px;">
            <input type="email" class="emess" id="email" Placeholder="Enter email address to get started">
          </div>
          <button type="submit" class="btn btn-default" style="background-color:#00AEFF; color:#ffffff;">Submit</button>
        </form>
        </center>
      </div>
      <div></div>
    </div>
    <div class="col-md-3" style="padding:0px;"></div>
  </div>
</div>
		
<?php
include_once("footer.php");
?>
