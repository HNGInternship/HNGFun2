<?php
include_once("header.php");
?>
<style>

/* General styles */
main {
    position: relative;
}

header {

    padding-bottom: 0;
}

nav.navbar.navbar-expand-lg.navbar-light {
    position: fixed;
    left: 0;
    right: 0;
    z-index: 999;

}

.hero {
    max-width: 640px;
    margin: 0 auto;
  
}



.hero input[type="text"]{
    padding: 10px;
    padding-left: 50px;
    margin-left: 10px;
    border: 1px solid #3d3d3d;
}


.hero input[type="submit"] {
    border-radius: 5px;
    padding: 11.9px 25px;
    background: #2196f3;
    color: #fff;
}

.container {
    padding-left: 200px;
}

  
    input[type="text"]#help-search::-webkit-input-placeholder { /* Chrome */
        color: #3d3d3d !important;
    }
    input[type="text"]#help-search:-ms-input-placeholder { /* IE 10+ */
        color: #3d3d3d !important;
    }
    input[type="text"]#help-search::-moz-placeholder { /* Firefox 19+ */
        color: #3d3d3d !important;
        opacity: 1;
    }
    input[type="text"]#help-search:-moz-placeholder { /* Firefox 4 - 18 */
        color: #3d3d3d !important;
        opacity: 1;
    }


/* Profile styles */
.sidebar {
    position: fixed;
    z-index: 99;
    background: #fff;
    top: 99.5px;
    left: 0;
    bottom: 0;
    width: 230px;
    /* -webkit-transform: translateX(-100%);
    -moz-transform: translateX(-100%);
    -ms-transform: translateX(-100%);
    -o-transform: translateX(-100%);
    transform: translateX(-100%);
    -webkit-box-shadow: 0px 0px 4px 0px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 0px 4px 0px rgba(0, 0, 0, 0.3);
    -webkit-transition: all 0.3s cubic-bezier(0.86, 0, 0.07, 1);
    -moz-transition: all 0.3s cubic-bezier(0.86, 0, 0.07, 1);
    transition: all 0.3s cubic-bezier(0.86, 0, 0.07, 1); */
  
  
}

.user-image {
    height: 150px;
    width: 150px;
    border-radius: 50%;
    text-align: center;
    background: #5f5f5f;
    z-index: 100;
    margin: 2.4em 0 0.7em 1.2em;
}

.profile h5 {
    color: #2196f3;
    font-weight: 500;
    font-size: 22px;
    margin-bottom: 1.8em;
    margin-top: 1.2em;
    text-align: center;
}

aside.sidebar.visible {
  -webkit-transform: translateX(0);
  -moz-transform: translateX(0);
  -ms-transform: translateX(0);
  -o-transform: translateX(0);
  transform: translateX(0);
}



nav {
    display: flex;
    flex-direction: column;
    padding: 0;
    margin: 0;
    align-items: center;
}

.profile-nav a {
    border: 1px solid #2196f3;
    width: 188px;
    margin-bottom: 1.8em;
    padding: 9px 10px;
    /* font-size: 14px; */
    border-radius: 5px;
    color: #2196f3;
    text-transform: uppercase;
}

a.btn.help-btn-blue {
    color: #ffffff;
    background: #2196f3;
}

.help-blue-btn {
    color: #fff;
    background: #2196f3;
}

.help-white-btn {
    background: #fff;
    color: #2196f3;
    border: 1px solid #2196f3;

}

/*FAQ styles */

.jumbotron {
  
    background: #f4f4f4;
    text-align: center;
    color: #3D3D3D;
    border: 0;
    border-radius: 0;
    margin: 0 0 0 200px;
    margin-bottom: 0;
    padding-top:  150px;
     /* position: fixed; */
}



.faq-wrapper {
    border: 1px solid #4f4f4f;
    margin: 6em 0 3em;
    padding: 0.8em;
    border-top-right-radius: 5px;
    border-top-left-radius: 5px;
    text-align: right;

}

/* FORM styles */

 .form-wrapper {
      
        display: block;
        max-width: 50em;
        padding: 3em 1.8em 4.2em;
        margin: 0 auto;
        border: 1px solid #3d3d3d;
        border-radius: .25em;
        
    }

.form-wrapper h5 {
   
    text-align: center;
}

.answers {
    margin-bottom: 4em;
   
}

#tab2, #tab1 {
    margin: 0 !important;
    padding: 0 !important;
}

.faq-wrapper h5 {
    text-transform: uppercase;
    padding-right: 15px;
     text-align: center;
}

.faq-h5 {
    text-align: center;
    font-weight: 200;
    padding-bottom: .7em;
}

.form-wrapper textarea, .form-wrapper input[type="email"] {
    max-width: 35em;
    margin-left:auto;
    margin-right: auto;
    padding-top: 1em;
    padding-bottom: 1em;
}

.form-wrapper input[type="submit"] {
    text-transform: uppercase;
    color: #fff;
    background: #2196f3;
    padding: 15px 45px;
    border-radius: .25em;
    border: none;
    font-size: 12px;
    float: right;
}


.form-wrapper input[type="submit"]:after {
     
      display: table;
      clear: both;
   
  }

.form-control {
    border: 1px solid #5f5f5f;
    margin-bottom: 2em;
}

.tabs {
    margin-right: 0;
    padding-right: 0;
}

