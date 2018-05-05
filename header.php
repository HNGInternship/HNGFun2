<?php
if(!isset($_SESSION)) { session_start(); }

// for choosing active page on nav bar

$fileName=basename($_SERVER['PHP_SELF']);

$files = array('index.php','learn.php','listing.php','testimonies.php','sponsors.php','alumni.php','partners.php');
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

    <!-- Bootstrap core CSS -->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      


      <!-- Custom fonts for this template -->
  <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato|Work+Sans:400,900&amp;subset=latin-ext" rel="stylesheet">
     <link rel="stylesheet" href="css/custom.css" type="text/css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/stellar-sdk/0.8.0/stellar-sdk.min.js">
       
     </script>
    <!-- Custom styles for this template -->
      <link href="css/style2.css" rel="stylesheet">
      <link href="css/style1.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <link href="css/custom.css" rel="stylesheet">
     <!-- <link href="css/learn.css" rel="stylesheet"> -->
<!--	  <link href="css/carousel.css" rel="stylesheet">-->
      <link href="css/landing-page.min.css" rel="stylesheet">
      
      <link href="https://fonts.googleapis.com/css?family=Qwigley" rel="stylesheet">
      <style>
        body {
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
        /* horizontal line learn page */
        hr.under-line {
            width: 10%;
            border-top: 3px solid #000;
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


      /*for footer*/
    .contact-icon{
      margin: 0px !important;
      padding: 0% 2%;
    }

    footer{
      background: #FAFAFA !important;
      color: #3D3D3D;
    }

    </style>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript">
</script>
  </head>

  <body>
    <!-- Navigation -->

    <nav class="navbar navbar-expand-lg navbar-light"  >

      <a class="navbar-brand" href="../index.php">
        <!-- <img src="img/logo.png" alt="HNG logo" class="img-fluid"> -->
        <img src="https://res.cloudinary.com/nedy123/image/upload/v1525534693/Approved_HNG_Logo_xswasd.png" alt="HNG logo" class="img-fluid">
        
        </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">


        <ul class="navbar-nav ml-auto">
            <li class="nav-item <?= $activeArray[0] ?>">
                <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item <?= $activeArray[1] ?>">
                <a href="learn.php" class="nav-link">Learn</a>
            </li>
            <li class="nav-item <?= $activeArray[2] ?>">
                <a href="listing.php" class="nav-link">Current Intern</a>
            </li>
            <li class="nav-item <?= $activeArray[3] ?>">
                <a href="testimonies.php" class="nav-link">Testimonies</a>
            </li>
            <li class="nav-item <?= $activeArray[4] ?>">
                <a href="sponsors.php" class="nav-link">Sponsors</a>
            </li>
            <li class="nav-item <?= $activeArray[5] ?>">
                <a href="alumni.php" class="nav-link">Alumni</a>
            </li>
           <li class="nav-item <?= $activeArray[6] ?>">

                <a href="partners.php" class="nav-link">Partners</a>
            </li>
    </ul>
  </div>

    </nav>
