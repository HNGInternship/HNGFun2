
<?php
include_once("header.php");
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- styles link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- font-awesome -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    main {
      margin-top: 50px;
    }
    a {
      text-decoration: none !important;
      color: #000;
    }

    .nav-item:hover, .active {
      border-bottom: none !important;
    }


    .nav-pills{
      border: 1px solid lightgrey;
    }
    .nav-pills .nav-link{
      border-radius: 0;
      border-bottom: 1px solid lightgrey;
      font-size: 1rem;
      color: grey;
      padding: 20px;
      text-align: center;
      background-color: #F4F4F4;
    }

    .nav-pills .nav-link:hover{
      font-size: 1rem;
      color: #007bff;
    }

    .nav-pills .nav-link.active {
      background-color: #F4F4F4;
      color: #007bff;
      border-bottom: 1px solid lightgrey !important;
    }


  </style>
</head>
<main>
<div class="container" style="padding-top: 20px">
  <div class="row">
    <div class="col-3" style="padding-right: 30px">
      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="border-radius: 5px">
        <a class="nav-link active" id="v-pills-tab-1" data-toggle="pill" href="#v-pills-tab-1-label" role="tab" aria-controls="v-pills-tab-1-label" aria-selected="true" style="border-radius: 5px 5px 0px 0px">HNG 3.0</a>
        <a class="nav-link" id="v-pills-tab-2" data-toggle="pill" href="#v-pills-tab-2-label" role="tab" aria-controls="v-pills-tab-2-label" aria-selected="false">HNG 2.0</a>
        <a class="nav-link" id="v-pills-tab-3" data-toggle="pill" href="#v-pills-tab-3-label" role="tab" aria-controls="v-pills-tab-3-label" aria-selected="false" style="border-radius: 0px 0px 5px 5px">HNG 1.0</a>
      </div>
    </div>
    <div class="col-8">
      <div class="tab-content" id="v-pills-tabContent">
      <!-- hng 3.0 -->
        <div class="tab-pane fade show active" id="v-pills-tab-1-label" role="tabpanel" aria-labelledby="v-pills-tab-1">
          <img class="img-fluid" src="https://media.npr.org/assets/img/2016/06/03/1_blackmencode-reddingrucker_computer-edit_wide-9f1fbcd2af0a9ebdd4a081fe27ac1ea6bfb95256-s900-c85.jpg" width="100%" style="margin-bottom:20px;">
            
          <h3 style='padding: 40px 0px 30px 0px'>About HNG 3.0</h3>
          <p style="text-align: justify; font-size: 1rem; line-height: 170%" class="text-muted">The HNG Internship 3.0 is a 3-month remote internship program designed to locate the most talented software developers in Nigeria and the whole of Africa. Everyone is welcome to participate (there is no entrance exam). We create fun challenges every week on our slack channel. THose who solve them stay on. Everyone gets to learn important concepts quickly, and make connections with people they can work with in the future. The intern coders are introduced to complex programming frameworks, and get to work on real applications that scale. the finalist are connected to the best companies in the tech ecosystem and get full time jobs and contracts immediately.</p>
          <div class="row" style='padding: 40px 0px 30px 0px'>
            <div class="col-6">
              <h4 style="padding-bottom: 20px">Duration</h4>
              <p class="text-muted">Febuary 23rd - April 23rd 2017</p>
            </div>
            <div class="col-6">
              <h4 style="padding-bottom: 20px">Final 20 participants</h4>
              <p><a href="alumni.php" style="color: #007bff;">View Participants</a></p>
            </div>
          </div>
          <h4 style="padding-bottom: 20px">Partners</h4>
          <img class="img-fluid rounded" src="img/hng-square.png" width="100" style="margin-right: 50px;">
        </div>
        <!-- end of hng 3.0 -->
        <!-- hng 2.0 -->
        <div class="tab-pane fade" id="v-pills-tab-2-label" role="tabpanel" aria-labelledby="v-pills-tab-2">
        <img class="img-fluid" src="http://assets.nydailynews.com/polopoly_fs/1.2715151.1468825081!/img/httpImage/image.jpg_gen/derivatives/article_750/star-code.jpg" width="100%" style="margin-bottom:20px;">
          <h3 style='padding: 40px 0px 30px 0px'>About HNG 2.0</h3>
          <p style="text-align: justify; font-size: 1rem; line-height: 170%" class="text-muted">The HNG Internship 2.0 is a 3-month remote internship program designed to locate the most talented software developers in Nigeria and the whole of Africa. Everyone is welcome to participate (there is no entrance exam). We create fun challenges every week on our slack channel. THose who solve them stay on. Everyone gets to learn important concepts quickly, and make connections with people they can work with in the future. The intern coders are introduced to complex programming frameworks, and get to work on real applications that scale. the finalist are connected to the best companies in the tech ecosystem and get full time jobs and contracts immediately.</p>
          <div class="row" style='padding: 40px 0px 30px 0px'>
            <div class="col-6">
              <h4 style="padding-bottom: 20px">Duration</h4>
              <p class="text-muted">Febuary 23rd - April 23rd 2016</p>
            </div>
            <div class="col-6">
              <h4 style="padding-bottom: 20px">Final 20 participants</h4>
              <p><a href="alumni.php" style="color: #007bff;">View Participants</a></p>
            </div>
          </div>
          <h4 style="padding-bottom: 20px">Partners</h4>
          <img class="img-fluid rounded" src="img/hng-square.png" width="100" style="margin-right: 50px;">
        </div>
        <!-- end of hng 2.0 -->
        <!-- hng 1.0 -->
        <div class="tab-pane fade" id="v-pills-tab-3-label" role="tabpanel" aria-labelledby="v-pills-tab-3">
        <img class="img-fluid" src="https://blog.linkedin.com/content/dam/blog/en-us/corporate/blog/2014/02/high-school-students-computer.jpg" width="100%" style="margin-bottom:20px;">
          <h3 style='padding: 40px 0px 30px 0px'>About HNG 1.0</h3>
          <p style="text-align: justify; font-size: 1rem; line-height: 170%" class="text-muted">The HNG Internship 1.0 is a 3-month remote internship program designed to locate the most talented software developers in Nigeria and the whole of Africa. Everyone is welcome to participate (there is no entrance exam). We create fun challenges every week on our slack channel. THose who solve them stay on. Everyone gets to learn important concepts quickly, and make connections with people they can work with in the future. The intern coders are introduced to complex programming frameworks, and get to work on real applications that scale. the finalist are connected to the best companies in the tech ecosystem and get full time jobs and contracts immediately.</p>
          <div class="row" style='padding: 40px 0px 30px 0px'>
            <div class="col-6">
              <h4 style="padding-bottom: 20px">Duration</h4>
              <p class="text-muted">Febuary 23rd - April 23rd 2015</p>
            </div>
            <div class="col-6">
              <h4 style="padding-bottom: 20px">Final 20 participants</h4>
              <p><a href="alumni.php" style="color: #007bff;">View Participants</a></p>
            </div>
          </div>
          <h4 style="padding-bottom: 20px">Partners</h4>
          <img class="img-fluid rounded" src="img/hng-square.png" width="100" style="margin-right: 50px;">
<!--
            <img class="img-fluid rounded" src="img/oracle-red.png" width="100" style="margin-right: 50px;">
          <img class="img-fluid rounded" src="img/figma-dark.png" width="100" style="margin-right: 50px;">
          <img class="img-fluid rounded" src="img/bluechips.png" width="100" style="margin-right: 20px;">
-->
        </div>
      </div>
    </div>
  </div>
</div>
</main>
  <div style='color: #3D3D3D; padding-bottom: 80px'>

</div>


<?php
    include_once("footer.php");
?>
