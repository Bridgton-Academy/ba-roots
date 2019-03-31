<?php 
$post_thumbnail_id = get_post_thumbnail_id();
$post_thumbnail_src = wp_get_attachment_image_src( $post_thumbnail_id, array(1140,2000));
$post_thumbnail_url = $post_thumbnail_src[0]
?>
<div id="header" class="jumbotron" style="background-image: url(<?php echo $post_thumbnail_url ?>); background-size: 100%;">
	<div class="container">
		<header class="pull-right">
			<h1 style="text-align: right;">
				Bridgton<br /> Academy
			</h1>
			<h4>The Year That Makes <i>The</i> Difference</h4>
		</header>
	</div>
</div>
