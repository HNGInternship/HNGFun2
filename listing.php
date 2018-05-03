<?php
include_once("header.php");
require 'db.php';


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
  .profile .card > .card-img-top {
    height: 250px;
  }

  .card-footer {
    display: flex;
    justify-content: space-between;
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
  <h2>Our Interns</h2>
  <hr style="width: 58px; border-top: 2px solid #3D3D3D;" class="mx-auto mb-5" />
  <p class="text-center my-1">HNG4.0 has been a life-transforming journey for interns across Africa.</p>
  <p class="text-center my-1">Don't take our word for it...take theirs.</p>
  <form class="form-inline">
    <div class="row mx-0 mt-4 justify-space-between w-100 mb-5">
      <select class="form-control col-sm-2" >
        <option>Skills</option>
      </select>
      <select class="form-control col-sm-2" >
        <option>Country</option>
      </select>
      <input class="form-control col-sm-2" type="search" placeholder="Search Name" aria-label="Search" >

      <button class="btn btn-primary col-sm-1" type="submit" >Search</button>
      <button class="btn btn-outline-primary col-sm-1" type="submit" >Clear</button>
    </div>
  </form>
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
        <img class="card-img-top" src="<?= $list['image_filename'] ?>" onerror="this.src='images/default.jpg'" alt="Profile Image">
        <div class="card-footer">
          <a href="profile.php?id=<?= $list['username'] ?>" class="ml-3 my-0 py-0 btn btn-default">View Profile</a>
          <i class="fa fa-github fa-lg"></i>
        </div>
      </div>
      <h4 class="text-center mt-3"><?= $list['username'] ?></h4>
      <p class="small text-center mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
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