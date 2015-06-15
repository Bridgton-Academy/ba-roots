<footer class="content-info" role="contentinfo">
  <div class="container">
	  <div class="row">
		  <div class="col-sm-12">
			  <h6>An independent postgraduate academy that provides a one-year, boarding school environment to prepare young men for the rigors of college and beyond.</h6>
		  </div>
	  </div>

	  <div class="row">
		  <div class="col-sm-6">
			  <nav>
			  <?php
				  if (has_nav_menu('primary_navigation')) :
				  	wp_nav_menu(array('theme_location' => 'footer_navigation', 'walker' => new Footer_Nav_Walker(), 'menu_class' => 'navbar-footer'));
				  endif;
        		?>
			  </nav>
		  </div>
		  <div class="col-sm-6">
			  <ul class="social pull-right">
				  <li>
				  	<a
						tabindex="0"
						role="button"
						data-toggle="popover"
						title="BA on Facebook"
						data-content='<ul>
							<li><a target="_blank" href="https://www.facebook.com/BridgtonAcademy1808">Bridgton Academy</a></li>
							<li><a target="_blank" href="https://www.facebook.com/pages/Bridgton-Academy-Baseball/180907795285983">Baseball</a></li>
							<li><a target="_blank" href="https://www.facebook.com/BridgtonAcademyBasketball">Basketball</a></li>
							<li><a target="_blank" href="https://www.facebook.com/BACollegeCounseling">College Counseling</a></li>
							<li><a target="_blank" href="https://www.facebook.com/pages/Bridgton-Academy-Football/220812291308845">Football</a></li>
                            <li><a target="_blank" href="https://www.facebook.com/bridgton.academyhockey">Hockey</a></li>
							<li><a target="_blank" href="https://www.facebook.com/BridgtonLacrosse">Lacrosse</a></li>
							<li><a target="_blank" href="https://www.facebook.com/BARugbyAlums">Rugby</a></li>
							</ul>'
						data-html="true"
						data-placement="top"
						data-trigger="click" >
					  	<i class="fa fa-facebook"></i>
				  	</a>
				  </li>
				  <li>
				  	<a

						tabindex="0"
						role="button"
						data-toggle="popover"
						title="BA on Twitter"
						data-html="true"
						data-placement="top"
						data-trigger="click"
						data-content='<ul>
							<li><a target="_blank" href="https://twitter.com/BridgtonAcademy">Bridgton Academy</a></li>
							<li><a target="_blank" href="https://twitter.com/ba_admissions">Admissions</a></li>
							<li><a target="_blank" href="https://twitter.com/thebabaseball">Baseball</a></li>
							<li><a target="_blank" href="https://twitter.com/ba_basketball">Basketball</a></li>
							<li><a target="_blank" href="https://twitter.com/bridgton_ftbl">Football</a></li>
							<li><a target="_blank" href="https://twitter.com/wolverinehockey">Hockey</a></li>
							<li><a target="_blank" href="https://twitter.com/wolverinelax">Lacrosse</a></li>
							<li><a target="_blank" href="https://twitter.com/BAsoccer">Soccer</a></li>
							<li><a target="_blank" href="https://twitter.com/ba_student_life">Student Life</a></li>
							</ul>' >
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
		  <div class="col-sm-4 brand" style="display: inline-block; height: auto; text-align: left;">
			  <a class="footer-brand" href="<?php echo esc_url(home_url('/')); ?>" >
				  <h5 class="brand"><?php bloginfo('name'); ?></h5>
				  <h6 class="brand">The Year That Makes <i>The</i> Difference</h6>
			  </a>

		  </div>
		  <div class="col-sm-4">
			  <a class="footer-brand" href="<?php echo esc_url(home_url('/')); ?>" >
				  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/seal150invert.png" class="center-block" style="" alt="Brand">
			  </a>
		  </div>
		  <div class="col-sm-4">
			  <div class="brand brand-contact" style="text-align: right;">
				  <p>11 Academy Lane, P.O. Box 225,</p>
                  <p>North Bridgton, Maine 04057</p>
				  <p><a class="brand-link" href="tel:12076473322">(207) 647-3322</a></p>
				  <p><a class="brand-link" href="tel:12076473322p1">Admissions - (207) 647-3322 x1</a></p>
			  </div>
		  </div>
	  </div>
  </div>
</footer>
