<?php
$args = array(
    'post_type' => 'tour',
    'posts_per_page' => 10,
    'meta_key' => 'price',
    'orderby' => 'meta_value_num',
    'order' => 'ASC',
);
$tour_query = new WP_Query( $args );