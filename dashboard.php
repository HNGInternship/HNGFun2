<?php
session_start();
$_SESSION["user_id"];
require_once('db.php');
include_once("dashboard-header.php");
?>
<head>
    <style>
        section.content {
            padding: 40px 10px;
            text-align: center;
        }
        .header-text {
            font-weight: bolder;
            font-size: 3em;
            text-transform: uppercase;
            font-family: "Work Sans", sans-serif;
            margin-bottom: 5px;
        }
        .header-text-2x {
            font-size: 1.5em;
            position: relative;
            margin: 0;
            top: -40px;
            background-color: #bdbdbd;
            display: inline-block;
            color: #fff;
            padding: 5px 15px;
            border-radius: 60%;
        }
        .hd-1 {
            position: relative;
            right: -20px;
        }
    </style>
</head>
<body>
<div class="container">
    <section class="content">
        <div class="row text-center">
            <div class="col-xs-12 col-sm-12">
                <h2>Get Prepared</h2>
                <h1 class="header-text">HNG Internship</h1>
                <h1 class="header-text header-text-2x">5</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-3 col-xs-offset-3">
                <p>
                    Cobaltums sunt mensas de albus zeta. Ubi est rusticus particula?
                    Paluss resistere in antenna! Ubi est mirabilis animalis?
                    Vae, lotus calcaria! Cum resistentia favere, omnes lunaes quaestio azureus, noster rectores.
                </p>
            </div>
        </div>
    </section>
</div>

<?php
include_once("footer.php");
?>
