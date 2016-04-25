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
        echo "<h2>Web Works</h2>";
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


<section id="photo" class="photo">
    
<?php
        $photoargs = array( 
        'post_type' => 'work',
        'posts_per_page' => -1,
               'tax_query' => array(
                   array (
                    'taxonomy' => 'work-type',
                    'field' => 'slug',
                    'terms' => 'photo'
                   )
                ),
     );
       $photowork = new WP_Query( $photoargs );
       
       if ( $photowork->have_posts() ) {
        echo "<h2>Photo Works</h2>";
         while ( $photowork->have_posts() ) {
            $photowork->the_post();
       
            echo '<article class="photowork">';
            echo '<a href="';
            the_permalink();
            echo '">';
            the_title();
            echo the_post_thumbnail('large');
            echo '</a></article><!-- photowork -->';
         }
         wp_reset_postdata(); 
       } ?>

</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
