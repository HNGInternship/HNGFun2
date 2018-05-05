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
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- custom style -->
    <style>
    body {
      font-family: 'work sans', Lato;
      background: #ffffff;
    }
    h1 {
      font-weight: bolder;
    }
    .pagination {
      display: block;
      width: 75%;
      margin: 5em auto;
      text-align: center;
      
      &:after {
        content: '';
        clear: both;
      }
    }

    .pagination-button {
      display: inline-block;
      padding: 5px 10px;
      border: 1px solid #e0e0e0;  
      background-color: #eee;
      color: #333;
      cursor: pointer;
      transition: background 0.1s, color 0.1s;
      
      &:hover {
        background-color: #ddd;
        color: #3366cc;
      }
      
      &.active {
        background-color: #bbb;
        border-color: #bbb;
        color: #3366cc;
      }
      
      $border-radius: 18px;  
      
      &:first-of-type {
        border-radius: $border-radius 0 0 $border-radius;
      }

      &:last-of-type {
        border-radius: 0 $border-radius $border-radius 0;
      }
    }

    /* arbitrary styles */
    .heading { text-align: center; max-width: 500px; margin: 20px auto; }

    .article-loop {
      display: block;
      width: 80%;
      padding: 0px 2em;
      margin: 0px auto;
    }
    .top {
      width: 74%;
      margin: 2em auto;
      margin-bottom: 0px;
      padding: 5em;
      text-align: center;
      border: 1px solid lightgrey;
    }
    .table, thead {
      margin-top: 0px;
    }
    .in {
      display: inline-flex;
      width: 28%;
      font-weight: bold;
    }
    table {
      border: 1px solid lightgrey;
      margin: 0 auto;
    }
    tbody > tr:hover {
      background: #e5e5e5;
    }
    @media screen and (max-width: 767px) {
      html, body {
        width: 100%;
      }
      table {
        margin-left: -2em;
        padding: 0px;
        font-size: 70%;
        border-style: solid;
        border-collapse: collapse;
      }
      th {
        height: 50px;
      }
      .top {
        padding: 1em;
        border: 1px solid lightgrey;
        text-align: center;
        display: block;
        max-width: 500px; 
        margin: 0px auto;
      }
      .in {
        width: 90%;
      }
      #p {
        float: none !important;
      }
    }
    @media (min-width: 768px) and (max-width: 991px) {
      .top {
        width: 70%;
      }
    }
    a {
      margin: 0.5em;
      color: #000;
    }
    #p {
      font-weight: bold;
      float: left;
    }
    </style>

    <title>Alumni</title>
  </head>
  <body>

    <div class="container-fluid">
      <h1 class="heading">We've Come A Long Way</h1>
      <hr style="width:5%;border:1px solid #555;margin-top:0px;">
      <p class="heading">HNG Internship has been a life-transforming journey for interns across Africa.<br />Don't take our word for it... take theirs.</p>
      <div class="top">
        <p id="p">HNG Alumni</p>
        <p>HNG Internship has been a life-transforming journey for interns across Africa.<br />Don't take our word for it... take theirs.</p>
      <p><strong>TOOLS BUILT</strong>:&nbsp;TransferRules, HNG App</p>
      </div>
<!-- first page -->

    <div class="article-loop">
      <table class="table">
        <thead style="background-color:#0475CE;color:#fff;font-weight:lighter;">
          <tr>
            <th scope="col"></th>
            <th scope="col">Name</th>
            <th scope="col">Username</th>
            <th scope="col">Social Profile</th>
          </tr>
        </thead>
    </div>

      <div class="article-loop">
       <tbody>
          <tr>
            <th scope="row"><img src="https://avatars1.githubusercontent.com/u/30173059?s=400&v=4" alt="profile_pic" class="img-responsive" width="30px"></th>
            <td><a href="#">Wisdom Anthony</a></td>
            <td>@Ghost</td>
            <td>
              <a href="https://twitter.com/dayowizzy" target="_blank"><i class="fa fa-twitter fa-1x"></i></a>
              <a href="https://facebook.com/wisdomanthony0" target="_blank"><i class="fa fa-facebook fa-1px"></i></a>
              <a href="https://github.com/wizzydayo" target="_blank"><i class="fa fa-github fa-1px"></i></a>
            </td>
          </tr>
      </div>


      <div class="article-loop">
        <tr>
          <th scope="row"><img src="http://res.cloudinary.com/djz6ymuuy/image/upload/v1523890911/newpic.jpg" alt="profile_pic" class="img-responsive" width="30px"></th>
          <td><a href="#">James James</a></td>
          <td>@jamesjay4199</td>
            <td>
              <a href="https://twitter.com/jjcodes" target="_blank"><i class="fa fa-twitter fa-1x"></i></a>
              <a href="https://facebook.com/jamesjay4199" target="_blank"><i class="fa fa-facebook fa-1px"></i></a>
              <a href="https://github.com/jamesjay4199" target="_blank"><i class="fa fa-github fa-1px"></i></a>
            </td>
        </tr>
      </div>

      <div class="article-loop">
        <tr>
          <th scope="row"><img src="https://res.cloudinary.com/nedy123/image/upload/v1516020817/Dp_qtx2l8.jpg" alt="profile_pic" class="img-responsive" width="30px"></th>
          <td><a href="#">Nedy Udombat</a></td>
          <td>@nedy</td>
            <td>
              <a href="https://twitter.com/nedy_codes" target="_blank"><i class="fa fa-twitter fa-1x"></i></a>
              <a href="https://facebook.com/mento.udombat.1" target="_blank"><i class="fa fa-facebook fa-1px"></i></a>
              <a href="https://github.com/nedyudombat" target="_blank"><i class="fa fa-github fa-1px"></i></a>
            </td>
        </tr>
      </div>                        

      <div class="article-loop">
        <tr>
          <th scope="row"><img src="https://avatars0.githubusercontent.com/u/13081285?s=460&v=4" alt="profile_pic" class="img-responsive" width="30px"></th>
          <td><a href="#">Seyi Onifade</a></td>
          <td>@xyluz</td>
            <td>
              <a href="https://twitter/xyluz" target="_blank"><i class="fa fa-twitter fa-1x"></i></a>
              <a href="#" target="_blank"><i class="fa fa-facebook fa-1px"></i></a>
              <a href="https://github.com/xyluz" target="_blank"><i class="fa fa-github fa-1px"></i></a>
            </td>
        </tr>

      </div>

      

  </body>

<?php
include_once("footer.php");
?>