.tabs a {
    display: block;
    padding: 15px 27px 10px 15px;
    margin-left: 16px;
    margin-bottom: 2.8em;
    text-align: center;

}

.btn-q {
    background: #f2f2f2;
    color: #3d3d3d;
    text-align: left;
    padding-right: 2em
    border: 0;
}

.card-header h5.mb-0 i.fa.fa-chevron-down {
    margin-left: 2em;
  
}

.card {
    border: none;
    background: #f2f2f2;
    margin-right: 15px;
}

.card-header {
    background: #f2f2f2;
    /* border-color: #3d3d3d; */
}

.card-body {
    height: 330px;
    font-size: 16px;
    line-height: 1.4
}

    @media (min-width: 893px) {
    .form-wrapper input[type="submit"] {
        
        display: inline-block;
        position: relative;
        left: -142px;
       
    
    }
    }
</style>

<header class="jumbotron">
<div class="hero">
 <h1>Help Center</h1>
    <p>What Can we help you with ?</p>
    <div class="form-row">
        <div class="col-9">
            <input type="text" class="form-control" placeholder="Have a question? Ask or enter a search term here">
        </div>
        <div class="col">
            <input type="submit" value="search" class="btn ">
        </div>
    </div>
</div>
</header>  
<main class="">

    <aside class="col sidebar">
        <article class="profile">
            <!-- <img src="" alt=""> -->
            <div class="user-image"></div>
            <h5>rock_zion</h5>
        </article>
   
        <nav class="profile-nav">
            <a href="#" class="btn" >Profile</a>
            <a href="#" class="btn" >Trade</a>
            <a href="#" class="btn" >Accolade Balance</a>
            <a href="#" class="btn help-btn-blue" >Help &amp; Feedback</a>
        </nav>
    </aside>

    <section class="container">
        <div class="faq-wrapper">
            <h5>faq's</h5>
            <section>
                <div class="key">
                    <a href=""></a>
                    <a href=""></a>
                </div>
                <div class="faqs">
                    <div class="accordion">
                    
                    </div>
                </div>
            </section>
        </div>
        <div class="answers">
            <div class="row">
                <div class="col-3" id="tab1">
                    <div class="tabs">
                        <a href="#" class="help-blue-btn rounded-left">Private Key</a>
                        <a href="#" class="help-white-btn rounded-left">Accolades</a>
                    </div>
                </div>
                <div class="col" id="tab2">
                    <div id="accordion">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h5 class="mb-0">
                        <button class="btn-q btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          What is a private key?
                         <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </button>
                      </h5>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <div id="#collapseOne">
                              We do not currently issue certificates to participants but we hope to do that in the future.

                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h5 class="mb-0">
                        <button class="btn-q btn collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Is this internship program open for only Nigerians?
                         <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </button>
                      </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                      <div class="card-body">
                        No, no at all. The HNG internship program is open for residents of African countries. We believe by creating an equal opportunity, we not only create human resource value by equipping our interns with the proper technical skills, we also make them employable thereby creating an adequately skilled, qualified workforce in Africa.

                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingThree">
                      <h5 class="mb-0">
                        <button class="btn-q btn collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Do I need any prior programming experience to join?<i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </button>
                      </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                      <div class="card-body">
                        The HNG internship is open for beginners with little or no experience in design, programming or DevOps. Once you are self driven and motivated to learn, you are good to go!
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingfour">
                      <h5 class="mb-0">
                        <button  class="btn-q btn collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                          What are the basic requirements for this program?
                          <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </button>
                      </h5>
                    </div>
                    <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                      <div class="card-body">
                        These are some basic prerequisites for this program: <br><br>1. You are self driven and motivated to learn. Participation in this program requires consistently meeting the deadlines.<br><br>
                                2. You have access to a computer with broadband connection, on which you will install a professional code/text editor.<br><br>
                                3. You are willing to contribute to the success of the program, including collaborating with fellow interns. <br><br>
                        4. You approach problem solving strategically and can clearly communicate your strategy.

                      </div>
                    </div>
                  </div>
                </div>
                </div>
            </div>
        </div>
        
        <h5 class="faq-h5">We would like to here from you</h5>
        <div class="form-wrapper">
            <form action="POST">
                <input type="email" name="" id="" class="form-control" placeholder="Email Adress">
                <textarea name="" id="" cols="20" rows="5" class="form-control" placeholder="Message"></textarea>
                <input type="submit" value="Send" class=" help-btn-blue"> 
            </form>
        </div>
    </section>

</main>



<?php
include_once("footer.php");
function custom_scripts() {

       $script = "<script> 
       (function(){
      
		var toggle = jQuery('header .menu-toggle'),
			mainNav = jQuery('.sidebar');

		toggle.on('click', function () {
			toggle.toggleClass('active');
			mainNav.toggleClass('visible');

			return false;
		});

		jQuery(document).on('click', function () {
			mainNav.removeClass('visible');
			toggle.removeClass('active');
		});

		mainNav.on('click', function (e) {
			e.stopPropagation();
		});

		jQuery('header nav').css({
			'top': (jQuery('header').outerHeight())
		});

		jQuery(window).on('resize', function () {
			jQuery('header nav').css({
				'top': (jQuery('header').outerHeight())
			});
		});


   
       })();
        </script>";

        echo $script;
};
?>
