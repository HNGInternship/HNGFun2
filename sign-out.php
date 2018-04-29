<?php
include_once("header.php");
?>

<style>
    body {
        background-image: url('./images/bg.jpg');
    }
    h1 {
        font-size: 70px;
        margin-right: 300px;
    }
    .msg {
        font-size: 30px;
    }
    .navbar {
        background-color: #E5E5E5;
        text-align: center;
    }
    
    .btn-primary {
        margin-left: -10px;
        background-color: #2196F3;
        border-color: #2196F3;
    }
    
    .btn-primary:hover,
    .btn-primary:active,
    .btn-primary:visited,
    .btn-primary:focus {
        background-color: #0475CE !important;
    }
</style>

<div id='signout' class='container'>
    <div class='row' style="padding-top: 60px">
        <div class='col-md-9'>
            <div class="row">
                <div style="color: #3D3D3D">
                    <h1><strong>YOU ARE NOW SIGNED OUT</strong></h1>
                    <p class="msg">We hope to see you real soon</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4 col-sm-4">
                    <a href="login.php">
                        <button class="btn btn-primary w-100 rounded py-2">Login</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once("footer.php");
?>
