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
    
<style type="text/css">
h2 {
    text-transform: capitalize;
    font-family: 'work sans';
    font-size: 40px;
    text-align: center;
}

	section h4 {
      font-weight: 400;
      font-size: 26px;
      text-align: center;
      color: #616161;
	}
	.my-deck {
		display: flex;
		justify-content: space-between;
		flex-wrap: wrap;
		width: 958px;
	}
	.my-deck .card {
		width: 250px !important;
		height: 302px;
	}

	.card-footer {
		display: flex;
		justify-content: space-between;
	}

	.profile-box {
		display: flex;
		justify-content: space-between;
		align-items: center;
	}
	.card-img-top {
    height: 250px;
    width: 251px;
}
</style>

<main class="mx-auto col-md-10 mt-5 mb-5">
  <h2>We've Come A Long Way</h2>
  <hr style="width: 58px; border-top: 2px solid #3D3D3D;" class="mx-auto" />
  <section class="mt-5">
  	<h4>HNG 1.0</h4>
  	<div class="profile-box">
  	  <span class="fa-stack">
  	  	<i class="fa fa-circle fa-stack-2x fa-inverse"></i>
  	    <i class="fa fa-chevron-left fa-stack-1x "></i>
  	  </span>
      <div class="my-deck mx-auto mt-4">
  	  <div class="card">
  	    <img class="card-img-top" src="images/Didicodes.png" alt="Profile Image">
          <div class="card-footer">
            
        	  <a href="#" class="ml-3">View Profile</a>
        	  <i class="fa fa-github fa-lg"></i>
      	</div>
  	  </div>
      <div class="card">
        <img class="card-img-top" src="images/Dtechtor.PNG" alt="Profile Image">
        <div class="card-footer">
  	  <a href="#" class="ml-3">View Profile</a>
  	  <i class="fa fa-github fa-lg"></i>
      </div>
      </div>
        <div class="card">
          <img class="card-img-top" src="images/Fotes.PNG" alt="Profile Image">
  	    <div class="card-footer">
  	      
  	  	  <a href="#" class="ml-3">View Profile</a>
  	  	  <i class="fa fa-github fa-lg"></i>
  		</div>
        </div>
      </div>
      <span class="fa-stack">
      	<i class="fa fa-circle fa-stack-2x fa-inverse"></i>
        <i class="fa fa-chevron-right fa-stack-1x "></i>
      </span>	
  	</div>
  </section>
  <section class="mt-5">
  	<h4>HNG 2.0</h4>
  	<div class="profile-box">
  	  <span class="fa-stack">
  	  	<i class="fa fa-circle fa-stack-2x fa-inverse"></i>
  	    <i class="fa fa-chevron-left fa-stack-1x "></i>
  	  </span>
      <div class="my-deck mx-auto mt-4">
  	  <div class="card">
  	    <img class="card-img-top" src="images/Osawaru.PNG" alt="Profile Image">
          <div class="card-footer">
            
        	  <a href="#" class="ml-3">View Profile</a>
        	  <i class="fa fa-github fa-lg"></i>
      	</div>
  	  </div>
      <div class="card">
        <img class="card-img-top" src="images/TechHajiya.PNG" alt="Profile Image">
        <div class="card-footer">
  	  <a href="#" class="ml-3">View Profile</a>
  	  <i class="fa fa-github fa-lg"></i>
      </div>
      </div>
        <div class="card">
          <img class="card-img-top" src="images/charlek.jpg" alt="Profile Image">
  	    <div class="card-footer">
  	      
  	  	  <a href="#" class="ml-3">View Profile</a>
  	  	  <i class="fa fa-github fa-lg"></i>
  		</div>
        </div>
      </div>
      <span class="fa-stack">
      	<i class="fa fa-circle fa-stack-2x fa-inverse"></i>
        <i class="fa fa-chevron-right fa-stack-1x "></i>
      </span>	
  	</div>
  </section>
  <section class="mt-5">
  	<h4>HNG 3.0</h4>
  	<div class="profile-box">
  	  <span class="fa-stack">
  	  	<i class="fa fa-circle fa-stack-2x fa-inverse"></i>
  	    <i class="fa fa-chevron-left fa-stack-1x "></i>
  	  </span>
      <div class="my-deck mx-auto mt-4">
  	  <div class="card">
  	    <img class="card-img-top" src="images/dav.jpg" alt="Profile Image">
          <div class="card-footer">
            
        	  <a href="#" class="ml-3">View Profile</a>
        	  <i class="fa fa-github fa-lg"></i>
      	</div>
  	  </div>
      <div class="card">
        <img class="card-img-top" src="images/iam__dharmy.PNG" alt="Profile Image">
        <div class="card-footer">
  	  <a href="#" class="ml-3">View Profile</a>
  	  <i class="fa fa-github fa-lg"></i>
      </div>
      </div>
        <div class="card">
          <img class="card-img-top" src="images/john.jpg" alt="Profile Image">
  	    <div class="card-footer">
  	      
  	  	  <a href="#" class="ml-3">View Profile</a>
  	  	  <i class="fa fa-github fa-lg"></i>
  		</div>
        </div>
      </div>
      <span class="fa-stack">
      	<i class="fa fa-circle fa-stack-2x fa-inverse"></i>
        <i class="fa fa-chevron-right fa-stack-1x "></i>
      </span>	
  	</div>
  </section>
