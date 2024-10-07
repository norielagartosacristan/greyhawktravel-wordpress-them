<?php get_header(); ?>

<main>
    <section class="default-page">
        <h1><?php the_title(); ?></h1>
        <div class="page-content">
            <?php
            // Display page content
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    the_content();
                endwhile;
            endif;
            ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
