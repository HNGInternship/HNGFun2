<?php
include_once("header.php");
 function custom_styles() {
     $styles = '<style>body{background:#e5e5e5!important;}</style>';
     echo $styles;
 };
?>

 <div class="jumbotron contact bg-cover">
     <div class="overlay"></div>
      <div class="container contact">
        <h1>Get In Touch</h1>
        <p>Showing up is 80% percent of life</p>

      </div>
    </div>

    <div class="container jumbotron contact-form">
        <div class="row">
            <div class="col col-sm-7 contact-form">
                <div class="row">
                    <h3>Send us a message</h3>
                    <span>icon</span>
                </div>
                <form method="post">
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label>Your Name<label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="form-group col-md-5">
                            <label>Email Address<label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label>Phone Number<label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="form-group col-md-5">
                            <label>Subject<label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <label>Message<label>
                    </div>
                    <div class="form-row col-md-8">
                        <input type="text" class="form-control" placeholder="Type your message...">
                    </div>
                </form>
            </div>

            <div class="col col-sm-5 contact-info">
                <div class="row">
                    <h3>Contact Information</h3>
                </div>

                <div class="row">
                    <span></span>
                    <p>3 Birrel Avenue, off Herbert Macaulay Way, Sabo, Yaba, Lagos.</p>
                </div>

                <div class="row">
                    <span></span>
                    <p>+234 700 880 8800</p>
                </div>

                <div class="row">
                    <span></span>
                    <p>support@hng.fun</p>
                </div>
            </div>
        </div>
    </div>

<?php
include_once("footer.php");
?>