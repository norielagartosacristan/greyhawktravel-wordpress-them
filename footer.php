
<footer id="site-footer" class="site-footer">

    <div class="footer-content">
        <div class="footer-left">
            <h2>Greyhawk Travel and Tours</h2>
            <p>Explore the world with us! Offering the best travel and tour services.</p>
        </div>
        <div class="footer-center">
            <h3>Quick Links</h3>
            <?php
            wp_nav_menu( array(
                'theme_location' => 'footer-menu',
                'container'      => '',
                'menu_class'     => 'footer-menu'
            ) );
            ?>
        </div>
        <div class="footer-right">

        </div>
    </div>

    <div>
      <p>&copy; <?php echo date('Y'); ?> - <?php bloginfo('name'); ?>. All rights reserved.</p>
    </div>
    
</footer>

<?php wp_footer(); ?>
</body>
</html>
