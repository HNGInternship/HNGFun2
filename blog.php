<!DOCTYPE html>
<html>
<?php require( ROOT_PATH . 'db.php'); ?>
<?php require_once( ROOT_PATH . '/blog/public_functions.php'); ?>
<?php $posts = getPublishedPosts(); ?>
<?php
include_once("header.php");
?>
<body>
	<!-- Styling -->
	<link rel="stylesheet" href="/css/blog_styling.css">
	<!-- container -->
	<div class="container">

		<!-- Page content -->
		<div class="content">
			<h2 class="content-title">Recent Articles</h2>
			<hr>
			<!-- more content still to come here ... -->
			<?php foreach ($posts as $post): ?>
	<div class="post" style="margin-left: 0px;">
		<img src="<?php echo BASE_URL . '/images/' . $post['image']; ?>" class="post_image" alt="">
		<a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
			<div class="post_info">
				<h3><?php echo $post['title'] ?></h3>
				<div class="info">
					<span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
					<span class="read_more">Read more...</span>
				</div>
			</div>
		</a>
	</div>
<?php endforeach ?>
		</div>
		<!-- // Page content -->

<?php
include_once("footer.php");
?>
	</div>
	<!-- // container -->
</body>
</html>
