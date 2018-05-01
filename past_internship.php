<?php
include_once("header.php");
?>
<style>

  a {
    text-decoration: none !important;
    color: #007bff;
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
  .nav-pills .nav-link.active {
    background-color: #F4F4F4;
    color: #007bff;
    border-bottom: 1px solid lightgrey !important;
  }


</style>
<main>
<div class="container">
  <div class="row">
    <div class="col-4">
      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link active" id="v-pills-tab-1" data-toggle="pill" href="#v-pills-tab-1" role="tab" aria-controls="v-pills-tab-1" aria-selected="true">HNG 1.0 (May 1st - July 23rd 2016)</a>
        <a class="nav-link" id="v-pills-tab-2" data-toggle="pill" href="#v-pills-tab-2" role="tab" aria-controls="v-pills-tab-2" aria-selected="false">HNG 1.0 (May 1st - July 23rd 2016)</a>
        <a class="nav-link" id="v-pills-tab-3" data-toggle="pill" href="#v-pills-tab-3" role="tab" aria-controls="v-pills-tab-3" aria-selected="false">HNG 1.0 (May 1st - July 23rd 2016)</a>
        <a class="nav-link" id="v-pills-tab-4" data-toggle="pill" href="#v-pills-tab-4" role="tab" aria-controls="v-pills-tab-4" aria-selected="false">HNG 1.0 (May 1st - July 23rd 2016)</a>
      </div>
    </div>
    <div class="col-8">
      <div class="tab-content" id="v-pills-tabContent">
      <!-- hng 1.0 -->
        <div class="tab-pane fade show active" id="v-pills-tab-1" role="tabpanel" aria-labelledby="v-pills-tab-1">
          <img class="img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSipOBWQCRcVtWoovIoACMPLJMbJM_odJaMKQQ2fe4tNZgavimd" width="100%" style="margin-bottom:20px;">
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
              <p><small><a href="alumni.php">View Participants</a></small></p>
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
        <div class="tab-pane fade" id="v-pills-tab-2" role="tabpanel" aria-labelledby="v-pills-tab-2">
        <img class="img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSipOBWQCRcVtWoovIoACMPLJMbJM_odJaMKQQ2fe4tNZgavimd" width="100%" style="margin-bottom:20px;">
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
              <p><small><a href="alumni.php">View Participants</a></small></p>
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
        <div class="tab-pane fade" id="v-pills-tab-3" role="tabpanel" aria-labelledby="v-pills-tab-3">
        <img class="img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSipOBWQCRcVtWoovIoACMPLJMbJM_odJaMKQQ2fe4tNZgavimd" width="100%" style="margin-bottom:20px;">
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
              <p><small><a href="alumni.php">View Participants</a></small></p>
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
        <div class="tab-pane fade" id="v-pills-tab-4" role="tabpanel" aria-labelledby="v-pills-tab-4">
        <img class="img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSipOBWQCRcVtWoovIoACMPLJMbJM_odJaMKQQ2fe4tNZgavimd" width="100%" style="margin-bottom:20px;">
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
              <p><small><a href="alumni.php">View Participants</a></small></p>
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


<?php
    include_once("footer.php");
?>