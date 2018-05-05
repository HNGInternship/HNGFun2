<?php

include_once("header.php");
function custom_styles() {
    $styles = '<style>
    body{
        background:#e5e5e5;
    }

    .form-control {
        border-radius: none !important;
    }
    footer {
        padding-bottom: 0;
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

    <div class="container jumbotron " id="contact-half">
        <div class="row" >
             <section id="contact-left" class="col-md-6  contact-form">
                <h3 class="text-left"> Send us a message</h3>
                <span class="sendmail"><img src="./img/sendemail.png" alt="sendmail"></span>
                 <form action="notifications.php" method="post" id="contact-form">
                        <div class="form-group row">
                            <div class="col">
                                <label for="name" class="col-form-label-sm">Your Name</label>
                                <input type="text" name="name" class="form-control"/>
                            </div>
                            <div class="col">
                                <label for="email" class="col-form-label-sm">Email Address</label>
                                <input type="text" name="email" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <label for="phone_number" class="col-form-label-sm">Phone Number</label>
                                <input type="text" name="phone_number" class="form-control"/>
                            </div>
                            <div class="col">
                                <label for="subject" class="col-form-label-sm">Subject</label>
                                <input type="text" name="subject" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <label for="message" class="col-form-label-sm">Message</label>
                                <textarea id="contact-message" class="form-control"  name="message" placeholder="Type your message..."></textarea>
                            </div>
                        </div>
                    <button class="send-button" type="submit"><img src="./img/send.png" alt="envelope" ></button>
                </form>
            </section>
              <!-- <section class="col-md-6"> -->
            <section id="contact-right" class="col-md-6">


                 <!-- <div class="form-group"> -->
                    <h3>Contact Information</h3>
                <!-- </div> -->
            <div class="contact-info">
                <div class="form-group">
                    <p class="contact-icon location"><img src="./img/location.png" alt="location"></p>
                    <p>3 Birrel Avenue, off Herbert Macaulay Way, Sabo, Yaba, Lagos.</p>
                </div>

                <div class="form-group">
                    <p class="contact-icon phone"><img src="./img/phone.png" alt=""></p>
                    <p>+234 700 880 8800</p>
                </div>

                <div class="form-group">
                    <p class="contact-icon mail"><img src="./img/envelope.png" alt=""></p>
                    <p>support@hng.fun</p>
                </div>
                </div>
            </section>
        </div>
    </div>

<?php
include_once("footer.php");
function custom_scripts() {
    $script = "<script>jQuery(document).ready(function($) {
  var alterClass = function() {
    var ww = document.body.clientWidth;
    if (ww > 576) {
      $('#contact-half').addClass('container-fluid');
    } else if (ww <= 577) {
      $('#contact-half').addClass('conatainer-fluid');
    };
  };
  $(window).resize(function(){
    alterClass();
  });
  //Fire it when the page first loads:
  alterClass();
  
});
    var send_success = function() {
        window.location = \"\"
    }
</script>";

echo $script;
};

if(isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $message = $_POST['message'];

    if ($email) {

        $content = "Name: $name\n";
        $content .= "Email: $name\n";
        $content .= "Message: $message\n";

        $headers = "From: webmaster@example.com\r\nReply-to: $email";
        mail('info@exmaple.com', 'Contact Form', $message, $headers);
    }
}

?>
