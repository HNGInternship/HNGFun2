<?php
include_once("header.php");
?>
<style>
    
    .img-center {
        vertical-align: middle;
        text-align: center;
        margin: 30px 0;
        padding-bottom: 30px;
        }

        img {
        width: 150px;
        height: 150px;
        }


        .dashboard {
		    background: #2196F3;
            padding: 0.7em 1em !important;
            color: white;
            border-radius: 4px;
            }

            .button:hover {
                text-decoration: none;
                background-color: #fff;
                border: 3px solid #2196f3;
            }

            .row {
                margin: 0 0 50px 0;
            }
            
        </style>

    <div class="d-flex flex-column align-items-center justify-content-center mb-5">   
        
        
            <h1 class="login-title text-center">Invite Sent!</h1>
                
            <div class="img-center"> <img src="img/Ellipse.png">
            </div>

            <div>
                <a class="button dashboard" href="#" foot>Return to Dashboard</a>
            </div>        
    </div>


        <?php
        include_once("footer.php");
        ?>
