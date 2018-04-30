<?php
include_once("header.php");
?>
<style>
    
    .img-center {
        vertical-align: middle;
        text-align: center;
        padding: 0 0 20px 0;
        }

        .acceptInvite {
            margin: 0 0 0 150px; 
		    background: #2196F3;
            padding: 0.7em 2em !important;
            color: white;
            border-radius: 4px;
            }

            a.button:hover {
                text-decoration: none;
                background-color: #fff;
                border: 3px solid #2196f3;
            }

            p {
                font-size: 0.8em !important;
            }

            .content {
                margin-bottom: 50px;
            }

            hr {
                margin-top: 50px;
            }

        </style>


        <br><br>
    <div class="container">
        <div class="img-center"> <img src="img/logo.png"> </div>

        <div class="row h-100">
        <div class="col-md-6  mx-auto">
        <h1 class="login-title text-center">You have been Invited!</h1>
        <p style="font-size: 16px" class="text-center content"><span class="text-primary">Mercy Ikpe </span>invited you to join the HNG Internship. Kindly click on the link below to accept this invitation.
        </p>
        
        <form action="">
            <a class="button acceptInvite" href="#">Accept Invitation</a>
        </form>

        <hr>

        <p class="text-center footNote">If you received this mail by mistake, kindly delete it. You won't be accepted if you do not click on the button above. </p>

        </div>
        </div>
    </div>

        <?php
        include_once("footer.php");
        ?>
