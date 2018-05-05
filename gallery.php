<?php
	include('header.php');


		define ('DB_USER', "root");
	define ('DB_PASSWORD', "4getmen0t");
	define ('DB_DATABASE', "hng_fun");
	define ('DB_HOST', "localhost");

$host = "localhost";
$username = "root";
$password = "4getmen0t";
$db_name = "hng_fun";
	

$conn = mysqli_connect($host, $username, $password, $db_name) or die(mysqli_error($db));
	 $select = mysqli_query($conn, "SELECT * FROM gallery")  or  die(mysqli_error($db));
	 $rows = $select->num_rows;
	 echo $rows;
?>
<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/work-sans" type="text/css"/>
<style type="text/css">
	.past {
		font-family: 'Work Sans Regular', sans-serif; 
		font-size: 48px;
   font-weight: normal; 
   font-style: normal;
	}
	.gutter{
		margin-top: 30px;
		margin-bottom: 30px;
	}
	.img{
		background-color: #c4c4c4;
	}
	}
</style>
<header class="masthead" style="background-image: url('img/hero_image.png'); height: 295px;">
	<div class="overlay" style="background-color: #2A3135"></div>
		
</header>



<section class="mx-auto col-md-10">
		
				
			<div class="row">
				
				<div class="col-sm-4 col-md-6 col-lg-8">
					<p class="past">Past Events</p>
				</div>
				<div class="col-sm-8 col-md-6 col-lg-4">
					<p>Filter By:<input type="text" name="filter" class="filter-input"></p>
				</div>

			</div>
			<?php
			if($rows > 0) {
		$cols = 3;    // Define number of columns
		$counter = 1;     // Counter used to identify if we need to start or end a row
		$nbsp = $cols - ($rows % $cols);    // Calculate the number of blank columns
		
		
		$row_class = 'row';    // Row class name
		$col_class = 'col-sm-4 col-md-6 col-lg-4 gutter'; 
			while ($item = $select->fetch_array()) {
			if(($counter % $cols) == 1) {    // Check if it's new row
				echo '<div class="'.$row_class.'">';	// Start a new row
			}
                   	$img = $item['image_url'];
					echo '<div class="'.$col_class.'"><img class="img" src="'.$img.'" width="320px" height="300px"/></div>';     // Column with content
			if(($counter % $cols) == 0) { // If it's last column in each row then counter remainder will be zero
				echo '</div>';	 //  Close the row
			}
			$counter++;    // Increase the counter
		}
		
        echo '</div>';  // Close the container
	} ?>
			

			

</section>





<?php
	include('footer.php');
?>