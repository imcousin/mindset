<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Mindset
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>		<?php
 //conditions
$args = array( 
        'post_type' => 'service',
        'posts_per_page' => 4,
		'order'   => 'ASC',
		'orderby'   => 'title',
     );
    //variable, can name it as you wish
    $servicenav = new WP_Query( $args );
    
    //Loop starts
    if ( $servicenav->have_posts() ) { 
        echo '<section class="servicenav">';
      while ( $servicenav->have_posts() ) {
        $servicenav->the_post();
?>
        <a href="#<?php echo get_the_ID(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title("<h3>","</h3>"); ?></a>
        <?php 
      }
        echo '</section>';
      wp_reset_postdata(); 
    } ?>


<?php
 //conditions
$args = array( 
        'post_type' => 'service',
        'posts_per_page' => -1,
		'order'   => 'ASC',
		'orderby'   => 'title',
     );
    //variable, can name it as you wish
    $services = new WP_Query( $args );
    
    //Loop starts
    if ( $services->have_posts() ) { 
        echo '<h2>Services</h2>';
        echo '<section class="services">';
      while ( $services->have_posts() ) {
        $services->the_post();

?><h3 id="<?php echo get_the_ID(); ?>"><?php the_title(); ?></h3>
        <?php the_content();
      }
        echo '</section>';
      wp_reset_postdata(); 
    } ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
