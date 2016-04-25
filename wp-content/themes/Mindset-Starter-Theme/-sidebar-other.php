<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Mindset
 */
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php 
		if ( is_page( 'contact' )) {  
            	dynamic_sidebar( 'sidebar-contact' );
        } ?>
	<h2>see my work</h2>
	<h2>they say...</h2>
</div><!-- #secondary -->
