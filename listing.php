<?php
include_once("header.php");
include_once("db.php");

if(isset($db)){
  $conn = $db;
 
}

$sql = 'SELECT * FROM interns_data';
$q = $conn->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);
$data = $q->fetchAll();
?>

<style>
  h2 {
    font-family: 'work sans';
  }

  .profile {
    width: 250px;
  }
  .card-img-top {
    height: 250px !important;
  }
  /* #contain img{
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

   }*/
</style>
<main class="container mt-5 mb-5 px-5">
  <h2>Current Interns</h2>
  <hr style="width: 58px; border-top: 2px solid #3D3D3D;" class="mx-auto mb-5" />
  <p class="text-center my-1">HNG4.0 has been a life-transforming journey for interns across Africa.</p>
  <p class="text-center my-1">Don't take our word for it...take theirs.</p>
  
  <?php $total = count($data);
  foreach ($data as $index => $list) { ?>
  <?php if ($index % 3 == 0) {
    $count = 0;
    ?>
  <div class="row mx-0 mt-4 justify-space-between">
  <?php

}
$count++;
?>
    <div class="profile">
      <div class="card">
      <a href="profile.php?id=<?php echo $list['username'] ?>">  <img class="card-img-top" src="<?php echo $list['image_filename'] ?>" onerror="this.src='images/default.jpg'" alt="Profile Image"> </a>
        <div class="card-footer">
          <a href="profile.php?id=<?php echo $list['username'] ?>" class="my-0 py-0 btn btn-default">View Profile</a>
          <!--<i class="fa fa-github fa-lg"></i>--> <!--No github link for now -->
        </div>
      
      </div>
      <h4 class="text-center mt-3"><?php echo  $list['name'] ?></h4>
     
    </div>
  <?php if ($count === 3 || $index == $total - 1) { ?>
  </div>
  <?php
}
}
?>
</main>
<?php
include_once("footer.php");
?>