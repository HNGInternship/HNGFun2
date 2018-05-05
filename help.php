<?php
include_once("header.php");
?>

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- styles link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- font-awesome -->
   <!--  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <!-- custom style -->
    <style>
   
    /*.heading{
      position: absolute;
      width: 445px;
      height: 50px;
      left: 603px;
      top: 135px;
      font-family: Work Sans;
      font-style: normal;
      font-weight: 600;
      line-height: normal;
      font-size: 42px;
      color: #3D3D3D;
    }
    .sub_head{
      position: absolute;
      width: 272px;
      height: 29px;
      left: 583px;
      top: 187px;

      font-family: Lato;
      font-style: normal;
      font-weight: 500;
      line-height: 28px;
      font-size: 18px;
      text-align: justify;

      color: #3D3D3D;
    }*/    .search{
        width: 516px;
        margin: auto;
        height: 48px;
        line-height: 1.5;
        color: #495057;
        background-color: #f0f0f0;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    }
      .searchform{
        width: 400px;
        height: 42px;
        padding: .375rem .75rem;
        font-size: 1rem;
        line-height: 1.5;
        color: #495057;
        background-color: #f0f0f0;
        background-clip: padding-box;
        border: 1px solid #f0f0f0;
        border-radius: .25rem;
        transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    }
    
.searchbtn{
  position:relative;
  width: 113px;
  min-height: 45px;
  color: #ffffff;
height: 38px;
background: #2196F3;
border: 1px solid #FFFFFF;
border-radius: 6px;
margin-left: -5px;

}
#vr{
 border-right: 1px solid #3D3D3D; 
 height: 300px;
}
/* Smartphones (portrait and landscape) ----------- */
@media only screen and (min-device-width : 320px) and (max-device-width : 941px) {
.hl{
      display: none;
      visibility: hidden;
    }
#vr{
      border-right: 0px;
    }
.search{
        width: 400px;
        
    }
      .searchform{
        width: 290px;
    
    }
    
.searchbtn{
 
  width: 113px;
 

}
  }
 
    a {
      margin: 0.5em;
      color: #000;
    }
    a:hover{
      color: black;
      text-decoration: none;
    }
    .hl{
      background:#3D3D3D; margin-top: -20px;
    }
    
    #p {
      font-weight: bold;
      float: left;
    }
    </style>
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="section-heading">HELP DESK</h2>
            <h6>Welcome How can We Help You?</h6>
          </div>
           <div class="col-lg-12 text-center">
            <form role="form">
            <div class="form-group">
              <div class="search text-center">
                <input type="text" class="searchform" placeholder="&#xF002; Search" style="font-family:Arial, FontAwesome" /><button class="searchbtn">SEARCH</button>
              </div>
            </div>
          </form>
          </div>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 text-center" id="vr">
            <div class="service-box mt-5 mx-auto" id="vl">
              <i class=""><img src="images/icon/agenda.png" style="height: 80px; height: 80px;"></i>
              <h3 class="mb-3">Getting Started</h3>
              <p class="mb-0">Welcome to Hng! We're so glad to have you here. Let's started!</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 text-center" id="vr">
            <div class="service-box mt-5 mx-auto">
              <a href="buy-sell-hngcoin.php">
              <i class=""><img src="images/icon/transaction.png" style="height: 80px; height: 80px;"></i>
              <h3 class="mb-3">Sell/Buy HNG Coins</h3>
              <p class="mb-0">Let’s help you get started on how to sell and buy HNGCoin</p>
            </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i><img src="images/icon/users.png" style="height: 80px; height: 80px;" ></i>
              <h3 class="mb-3">Your Profile &amp; Preferences.</h3>
              <p class="mb-0">Learn how to adjust your profile and preferences.</p>
            </div>
          </div>
      </div>
      <hr class="hl">
      <div class="row">

        <div class="col-lg-4 col-md-6 text-center" id="vr">
            <div class="service-box mt-5 mx-auto">
              <i><img src="images/icon/agenda.png" style="height: 80px; height: 80px;" ></i>
              <h3 class="mb-3">HNG Internship Eligibility</h3>
              <p class="mb-0">Learn me and get help on how to be elible for the next internship</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 text-center" id="vr">
            <div class="service-box mt-5 mx-auto">
              <i><img src="images/icon/lock-and-key-icon-silhouette.png" style="height: 80px; height: 80px;" ></i>
              <h4 class="mb-4">How to Reset your  Password</h4>
              <p class="mb-0">Did you forget your password?  we can help you to get it back and ecure your account.</p>
            </div>
          </div>  

           <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
             <i><img src="images/icon/agenda.png" style="height: 80px; height: 80px;" ></i>
              <h3 class="mb-3">FAQ</h3>
              <p class="mb-0">Check frequently  asked questions to get understand how everything works</p>
            </div>
          </div>   
      </div>
     
  
        
         
      
     <div style="margin-bottom: 60px;"></div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

 



</body>

<?php
include_once("footer.php");
?>
