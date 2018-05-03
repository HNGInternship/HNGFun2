<?php
include_once("header.php");
?>


<style type="text/css">
	.col-lg-4{
		font-weight: bold;
		color: black;
		font-size: 23px;
		position: relative;
		margin-bottom: 150px;
		cursor: pointer;
	}
	#p{
		border-radius: 20px;
		width: 300px; 
		height: 200px;
		position: absolute;
		background-position: center;
		background-size: cover;
		-webkit-background-size: cover; 
		margin: 0; 
		padding: 0; 
		padding-left: 200px;
		text-align: center;
	}

	.col-lg-4  #p :hover{
		border: 1px solid blue;
	}
	#dev:hover{
		color: blue;
	}
	span{
		font-size: 18px
	}
	#dev{
		position: relative;padding-top: 15%;text-align: center; font-weight: bold;padding-right: 60px; color: white; font-size: 30px
	}
</style>


<div class="container">
	<div class="text-center">
		<h2 style="font-weight: bold; font-size: 40px;">Things Built</h2>
		<span style="font-weight: bold; font-size: 10px;"><hr style="width: 100px; border: 1px solid"></span>
		<div style="font-size: 17px; margin-bottom: 25px">HNG has been a life transforming journey for both new and experienced developer across the whole<br/> world expecially africa.
		Check all project made by participants when grouped into teams.</div>
	</div>
	<div align="center">
		<div class="row">
			<div class="col-lg-4" style="position: relative;">
				<p id="p" style="background:linear-gradient(0deg,rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(https://d.novoresume.com/images/doc/college-cv-template.png);"></p>
				<div id="dev">Cv Designs<br/><span>1700 Interns</span></div>
			</div>
			<div class="col-lg-4">
				<p id="p" style="background:linear-gradient(0deg,rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTttJw0TufJgVXy4WrDhbaPcZ31HrqL38eAMGuOHq-UFXNQETQl);"></p><div id="dev"> Transcriber app<br/><span>200 Interns</span></div>
			</div>
			<div class="col-lg-4">
				<p  id="p" style="background:linear-gradient(0deg,rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFn-00QAOXZBeLhETx1HwDlHw5JHHyWDAyMBwEnlRGu3Ird9K9Eg);"></p><div id="dev"> Ig Vendors<br/><span>27 Interns</span></div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<p id="p" style="background:linear-gradient(0deg,rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2FIZQvP4PRirshrIqCK5XTd6W1zsExEefvT9m2xGtU9kNcbLlXA);"></p><div id="dev"> Wireframe<br/><span>10 Interns</span></div>
			</div>
			<div class="col-lg-4">
				<p id="p" style="background:linear-gradient(0deg,rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUpu6fNbNOAeJpjSKJ9i9e9TdAVKxcBKaP7VwBmIhNDBxXi3WAqA);"></p><div id="dev"> Power Pack<br/><span>24 Interns</span></div>
			</div>
			<div class="col-lg-4">
				<p id="p" style="background:linear-gradient(0deg,rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLyA34KEHTfPTraZruJjKYeIO2kBTiPKQzC6TEBa1hP3LYKfMq);"></p><div id="dev" "> Banner design<br/><span>400 Interns</span></div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<p  id="p" style="background:linear-gradient(0deg,rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXBCsMzKv9WxEAkD72wajAu2OVYdcWs8H9LVBKrousmA8lhq88BQ);"></p><div id="dev" "> Fast Pay<br/><span>68 Interns</span></div>
			</div>
			<div class="col-lg-4">
				<p  id="p"style="background:linear-gradient(0deg,rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR86NHWKQO3eMVzheK4Hd0q7QS3piRtAkhcBaIwr3-nCXpk2BXc);"></p> <div id="dev"> Profile Pages<br/><span>4000 Interns</span></div>
			</div>

			<div class="col-lg-4">
				<p id="p" style="background:linear-gradient(0deg,rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(http://res.cloudinary.com/pajimo/image/upload/v1525094886/download.png); background-position: center; background-size: cover;"></p><div id="dev" ">Project Emails<br/><span>70 Interns</span></div>
			</div>
		</div>

		<div style="margin-top: 20px; font-size: 18px">More projects coming up.. Check back later</div>
	</div>
<style type="text/css">
	/* Pagination links */
.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
}

/* Style the active/current link */
.pagination a.active {
    background-color: dodgerblue;
    color: white;
}
.pagination{
	margin-top: 30px;
	margin-left: 43%;
}
/* Add a grey background color on mouse-over */
.pagination a:hover:not(.active) {background-color: #ddd;}
</style>
	<div align="center">
		<div class="pagination">
		  <a href="#">&laquo;</a>
		  <a class="active" href="#">1</a>
		  <a href="#">2</a>
		  <a href="#">&raquo;</a>
		</div>
	</div>

</div>




<?php
include_once("footer.php");
?>
