<?php
  //require '../db.php';
  $res = $conn->query("SELECT * FROM  interns_data WHERE username = 'Damilola' ");
  $row = $res->fetch(PDO::FETCH_BOTH);
  $name = $row['name'];
  $img = $row['image_filename'];
  $username =$row['username'];



  $res1 = $conn->query("SELECT * FROM secret_word");
  $res2 = $res1->fetch(PDO::FETCH_ASSOC);
  $secret_word = $res2['secret_word'];
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Stage 1</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abel">
   

    
    
<style>
  body{
        margin: 0;
        padding: 0;
        color: white;
        background:url(http://res.cloudinary.com/damilola/image/upload/v1524350079/bg.jpg);
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        font-family: "abel";
  } 


  #cover{
    width: 100%;
    /*background: rgba(0,0,0,.95);*/

    height: 100vh;
    text-align: center;
  }

 


  #box{
    width: 100%;
    text-align: center;
    position:;
    padding-top: 80px;

    
  }

  #box p{
    font-size: 50px
  }

  #box img{
    width: 200px;
    /*transform: rotate(360deg);*/
  }

    



</style>
</head>

<body>

    <div id="cover">
      <div id="box">
       <img src="http://res.cloudinary.com/damilola/image/upload/v1524350063/me.jpg" alt="Damilola" class="img-rounded">

        <p><?php echo $name; ?></p>
        <h4>Because i'm Batman (In Batman's voice)</h4>
        <h5>Username: @<?php echo $username; ?></h5>
        <h5>Phone: 08023975087</h5> 
        <h5>Email: dhamie.soyemi@gmail.com</h5> 
        <h5>Skills: Css,Bootstrap, Javascript, PHP</h5>
        

     </div>
    </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script type="text/javascript">
  $(function() {
    $('#box')
  .css('opacity', 0)
  .slideDown('slow')
  .animate(
    { opacity: 1 },
    { queue: false, duration: 1500 }
  );
});
</script>

</body>
</html>
