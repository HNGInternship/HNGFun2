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
    width: 200px;
  
  
}

.profile h5 {
    color: #2196f3;
    font-weight: 500;
}

#navbar-fixed {
    position: fixed;
    left: 0;
    right: 0;
    z-index: 999;
}

nav {
    display: flex;
    flex-direction: column;
    padding: 0;
    margin: 0;
}

.profile-nav a {
    border: 1px solid #2196f3;
    width: 140px;
    margin-bottom: 2em;
    padding: 9px 10px;
    font-size: 10px;
    border-radius: 5px;
    color: #2196f3;
}

#blue-btn {
    color: #fff;
    background: #2196f3;
}

/*FAQ styles */

.jumbotron {
  
    background: #f2f2f2;
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
        max-width: 30em;
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

h5 {
    text-align: center;
    font-weight: 200;
    padding-bottom: .7em;
}


.form-wrapper {
    padding-right: 5em;
    padding-left: 5em;
}

.form-wrapper input[type="submit"] {
    text-transform: uppercase;
    color: #fff;
    background: #2196f3;
    padding: 15px 45px;
    border-radius: .25em;
    border: none;
    font-size: 12px;
     text-align: right !important;
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
    display: inline-block;
    padding: 5px 28px 5px 7px
}

.card {
    border: none;
    background: #f2f2f2;
}

    @media (max-width: 670px) {
  
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
            <img src="" alt="">
            <h5>rock_zion</h5>
        </article>
   
        <nav class="profile-nav">
            <a href="#" class="btn" >Profile</a>
            <a href="#" class="btn" >Trade</a>
            <a href="#" class="btn" >Accolade Balance</a>
            <a href="#" id="blue-btn" class="btn " >Help &mp; Feedback</a>
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
                <div class="col-2" id="tab1">
                <div class="tabs">
                    <a href="#" class="btn-blue">Private Key</a>
                    <a href="#" class="btn">Accolades</a>
                </div>
                  
                </div>
                <div class="col" id="tab2">
                <div class="card">
                    <div class="card-header">What is a private key</div>
                    <div class="card-body"></div>
                </div>
                </div>
            </div>
        </div>
        
        <h5>We would like to here from you</h5>
        <div class="form-wrapper">
            <form action="POST">
                <input type="email" name="" id="" class="form-control" placeholder="Email Adress">
                <textarea name="" id="" cols="20" rows="5" class="form-control" placeholder="Message"></textarea>
                <input type="submit" value="Send" class=" btn-blue"> 
            </form>
        </div>
    </section>

</main>



<?php
include_once("footer.php");
function custom_scripts() {

       $script = "<script> 
       (function(){
      
   
       })();
        </script>";

        echo $script;
};
?>
