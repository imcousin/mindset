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
				the_title('<h1>','</h1>');
			        if (function_exists ('get_field')){
			            echo '<div class="about-info-box">';
			            if (get_field('about_info')){ ?>

			                <div class="about-info"><?php 

							if (get_field( 'about_image' )){
			                $image = get_field('about_image');
							// thumbnail
							$size = 'thumbnail';
							// $thumb = $image['sizes'][ $size ];
							$width = $image['sizes'][ $size . '-width' ];
							$height = $image['sizes'][ $size . '-height' ];

							if( !empty($image) ){ ?>

								<img class="alignleft" src="<?php echo $image["url"]; ?>" alt="<?php echo $image["alt"]; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />

							<?php } 
							the_field( 'about_info' ); ?>

			                </div>

			           <?php 
			       		}
			       		}
				        echo '</div>';
			        } 
			    ?>

			<?php endwhile; // End of the loop. ?>
<?php
 //conditions
$args = array( 
        'post_type' => 'compliment',
        'posts_per_page' => -1,
		//'order'   => 'ASC',
		//'orderby'   => 'title',
     );
    //variable, can name it as you wish
    $compliments = new WP_Query( $args );
    
    //Loop starts
    if ( $compliments->have_posts() ) { 
        echo '<section class="compliment">';
        echo '<h2>Compliments</h2>';
      while ( $compliments->have_posts() ) {
        $compliments->the_post();

?><!-- <h3><?php the_title(); ?></h3> Depends if need or not display wise not need . just need the post id for creating -->
        <?php 
		        if (function_exists ('get_field')){
					if( get_field('compliment_content') ){
						echo "<div class=\"compliment-container\">";
						echo "<blockquote>";
							the_field( 'compliment_content' );

						echo "</blockquote>";
					}
					if( get_field('compliment_author') ){
						echo "<p class=\"compliment-author\">";
							the_field( 'compliment_author' );
							echo "</p>";
							echo "</div>";
					}
				}
      }
        echo '</section>';
      wp_reset_postdata(); 
    } ?>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
