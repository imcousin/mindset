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
			<h1>All the Works</h1>

			</header><!-- .page-header -->

<section id="webworks" class="webworks">
    
 <?php
        $webargs = array( 
        'post_type' => 'work',
        'posts_per_page' => -1,
        'tax_query' => array(
            array (
                'taxonomy' => 'work-type',
                'field' => 'slug',
                'terms' => 'web'
                    )
                ),
         );
        $webwork = new WP_Query( $webargs );
        
        if ( $webwork->have_posts() ) {
         while( $webwork->have_posts() ){
            $webwork->the_post();
        
                echo '<article class="webwork">';
                echo '<a href="';
                the_permalink();
                echo '">';
                the_title();
                echo the_post_thumbnail('large');      
                echo '</a>';
                the_excerpt();
                echo '<a class="read-more" href="';
                the_permalink();
                echo '">Continue Reading...</a>'; 
                echo '<div class="clear"></div>';
                echo '</article><!-- webwork -->';
             }
            wp_reset_postdata(); 
          } ?>
    
</section>




<?php
 //conditions
$args = array( 
        'post_type' => 'work',
        'posts_per_page' => -1,
     );
    //variable, can name it as you wish
    $works = new WP_Query( $args );
    
    //Loop starts
    if ( $works->have_posts() ) { 
        echo '<h2>Photo Works</h2>';
        echo '<section class="featured-works">';
        echo '<ul>';
      while ( $works->have_posts() ) {
        $works->the_post();

        echo '<li class="frontpage-work">'; ?>

        <p><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
        <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('large'); ?></a>
		<?php the_excerpt(); ?>
		<a href="<?php echo get_permalink(); ?>"> Continue Reading...</a>
        <?php echo '</li>';
      }
        echo '</section>';
      wp_reset_postdata(); 
    } ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
