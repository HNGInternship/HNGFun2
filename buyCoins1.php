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
main{
    /*margin-bottom: 7.4%;*/
    /*margin-right: 10%;
    margin-left: 10%;*/
    padding-bottom: 3.1%;
 box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.25);
 
}
thead>tr>th{
    font-size: 1.25em;
    color: #3d3d3d;
    line-height: 1.5em;
}
td,.footerText{
     font-size: 1.125em;
    color: #323232;
    line-height:1.250em;
}
.heavy-text{
  font-weight: 600;
}
input{
    font-size: 1.25em;
    color: #828282;
    line-height: 1.5em;
    height:60px;
    
    
}
#sellerDetails{
    font-weight: bold;
    font-size:16px;
}

.table-div{
    padding-bottom: 3%;

}

form{
    padding:5px;
}
</style>




<div class="main-container">

<div style="margin-top: 6.5%;display:flex">

<div id="crumb1" class="crumbs"  style="position: relative; margin-right: -0.45%;margin-left: 0%;width: 25%;color: white">
<img style="width: 100%" src="img/blue_1_bar.svg" alt="first arrow">
<span style="position:absolute;top:30%;left: 50%;font-size: 1.253em">1</span>

  
</div>

<div id="crumb2" class="crumbs" style="position: relative; margin-right: -0.45%;margin-left: 0%;width: 25%;color: white">
<img  style="width: 100%" src="img/blue_2_bar.svg" alt="first arrow">
<span style="position:absolute;top:30%;left: 50%;font-size: 1.253em">2</span>

<img style="width: 20%;height: 100%;position: absolute;top: 0%;left: -2%;padding-left: 0%;" src="img/blue_1_arrow.svg" alt="first arrow">

  
</div>

<div id="crumb3" class="crumbs" style="position: relative; margin-right: -0.45%;margin-left: 0%;width: 25%;color: white">
<img style="width: 100%" src="img/blue_2_bar.svg" alt="first arrow">
<span style="position:absolute;top:30%;left: 50%;font-size: 1.253em">3</span>

  
</div>

 <div id="crumb4" class="crumbs" style="position: relative; margin-right: 0%;margin-left: 0%;width: 25%;color: white">
<img style="width: 100%" src="img/blue_2_bar.svg" alt="first arrow">
<span style="position:absolute;top:30%;left: 50%;font-size: 1.253em">4</span>

<img style="width: 20%;height: 100%;position: absolute;top: 0%;left: -2%;padding-left: 0%;" src="img/blue_2_arrow.svg" alt="first arrow">


</div>
</div>

<h1  style="text-align: left;color: #3D3D3D;line-height: 1.571em; margin-top: 2.4%;margin-bottom:0%;
font-family: 'Work Sans';
font-style: normal;
font-weight: bold;
line-height: normal;
font-size: 1.25em;">INPUT DETAILS</h1>

<p class="heavy-text" style="text-align: left;color: #3D3D3D;font-size:1.125em;line-height: 1.571em; margin: 1.4% 0%;"> 
Please input the necessary details and cross check before processing.</p>

<main class="container">
    <div class="container">
    <form>
    <div class="row justify-content-md-center justify-content-xs-center" style="padding:5%;">

  <div class="form-row col-md-11 ">
    <div class="form-group col-md-6">
      <label for="inputAmount" style="font-size:18px;">Amount of HNGcoin:*</label>
      <input type="text" class="form-control col-md-10" id="inputAmount" placeholder="0.0118811">
    </div>
    <div class="form-group col-md-6">
      <label for="inputname" style="font-size:18px;">ReceiveHNGCoin to:*</label>
      <input type="text" class="form-control col-md-10" id="inputReceive" placeholder="Your HNGCoin Wallet">
    </div>
  </div>

  </form>
<button type="button" id="buyButton" class="btn btn-primary col-xs-6 col-sm-3"  style="font-size: 1.563em;
color:#fafafa;line-height: 1.875em;  margin-top:3%;">Buy HNGcoin </button>
    
</div>
<hr style="margin-bottom: 5.2%; background: #f2f2f2;" class="col-10">

      

<div class="row justify-content-md-center">
<div class="col-xs-12- col-sm-10" id="sellerDetails" style="text-align: center;background: #f2f2f2; padding: 1% 0%; margin-top:3%">Seller Details</div>
</div>

<div class="row justify-content-md-center table-div">
<table class="table table-bordered col-xs-12 col-sm-10">
     <tbody>
       <tr>
      <td class="w-50"><strong>Buying From</strong></th>
      <td class="w-50"><strong>Dammy</strong></th>
    </tr>

    <tr>
      <td>Price</td>
      <td>3,395,925 NGN/HNGcoin</td>
    </tr>
    <tr>
      <td>Payment method</td>
      <td>Bank transfer: GT Bank</td>

    </tr>
    <tr>
      <td>Location</td>
      <td>Nigeria</td>

    </tr>
  
    <tr>
      <td>Payment window</td>
      <td>15 minutes</td>

    </tr>
  </tbody>
</table>

</div>
<p class="footerText" style="text-align: center;color: #3D3D3D;"> You will recieve HNGcoin immediately after seller has confirmed your payment</p>



</main>
</div>



<!-- Footer -->
<?php
include_once("footer.php");
?>