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
                the_content();
                echo '<a href="#" class="book-tour">Book This Tour</a>';
                echo '</div>';
            endwhile;
        endif;
        ?>
    </section>
</main>

<?php get_footer(); ?>
