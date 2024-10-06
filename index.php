<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <div class="header-content">
        <h1><?php bloginfo('name'); ?></h1>
        <p><?php bloginfo('description'); ?></p>
        <nav>
            <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
        </nav>
    </div>
</header>

<main>
    <section class="featured-tours">
        <h2>Featured Tours</h2>
        <?php
        // Example of a custom query for "Tour" posts
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
        <!-- Here you can use custom content, or even a custom post type for destinations -->
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
            <!-- Add more destinations as needed -->
        </div>
    </section>
</main>

<footer>
    <p>&copy; <?php echo date('Y'); ?> - <?php bloginfo('name'); ?>. All rights reserved.</p>
</footer>

<?php wp_footer(); ?>
</body>
</html>
