<?php
include_once("header.php");
function custom_styles() {
    $styles = '<style>
    body{
        background:#e5e5e5!important;
    }
    #contact-message{ 
        width: 68%;
        border: 0;
        border-bottom: 1px solid #bdbdbd;
        display: block;
    }
    .form-control {
        border-radius: none !important;
    }
    </style>';
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

    <div class="container jumbotron contact-form" id="contact-half">
        <div class="row" style="height: 100%">
            <div class="col col-sm-7 contact-form">
                <!-- <section class="row"> -->
                    <h3 class="text-left"> Send us a message</h3>
                    <span></span> <!-- for the envelope icon on the right -->
                
                <form method="post">
                        <div class="form-group row">
                            <div class="col-5">
                                <label for="name" class="col-form-label-sm">Your Name</label>
                                <input type="text" name="name" class="form-control"/>
                            </div>
                            <div class="col-5">
                                <label for="email" class="col-form-label-sm">Email Address</label>
                                <input type="text" name="email" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-5">
                                <label for="phone_number" class="col-form-label-sm">Phone Number</label>
                                <input type="text" name="phone_number" class="form-control"/>
                            </div>
                            <div class="col-5">
                                <label for="subject" class="col-form-label-sm">Subject</label>
                                <input type="text" name="subject" class="form-control" />
                            </div>
                        </div>
                  
                    <div class="form-group row">
                        <!-- <div class="col-8"> -->
                              <label for="message" class="col-form-label-sm" style="display: inline-block;">Message</label>
                            <textarea id="contact-message" class="form-control" name="message" row="7" col="7" placeholder="Type your message..."></textarea>
                        <!-- </div> -->
                    </div>
                </form>
            <!-- </section> -->
            </div>

            <div class="col col-sm-3 contact-info">
                <div class="row">
                    <h3>Contact Information</h3>
                </div>

                <div class="row">
                    <span class="contact-icon location"><img src="./img/location.png" alt="location"></span><!-- for address icon -->
                    <p>3 Birrel Avenue, off Herbert Macaulay Way, Sabo, Yaba, Lagos.</p>
                </div>

                <div class="row">
                    <span class="contact-icon phone"><img src="./img/phone.png" alt=""></span><!-- for phone icon -->
                    <p>+234 700 880 8800</p>
                </div>

                <div class="row">
                    <span class="contact-icon mail"><img src="./img/envelope.png" alt=""></span><!-- for email icon -->
                    <p>support@hng.fun</p>
                </div>
                  <div class="social-media">
                    <i class="fa fa-twitter"></i>
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-github"></i>
                </div>
            </div>
        </div>
    </div>

<?php
include_once("footer.php");
?>
