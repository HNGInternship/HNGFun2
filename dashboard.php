<?php
include_once("dashboard-header.php");
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
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'> -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Lato|Work+Sans:400,900&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../assets/css/custom.css" type="text/css"> -->
    <link rel="shortcut icon" href="images/favicon.png">

    <!-- Custom styles for this template -->
      <link href="css/style2.css" rel="stylesheet">
      <link href="css/style1.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <link href="css/learn.css" rel="stylesheet">
      <link href="css/custom.css" rel="stylesheet">
      <link rel="stylesheet" href="css/login.css">
      <link rel="stylesheet" href="css/signout.css">
      <link href="css/landing-page.min.css" rel="stylesheet">
      <link href="css/shield-invite.css" rel="stylesheet">
        <link href="css/404.css" rel="stylesheet">
      <!-- <link href="css/carousel.css" rel="stylesheet"> -->


      <style>
          body{
              background-color: #f4f4f4;
              font-family: 'Lato', sans-serif;
          }

    <?php if (function_exists('custom_styles')) {
        custom_styles();
      }
      ?>

      .container {
          box-sizing: border-box !important;
          padding: 0px 10px !important;
          margin-left: 60px;
          margin-top: 50px;
          font-size: 15px;
          font-weight: bold;
          display: inline-block;
          width: 100%;
          border: 2px solid #fafafa;
          background: #fafafa !important;
              padding: 10px 30px !important;
      }

      .coin {
        font-size: 15px;
        font-weight: lighter;
        padding-left: 20px;
        padding-top: 5px;
        text-align: center;

      }

      .coinvalue {

        font-size: 40px;
        font-weight: bold;
        float: left;
        margin-left: 40%;
        padding-right: 10px;
      }

      .coincode {
        text-align:center;
        font-size: 15px;
        margin-top:5px;
      }

      .text{
          color: rgb(90, 145, 247);
          font-weight: bold;
          font-size: 40px;
          float:center;
          margin-right: 30%;
          margin-top: 0px;
          padding-left: 10px;
      }


          @media (min-width: 992px){
          .container2 .coinvalue .text {
              padding-right: .5rem;
              padding-left: .5rem;
              padding-top: 20px;
              font-size: 40px !important;
          }
        }



      </style>

    <link href="css/dashboard-menu.css" rel="stylesheet">

  </head>

  <body>
    <div class="container">
      <div class="coin">Hng Coin wallet</div>
      <div class="container2">
      <div class="coinvalue">9.0000 </div>
      <div class="text">HNG</div>
    </div>
      <div class="coincode"><p>HNG Wallet Address: 1Nhghg5758bhjgjf</p></div>
    </div>

  </body>
</html>


<?php
include_once("footer.php");
?>
