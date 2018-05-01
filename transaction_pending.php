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

    margin-bottom: 7.4%;
    margin-top: 7%;
    /*margin-right: 10%;
    margin-left: 10%;*/
    /*padding: 20% 0%;*/
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
font-size: 1.25em;"> TRANSACTION PENDING</h1>

<p class="heavy-text" style="text-align: left;color: #3D3D3D;font-size:1.125em;line-height: 1.571em; margin: 1.4% 0%;"> Seller needs to confirm your payment before the transaction is completed.</p>

<main class="container">


    <!-- Button trigger modal -->




<div class="row justify-content-md-center">

<h2 style="text-align: left;color: #3D3D3D;line-height: 1.571em; margin-top: 14.5%;margin-bottom:4.9%;
font-style: normal;
line-height: normal;
font-size: 2.4em;"> Confirming...</h2>

</div>

<div class="row justify-content-md-center">
  
  <p  style="text-align: left;color: #3D3D3D;font-size:1.125em;line-height: 1.571em; margin-bottom:18.7%;margin-top: 0%"> You will recieve HNGcoin immediately after seller has confirmed your payment.</p>

</div>
   
</main>    



</div>


<!-- Footer -->
<?php
include_once("footer.php");
?>