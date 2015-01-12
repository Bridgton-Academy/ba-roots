<?php 
$post_thumbnail_id = get_post_thumbnail_id();
$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
?>
<div class="jumbotron" style="background-image: url(<?php echo $post_thumbnail_url ?>); background-size: 100%;">
	<div class="container">
		<h1>
			<?php echo roots_title(); ?>
  		</h1>
	</div>
</div>