</main>

    <title>Alumni</title>
  </head>
  <body>

    <div class="container-fluid">
      <h1 class="heading">We've Come A Long Way</h1>
      <hr style="width:5%;border:1px solid #555;margin-top:0px;">
      <p class="heading">HNG 4.0 has been a life-transforming journey for interns across Africa.<br />Don't take our word for it... take theirs.</p>
      <div class="top">
        <p id="p">HNG Alumni</p>
        <p>HNG 4.0 has been a life-transforming journey for interns across Africa.<br />Don't take our word for it... take theirs.</p>
      <p><strong>TOOLS BUILT</strong>:&nbsp;CHATBOTS, CRYPTOCURRENCY</p>
      </div>
<!-- first page -->

    <div class="article-loop">
      <table class="table">
        <thead style="background-color:#0475CE;color:#fff;font-weight:lighter;">
          <tr>
            <th scope="col"></th>
            <th scope="col">Name</th>
            <th scope="col">Username</th>
            <th scope="col">Summary Information</th>
            <th scope="col">Social Profile</th>
          </tr>
        </thead>
    </div>
      <div class="article-loop">
       <tbody>
          <tr>
            <th scope="row"><img src="https://hng-intern.herokuapp.com/assets/img/chuks.jpg" alt="profile_pic" class="img-responsive" width="30px"></th>
            <td><a href="#">Opia Chuks</a></td>
            <td>@chuks</td>
            <td></td>
            <td>
              <a href="#" target="_blank"><i class="fa fa-twitter fa-1x"></i></a>
              <a href="#" target="_blank"><i class="fa fa-facebook fa-1px"></i></a>
              <a href="#" target="_blank"><i class="fa fa-github fa-1px"></i></a>
            </td>
          </tr>
      </div>

      <div class="article-loop">
        <tr>
          <th scope="row"><img src="https://hng-intern.herokuapp.com/assets/img/orobolucky.JPG" alt="profile_pic" class="img-responsive" width="30px"></th>
          <td><a href="#">Ozoka Lucky Orobo</a></td>
          <td>@orobolucky</td>
          <td></td>
            <td>
              <a href="#" target="_blank"><i class="fa fa-twitter fa-1x"></i></a>
              <a href="#" target="_blank"><i class="fa fa-facebook fa-1px"></i></a>
              <a href="#" target="_blank"><i class="fa fa-github fa-1px"></i></a>
            </td>
        </tr>
      </div>

      <div class="article-loop">
        <tr>
          <th scope="row"><img src="https://hng-intern.herokuapp.com/assets/img/valentine.png" alt="profile_pic" class="img-responsive" width="30px"></th>
          <td><a href="#">Valentine Ike Oleka</a></td>
          <td>@valentine</td>
          <td></td>
            <td>
              <a href="#" target="_blank"><i class="fa fa-twitter fa-1x"></i></a>
              <a href="#" target="_blank"><i class="fa fa-facebook fa-1px"></i></a>
              <a href="#" target="_blank"><i class="fa fa-github fa-1px"></i></a>
            </td>
        </tr>
      </div>

      <div class="article-loop">
        <tr>
          <th scope="row"><img src="https://hng-intern.herokuapp.com/assets/img/kehinde_emmanuel.jpg" alt="profile_pic" class="img-responsive" width="30px"></th>
          <td><a href="#">Emmanuel Kehinde</a></td>
          <td>@kehinde_emmanuel</td>
          <td></td>
            <td>
              <a href="#" target="_blank"><i class="fa fa-twitter fa-1x"></i></a>
              <a href="#" target="_blank"><i class="fa fa-facebook fa-1px"></i></a>
              <a href="#" target="_blank"><i class="fa fa-github fa-1px"></i></a>
            </td>
        </tr>
      </div>

      <div class="article-loop">
        <tr>
          <th scope="row"><img src="https://hng-intern.herokuapp.com/assets/img/xyluz.JPG" alt="profile_pic" class="img-responsive" width="30px"></th>
          <td><a href="#">Seyi Onifade</a></td>
          <td>@xyluz</td>
          <td></td>
            <td>
              <a href="#" target="_blank"><i class="fa fa-twitter fa-1x"></i></a>
              <a href="#" target="_blank"><i class="fa fa-facebook fa-1px"></i></a>
              <a href="#" target="_blank"><i class="fa fa-github fa-1px"></i></a>
            </td>
        </tr>
      </div>

      <div class="article-loop">
        <tr>
          <th scope="row"><img src="https://hng-intern.herokuapp.com/assets/img/adetona.jpg" alt="profile_pic" class="img-responsive" width="30px"></th>
          <td><a href="#">Abiodun Adetona</a></td>
          <td>@adetona</td>
          <td></td>
            <td>
              <a href="#" target="_blank"><i class="fa fa-twitter fa-1x"></i></a>
              <a href="#" target="_blank"><i class="fa fa-facebook fa-1px"></i></a>
              <a href="#" target="_blank"><i class="fa fa-github fa-1px"></i></a>
            </td>
        </tr>
      </div>

      <div class="article-loop">
        <tr>
          <th scope="row"><img src="https://hng-intern.herokuapp.com/assets/img/digitalmarija.jpg" alt="profile_pic" class="img-responsive" width="30px"></th>
          <td><a href="#">Marija Dubrovska</a></td>
          <td>@digitallarija</td>
          <td></td>
            <td>
              <a href="#" target="_blank"><i class="fa fa-twitter fa-1x"></i></a>
              <a href="#" target="_blank"><i class="fa fa-facebook fa-1px"></i></a>
              <a href="#" target="_blank"><i class="fa fa-github fa-1px"></i></a>
            </td>
        </tr>
      </div>

      <div class="article-loop">
        <tr>
          <th scope="row"><img src="https://hng-intern.herokuapp.com/assets/img/aniekan.JPG" alt="profile_pic" class="img-responsive" width="30px"></th>
          <td><a href="#">Offiong Aniekanabasi</a></td>
          <td>@aniekan</td>
          <td></td>
            <td>
              <a href="#" target="_blank"><i class="fa fa-twitter fa-1x"></i></a>
              <a href="#" target="_blank"><i class="fa fa-facebook fa-1px"></i></a>
              <a href="#" target="_blank"><i class="fa fa-github fa-1px"></i></a>
            </td>
        </tr>
      </div>

      <div class="article-loop">
        <tr>
          <th scope="row"><img src="https://hng-intern.herokuapp.com/assets/img/okoye.JPG" alt="profile_pic" class="img-responsive" width="30px"></th>
          <td><a href="#">Okoye Chidi Bartholomew</a></td>
          <td>@okoyecb</td>
          <td></td>
            <td>
              <a href="#" target="_blank"><i class="fa fa-twitter fa-1x"></i></a>
              <a href="#" target="_blank"><i class="fa fa-facebook fa-1px"></i></a>
              <a href="#" target="_blank"><i class="fa fa-github fa-1px"></i></a>
            </td>
        </tr>
      </div>

      <div class="article-loop">
        <tr>
          <th scope="row"><img src="https://hng-intern.herokuapp.com/assets/img/chiamaka.jpg" alt="profile_pic" class="img-responsive" width="30px"></th>
          <td><a href="#">Obieri Chiamaka Grace</a></td>
          <td>@chiamaka</td>
          <td></td>
            <td>
              <a href="#" target="_blank"><i class="fa fa-twitter fa-1x"></i></a>
              <a href="#" target="_blank"><i class="fa fa-facebook fa-1px"></i></a>
              <a href="#" target="_blank"><i class="fa fa-github fa-1px"></i></a>
            </td>
        </tr>
      </div>

      <div class="article-loop">
        <tr>
          <th scope="row"><img src="https://hng-intern.herokuapp.com/assets/img/namsoukpanah.jpg" alt="profile_pic" class="img-responsive" width="30px"></th>
          <td><a href="#">Namnso Ukpanah</a></td>
          <td>@namsoukpanah</td>
          <td></td>
            <td>
              <a href="#" target="_blank"><i class="fa fa-twitter fa-1x"></i></a>
              <a href="#" target="_blank"><i class="fa fa-facebook fa-1px"></i></a>
              <a href="#" target="_blank"><i class="fa fa-github fa-1px"></i></a>
            </td>
        </tr>
      </div>

      <div class="article-loop">
        <tr>
          <th scope="row"><img src="https://hng-intern.herokuapp.com/assets/img/mozartted.jpg" alt="profile_pic" class="img-responsive" width="30px"></th>
          <td><a href="#">Chibuike Emmanuel Osita</a></td>
          <td>@mozartted</td>
          <td></td>
            <td>
              <a href="#" target="_blank"><i class="fa fa-twitter fa-1x"></i></a>
              <a href="#" target="_blank"><i class="fa fa-facebook fa-1px"></i></a>
              <a href="#" target="_blank"><i class="fa fa-github fa-1px"></i></a>
            </td>
        </tr>
      </div>                        

      <div class="article-loop">
        <tr>
          <th scope="row"><img src="https://hng-intern.herokuapp.com/assets/img/daniel.JPG" alt="profile_pic" class="img-responsive" width="30px"></th>
          <td><a href="#">Onuchukwu Daniel</a></td>
          <td>@Daniel</td>
          <td></td>
            <td>
              <a href="#" target="_blank"><i class="fa fa-twitter fa-1x"></i></a>
              <a href="#" target="_blank"><i class="fa fa-facebook fa-1px"></i></a>
              <a href="#" target="_blank"><i class="fa fa-github fa-1px"></i></a>
            </td>
        </tr>
      </div>

      <div class="article-loop">
        <tr>
          <th scope="row"><img src="https://hng-intern.herokuapp.com/assets/img/dejoe.jpg" alt="profile_pic" class="img-responsive" width="30px"></th>
          <td><a href="#">Adeyemo Adeola Joseph</a></td>
          <td>@dejoe</td>
          <td></td>
            <td>
              <a href="#" target="_blank"><i class="fa fa-twitter fa-1x"></i></a>
              <a href="#" target="_blank"><i class="fa fa-facebook fa-1px"></i></a>
              <a href="#" target="_blank"><i class="fa fa-github fa-1px"></i></a>
            </td>
        </tr>
      </div>

      <div class="article-loop">
            <tr>
              <th scope="row"><img src="https://hng-intern.herokuapp.com/assets/img/faradayy.JPG" alt="profile_pic" class="img-responsive" width="30px"></th>
              <td><a href="#">Friday God'swill</a></td>
              <td>@faradayy</td>
              <td></td>
            <td>
              <a href="#" target="_blank"><i class="fa fa-twitter fa-1x"></i></a>
              <a href="#" target="_blank"><i class="fa fa-facebook fa-1px"></i></a>
              <a href="#" target="_blank"><i class="fa fa-github fa-1px"></i></a>
            </td>
            </tr>
          </tbody>
        </table>
      </div>

