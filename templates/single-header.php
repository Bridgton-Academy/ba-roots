<?php 
if (has_post_thumbnail()) {
	$post_thumbnail_id = get_post_thumbnail_id();
	$post_thumbnail_src = wp_get_attachment_image_src( $post_thumbnail_id, array(1140,2000));
	$post_thumbnail_url = $post_thumbnail_src[0]
?>
<div class="jumbotron" id="header" style="background-image: url(<?php echo $post_thumbnail_url ?>); background-size: 100%;">
	<div class="container">
		<header class="pull-right">
			<!--<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-tiny.png" class="hidden-xs" style="margin-right: 15px;" alt="">-->
			<h1 style="display: inline-block; vertical-align: middle;">
				Bridgton<br /> Academy
			</h1>
		</header>
	</div>
</div>
<?php } ?>