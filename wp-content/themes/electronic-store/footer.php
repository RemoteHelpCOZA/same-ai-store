<?php // Footer template ?>
<footer class="site-footer">
    <div class="footer-widgets container">
        <?php if ( is_active_sidebar('footer-1') ) : ?>
            <?php dynamic_sidebar('footer-1'); ?>
        <?php endif; ?>
        <?php if ( is_active_sidebar('footer-2') ) : ?>
            <?php dynamic_sidebar('footer-2'); ?>
        <?php endif; ?>
        <?php if ( is_active_sidebar('footer-3') ) : ?>
            <?php dynamic_sidebar('footer-3'); ?>
        <?php endif; ?>
    </div>
    <nav class="footer-nav container">
        <?php wp_nav_menu(array('theme_location'=>'footer-menu')); ?>
    </nav>
    <div class="footer-bottom container">
        <span>&copy; <?php echo date('Y'); ?> Electronic Store</span>
        <div class="footer-payment">
            <img src="https://ext.same-assets.com/493246017/3788522074.png" alt="Payment Icons">
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
