<?php 
$post_thumbnail_id = get_post_thumbnail_id();
$post_thumbnail_src = wp_get_attachment_image_src( $post_thumbnail_id, array(1140,2000));
$post_thumbnail_url = $post_thumbnail_src[0]
?>
<div class="jumbotron" style="background-image: url(<?php echo $post_thumbnail_url ?>); background-size: 100%;">
	<div class="container">
		<header>
			<h1>
				<?php echo roots_title(); ?>
			</h1>
		</header>
	</div>
</div>
