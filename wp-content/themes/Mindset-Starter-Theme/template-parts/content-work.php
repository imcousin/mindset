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

		<?php 
        // the_post_thumbnail('large');
        the_content();

         ?>
           
<?php get_the_term_list( $id, $taxonomy, $before, $sep, $after ); ?>

<?php echo get_the_term_list( $post->ID, 'work-type', 'Work Category: ', ', ', '. '); ?>

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