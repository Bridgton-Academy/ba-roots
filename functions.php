<?php
/**
 * Roots includes
 *
 * The $roots_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/roots/pull/1042
 */
$roots_includes = array(
  'lib/utils.php',           // Utility functions
  'lib/init.php',            // Initial theme setup and constants
  'lib/wrapper.php',         // Theme wrapper class
  'lib/sidebar.php',         // Sidebar class
  'lib/config.php',          // Configuration
  'lib/activation.php',      // Theme activation
  'lib/titles.php',          // Page titles
  'lib/nav.php',             // Custom nav modifications
  'lib/gallery.php',         // Custom [gallery] modifications
  'lib/scripts.php',         // Scripts and stylesheets
  'lib/extras.php',          // Custom functions
);

foreach ($roots_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'roots'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

add_action('wp_footer', 'add_fitthem');


// Add FitVids to allow for responsive sizing of videos
function your_theme_fitvids() {
	if (!is_admin()) {

		wp_register_script( 'fitvids', get_template_directory_uri() . '/assets/vendor/fitvids/jquery.fitvids.js', array('jquery'), '1.0', true);    	
    	wp_enqueue_script( 'fitvids');
    	
    	function add_fitthem() { 
			//if( wp_script_is('fitvids', 'done')) {
				?>
					<script type="text/javascript">
					jQuery(document).ready(function() {
						jQuery('.video').fitVids();
					});
					</script>
					<script type="text/javascript">
					$(document).ready(function(){
						$('[data-toggle="popover"]').popover();
					});
					</script>
				<?php
			//}
		}
		
		
		// Needs to be a low priority (like 100) to execute after the scripts which are around 20
		add_action('wp_footer', 'add_fitthem', 100);
	}
}



add_action('init', 'your_theme_fitvids');
    	


// Automatically add FitVids to oembed YouTube videos
function your_theme_embed_filter( $output, $data, $url ) {

	$return = '<div class="video">'.$output.'</div>';
	return $return;

}
// Not working
//add_filter('oembed_dataparse', 'your_theme_embed_filter', 90, 3 );

add_filter('embed_oembed_html', 'your_theme_embed_filter', 10, 3);