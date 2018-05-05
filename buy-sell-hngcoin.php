<?php
include_once("header.php");
?>

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- styles link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- font-awesome -->
   <!--  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <!-- custom style -->
    <style>
   
#vr{
 border-right: 1px solid #3D3D3D; 
 height: 300px;
}
/* Smartphones (portrait and landscape) ----------- */
@media only screen and (min-device-width : 320px) and (max-device-width : 941px) {
.hl{
      display: none;
      visibility: hidden;
    }
#vr{
      border-right: 0px;
    }
.search{
        width: 400px;
        
    }
      .searchform{
        width: 290px;
    
    }
    
.searchbtn{
 
  width: 113px;
 

}
  }
 
    a {
      margin: 0.5em;
      color: #000;
    }
    a:hover{
      text-decoration: none;
    }
    .hl{
      background:#3D3D3D; margin-top: -20px;
    }
    
    #p {
      font-weight: bold;
      float: left;
    }
    .breadcrumb{
      background-color: #ffffff;
      .margin-top: 10px;
    }
    .helpcont{
      width: 1143px;
      height: auto;
      left: 140px;
      top: 203px;
      background: #FFFFFF;
      box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5);
      padding: 20px;
    }
    .helpfooter{
      position: relative;
      width: 1100px;
      height: 97px;
      background: #E0E0E0;
      opacity: 0.5;
      text-align: center;  
      line-height: 1.5;
        }
    </style>
  </head>
  <body>

    <div class="container">
      <div class="row">
         <ul class="breadcrumb">
          <li><a href="index.php">Home</a></li>
          <li><i class="fa fa-angle-right"></i></li>
          <li><a href="help.php">Help</a></li>
          <li><i class="fa fa-angle-right"></i></li>
          <li><a href="buy-sell-hngcoin.php">Buying and Selling HNGCoin</a></li>
         </ul>
      </div>
        <div class="row" style="margin-left: 10px;">
          <div class="helpcont">
          <div class="panel-body">
            <h3>How to buy</h3>
            <h5>Step 1. Register</h5>
            <p>Register an account with HNGinternship. You get a free and secure online HNGcoin wallet. If you already have an account, skip to the next step.</p>

            <h5>Step 2. See available sellers</h5>
            <p>Go to the main page the site will list HNGcoin sellers available.<
            <h5>Step 3. Select a post</h5>
            <p>From the list choose  a seller. You can click the 'Buy' button to view more information about the post.</p>

            <h5>Step 4. Pay the seller</h5>
            <p>After you press the 'Buy' button you'll see more information about the post, including the terms of the trade. Read through them before submitting the trade request, if you don't agree with them you can go back to the previous page and choose another offer.</p>
            <p>To start the trade, type in the box how much you want to buy, enter a message for the seller and click the ‘Buy HNGcoin’ button to the start the trade. Be sure you're ready to pay when clicking the button.</p>

            <h5>Step 5. Send payment proof</h5>
            <p>Once you have made the payment, send payment proof. Once the trader has verified that your payment has been received your HNGcoin will be released  and they are instantly available in your LocalBitcoins wallet.</p> 
            <p>And that's all there is to it, congratulations on your first HNGcoin trade!</p>
            <br><br>
            <h3>How to sell</h3>
            <h5>Step 1. Register</h5>
            <p>Register an account with HNGinternship. You get a free and secure online HNGcoin wallet. To sell HNGcoin you need to have them to your HNGcoins wallet.</p>
            <h5>Step 2. See available buyers</h5>
            <p>Go to the main page the site will list HNGcoin buyers available.</p>
            <h5>Step 3. Select a post</h5>
            <p>From the list choose  a buyer. You can click the 'Sell' button to view more information about the post.</p>
            <h5>Step 4. Open a trade</h5>
            <p>After you press the Sell button you'll see more information about the offer, including the terms of the trade. Read through them before submitting the trade request and if you don't agree with them you can go back to the previous page and choose another offer.</p>
            <p>To start the trade, type in the box how much you want to sell, enter a message for the buyer and click the ‘Sell HNGcoin’ button to the start the trade.</p>
            <h5>Step 5. Wait for the buyer to pay</h5>
            <p>After you've sent the trade request the buyer will pay for the HNGcoins and send the payment proof to you.</p>
            <p>Please make sure that you have received the money into your account before confirming. NEVER confirm before you have received payment. HNGcoin transactions are irreversible, once you send the Bitcoins to the buyer there no way to get them back, even if the buyers payment doesn't show up. </p>
            <p>Once you have confirmed that the payment has been made. This will send the HNGcoins to the buyer and complete the trade.</p>
          </div>
          <div class="helpfooter">
            Was this answer helpful?
          </div>
        </div>
        </div>
        
      </div>
     
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

 



</body>

<?php
include_once("footer.php");
?>
