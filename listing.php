<?php
include_once("header.php");
function Filter($str)
{
  $filter=htmlspecialchars($str, ENT_QUOTES);
	return $filter;
}

function sqli($con,$str1)
{
	$sqli_filter=mysqli_real_escape_string($con,$str1);
	return $sqli_filter;
}

function GenPagination()
{
    include_once('../config.php');
    $con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD,DB_DATABASE);
    $query  = " select * from interns_data ";
    $r=mysqli_query($con,$query);
    $count=mysqli_num_rows($r);
    $link=ceil($count/20);
    for($start=1;$start<=$link;$start++)
    {
      if($start==1){
        echo '<li class="page-item"><a  class="page-link" href="listing.php?id='.$start.'">'.$start.'</a></li>';
      }else{
        echo '<li class="page-item"><a  class="page-link" href="listing.php?id='.$start.'">'.$start.'</a></li>';
        
      }
      
    } 
  }
  function GetAllInterns($no){
	  //
	  include_once('../config.php');
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
    $no=Filter(sqli($conn,$no));
		$no=($no*20)-20; 
		$query  = "select * from interns_data  order by id desc limit ".$no.",20";
		$result=mysqli_query($conn,$query);
			while($row = mysqli_fetch_assoc($result)) { 
			$default_image = '';
			echo "<div class=\"profile\">
      <div class=\"card\">
        <a href=\"profile.php?id=".$row['username']."\"><img class=\"card-img-top\" src='".$row['image_filename']."' onerror=\"this.src='images/default.jpg'\" alt=\"Profile Image\"> </a>
        <div class=\"card-footer\">
          <a href=\"profile.php?id=".$row['username']."\" class=\"my-0 py-0 btn btn-default\">View Profile</a>
        </div>
      </div>
      <h4 class=\"text-center mt-3\">". $row['name']."</h4>
    </div>";	
			}
			mysqli_close($conn);
	}
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
  <h2>Our Interns</h2>
  <hr style="width: 58px; border-top: 2px solid #3D3D3D;" class="mx-auto mb-5" />
  <p class="text-center my-1">HNG4.0 has been a life-transforming journey for interns across Africa.</p>
  <p class="text-center my-1">Don't take our word for it...take theirs.</p>
  <div class="row mx-0 mt-4 justify-space-between">
  <?php 
      if(isset($_GET['id']) && !empty($_GET['id']) ){
        GetAllInterns($_GET['id']);
      }else{
        GetAllInterns(1);
      } 
       ?>  

    <nav class="text-xs-center" style="margin:auto;">
    <br>
<br>
      <ul class="pagination pagination-sm">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        
        <?php GenPagination();?>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>
    </nav>
    
  </div>
</main>
<?php
include_once("footer.php");
?>
