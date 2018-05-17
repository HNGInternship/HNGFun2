<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Profie | Sampam</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <?php

    try {
    $sql = "SELECT * FROM secret_word";
    $q = $conn->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
    $data = $q->fetch();
    $secret_word = $data['secret_word'];
    } catch (PDOException $e) {

        throw $e;
    }


?>


   <?php

                try {
                $sql = "SELECT * FROM interns_data WHERE username= 'Oluwapelumi' ";
                $q = $conn->query($sql);
                $q->setFetchMode(PDO::FETCH_ASSOC);
                $data = $q->fetch();
                $name = $data['name'];
                $username = $data['username'];
                $image_file = $data['image_filename'];
                } catch (PDOException $e) {

                    throw $e;
                }


            ?>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <style>

  }
  body{
      font-family: "Serif"
  }
  #full-background {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 70px;
        }

  #profile{
      color: black;
      align-content:center;
      font-family: Helvetica;
     }
    </style>
    </head>

    <body background="http://res.cloudinary.com/sampam/image/upload/v1523739894/sadd.jpg">

    <div id= "full-background">
        <div id = 'profile'>    
            <div id = 'text center'>
            
            <h1>Hey there, I'm Kayode Samuel Bunmi</h1>
            <h1>A software Engineering newbie. I tweet at <a href="https://twitter.com/Prof_sampam">@Prof_sampam</a></h1>
            <img src="http://res.cloudinary.com/sampam/image/upload/v1523744814/IMG_20180130_155108.jpg" alt="Sampam with the sauce"
            height= "240px" width="240px">
            </div>
        </div>
    </div>
    </body>
    </html>

