<?php
/**
 * Template part for displaying single posts.
 *
 * @package Mindset
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php mindset_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
            <?php
    if (function_exists ('get_field')){
        echo '<div class="info-box">';
            if (get_field('info_title')){
                echo '<h2 class="add-info-title">';
                the_field( 'info_title' );
                echo '</h2>';
            }
            if (get_field('info_content')){
                the_field( 'info_content' );
            }
            if (get_field( 'info_image' )){
                echo '<img src="';
                the_field( 'info_image' );
                echo '">';
            }
        echo '</div>';
            wp_reset_postdata();//reset post info
    } ?>



 <?php
      if (function_exists ('get_field')){

        $related_posts = get_field('related_posts');
        if ($related_posts){
            echo '<h2>Further Readings</h2>';
            echo '<ul class="related-posts">';                   

            foreach ( $related_posts as $post ){
                setup_postdata($post);
                echo '<li class="related_post_item">';
                echo '<a href="';
                the_permalink();
                echo '">';
                echo '<h3>';
                the_title();
                echo '</h3></a>';
                the_post_thumbnail('thumbnail', array( 'class' => 'alignright' ) );
                the_excerpt();                      
                echo '</li>';
            }    
            echo '</ul>'; 
            wp_reset_postdata();
        }
        }  
    ?>






		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mindset' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php mindset_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->