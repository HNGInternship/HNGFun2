<?php
include_once("header.php");
?>

<head>
  <title>Help Center</title>
  
  <!-- custom style -->
  <style type="text/css">
  @import url("//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css");
    html, body {
      margin: 0;
      padding: 0;
      width: 100%;
      font-family: 'Lato', 'work sans';
      background: #fafafa;
      font-size: medium;
    }
    header {
      background: #e4e4e4;
      padding: 30px;
    }
    header > h1 {
      font-weight: bold;
    }
    header > h4 {
      margin-top: 30px;
      margin-bottom: 10px;
    }
    #header-search {
      background: none;
      border: 1px solid grey;
      text-indent: 30px;
    }
    .fa-search { 
      position: sticky;
      margin-right: -30px;
      font-size: 15px;
    }
    .btn {
      border: 1px solid #57aff5;
    }
    .btn-primary {
      background: #2196f3;
    }
    .btn-default {
      background: #fff;
      color: #57aff5;
    }
    .btn-block {
      width: 75%;
      margin: 30px 0;
    }
    #faq {
      margin-top: 50px;
      margin-left: 50px;
      border: 1px solid grey;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }
    #faq > h4 {
      padding-top: 10px;
      padding-bottom: 10px;
      padding-right: 50px;
    }
    .form {
      margin-top: 100px;
    }
    form {
      border: 1px solid grey;
      padding: 70px 170px;
      margin-top: 0;
    }
    .alt-header {
      display: none;
    }
    @media screen and (max-width: 767px) {
      header {
        display: none;
      }
      .alt-header {
        display: block;
      }
      form {
        padding: 1em;
        width: 100%;
      }
    }
    #textarea {
      height: 150px;
      margin-top: 35px;
    }
    .p {
      margin-bottom: 0;
      font-weight: bold;
      font-size: large;
    }
    #left > .btn {
      width: 70%;
      margin-left: 60px;
    }
    #right {
      background: #f2f2f2;
      margin-top: 30px;
      height: 300px;
    }
    @media (min-width: 768px) and (max-width: 991px) {
      #left .btn {
        width: 100%;
      }
      #right {
        margin-left: 10%;
      }
    }

    #submit {
      margin-top: 10px;
      margin-left: 80%;
      width: 20%;
    }
    figure > img {
      border-radius: 50%;
      height: 12em;
    }
    figcaption {
      font-weight: bold;
      font-size: large;
      color: #2196f3;
    }
    .main-left {
      margin-top: 2em;
    }
    .main-left > button {
      margin-left: 2em;
    }
    @media (min-width: 768px) and (max-width: 991px) {
      .main-left > button {
        width: 100%;
        font-size: 12px;
      }
    }   
    .anchor {
      color: #000;
      font-weight: bold;
    }
    #accordion {
      padding-left: 10px;
    }
    .anchor:before {
      content: '\2335';
      float: right;
    }
    .anchor:active:before,
    .anchor:focus:before {
      transform: rotate(180deg);
      transition: all 0.5s;
    }

  </style>  
</head>
<body>
  <main class="container">
    <div class="row">
      <div class="col-md-3">
        <!-- shows on small screen only --> 
        <header class="text-center alt-header">
          <h1>Help Center</h1>
          <h4>What Can we help you with?</h4>
          <span class="fa fa-search"></span>
          <input type="text" id="header-search" placeholder="Have a question? Ask or enter a search term here" class="form-control" style="width:70%;display:inline;">
          <input type="button" class="btn btn-primary" value="Search" id="search" style="width:15%;">
        </header>
        <div class="main-left text-center">
          <figure>
            <img src="./img/dashboard/amy.png" alt="pic" class="img-circle">
          </figure>
          <figcaption>rock_zion</figcaption>
          <button class="btn btn-default btn-block">PROFILE</button>
          <button class="btn btn-default btn-block">TRADE</button>
          <button class="btn btn-default btn-block">ACCOLADE BALANCE</button>
          <button class="btn btn-primary btn-block">HELP & FEEDBACK</button>
        </div>
      </div>

      <div class="col-md-9">
        <header class="text-center">
          <h1>Help Center</h1>
          <h4>What Can we help you with?</h4>
          <span class="fa fa-search"></span>
          <input type="text" id="header-search" placeholder="Have a question? Ask or enter a search term here" class="form-control" style="width:70%;display:inline;">
          <input type="button" class="btn btn-primary" value="Search" id="search" style="width:15%;">
        </header>
        <div class="container section">
          <div id="faq">
            <h4 class="text-right">FAQs</h4>
          </div>
          <div class="row">
            <div class="col-md-3 pb-4" id="left">
              <button class="btn btn-primary btn-block">Private Key</button>
              <button class="btn btn-default btn-block">Accolades</button>
            </div>
            <div class="col-md-9" id="right">
              <a href="#accordion" data-toggle="collapse" class="anchor">What is a private key?</a>
              <div id="accordion" class="collapse">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit,<br>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                <br> nisi ut aliquip exea commodo consequat.
              </div>
              <hr>
              <a href="#accordion2" data-toggle="collapse" class="anchor">Why do i need a private key?</a>
              <div id="accordion2" class="collapse">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit,<br>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                <br> nisi ut aliquip exea commodo consequat.
              </div>
            </div>
          </div>
          <div class="form">
            <p class="text-center p">We would like to hear from you</p>
            <form class="form-group" action="">
              <input type="email" placeholder="Email Address" class="form-control">
              <textarea placeholder="Message" class="form-control" id="textarea"></textarea>
              <input type="submit" class="btn btn-primary" value="SEND" id="submit">
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>

</body>
<?php
include_once("footer.php");

?>
