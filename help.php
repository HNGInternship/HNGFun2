<?php
include_once("header.php");
?>

<style>
    body {
        /* background-color: firebrick; */
        font-family: 'Fruktur';
    }

    .whole-background {
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .container-fluid {
        padding: 20px;
        color: #fff;
    }

    .header-font-one {
        font-size: large;
        font-family: "serif";
        color: white;
    }

    .header-font-one h2{
        padding-top: 38px;
        color: #ffffff;
    }

    .form-control {
        
        border-color: #48BBFC;
        color: #48BBFC;
        text-align: center;
        margin: 0 auto;
        padding: .9rem 0;
        font-size: 16px;
    }


    .search-container > form {
        margin-top: 1em;
        margin-bottom: 3em;
    }

    .header-font-two {
        font-size: small;
        font-family: "Apple Color Emoji";
        text-align: center;

    }

    .search-container {
        height: 165px;
        width: 100%;
        justify-content: center;
    }

    #help-search{
        width: 47%;
    }

    .header-container {
        height: 200px;
        width: 100%;
        background-color: #3fb3fa;
        justify-content: center;
    }

    .faq-container {
        background: #2196F3;
        padding-left: 2.7em;
        padding-right: 2em;
        margin-bottom: 2em;
    }

    .faq-container .col.text-left > h2 {
        color: #ffffff;
        padding-left: 18px;
    }

    .card {
        background: #2196F3;
        border: none;
        border-radius: 0;

    }

    .card-header{
        background-color: #2196F3;
        color: #ffffff;
        border: none;
    }

    .card-header button {
        color: #ffffff;
        text-transform: none;
    }

    .btn {
        padding: 0;
    }

    i.fa.fa-chevron-down {
        color: #ffffff !important;
        padding-left: 22px;
    }

    .contact-container {
        text-align: center;
    }

    .contact-container > h4{
        color: #2196F3;
        
    }
    

    .faq-container img {
     
        padding-left: 30px;
        display: inline-block;
        margin-right: 5em;
    }

    button.btn.btn-link {
        font-weight: 300;
        font-size: .9em;
    }

    .form-wrapper {
       display: inline-block;
       width: 30em;
        padding: 1.8em;
        padding-top: 4em;
        margin: 0;
        border: 1px solid #48BBFC;
        border-radius: .25em;
        text-align: left;
    }

    .form-wrapper  label {
        text-align: left;
         color: #5F5F5F;
         font-size: 0.9em;
    }

    input[type="email"] {
        margin-bottom: 2em;
    }

    button.btn.btn-lg {
        margin: 0;
        display: inline-block;
        margin-top: 1.2em;
        color: #ffffff;
        background: #2196F3;
        padding: .35em 1.75em;
        border-radius: .25em;
        text-align: right;
        font-weight: 300;

    }

   


</style>
<main>
    <div>

        <section class="header-container text-center">
            <div class="header-font-one">
                <h2>Help Lab</h2>
                <p>What Can we help you with</p>
            </div>
        <sectionv>

    </div>
    <section class="container-fluid search-container">
          <form action="">
            <input id="help-search" type="text" placeholder="...Search for a problem" class="form-control">
        </form>
    </section>
    <section class="container-fluid faq-container">
        <div class="row">
            <div class="col text-left">
                <h2 class="text-left">FAQ</h2>
                <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          How do I change my password ? <i class="fa fa-chevron-down" aria-hidden="true"></i>
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          How do I transfer my Accolade ? <i class="fa fa-chevron-down" aria-hidden="true"></i>
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Why do I need a private key ? <i class="fa fa-chevron-down" aria-hidden="true"></i>
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>
            </div>
            <div class="col text-right">
                <img src="img/conversation(1).png" alt="speech bubbles">
            </div>
        </div>
    </section>
    <section class="container-fluid  contact-container">
        <h4>We would like to hear from you</h4>
        <div class="form-wrapper">
            <form action="">
                <label class="text-left" for="email">Email address</label>
                <input type="email" name="email" class="form-control">

                <label class="text-left" for="email">Description</label>
                <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                <button id="#help-send" class="btn btn-lg">send</button>
            </form>
        </div>
     
    </section>

</main>


<?php
include_once("footer.php");
?>
