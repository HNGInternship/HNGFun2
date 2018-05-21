<?php
include_once("dashboard-header.php");
?>
<head>
<style>
 .box{
        box-shadow: 2px 0px 2px 1px #888888;
        text-align: center;
        border: 4px solid #FFFFFF;
        background-color: #FFFFFF;
        margin-top:5%;
        font-family: 'Lato', sans-serif;
        
    }
    .head, spa{
        color:#2196F3;
    }
    .pro{
        border-radius:50%;
        height:40px;
        width:40px;
    }
    .btn{
        width:150px;
    }
    .noun{
        height:90px;
        width:70px;
        padding-top:20px;
    
    
 }
 table, tr, td{padding:0px;}
 .dp,.row, .info, .b_info_grid,.name {border:none;}
 .dp img{
     width:100%;
     border-radius:50%;
    }
 .l-col{
      color:#888888;
     }
 .b_infor {font-weight:bold;}
 .b_info_grid table,tr,td{
            border:2px solid white;
            text-align:left;
            padding:0px; margin:0px;}
 .name, .b_info_grid{margin:0px; padding-top:0px; padding-bottom:0px;}
</style>
 <title>HNG FUN Profile</title>
</head>
 <body>
   
 <!-- wallet board -->
 <section id="board">
 <div class="container">
    <div class="box">
        <h1><spa>PROFILE INFORMATION</spa> </h1>
     <div class="row">
     <div class ="col-md-4 dp">
     <img src="http://res.cloudinary.com/epospiky/image/upload/v1523739075/epo.png" alt="epospiky" class="img-responsive"/>
      </div>
      <div class="clearfix"></div>
     <div class ="col-md-7 info">
       <div class="name col-md-12">
          <h4 style ="text-align:left">Oganji Ernest Paul (Epospiky)</h4>
          <p style="color:#888888; margin:0px; text-align:left; font-size:12px; padding:0px" >Boston, Massachusetts</p>
          <hr style="padding:5px 0px 5px 0px;  color:#888">
       </div>
       <div class="b_info_grid col-md-12">
        <table >
          <tr ><td class="l-col col-md-4">Email </td><td class= "b_infor col-md-6">example@gmail.com</td></tr>
          <tr ><td class="l-col col-md-4"> Gender </td><td class= "b_infor col-md-6 ">Male</td></tr>
          <tr ><td class="l-col col-md-4"> Country </td><td class= "b_infor col-md-6 ">U. S. A</td></tr>
          <tr ><td class="l-col col-md-4"> State </td> <td class= "b_infor col-md-6 ">Massachusetts</td></tr>
          <tr  ><td class="l-col col-md-4"> City </td><td class= "b_infor col-md-6 ">Boston</td></tr>
          <tr ><td class="l-col col-md-4"> Phone </td> <td class= "b_infor col-md-6">+1(415) 452 0826</td></tr>
         </table>
         </div>
     </div>
     </div
        
    <div>
 </div>
 </section>
    
 
<?php
   include 'footer.php';
?>
