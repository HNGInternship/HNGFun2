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

    <div class="container jumbotron contact-form" style="padding: 0">
        <div class="row">
            <div class="col col-sm-7 contact-form">
                <div class="row">
                    <h3 style="text-align: center"> Send us a message</h3>
                    <span></span> <!-- for the envelope icon on the right -->
                </div>
                <form method="post">
                    <span style="text-align: center">
                      <div class="form-row">
                        <div class="form-group col-md-5">
                            <label>Your Name<label>
                                    <input type="text">
                        </div>

                        <div class="form-group col-md-5">
                            <label>Email Address<label>
                                    <input type="text">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label>Phone Number<label>
                                    <input type="text">
                        </div>

                        <div class="form-group col-md-5">
                            <label>Subject<label>
                                    <input type="text">
                        </div>
                    </div>
                    <div class="form-row">
                        <label>Message<label>
                    </div>
                    </span>
                    <div class="form-row col-md-8">
                      <span style="text-align: center">
                        <input type="text" placeholder="Type your message...">
                    </span></div>
                </form>
            </div>

            <div class="col col-sm-5 contact-info" style ="background: #2196F3;color: white">
                <div class="row">
                    <h3>Contact Information</h3>
                </div>

                <div class="row">
                    <span></span><!-- for address icon -->
                    <p>3 Birrel Avenue, off Herbert Macaulay Way, Sabo, Yaba, Lagos.</p>
                </div>

                <div class="row">
                    <span></span><!-- for phone icon -->
                    <p>+234 700 880 8800</p>
                </div>

                <div class="row">
                    <span></span><!-- for email icon -->
                    <p>support@hng.fun</p>
                </div>
            </div>
        </div>
    </div>

<?php
include_once("footer.php");
?>
