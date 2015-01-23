<footer class="content-info" role="contentinfo">
  <div class="container">
	  <div class="row">
		  <div class="col-md-12">
			  <h6>An independent postgraduate academy that provides a one-year, boarding school environment to prepare young men for the rigors of college and beyond.</h6>
		  </div>
	  </div>
	  
	  <div class="row">
		  <div class="col-md-4">
			  <nav>
			  <?php
				  if (has_nav_menu('primary_navigation')) :
				  	wp_nav_menu(array('theme_location' => 'footer_navigation', 'walker' => new Footer_Nav_Walker(), 'menu_class' => 'navbar-footer'));
				  endif;
        		?>
			  </nav>
		  </div>
		  <div class="col-md-4">
			  
		  </div>
		  <div class="col-md-4">
			  <ul class="social pull-right">
				  <li>
				  	<a target="_blank" href="https://www.facebook.com/BridgtonAcademy1808">
					  	<i class="fa fa-facebook"></i>
				  	</a>
				  </li>
				  <li>
				  	<a target="_blank" href="https://twitter.com/BridgtonAcademy">
					  	<i class="fa fa-twitter"></i>
				  	</a>
				  </li>
				  <li>
				  	<a target="_blank" href="https://www.youtube.com/user/BAwolverine1808">
					  	<i class="fa fa-youtube"></i>
				  	</a>
				  </li>
				  <li>
				  	<a target="_blank" href="https://bridgtonacademyathletics.shutterfly.com">
					  	<i class="fa fa-camera"></i>
				  	</a>
				  </li>
			  </ul>
		  </div>
	  </div>
	  
	  <div class="row">
		  <div class="col-md-4 brand">
			  <a class="footer-brand" href="<?php echo esc_url(home_url('/')); ?>">
				  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/seal150invert.png" class="pull-left" style="display: inline-block; margin-right: 10px;" alt="Brand">
				  <h5 class="brand"><?php bloginfo('name'); ?></h5>
			  </a>
			  <p>11 Academy Lane, North Bridgton, Maine 04057</p>
			  <p><a class="brand-link" href="tel:12076473322">(207) 647-3322</a></p>
			  <p><a class="brand-link" href="tel:12076473322p1">Admissions - (207) 647-3322 x1</a></p>
		  </div>
		  <div class="col-md-4">
			  
		  </div>
		  <div class="col-md-4">
			  
		  </div>
	  </div>
  </div>
</footer>
