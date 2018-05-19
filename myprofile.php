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
 label, .dp,.row, .info, .b_info_grid,.name {border:none;}
 .dp img{
     width:300px;
     border-radius:50%;
    }
</style>
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
     <div class ="col-md-6 info">
       <div class="name col-md-12">
          <h4>Oganji Ernest Paul (Epospiky)</h4>
          <hr style="padding:20px 0px 20px 0px">
       </div>
       <div class="b_info_grid col-md-12">
          <label class="col-md-4">Email :</label> <span class= "b_infor col-md-6">exampl@gmail.com</span><br>
          <label class="col-md-4" >Gender :</label> <span class= "b_infor col-md-6 ">Male</span><br>
          <label class="col-md-4" >Country :</label> <span class= "b_infor col-md-6 ">U. S. A</span><br>
          <label class="col-md-4" >State :</label> <span class= "b_infor col-md-6 ">Boston</span><br>
          <label class="col-md-4" >City :</label> <span class= "b_infor col-md-6 ">Mars</span><br>
          <label class="col-md-4" >Phone :</label> <span class= "b_infor col-md-6">+1(415) 452 0826</span><br>
       </div>
     </div>
     </div
        
    <div>
 </div>
 </section>
    
 
<?php
   include 'footer.php';
?>
