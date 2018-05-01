<?php

include_once("coin_header.php");
include_once("db.php");

if(!isset($_GET['request_id'])){
    echo "<script>alert('Request ID required');</script>";
}
$request_id = $_GET['request_id'];

$sql = "select sell_requests.id, amount, trade_limit, price_per_coin, status, sell_requests.created_at, concat(interns_data.first_name, ' ', interns_data.last_name) as full_name, image_filename from sell_requests inner join interns_data on sell_requests.intern_id=interns_data.id where sell_requests.id = :request_id";
$stmt = $db->prepare($sql);
$stmt->bindParam(':request_id', $request_id);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();
$sell_request = $stmt->fetch();

?>

<style>

body{

    background: #ffffff;
    /*font-size: 14px;*/
    font-family: Lato;


}

main{

    margin-top: 6.9%;
    margin-bottom: 7.4%;
    margin-right: 10%;
    margin-left: 10%;
    padding-bottom: 3.1%;
 box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.25);
    font-size: 14px;
 
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

td{

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
    padding-bottom: 5.5%;
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

<main class="container">
    <div class="container">

        <form class="row justify-content-md-center justify-content-xs-center input-form">   

  <div class="form-group col-xs-12 col-sm-5">
    <label class="label-for-form" for="coinAmount" >Amount of HNGcoin :*</label>
    <input type="number" class="form-control form-control-lg input-for-form" id="coinAmount" placeholder="0.00118811">
  </div>
  <div class="form-group col-xs-12 col-sm-5">
    <label class="label-for-form" for="wallet">Send HNGcoin to :*</label>
    <input type="text" class="form-control form-control-lg input-for-form" id="wallet" placeholder="Your HNGcoin Wallet">
  </div>
</form>

    <!-- Button trigger modal -->


<div class="row justify-content-md-center justify-content-xs-center" style="padding-bottom: 3.7%;">

    <button type="button" id="buyButton" class="btn btn-primary col-xs-6 col-sm-3" data-toggle="modal" data-target="#confirmModal" data-backdrop="static" data-keyboard="false" style="font-size: 1.563em;
    color:#fafafa;line-height: 1.875em;">BUY HNGcoin</button>
        
    </div>


<!-- Modal -->
<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <p  id="closeButton" style="text-align: right;margin-bottom: 0%;opacity: 1; padding-right: 5%" class="close" data-dismiss="modal" aria-label="Close">
          <img src="img/icons/cancel_icon.svg" style="border: 1.5px solid #EB5757;padding: 1%;border-radius: 50%">
        </p>
      <div class="modal-body">
        <h4 style="text-align: center;" id="modalHeader">Confirming ...</h4>
      </div>
<p class="footerText visible" id="modalFooter" style="text-align: center;color: #3D3D3D; margin-top: 0%;"> You will recieve HNGcoin immediately after seller has confirmed your payment</p>

<div id="checkMark" class="hidden" style="background: #2196F3 ; position: relative; width: 150px;height: 150px;border-radius: 50%;left:35%;margin-bottom: 1.4%;">
    <img src="img/icons/check_icon.svg" style="position: absolute;top:25%;left: 23%">
</div>
      
    </div>
  </div>
</div>

<!-- Modal -->


<div class="row justify-content-md-center">

    <hr style="margin-bottom: 5.2%; background: #f2f2f2;" class="col-10">

</div>
<div class="row justify-content-md-center">
<div class="col-xs-12- col-sm-10" id="sellerDetails" style="text-align: center;background: #f2f2f2; padding: 1% 0%; ">Seller Details</div>
</div>

<div class="row justify-content-md-center table-div">
<table class="table table-bordered col-xs-12 col-sm-10">
  <thead>
    <tr>
      <th scope="col">Buying From</th>
      <th scope="col"><?php echo $sell_request['full_name']; ?></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Price</td>
      <td><?php echo $sell_request['price_per_coin']; ?> NGN/HNGcoin</td>
    </tr>
    <tr>
      <td>Payment Method</td>
      <td>Bank transfer: GT Bank</td>

    </tr>
    <tr>
      <td>Location
      </td>
      <td>Nigeria</td>

    </tr>
  
    <tr>
      <td>Payment Window</td>
      <td>15 minutes</td>

    </tr>
  </tbody>
</table>

</div>

<p class="footerText" style="text-align: center;color: #3D3D3D;"> You will recieve HNGcoin immediately after seller has confirmed your payment</p>
   
</main>    
<!-- </div> -->

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