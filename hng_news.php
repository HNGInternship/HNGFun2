<?php
include_once("header.php");
?>

<div class="container">
	<div class="text-center">
		<h1>Latest News</h1>
		<div style="font-weight: bold; ">
		<hr style="width: 50px;">
	</div>
	</div>
	<div class="row">
		<div class="col-lg-11 col-md-11 col-sm-11">
			<button style="background-color: #2196F3; color: white; margin-bottom: 5px; width: 150px; font-size: 15px; height: 40px">FEATURED</button>
			<p style="height: 300px; width: 100%; background-color: grey; margin-top: 0px"></p>
			
		</div>
		<div class="col-lg-1 col-md-1 col-sm-1">
			<button style="background-color: #2196F3; color: white; margin-bottom: 5px; width: 150px; font-size: 15px; height: 40px">TOPICS</button>
			<p style="font-size: 15px; margin-top: 15px; font-weight: bold">Design</p>
			<p style="font-size: 15px; font-weight: bold">Announcements</p>
			<p style="font-size: 15px; font-weight: bold">Competitions</p>
			<p style="font-size: 15px; font-weight: bold">Sponsors</p>
			<p style="font-size: 15px; font-weight: bold">Advices</p>
			<p style="font-size: 15px; font-weight: bold">Frameworks</p>
		</div>
	</div>

	<div style="text-align: center;">
		<button style="background-color: #2196F3; color: white; height: 60px; width: 170px">TRENDING</button>
	</div>

	<div>

		<div class="slideshow" style="width: 100%">
			<div class="slide" id="first">
				<div class="row">
					<div class="col-lg-4" style="height: 200px">
						<p>ese</p>
					</div>
					<div class="col-lg-4" style="height: 200px">
						<p>dgf</p>
					</div>
					<div class="col-lg-4" style="height: 200px">
						<p>hjfre</p>
					</div>
				</div>
			</div>
			<div class="slide" id="second">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4" style="height: 200px">
						
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4" style="height: 200px">
						
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4" style="height: 200px">
						
					</div>
				</div>
			</div>
		</div>

	</div>
</div>

		<script>
$(document).ready(function() {
    setInterval(function() {
        var $curr = $('.slideshow .slide:visible'), // should be the first image
            $next = ($curr.next().length) ? $curr.next() : $('.slideshow .slide').first();
            // if there isn't a next image, loop back to the first image
        $next.css('z-index',2).fadeIn('slow', function() { // move it to the top
            $curr.hide().css('z-index',0); // move this to the bottom
            $next.css('z-index',1);        // now move it to the middle
        });
    }, 6000); // milliseconds
});
</script>

<style>
.slideshow {
    position: relative; /* necessary to absolutely position the images inside */
    width: 500px; /* same as the images inside */
    
}
.slideshow .slide {
    position: absolute;
    display: none;
}
.slideshow .slide:first-child {
    display: block; /* overrides the previous style */
}
</style>



<?php
include_once("footer.php");
?>
