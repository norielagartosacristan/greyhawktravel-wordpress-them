<?php get_header(); ?>

<main>
    <section class="featured-tours">
        <h2>Featured Tours</h2>
        <?php
        // Custom query for displaying tours
        $args = array( 'post_type' => 'tour', 'posts_per_page' => 3 );
        $tour_query = new WP_Query( $args );
        if ( $tour_query->have_posts() ) :
            while ( $tour_query->have_posts() ) : $tour_query->the_post();
                echo '<div class="tour">';
                the_post_thumbnail();
                the_title( '<h3>', '</h3>' );
                the_excerpt();
                echo '<a href="' . get_permalink() . '" class="book-tour">View Tour</a>';
                echo '</div>';
            endwhile;
        else :
            echo '<p>No tours found.</p>';
        endif;
        wp_reset_postdata();
        ?>
    </section>

    <section class="popular-destinations">
        <h2>Popular Destinations</h2>
        <div class="destination-grid">
            <div class="destination">
                <img src="path-to-image.jpg" alt="Destination">
                <h3>Paris, France</h3>
                <p>Explore the city of lights...</p>
            </div>
            <div class="destination">
                <img src="path-to-image.jpg" alt="Destination">
                <h3>Tokyo, Japan</h3>
                <p>Discover the blend of tradition and technology...</p>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
