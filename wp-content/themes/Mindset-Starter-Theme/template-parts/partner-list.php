    <?php
if(is_active_sidebar ('sidebar-1')){ 


 $terms = get_terms('partner-type'); 
        if ( $terms && ! is_wp_error($terms) ){

                        foreach ( $terms as $term ) {
                echo "<aside class=\"widget\">";

                echo '<h1 class="widget-title">';
                echo $term->name;
   echo '</h1>'; 
$webargs = array( 
        'post_type' => 'partner-link',
        'posts_per_page' => -1,
        'tax_query' => array(
            array (
                'taxonomy' => $term->taxonomy,
                'field' => 'slug',
                'terms' => $term->slug
                    )
                ),
         );
        $webwork = new WP_Query( $webargs );
        
        if ( $webwork->have_posts() ) {
            echo '<ul>';
         while( $webwork->have_posts() ){
            $webwork->the_post();
        
if (function_exists ('get_field')){
            if(get_field('partner_link')){
                echo "<li>";
?>
              <a href="<?php the_field('partner_link'); ?>" title="<?php the_title_attribute(); ?>" target="_blank"><?php the_title(); ?></a>
<?php echo "</li>";
            } // get_field
        } // if custom field exist
                   }
            echo '</ul>';
            wp_reset_postdata(); 
          }



   echo '</aside>'; 
}

}
    ?>
            


<?php }else{

        $terms = get_terms('partner-type'); 
        if ( $terms && ! is_wp_error($terms) ){

            
            foreach ( $terms as $term ) {
                echo '<h2>';
                echo $term->name;
   echo '</h2>';  


        $webargs = array( 
        'post_type' => 'partner-link',
        'posts_per_page' => -1,
        'tax_query' => array(
            array (
                'taxonomy' => $term->taxonomy,
                'field' => 'slug',
                'terms' => $term->slug
                    )
                ),
         );
        $webwork = new WP_Query( $webargs );
        
        if ( $webwork->have_posts() ) {
            echo '<ul>';
         while( $webwork->have_posts() ){
            $webwork->the_post();
        
if (function_exists ('get_field')){
            if(get_field('partner_link')){
                echo "<li>";
?>
              <a href="<?php the_field('partner_link'); ?>" title="<?php the_title_attribute(); ?>" target="_blank"><?php the_title(); ?></a>
<?php echo "</li>";
            } // get_field
        } // if custom field exist
                   }
            echo '</ul>';
            wp_reset_postdata(); 
          }
}

           ?>



  <?php 
            }
        } ?>