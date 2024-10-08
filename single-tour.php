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
     if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>

        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>

        <?php if ( has_post_thumbnail() ) : ?>
            <div class="tour-thumbnail">
                <?php the_post_thumbnail( 'large' ); ?>
            </div>
        <?php endif; ?>

        <div class="tour-details">
            <p><?php echo __('Price:', 'tt-plugin') . ' ' . get_post_meta(get_the_ID(), '_tt_tour_price', true); ?></p>
            <p><?php echo __('Duration:', 'tt-plugin') . ' ' . get_post_meta(get_the_ID(), '_tt_tour_duration', true) . ' ' . __('Days', 'tt-plugin'); ?></p>
            <p><?php echo __('Location:', 'tt-plugin') . ' ' . get_post_meta(get_the_ID(), '_tt_tour_location', true); ?></p>
        </div>

        <?php echo do_shortcode('[tt_booking_form tour_id="' . get_the_ID() . '"]'); ?>

    <?php endwhile;
endif;
    
</main>

<?php get_footer(); ?>
