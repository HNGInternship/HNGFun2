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

.table {
    margin-top: 4%;
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
font-size: 1.25em;">TRANSACTION CANCELLED</h1>

<p class="heavy-text" style="text-align: left;color: #3D3D3D;font-size:1.125em;line-height: 1.571em; margin: 1.4% 0%;">Your trade of 0.11233444 with Dammy has been cancelled.</p>

<p class="heavy-text font-italic" style="text-align: left;color: #3D3D3D;font-size:1.00em;line-height: 1.571em; margin: 1.4% 0%;">Your deposit will be refunded within the next 1 hour. Please
provide proof below so that we can identify your deposit. If you do not see<br> the refund, please contact support.</p>

<main class="container">
    <div class="container">

        <!-- <h2 class="pending-transaction row justify-content-md-center justify-content-xs-center">Confirming......</h2> -->
    <div class="row justify-content-md-center justify-content-xs-center">
        <table class="table table-bordered col-xs-12 col-sm-10" style="font-size:1.125em;">
  <thead class="thead-light text-center">
    <tr>
      <th colspan="2">Payment Details</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Payment method</td>
      <td>Bank Transfer</td> 
    </tr>
    <tr>
      <td>Amount to be paid</td>
      <td>3,395NGN</td> 
    </tr>
    <tr>
      <td>Bank name</td>
      <td>Guarantee Trust Bank</td>      
    </tr>
    <tr>
      <td>Bank Account name</td>
      <td>Damilola S. O.</td>      
    </tr>
    <tr>
      <td>Bank Account number</td>
      <td>0127233993</td>      
    </tr>
  </tbody>
</table>


<p class="heavy-text pt-4 pb-3" style="text-align: left;color: #3D3D3D;font-size:1.125em;line-height: 1.571em; margin: 1.4% 0%;">You will receive HNGCoin immediately
after seller has confirmed your payment.</p>

</div>

<hr class= "col-xs-12 col-sm-10">
</main>


<h1  style="text-align: left;color: #3D3D3D;line-height: 1.571em; margin-top: 0.5%;margin-bottom:0%;
font-family: 'Work Sans';
font-style: normal;
font-weight: bold;
line-height: normal;
font-size: 1.25em;">SUBMIT PAYMENT PROOF</h1>

<p class="heavy-text pt-4 pb-3" style="text-align: left;color: #3D3D3D;font-size:1.125em;line-height: 1.571em; margin: 1.4% 0%;">You are required to submit a screenshot
of the successful payment transaction.</p>

<div class="col-md-12 text-center"> 
<button type="button" class="btn btn-primary">Submit Payment Proof</button>
</div>
</div>



<!-- Footer -->
<?php
include_once("footer.php");
?>