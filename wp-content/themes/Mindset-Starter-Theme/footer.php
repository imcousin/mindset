<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Mindset
 */

?>

	</div><!-- #content -->

            <footer id="colophon" class="site-footer" role="contentinfo">
                <div class="container">
			  <nav id="footer-navigation" class="footer-navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu' ) ); ?>
					<?php wp_nav_menu( array( 'theme_location' => 'footer-social', 'menu_id' => 'footer-social-menu','container_class'=>'alignright' ) ); ?>
                    
				</nav>
                    <div class="site-info">
                                   <a href="<?php echo esc_url( __( 'http://kozma.la/', 'theming' ) ); ?>"><?php printf( __( 'Created by %s'), 'Beata Kozma' ); ?></a>
                   </div><!-- .site-info -->
                </div><!-- .container -->
            </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
