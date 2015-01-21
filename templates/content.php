<article <?php post_class(); ?>>
  <header>
	<?php if ( has_post_thumbnail() ) { 
		$post_thumbnail_id = get_post_thumbnail_id();
		$post_thumbnail_src = wp_get_attachment_image_src( $post_thumbnail_id, array(1140,2000));
		$post_thumbnail_url = $post_thumbnail_src[0]
	?>
	  <div class="jumbotron" style="background-image: url(<?php echo $post_thumbnail_url ?>); background-size: 100%;">
	  	<div>
			<header>
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			</header>
		</div>
	</div>
	  <?php } else { ?>
      <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php } ?>
    
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>
