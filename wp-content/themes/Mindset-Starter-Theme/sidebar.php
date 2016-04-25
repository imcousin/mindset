<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Mindset
 */
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php 
		if (is_page('contact')) {
			dynamic_sidebar( 'sidebar-contact' );
		}else if (is_page('our-services')){
			dynamic_sidebar( 'sidebar-services' );
		} else {
			dynamic_sidebar( 'sidebar-1' );
		}
	 ?>



<?php get_template_part('template-parts/work', 'terms'); ?>

<?php get_template_part('template-parts/partner', 'list'); ?>

<?php get_template_part('template-parts/random', 'compliment'); ?>

</div><!-- #secondary -->
