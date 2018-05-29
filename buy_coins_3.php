<?php
include_once("coin_header.php");
?>

<style>
body{
    background: #ffffff;
    /*font-size: 14px;*/
    font-family: Lato;
}
.main-container{
  padding-right: 10%;
    padding-left: 10%;
    font-size: 14px;
}
td,.heavy-text{
    font-weight: 400;
}
main{
    margin-top: 6.9%;
    margin-bottom: 7.4%;
    /*margin-right: 10%;
    margin-left: 10%;*/
    padding-bottom: 3.1%;
 box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.25);
 
}
.pending-transaction{
    padding-top: 20%;
    padding-bottom:4.5%;
}

.check-mark{
    padding-bottom: 20%;
}

.arrow-head{
    padding-left: 7%;
}







/*******************************************/
    @media(min-width: 360px) { 
        #checkMark {
            left:10%;        } 
    }
  
</style>


<!-- <div class="container-fluid">
<section id="scrim">
    <p>ertghe</p>
</section> -->

<div class="main-container">

<div style="margin-top: 6.5%;display:flex">

<div id="crumb1" class="crumbs"  style="position: relative; margin-right: -0.45%;margin-left: 0%;width: 25%;color: white">
<img style="width: 100%" src="img/blue_1_bar.svg" alt="first arrow">
<span style="position:absolute;top:30%;left: 50%;font-size: 1.253em">1</span>

  
</div>

<div id="crumb2" class="crumbs" style="position: relative; margin-right: -0.45%;margin-left: 0%;width: 25%;color: white">
<img  style="width: 100%" src="img/blue_1_bar.svg" alt="first arrow">
<span style="position:absolute;top:30%;left: 50%;font-size: 1.253em">2</span>

<img style="width: 20%;height: 100%;position: absolute;top: 0%;left: -2%;padding-left: 0%;" src="img/blue_1_arrow.svg" alt="first arrow">

  
</div>

<div id="crumb3" class="crumbs" style="position: relative; margin-right: -0.45%;margin-left: 0%;width: 25%;color: white">
<img style="width: 100%" src="img/blue_1_bar.svg" alt="first arrow">
<span style="position:absolute;top:30%;left: 50%;font-size: 1.253em">3</span>

<img style="width: 20%;height: 100%;position: absolute;top: 0%;left: -2%;padding-left: 0%;" src="img/blue_1_arrow.svg" alt="first arrow">


  
</div>

 <div id="crumb4" class="crumbs" style="position: relative; margin-right: 0%;margin-left: 0%;width: 25%;color: white">
<img style="width: 100%" src="img/blue_2_bar.svg" alt="first arrow">
<span style="position:absolute;top:30%;left: 50%;font-size: 1.253em">4</span>
<a href="buy_coins_3.php"></a>

<img style="width: 20%;height: 100%;position: absolute;top: 0%;left: -2%;padding-left: 0%;" src="img/blue_1_arrow.svg" alt="first arrow">

</div>
</div>

<h1  style="text-align: left;color: #3D3D3D;line-height: 1.571em; margin-top: 2.4%;margin-bottom:0%;
font-family: 'Work Sans';
font-style: normal;
font-weight: bold;
line-height: normal;
font-size: 1.25em;">TRANSACTION PENDING</h1>

<p class="heavy-text" style="text-align: left;color: #3D3D3D;font-size:1.125em;line-height: 1.571em; margin: 1.4% 0%;"> Seller needs to confirm your payment before the transaction is completed.</p>


<main class="container">
    <div class="container">

        <h2 class="pending-transaction row justify-content-md-center justify-content-xs-center">Confirming......</h2>





<div class="row justify-content-md-center check-mark">

    <p>You will receive HNGCoin immediately seller has confirmed your payment.</p>

</div>




</main>
</div>



<!-- Footer -->
<?php
include_once("footer.php");
?>