<?php
    include_once("coin_header.php");

?>
<style>
    .container{
        margin-left:4%;
    }
    .section{
        margin-top: 5%;
    }
    .section h1{
        font-size: 42px;
        font-family: "Work Sans";
    }
    .section p,
    .section a{
        font-size: 16px;
        font-family: lato;
        margin-top: 0;
        line-height: 22px;
    }
    .section a{
        /* text-decoration: none; */
        display: block;
        margin-bottom: 10px;
        color: #30C2FF;
    }
</style>
<div class="container">
    <div class="section buy">
    
        <h1>How to buy</h1>
        <h6>Step 1. Register</h6>
        <p>Register an account with HNGinternship. You get a free and secure online HNGcoin wallet. If you already have an account, skip to the next step.</p>

        <h6>Step 2. See available sellers</h6>
        <p>Go to the main page the site will list HNGcoin sellers available.</p>


        <h6>Step 3. Select a post</h6>
        <p>From the list choose  a seller. You can click the 'Buy' button to view more information about the post.</p>

        <h6>Step 4. Pay the seller</h6>
        <p> After you press the 'Buy' button you'll see more information about the post, including the terms of the trade. Read through them before submitting the trade request, if you don't agree with them you can go back to the previous page and choose another offer. 
    To start the trade, type in the box how much you want to buy, enter a message for the seller and click the ‘Buy HNGcoin’ button to the start the trade. Be sure you're ready to pay when clicking the button.</p>
    
        <h6>Step 5. Send payment proof</h6>
        <p>Once you have made the payment, send payment proof. Once the trader has verified that your payment has been received your HNGcoin will be released  and they are instantly available in your LocalBitcoins wallet. 
        And that's all there is to it, congratulations on your first HNGcoin trade!
        </p>
    </div>    

    <div class="section sell">
    <h1>How to sell</h1>
        <h6>Step 1. Register</h6>
        <p>Register an account with HNGinternship. You get a free and secure online HNGcoin wallet. To sell HNGcoin you need to have them to your HNGcoins wallet.</p>
        <h6>Step 2. See available buyers</h6>
        <p>Go to the main page the site will list HNGcoin buyers available.</p>
        <h6>Step 3. Select a post</h6>
        <p>From the list choose  a buyer. You can click the 'Sell' button to view more information about the post.</p>
        <h6>Step 4. Open a trade</h6>
        <p>After you press the Sell button you'll see more information about the offer, including the terms of the trade. Read through them before submitting the trade request and if you don't agree with them you can go back to the previous page and choose another offer. 
To start the trade, type in the box how much you want to sell, enter a message for the buyer and click the ‘Sell HNGcoin’ button to the start the trade.</p>
        <h6>Step 5. Wait for the buyer to pay</h6>
        <p>After you've sent the trade request the buyer will pay for the HNGcoins and send the payment proof to you. </p>

          <p>Please make sure that you have received the money into your account before confirming. NEVER confirm before you have received payment. HNGcoin transactions are irreversible, once you send the Bitcoins to the buyer there no way to get them back, even if the buyers payment doesn't show up.</p> 

        <p>Once you have confirmed that the payment has been made. This will send the HNGcoins to the buyer and complete the trade.</p>
    </div>
    <!-- /.SELL -->

        <div class="section support">
            <h1>Contact Support</h1>
            <h6>Please choose best alternative</h6>

            <a href="#">I want to report fraud</a>
            <a href="#"> Help with a disputed trade</a>
            <a href="#">My account is hacked</a>
            <a href="#">I am a new user</a>
            <a href="#">Report a bug</a>
            <a href="#">I can't log in to my account</a>
            <a href="#">I am not receiving my account verification email</a>
            <a href="#">I am not able to verify my phone number</a>
           
        </div>
        <!-- /.support -->
    </div>
    <!-- /.container -->
<?php
include_once("footer.php");
?>