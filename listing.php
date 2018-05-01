<?php
include_once("header.php");
require 'db.php';


/*try {
  $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_DATABASE, DB_USER, DB_PASSWORD);

} catch (PDOException $pe) {
  die("Could not connect to the database " . DB_DATABASE . ": " . $pe->getMessage());
}*/

 
$sql = 'SELECT * FROM interns_data';
$q = $conn->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);
$data = $q->fetchAll();
?>

<style>
   #contain img{
    width:100%;
    padding:5px;
    height:200px;
    
    
   }
   #contain{
     margin-left:auto;
     margin-right:auto;
     
    
   }
   #contain #border{
     margin-left:70px;
     margin-right:70px;
     padding:0;
     width: 250px;
     border: solid 1px #E5E5E5;
   }
   #caption{
     text-align:center;
     
   }
</style>
      <div class="container" >
      <br>
      <div class="container" id="caption">
          <h1>OUR INTERNS</h1><br>
          <hr>
          <br>
          <p>HNG4.0 has been a life-transforming journey for interns across Africa.</p>
          <p>Don't take our word for it...take theirs.</p>
      </div>
     <br>
     <form class="form-inline" style="margin-left:9%">
        <select class="form-control mr-sm-3 " style="width:170px">
          <option>Skills</option>
        </select>
        <select class="form-control mr-sm-3" style="width:170px">
          <option>Country</option>
        </select>
        <input class="form-control mr-sm-3" type="search" placeholder="Search Name" aria-label="Search" style="width:170px">

        <button class="btn btn-primary mr-sm-3" type="submit" style="width:110px">Search</button>
        <button class="btn btn-outline-primary mr-sm-3" type="submit" style="width:102px">Clear</button>
    </form>
    
     <br>
    
  <div class="row container" id="contain" >
  <?php foreach($data as $list){ ?>
     <div class="col-md-3" >
         <div class="thumbnail img-responsive" id="border">
          <img src="<?= $list['image_filename'] ?>" alt="Lights" >
           <a href="profile.php?id=<?=$list['username']?>">
             <div class="caption pull-right">
              <img src="http://res.cloudinary.com/julietezekwe/image/upload/v1525004514/git.png" alt="git" style="width:30px; height:30px; padding:3px;">
            </div>
          </a>
             <a href="profile.php?id=<?=$list['username']?>">
                 <button class="btn btn-default" style="margin:3px;">View Profile</button>
             </a>
   </div>
 
    <div style="margin-left:150px; textialign:center"><h5><?=$list['username']?></h5>
      
    </div>
    
</div>
<?php } ?>
</div>
</div>