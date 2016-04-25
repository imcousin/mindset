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

            <?php
                //brings in the content from page id 2
                $intro_query = new WP_Query( 'page_id=1731' ); 

                if ( $intro_query -> have_posts() ){
                  while ( $intro_query -> have_posts() ) {
                      $intro_query -> the_post();

                            echo '<section class="intro">';
                        the_content();
                            echo '</section>';

                  }

                  edit_post_link( 'Edit' );
                  wp_reset_postdata(); 
                } 
            ?>
<?php
 //conditions
$args = array( 
        'post_type' => 'work',
        'posts_per_page' => 4,
        'tax_query' => array(
                    // 'relation' => 'AND',
                    array(
                            'taxonomy' => 'featured',
                            'field' => 'slug',
                            'terms' => 'front-page-featured'
                    ),
                    // array(
                    //         'taxonomy' => 'work-type',
                    //         'field' => 'slug',
                    //         'terms' => 'web'
                    // )

                    // the double arrays are for multiple filters with relation and/or
              )
     );
    //variable, can name it as you wish
    $frontpageWorks = new WP_Query( $args );
    
    //Loop starts
    if ( $frontpageWorks->have_posts() ) { 
        echo '<h2>Featured Works</h2>';
        echo '<section class="featured-works">';
        echo '<ul>';
      while ( $frontpageWorks->have_posts() ) {
        $frontpageWorks->the_post();

        echo '<li class="frontpage-work">';?>

        <p><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
        <?php the_post_thumbnail('large'); 
?>
        <?php //the_excerpt();
        echo '</li>';
      }
        echo '</section>';
      wp_reset_postdata(); 
    } ?>

<?php
        if (function_exists ('get_field')){
            if(get_field('what_we_offer')){
                echo '<div>';
				echo '<section class="offer">';
                echo '<h1>What we offer...</h1>';
                the_field('what_we_offer');
				echo '</section>';
            }
        } 
    ?>
				
				<?php

    //brings in the content from page id 2
    // $what_we_offer = new WP_Query( 'page_id=1736' ); 

    // if ( $what_we_offer -> have_posts() ){
    //   while ( $what_we_offer -> have_posts() ) {
    //       $what_we_offer -> the_post();

    //         the_content();

    //   }
    //   edit_post_link( 'Edit' );
    //   wp_reset_postdata(); 
    // } ?>

			<?php
        if (function_exists ('get_field')){
            if(get_field('who_we_are')){
				echo '<section class="we">';
                echo '<h1>Who we are...</h1>';
                the_field('who_we_are');
				echo '</section>';
                echo '</div>';
            }
        } 
    ?>

				<?php
    //brings in the content from page id 2
    // $who_we_are = new WP_Query( 'page_id=1734' ); 

    // if ( $who_we_are -> have_posts() ){
    //   while ( $who_we_are -> have_posts() ) {
    //       $who_we_are -> the_post();

    //         the_content();

    //   }
    //   edit_post_link( 'Edit' );
    //   wp_reset_postdata(); 
    // } ?>

			<?php endwhile; // End of the loop. ?>


			

			<section class="front-slider">
				<h1>Compliments</h1>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
