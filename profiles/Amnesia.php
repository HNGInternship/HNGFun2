<!DOCTYPE html>
<html lang="en">
  <!-- head here  -->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>HNG FUN</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


      <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>


    <!-- Custom styles for this template -->
      <link href="css/style2.css" rel="stylesheet">
      <link href="css/style1.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <link href="css/learn.css" rel="stylesheet">
<!--    <link href="css/carousel.css" rel="stylesheet">-->
      <link href="css/landing-page.min.css" rel="stylesheet">

    <style>
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      max-width: 300px;
      margin: auto;
      text-align: center;
      font-family: Ebrima;
      margin-top: 70px;
    }

    .title {
      color: grey;
      font-size: 18px;
    }

    button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 8px;
      color: white;
      background-color: #007BFF;
      text-align: center;
      cursor: pointer;
      width: 100%;
      font-size: 18px;
    }
    h6{ 
      text-align:center;
     font-family: Ebrima;

    }

    a.intern-link {
      text-decoration: none;
      font-size: 22px;
      color: black;
    }

    button:hover, a:hover {
      opacity: 0.7;
    }

    .mt{ margin-top: 20px; }
    </style>

</head>
<body>

  <div class="card">
   <img src="http://res.cloudinary.com/kaysy123/image/upload/v1523968386/IMG-20160626-WA0014.jpg" alt="picture" style="width:100%">
    <h3 class="mt">Bassey Kingsley</h3>
    <h6> Designer</h6>
    <h6 style="color: #007BFF"> slack username: amnesia</h6>
    <p><button><a href="www.hngfun/amnesia.php" class="intern-link"></a>  HNG 4.0 Intern</button></p>
  </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/hng.min.js"></script>

    <?php
   try {
       $sql = 'SELECT * FROM secret_word';
       $q = $conn->query($sql);
       $q->setFetchMode(PDO::FETCH_ASSOC);
       $data = $q->fetch();
   } catch (PDOException $e) {
       throw $e;
   }
   $secret_word = $data['secret_word'];
   ?>

  </body>