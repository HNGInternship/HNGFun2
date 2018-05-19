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
     <img src="" alt=""/>
      </div>
     <div class ="col-md-6 info">
       <div class="col-md-12">
          <h4>Name</h4>
          <hr>
       </div>
       <div class="col-md-12">
          <label>Email :</label> <span class= "b_infor"></span><br>
          <label>Gender :</label> <span class= "b_infor"></span><br>
          <label>Country :</label> <span class= "b_infor"></span><br>
          <label>State :</label> <span class= "b_infor"></span><br>
          <label>City :</label> <span class= "b_infor"></span><br>
          <label>Phone :</label> <span class= "b_infor"></span><br>
       </div>
     </div>
     </div
        
    <div>
 </div>
 </section>
    
 
<?php
   include 'footer.php';
?>
