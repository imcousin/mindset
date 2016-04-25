    <?php
 //conditions
$args = array( 
        'post_type' => 'compliment',
        'posts_per_page' => 1,
        'orderby' => 'rand'
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
