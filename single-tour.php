<?php get_header(); ?>

<main>
    <section class="single-tour">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                echo '<div class="tour-image">';
                the_post_thumbnail();
                echo '</div>';

                echo '<div class="tour-content">';
                the_title( '<h1>', '</h1>' );

                // Display custom fields
                $price = get_field('price');
                $duration = get_field('duration');
                if( $price ) {
                    echo '<p class="tour-price">Price: $' . esc_html($price) . '</p>';
                }
                if( $duration ) {
                    echo '<p class="tour-duration">Duration: ' . esc_html($duration) . ' days</p>';
                }

                the_content();
                echo '<a href="#" class="book-tour">Book This Tour</a>';
                echo '</div>';
            endwhile;
        endif;
        ?>
    </section>
</main>

<?php get_footer(); ?>