<!-- next page starts -->

<div class="article-loop">
      <table class="table">
        <thead style="background-color:#0475CE;color:#fff;font-weight:lighter;">
          <tr>
            <th scope="col"></th>
            <th scope="col">Name</th>
            <th scope="col">Username</th>
            <th scope="col">Summary Information</th>
            <th scope="col">Social Profile</th>
          </tr>
        </thead>
    </div>

      <div class="article-loop">
       <tbody>
          <tr>
            <th scope="row"><img src="https://hng-intern.herokuapp.com/assets/img/sarahchima.jpg" alt="profile_pic" class="img-responsive" width="30px"></th>
            <td><a href="#">Sarah Chima</a></td>
            <td>@sarahchima</td>
            <td></td>
            <td>
              <a href="#" target="_blank"><i class="fa fa-twitter fa-1x"></i></a>
              <a href="#" target="_blank"><i class="fa fa-facebook fa-1px"></i></a>
              <a href="#" target="_blank"><i class="fa fa-github fa-1px"></i></a>
            </td>
          </tr>
      </div>

      <div class="article-loop">
        <tr>
          <th scope="row"><img src="https://hng-intern.herokuapp.com/assets/img/odusanya.JPG" alt="profile_pic" class="img-responsive" width="30px"></th>
          <td><a href="#">Odusanya Tomi</a></td>
          <td>@odusanya</td>
          <td></td>
            <td>
              <a href="#" target="_blank"><i class="fa fa-twitter fa-1x"></i></a>
              <a href="#" target="_blank"><i class="fa fa-facebook fa-1px"></i></a>
              <a href="#" target="_blank"><i class="fa fa-github fa-1px"></i></a>
            </td>
        </tr>
      </div>

      <div class="article-loop">
        <tr>
          <th scope="row"><img src="https://hng-intern.herokuapp.com/assets/img/jaykay.jpg" alt="profile_pic" class="img-responsive" width="30px"></th>
          <td><a href="#">Kayode Sholanke</a></td>
          <td>@jaykay</td>
          <td></td>
            <td>
              <a href="#" target="_blank"><i class="fa fa-twitter fa-1x"></i></a>
              <a href="#" target="_blank"><i class="fa fa-facebook fa-1px"></i></a>
              <a href="#" target="_blank"><i class="fa fa-github fa-1px"></i></a>
            </td>
        </tr>
      </div>

      <div class="article-loop">
        <tr>
          <th scope="row"><img src="https://hng-intern.herokuapp.com/assets/img/codebyomar.JPG" alt="profile_pic" class="img-responsive" width="30px"></th>
          <td><a href="#">Umar Abdullahi</a></td>
          <td>@codebyomar</td>
          <td></td>
            <td>
              <a href="#" target="_blank"><i class="fa fa-twitter fa-1x"></i></a>
              <a href="#" target="_blank"><i class="fa fa-facebook fa-1px"></i></a>
              <a href="#" target="_blank"><i class="fa fa-github fa-1px"></i></a>
            </td>
        </tr>
      </div>

      <div class="article-loop">
        <tr>
          <th scope="row"><img src="https://hng-intern.herokuapp.com/assets/img/dinyangetoh.JPG" alt="profile_pic" class="img-responsive" width="30px"></th>
          <td><a href="#">David Inyang-Etoh</a></td>
          <td>@dinyangetoh</td>
          <td></td>
            <td>
              <a href="#" target="_blank"><i class="fa fa-twitter fa-1x"></i></a>
              <a href="#" target="_blank"><i class="fa fa-facebook fa-1px"></i></a>
              <a href="#" target="_blank"><i class="fa fa-github fa-1px"></i></a>
            </td>
        </tr>
      </div>

      <div class="article-loop">
        <tr>
          <th scope="row"><img src="https://hng-intern.herokuapp.com/assets/img/marimazi.JPG" alt="profile_pic" class="img-responsive" width="30px"></th>
          <td><a href="#">Mary Mazi</a></td>
          <td>@marimazi</td>
          <td></td>
            <td>
              <a href="#" target="_blank"><i class="fa fa-twitter fa-1x"></i></a>
              <a href="#" target="_blank"><i class="fa fa-facebook fa-1px"></i></a>
              <a href="#" target="_blank"><i class="fa fa-github fa-1px"></i></a>
            </td>
        </tr>
      </div>

      <div class="article-loop">
        <tr>
          <th scope="row"><img src="https://hng-intern.herokuapp.com/assets/img/promise.JPG" alt="profile_pic" class="img-responsive" width="30px"></th>
          <td><a href="#">Promise Udenkwor</a></td>
          <td>@promise</td>
          <td></td>
            <td>
              <a href="#" target="_blank"><i class="fa fa-twitter fa-1x"></i></a>
              <a href="#" target="_blank"><i class="fa fa-facebook fa-1px"></i></a>
              <a href="#" target="_blank"><i class="fa fa-github fa-1px"></i></a>
            </td>
        </tr>
      </div>

      <div class="article-loop">
        <tr>
          <th scope="row"><img src="https://hng-intern.herokuapp.com/assets/img/reginarex.JPG" alt="profile_pic" class="img-responsive" width="30px"></th>
          <td><a href="#">Regina Rex</a></td>
          <td>@reginarex</td>
          <td></td>
            <td>
              <a href="#" target="_blank"><i class="fa fa-twitter fa-1x"></i></a>
              <a href="#" target="_blank"><i class="fa fa-facebook fa-1px"></i></a>
              <a href="#" target="_blank"><i class="fa fa-github fa-1px"></i></a>
            </td>
        </tr>
      </div>

      <div class="article-loop">
        <tr>
          <th scope="row"><img src="https://hng-intern.herokuapp.com/assets/img/yusuf.JPG" alt="profile_pic" class="img-responsive" width="30px"></th>
          <td><a href="#">Yusuf Yinka</a></td>
          <td>@yusuf</td>
          <td></td>
            <td>
              <a href="#" target="_blank"><i class="fa fa-twitter fa-1x"></i></a>
              <a href="#" target="_blank"><i class="fa fa-facebook fa-1px"></i></a>
              <a href="#" target="_blank"><i class="fa fa-github fa-1px"></i></a>
            </td>
        </tr>
      
          </tbody>
        </table>
      </div>
      <!-- bye bye second page -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!-- custom script -->
  <script>
    (function($){
        
        var paginate = {
            startPos: function(pageNumber, perPage) {
                // determine what array position to start from
                // based on current page and # per page
                return pageNumber * perPage;
            },
            getPage: function(items, startPos, perPage) {
                // declare an empty array to hold our page items
                var page = [];
                // only get items after the starting position
                items = items.slice(startPos, items.length);
                // loop remaining items until max per page
                for (var i=0; i < perPage; i++) {
                    page.push(items[i]); }
                return page;
            },
            totalPages: function(items, perPage) {
                // determine total number of pages
                return Math.ceil(items.length / perPage);
            },
            createBtns: function(totalPages, currentPage) {
                // create buttons to manipulate current page
                var pagination = $('<div class="pagination" />');
                // add a "first" button
                pagination.append('<span class="pagination-button">&laquo;</span>');
                // add pages inbetween
                for (var i=1; i <= totalPages; i++) {
                    // truncate list when too large
                    if (totalPages > 5 && currentPage !== i) {
                        // if on first two pages
                        if (currentPage === 1 || currentPage === 2) {
                            // show first 5 pages
                            if (i > 5) continue;
                        // if on last two pages
                        } else if (currentPage === totalPages || currentPage === totalPages - 1) {
                            // show last 5 pages
                            if (i < totalPages - 4) continue;
                        // otherwise show 5 pages w/ current in middle
                        } else {
                            if (i < currentPage - 2 || i > currentPage + 2) {
                                continue; }
                        }
                    }
                    // markup for page button
                    var pageBtn = $('<span class="pagination-button page-num" />');
                    // add active class for current page
                    if (i == currentPage) {
                        pageBtn.addClass('active'); }
                    // set text to the page number
                    pageBtn.text(i);
                    // add button to the container
                    pagination.append(pageBtn);
                }
                // add a "last" button
                pagination.append($('<span class="pagination-button">&raquo;</span>'));
                return pagination;
            },
            createPage: function(items, currentPage, perPage) {
                // remove pagination from the page
                $('.pagination').remove();
                // set context for the items
                var container = items.parent(),
                    // detach items from the page and cast as array
                    items = items.detach().toArray(),
                    // get start position and select items for page
                    startPos = this.startPos(currentPage - 1, perPage),
                    page = this.getPage(items, startPos, perPage);
                // loop items and readd to page
                $.each(page, function(){
                    // prevent empty items that return as Window
                    if (this.window === undefined) {
                        container.append($(this)); }
                });
                // prep pagination buttons and add to page
                var totalPages = this.totalPages(items, perPage),
                    pageButtons = this.createBtns(totalPages, currentPage);
                container.after(pageButtons);
            }
        };
        // stuff it all into a jQuery method!
        $.fn.paginate = function(perPage) {
            var items = $(this);
            // default perPage to 5
            if (isNaN(perPage) || perPage === undefined) {
                perPage = 5; }
            // don't fire if fewer items than perPage
            if (items.length <= perPage) {
                return true; }
            // ensure items stay in the same DOM position
            if (items.length !== items.parent()[0].children.length) {
                items.wrapAll('<div class="pagination-items" />');
            }
            // paginate the items starting at page 1
            paginate.createPage(items, 1, perPage);
            // handle click events on the buttons
            $(document).on('click', '.pagination-button', function(e) {
                // get current page from active button
                var currentPage = parseInt($('.pagination-button.active').text(), 10),
                    newPage = currentPage,
                    totalPages = paginate.totalPages(items, perPage),
                    target = $(e.target);
                // get numbered page
                newPage = parseInt(target.text(), 10);
                if (target.text() == '«') newPage = 1;
                if (target.text() == '»') newPage = totalPages;
                // ensure newPage is in available range
                if (newPage > 0 && newPage <= totalPages) {
                    paginate.createPage(items, newPage, perPage); }
            });
        };
    })(jQuery);
    $('.article-loop').paginate(15);
    </script>


  </body>

<?php
include_once("footer.php");
?>
