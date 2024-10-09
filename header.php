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

        <!-- Custom Navigation Bar -->
        <nav class="navbar">
            <div class="logo">
                <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
            </div>
            <ul class="nav-links">
                <li><a href="<?php echo home_url(); ?>">Home</a></li>
                <li><a href="<?php echo site_url('/tour-packages'); ?>">Holiday</a></li>
                <li><a href="<?php echo site_url('/flight-bookings'); ?>">Flight Bookings</a></li>
                <li><a href="<?php echo site_url('/hotel-reservations'); ?>">Hotel Reservations</a></li>
                <li><a href="<?php echo site_url('/about-us'); ?>">About Us</a></li>
                <li><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
            </ul>
            <div class="mobile-menu-icon">
                <span>&#9776;</span>
            </div>
        </nav>
    </div>
</header>

