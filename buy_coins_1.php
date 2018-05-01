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

.input-form{
    padding-top: 11%;
    padding-bottom:4.5%;
}

.label-for-form,#sellerDetails,thead>tr>th{
    font-size: 1.25em;
    color: #3d3d3d;
    line-height: 1.5em;


}

td,.footerText{
     font-size: 1.125em;
    color: #323232;
    line-height:1.250em;

}

td,.heavy-text{
  font-weight: 600;
}

#sellerDetails{
    font-weight: bold;
}

.input-for-form{

    font-size: 1.25em;
    color: #828282;
    line-height: 1.5em;

}

.table-div{
    padding-bottom: 3%;
}

.modal-content{
    padding: 1.4% 3.3%;
}

#modalHeader{
  /*font-size: 1.25em;*/
  /*font-size: 2.625em;*/
  font-size: 2em;

  

font-style: normal;
font-weight: bold;
line-height: normal;
color: #3d3d3d;
margin-bottom: 2.2%;
}


#confirmModal{

    background: rgba(196, 196, 196, 0.3) !important;
}


.visible{
    display: block;
}

.hidden{
    display: none;
}

/*#scrim{
background: rgba(0, 0, 0, 0.8);
    color: white;
    position: fixed;
    z-index: 999999999;
    top: 0;
    height: 100%;
    width: 100%;
    margin: 0px;
    /*display: none;*/
/*}*/

 /* media queries */
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
<h1 style="text-align: left;color: #3D3D3D;line-height: 1.571em; margin-top: 2.4%;margin-bottom:0%;
font-family: 'Work Sans';
font-style: normal;
font-weight: bold;
line-height: normal;
<<<<<<< HEAD
font-size: 1.429em;"> SEND PAYMENT</h1>

<p style="text-align: left;color: #3D3D3D;font-size:1.286em;line-height: 1.571em; margin: 1.4% 0%;"> You are buying 0.00118811 HNGcoins from Dammy. Please send payment per instructions below</p>
=======
font-size: 1.25em;"> SEND PAYMENT</h1>

<p class="heavy-text" style="text-align: left;color: #3D3D3D;font-size:1.125em;line-height: 1.571em; margin: 1.4% 0%;"> You are buying &nbsp;0.00118811&nbsp; HNGcoins from Dammy. Please send payment per instructions below</p>
>>>>>>> 57d006287c50ff3591b2f3b7b4002f6883426e88

<main class="container">


    <!-- Button trigger modal -->




<div class="row justify-content-md-center">
<div class="col-xs-12- col-sm-10" id="sellerDetails" style="text-align: center;background: #f2f2f2; padding: 1% 0%; margin-top:3%">Payment Details</div>
</div>

<div class="row justify-content-md-center table-div">
<table class="table table-bordered col-xs-12 col-sm-10">
     <tbody>
       <tr>
      <td class="w-50">Payment Method</th>
      <td class="w-50">Bank Transfer</th>
    </tr>

    <tr>
      <td>Amount to be paid</td>
<<<<<<< HEAD
      <td>3,395 NGN/</td>
=======
      <td>3,395 NGN</td>
>>>>>>> 57d006287c50ff3591b2f3b7b4002f6883426e88
    </tr>
    <tr>
      <td>Bank Name</td>
      <td>GT Bank</td>

    </tr>
    <tr>
      <td>Bank Account Name
      </td>
      <td>Damilola S.O</td>

    </tr>
  
    <tr>
      <td>Bank Account Number</td>
      <td>0113025549</td>

    </tr>
  </tbody>
</table>

</div>
<p class="footerText" style="text-align: center;color: #3D3D3D;"> You will recieve HNGcoin immediately after seller has confirmed your payment</p>

<div class="row justify-content-md-center">

    <hr style="margin-bottom: 5.2%; background: #f2f2f2;" class="col-10">

</div>

<div class="row justify-content-md-center justify-content-xs-center" style="padding-bottom: 3.7%;">

    <button type="button" id="buyButton" class="btn btn-primary col-xs-6 col-sm-3"  style="font-size: 1.563em;
    color:#fafafa;line-height: 1.875em;">Cancel Trade</button>
        
    </div>


   
</main>    

<h1 style="text-align: left;color: #3D3D3D;line-height: 1.571em; margin-top: 3.4%;margin-bottom:0%;
font-family: 'Work Sans';
font-style: normal;
font-weight: bold;
line-height: normal;
<<<<<<< HEAD
font-size: 1.429em;"> SEND PROOF OF PAYMENT</h1>

<p style="text-align: left;color: #3D3D3D;font-size:1.286em;line-height: 1.571em; margin: 1.4% 0%;"> You are required to submit a screenshot of successful payment transaction</p>
=======
font-size: 1.25em;"> SUBMIT PROOF OF PAYMENT</h1>

<p class="heavy-text" style="text-align: left;color: #3D3D3D;font-size:1.125em;line-height: 1.571em; margin: 1.4% 0%;"> You are required to submit a screenshot of successful payment transaction</p>
>>>>>>> 57d006287c50ff3591b2f3b7b4002f6883426e88

<div class="row justify-content-md-center justify-content-xs-center" style="padding-bottom: 3.7%;">

    <button type="button" class="btn btn-primary btn-sm col-xs-6 col-sm-3"  style="font-size: 1.563em;
    color:#fafafa;line-height: 1.875em; margin-top:4.6%;margin-bottom:6.8%">Submit Payment Proof</button>
        
    </div>

</div>


<script type="text/javascript">
    
    window.onload = function() {
   

    $('#buyButton').on('click', function () {

        setTimeout(completeTransaction, 2000);
      
    });


    
    
   $('#closeButton').on('click', function () {

       $('#checkMark').toggleClass('visible');
    $('#checkMark').toggleClass('hidden');
    $('#modalHeader').html('Confirming...');
    $('#modalFooter').toggleClass('hidden');
    $('#modalFooter').toggleClass('visible');
    });


  }


  function completeTransaction(){
    $('#checkMark').toggleClass('visible');
    $('#checkMark').toggleClass('hidden');
    $('#modalHeader').html('Transaction Complete');
    $('#modalFooter').toggleClass('hidden');
    $('#modalFooter').toggleClass('visible');


  }

</script>

<!-- Footer -->
<?php
include_once("footer.php");
?>