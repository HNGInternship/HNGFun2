<?php
include_once("header.php");
// require_once('db.php');
$header="";
$message="";
if(!defined('DB_USER')){
            require "../config.php";
            // define('DB_USER', "root"); // db user
// define('DB_PASSWORD', "root"); // db password (mention your db password here)
// define('DB_DATABASE', "hng_fun"); // database name
// define('DB_HOST', "localhost"); // db server     
            try {
                $conn = new PDO("mysql:host=". DB_HOST. ";dbname=". DB_DATABASE , DB_USER, DB_PASSWORD);
            } catch (PDOException $pe) {
                die("Could not connect to the database " . DB_DATABASE . ": " . $pe->getMessage());
            }
        }


 try {
        $sql = "SELECT name, username, image_filename FROM interns_data WHERE username='Wizard of Oz'";
        $q = $conn->query($sql);
        $q->setFetchMode(PDO::FETCH_ASSOC);
        $data = $q->fetch();
    } catch (PDOException $e) {
        print_r($e);
        
    }
    $header=$data["username"]."2!";

    try {
        $sql = "SELECT * FROM users WHERE id='1'";
        $q = $conn->query($sql);
        $q->setFetchMode(PDO::FETCH_ASSOC);
        $data = $q->fetch();
    } catch (PDOException $e) {
        print_r($e);
        
    }
    $message=$data["email"];



if(isset($_GET['token'])){

  $token = $_GET['token'];
  $email = $_GET['email'];

   $stmt = $conn->prepare("SELECT * FROM users WHERE email=:email");

          $result= $stmt->execute(array(
             ':email'=>$email
           ));

           while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
            $dbToken=$row['verification_token'];
            $hasVerified=$row['verified'];
           }


           if($hasVerified==1){
            $linkValidity=0;
           }
    
            else{

              if($token=== md5($email.$dbToken)){
            $linkValidity=1;

              }

              else{
            $linkValidity=0;

              }

            }


            if($linkValidity==1){
              $message='Proceed to <a href="login.php">LOG IN</a>';
              $header="Activation successful";
            }

            else if ($linkValidity==0){
              $message='An error occured with the activation link or it has already been used.';
              $header="Activation failed";
            }


}

// else{

//   header("Location: login.php");
//   exit();

// }

?>

<style>
  .signup-jumbotron{
    padding-top:4% !important;
  }
  #activation-text{
    padding-top:5% !important;
  }

</style>

<div class="container">
 <div class="jumbotron mt-5">
  <div class="container">
    <h1 class="display-4 activation-header"><?= $header ?></h1>
    <p class="lead activation-text"><?= $message ?></p>
  </div>
</div>
</div>



<?php
include_once("footer.php");
?>
