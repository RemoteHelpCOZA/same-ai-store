<?php // Header template ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
    <div class="header-top">
        <div class="container">
            <span>24/7 Customer service 1-800-234-5678</span>
            <nav class="top-nav">
                <a href="#">Shipping & return</a>
                <a href="#">Track order</a>
            </nav>
        </div>
    </div>
    <div class="header-main">
        <div class="container">
            <div class="logo">
                <a href="<?php echo home_url(); ?>">
                    <img src="https://ext.same-assets.com/493246017/2725559975.svg" alt="Electronic Store">
                </a>
            </div>
            <nav class="main-nav">
                <?php wp_nav_menu(array('theme_location'=>'header-menu')); ?>
            </nav>
            <div class="header-cart">
                <?php echo sprintf('<a href="%s">Cart (%d)</a>', wc_get_cart_url(), WC()->cart->get_cart_contents_count()); ?>
            </div>
        </div>
    </div>
</header>
