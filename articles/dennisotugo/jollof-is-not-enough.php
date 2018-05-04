<?php
if(!isset($_SESSION)) { session_start(); }
// for choosing active page on nav bar
$fileName=basename($_SERVER['PHP_SELF']);
$files = array('../../index.php','../../learn.php','../../listing.php','../../testimonies.php','../../sponsors.php','../../alumni.php','../../partners.php');
$activeArray = array('','','','','','', '');
$fileIndex=array_search($fileName,$files);
// if page is unknown, dont mark any nav item
if($fileIndex!==FALSE){
$activeArray[$fileIndex]="active";
}
/////////////////////////////////////////////////////////
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HNG FUN</title>



      <!-- Custom fonts for this template -->
  <!-- Custom fonts for this template -->
    	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato|Work+Sans:400,900&amp;subset=latin-ext" rel="stylesheet">
     <link rel="stylesheet" href="../../css/custom.css" type="text/css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/stellar-sdk/0.8.0/stellar-sdk.min.js">
       
     </script>
    <!-- Custom styles for this template -->
      <link href="../../css/style2.css" rel="stylesheet">
      <link href="../../css/style1.css" rel="stylesheet">
      <link href="../../css/style.css" rel="stylesheet">
      <link href="../../css/custom.css" rel="stylesheet">
     <!-- <link href="css/learn.css" rel="stylesheet"> -->
<!--	  <link href="css/carousel.css" rel="stylesheet">-->
      <link href="../../css/landing-page.min.css" rel="stylesheet">
      <link href="../../css/learn2.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Qwigley" rel="stylesheet">
      <style>
        body {
		font-family: 'Source Sans Pro', Arial, sans-serif;
    font-size: 1.00rem;
          background-color: #FAFAFA;
            color: #3d3d3d
        }
        .navbar{
          font-size: 15px;
          font-weight: bold;
          background-color: #F4F4F4;
          padding: 0 10em;
        }
        .nav-item{
            padding: 24px 15px;
            border-bottom: 3px solid #f4f4f4;
        }
        .nav-item:hover, .active {
            border-bottom: 3px solid #2196F3;
        }
        footer {
          background: #FAFAFA;
        }
        .justify-space-between {
          justify-content: space-between;
        }
        .wrap {
          flex-wrap: wrap;
        }
          .btn-primary {
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
	      .featured-image img {
	    width: 100%;
            }
            .h1, h1 {
    font-size: 2.375em;
    letter-spacing: -1px;
    line-height: 1.3em;
		        color: #444;
    margin-bottom: 10px;
}
            p {
font-weight: 400;
    color: #222;
margin-bottom: 1em;
		    font-family:
"Source Sans Pro", Arial, sans-serif

		    
}
            article {
                border-bottom: 0.75px solid #3D3D3D;
transform: matrix(1, 0, 0, 1, 0, 0);
            }
            #xouter{
	height:100%;
	width:100%;
	display:table;
	vertical-align:middle;
                background: #ffffff;
}
#xcontainer {
    padding-bottom: 50px;
	text-align: center;
	position:relative;
	vertical-align:middle;
	display:table-cell;
}	
#xinner {
padding: 20px;
	width: 90%;
     
	text-align: left;
	margin-left:auto;
	margin-right:auto;
}
    </style>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript">
</script>
  </head>

  <body>
    <!-- Navigation -->

    <nav class="navbar navbar-expand-lg navbar-light"  >

      <a class="navbar-brand" href="../../index.php">
        <img src="../../img/approved_HNG_logo.png" alt="HNG logo" width="128" height="52" class="img-fluid">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">


        <ul class="navbar-nav ml-auto">
            <li class="nav-item <?= $activeArray[0] ?>">
                <a href="../../index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item <?= $activeArray[1] ?>">
                <a href="../../learn.php" class="nav-link">Learn</a>
            </li>
            <li class="nav-item <?= $activeArray[2] ?>">
                <a href="../../listing.php" class="nav-link">Intern</a>
            </li>
            <li class="nav-item <?= $activeArray[3] ?>">
                <a href="../../testimonies.php" class="nav-link">Testimonies</a>
            </li>
            <li class="nav-item <?= $activeArray[4] ?>">
                <a href="../../sponsors.php" class="nav-link">Sponsors</a>
            </li>
            <li class="nav-item <?= $activeArray[5] ?>">
                <a href="../../alumni.php" class="nav-link">Alumni</a>
            </li>
           <li class="nav-item <?= $activeArray[6] ?>">

                <a href="../../partners.php" class="nav-link">Partners</a>
            </li>
    </ul>
  </div>

    </nav>

<div id="xouter">
	<div id="xcontainer">
		<div id="xinner">
        <article>
            


            <div class="featured-image">
                <img src="http://slayers.hng.fun/articles/dennisotugo/Rectangle%203-2.png">
            </div>
            <h1>Breaking News: Cat does not give a damn</h1>
<p>When lorem ipsum hits larry gaaga doe t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.
orem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
		<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>	
			<p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
</p>
<h3><b>1. Lorem Ipsum</b></h3>		
<p>ut I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful</p>
			</article>
			<related>
				
				</related>
		</div>
	</div>
</div>

	  <footer>
   <div class="container footer">
      <div class="row">
         <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
               <li class="list-inline-item contact-icon">
                  <a id="twitter" href="https://twitter.com/hnginternship?lang=en" target="_blank">
                     <span>
                        <i class="fa fa-twitter fa-lg"></i>
                     </span>
                  </a>
               </li>
               <li class="list-inline-item contact-icon" style="border: 1px solid black;border-top-style: none;border-bottom-style: none; ">
                  <a id="facebook" href="https://web.facebook.com/hotelsng/" target="_blank">
                     <span>
                        <i class="fa fa-facebook fa-lg"></i>
                     </span>
                  </a>
               </li>
               <li class="list-inline-item contact-icon">
                  <a id="github" href="https://github.com/HNGInternship/" target="_blank">
                     <span>
                        <i class="fa fa-github fa-lg"></i>
                     </span>
                  </a>
               </li>
    
            </ul>
            <div style="text-align: center">
                <p class="copyright text-muted">Copyright &copy; HNG FUN 2018</p> 
            </div>
         </div>
      </div>
   </div>
</footer>



    <!-- Custom scripts for this template -->
    <script src="../../js/hng.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

<style>
  /*for footer*/
.contact-icon{
  margin: 0px !important;
  padding: 0% 2%;
}
footer{
  background: #fafafa !important;
  color: #3D3D3D;
}
</style>


</html>
