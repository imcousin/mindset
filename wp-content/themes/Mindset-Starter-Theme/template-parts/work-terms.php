<?php
        $terms = get_terms('work-type'); 
        if ( $terms && ! is_wp_error($terms) ){

        echo '<h3>Work Types</h3>';
            echo '<ul>';
            foreach ( $terms as $term ) {
                echo '<li><a href="';
                echo get_term_link( $term );
                echo '">';
                echo $term->name;
                echo '</a></li>';   
            }
            echo '</ul>';
        } ?>