<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Mindset
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<header class="page-header">
			<h1>All the Parnters</h1>

			</header><!-- .page-header -->

<?php
 //conditions
$args = array( 
        'post_type' => 'partner-link',
        'posts_per_page' => -1,
     );
    //variable, can name it as you wish
    $partner_links = new WP_Query( $args );
    
    //Loop starts
    if ( $partner_links->have_posts() ) { 
        echo '<section class="partner-links">';
        echo '<ul>';
      while ( $partner_links->have_posts() ) {
        $partner_links->the_post();

        echo '<li>'; 
?>

        <a href="<?php 
if (function_exists ('get_field')){
            if(get_field('partner_link')){
                the_field('partner_link');
            }
        } 
?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
        <?php echo '</li>';
      }
        echo '</section>';
      wp_reset_postdata(); 
    } ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
