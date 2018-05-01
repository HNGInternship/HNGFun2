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
      font-size: 70%;
      color: grey;
      padding: 20px;
      text-align: center;
      background-color: #F4F4F4;
    }

    .nav-pills .nav-link:hover{
      font-size: 75%;
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
<div class="container">
  <div class="row">
    <div class="col-4">
      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link active" id="v-pills-tab-1" data-toggle="pill" href="#v-pills-tab-1-label" role="tab" aria-controls="v-pills-tab-1-label" aria-selected="true">HNG 1.0 (May 1st - July 23rd 2016)</a>
        <a class="nav-link" id="v-pills-tab-2" data-toggle="pill" href="#v-pills-tab-2-label" role="tab" aria-controls="v-pills-tab-2-label" aria-selected="false">HNG 2.0 (May 1st - July 23rd 2017)</a>
        <a class="nav-link" id="v-pills-tab-3" data-toggle="pill" href="#v-pills-tab-3-label" role="tab" aria-controls="v-pills-tab-3-label" aria-selected="false">HNG 3.0 (Sept. 3rd - Nov. 23rd 2017)</a>
        <a class="nav-link" id="v-pills-tab-4" data-toggle="pill" href="#v-pills-tab-4-label" role="tab" aria-controls="v-pills-tab-4-label" aria-selected="false">HNG 4.0 (May 1st - july 23rd 2018)</a>
      </div>
    </div>
    <div class="col-8">
      <div class="tab-content" id="v-pills-tabContent">
      <!-- hng 1.0 -->
        <div class="tab-pane fade show active" id="v-pills-tab-1-label" role="tabpanel" aria-labelledby="v-pills-tab-1">
          <img class="img-fluid" src="https://media.npr.org/assets/img/2016/06/03/1_blackmencode-reddingrucker_computer-edit_wide-9f1fbcd2af0a9ebdd4a081fe27ac1ea6bfb95256-s900-c85.jpg" width="100%" style="margin-bottom:20px;">
          <h5>About HNG 1.0</h5>
          <p style="text-align: justify;"><small> The HNG 1.0 internship in partnership with HOTELS.NG, ORACLE, FIGMA, and BLUECHIP TECHNOLOGIES Lorem ipsum dolor sit amet, graecis evertitur voluptatibus his ne. Adhuc autem admodum vis ei, libris timeam officiis sit ex. Cu aliquid habemus torquatos per. Mandamus voluptaria consetetur ei per, vim cu sumo conceptam. Nemore maluisset no vix, ad inimicus efficiantur contentiones nec, vis nominavi pertinacia ex.
Nam an equidem intellegam, pro ei novum zril. Constituto delicatissimi ut sea. Nec ad doming fuisset argumentum, cu per vocibus adolescens, quo in cibo malis posidonium. Ne usu lorem oblique</small> </p>
          <div class="row">
            <div class="col-6">
              <h5>Duration</h5>
              <p><small>Febuary 23rd - April 23rd 2016</small></p>
            </div>
            <div class="col-6">
              <h5>Final 20 participants</h5>
              <p><small><a href="alumni.php" style="color: #007bff;">View Participants</a></small></p>
            </div>
          </div>
          <h5>Partners</h5>
          <img class="img-fluid rounded" src="img/hng-square.png" width="100" style="margin-right: 20px;">
          <img class="img-fluid rounded" src="img/oracle-red.png" width="100" style="margin-right: 20px;">
          <img class="img-fluid rounded" src="img/figma-dark.png" width="100" style="margin-right: 20px;">
          <img class="img-fluid rounded" src="img/bluechips.png" width="100" style="margin-right: 20px;">
        </div>
        <!-- end of hng 1.0 -->
        <!-- hng 2.0 -->
        <div class="tab-pane fade" id="v-pills-tab-2-label" role="tabpanel" aria-labelledby="v-pills-tab-2">
        <img class="img-fluid" src="http://assets.nydailynews.com/polopoly_fs/1.2715151.1468825081!/img/httpImage/image.jpg_gen/derivatives/article_750/star-code.jpg" width="100%" style="margin-bottom:20px;">
          <h5>About HNG 2.0</h5>
          <p style="text-align: justify;"><small> The HNG 2.0 internship in partnership with HOTELS.NG, ORACLE, FIGMA, and BLUECHIP TECHNOLOGIES Lorem ipsum dolor sit amet, graecis evertitur voluptatibus his ne. Adhuc autem admodum vis ei, libris timeam officiis sit ex. Cu aliquid habemus torquatos per. Mandamus voluptaria consetetur ei per, vim cu sumo conceptam. Nemore maluisset no vix, ad inimicus efficiantur contentiones nec, vis nominavi pertinacia ex.
Nam an equidem intellegam, pro ei novum zril. Constituto delicatissimi ut sea. Nec ad doming fuisset argumentum, cu per vocibus adolescens, quo in cibo malis posidonium. Ne usu lorem oblique</small> </p>
          <div class="row">
            <div class="col-6">
              <h5>Duration</h5>
              <p><small>Febuary 23rd - April 23rd 2016</small></p>
            </div>
            <div class="col-6">
              <h5>Final 20 participants</h5>
              <p><small><a href="alumni.php" style="color: #007bff;">View Participants</a></small></p>
            </div>
          </div>
          <h5>Partners</h5>
          <img class="img-fluid rounded" src="img/hng-square.png" width="100" style="margin-right: 20px;">
          <img class="img-fluid rounded" src="img/oracle-red.png" width="100" style="margin-right: 20px;">
          <img class="img-fluid rounded" src="img/figma-dark.png" width="100" style="margin-right: 20px;">
          <img class="img-fluid rounded" src="img/bluechips.png" width="100" style="margin-right: 20px;">
        </div>
        <!-- end of hng 2.0 -->
        <!-- hng 3.0 -->
        <div class="tab-pane fade" id="v-pills-tab-3-label" role="tabpanel" aria-labelledby="v-pills-tab-3">
        <img class="img-fluid" src="https://blog.linkedin.com/content/dam/blog/en-us/corporate/blog/2014/02/high-school-students-computer.jpg" width="100%" style="margin-bottom:20px;">
          <h5>About HNG 3.0</h5>
          <p style="text-align: justify;"><small> The HNG 3.0 internship in partnership with HOTELS.NG, ORACLE, FIGMA, and BLUECHIP TECHNOLOGIES Lorem ipsum dolor sit amet, graecis evertitur voluptatibus his ne. Adhuc autem admodum vis ei, libris timeam officiis sit ex. Cu aliquid habemus torquatos per. Mandamus voluptaria consetetur ei per, vim cu sumo conceptam. Nemore maluisset no vix, ad inimicus efficiantur contentiones nec, vis nominavi pertinacia ex.
Nam an equidem intellegam, pro ei novum zril. Constituto delicatissimi ut sea. Nec ad doming fuisset argumentum, cu per vocibus adolescens, quo in cibo malis posidonium. Ne usu lorem oblique</small> </p>
          <div class="row">
            <div class="col-6">
              <h5>Duration</h5>
              <p><small>Febuary 23rd - April 23rd 2016</small></p>
            </div>
            <div class="col-6">
              <h5>Final 20 participants</h5>
              <p><small><a href="alumni.php" style="color: #007bff;">View Participants</a></small></p>
            </div>
          </div>
          <h5>Partners</h5>
          <img class="img-fluid rounded" src="img/hng-square.png" width="100" style="margin-right: 20px;">
          <img class="img-fluid rounded" src="img/oracle-red.png" width="100" style="margin-right: 20px;">
          <img class="img-fluid rounded" src="img/figma-dark.png" width="100" style="margin-right: 20px;">
          <img class="img-fluid rounded" src="img/bluechips.png" width="100" style="margin-right: 20px;">
        </div>
        <!-- end of hng.3.0 -->
        <!-- hng 4.0 -->
        <div class="tab-pane fade" id="v-pills-tab-4-label" role="tabpanel" aria-labelledby="v-pills-tab-4">
        <img class="img-fluid" src="http://assets.nydailynews.com/polopoly_fs/1.2715151.1468825081!/img/httpImage/image.jpg_gen/derivatives/article_750/star-code.jpg" width="100%" style="margin-bottom:20px;">
          <h5>About HNG 4.0</h5>
          <p style="text-align: justify;"><small> The HNG 4.0 internship in partnership with HOTELS.NG, ORACLE, FIGMA, and BLUECHIP TECHNOLOGIES Lorem ipsum dolor sit amet, graecis evertitur voluptatibus his ne. Adhuc autem admodum vis ei, libris timeam officiis sit ex. Cu aliquid habemus torquatos per. Mandamus voluptaria consetetur ei per, vim cu sumo conceptam. Nemore maluisset no vix, ad inimicus efficiantur contentiones nec, vis nominavi pertinacia ex.
Nam an equidem intellegam, pro ei novum zril. Constituto delicatissimi ut sea. Nec ad doming fuisset argumentum, cu per vocibus adolescens, quo in cibo malis posidonium. Ne usu lorem oblique</small> </p>
          <div class="row">
            <div class="col-6">
              <h5>Duration</h5>
              <p><small>Febuary 23rd - April 23rd 2016</small></p>
            </div>
            <div class="col-6">
              <h5>Final 20 participants</h5>
              <p><small><a href="alumni.php" style="color: #007bff;">View Participants</a></small></p>
            </div>
          </div>
          <h5>Partners</h5>
          <img class="img-fluid rounded" src="img/hng-square.png" width="100" style="margin-right: 20px;">
          <img class="img-fluid rounded" src="img/oracle-red.png" width="100" style="margin-right: 20px;">
          <img class="img-fluid rounded" src="img/figma-dark.png" width="100" style="margin-right: 20px;">
          <img class="img-fluid rounded" src="img/bluechips.png" width="100" style="margin-right: 20px;">
        </div>
        <!-- end of hng 4.0 -->
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
