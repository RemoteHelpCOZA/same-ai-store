<?php /* Template for homepage */ ?>
<?php get_header(); ?>
<main class="site-main">
    <section class="hero">
        <div class="container">
            <div class="hero-image">
                <img src="https://ext.same-assets.com/493246017/836114097.jpeg" alt="The best home entertainment system">
            </div>
            <div class="hero-content">
                <h1>The best home entertainment system is here</h1>
                <p>Sit diam odio eget rhoncus volutpat est nibh velit posuere egestas.</p>
                <a class="button" href="#">Shop now</a>
            </div>
        </div>
    </section>
    <section class="features">
        <div class="container">
            <div class="feature-item">
                <img src="https://ext.same-assets.com/493246017/3007511459.jpeg" alt="Free Shipping">
                <h4>Free shipping</h4>
                <p>When you spend $80 or more</p>
            </div>
            <div class="feature-item">
                <img src="https://ext.same-assets.com/493246017/645151438.jpeg" alt="24/7 Support">
                <h4>We are available 24/7</h4>
                <p>Need help? contact us anytime</p>
            </div>
            <div class="feature-item">
                <img src="https://ext.same-assets.com/493246017/387475781.png" alt="Easy Returns">
                <h4>Satisfied or return</h4>
                <p>Easy 30-day return policy</p>
            </div>
            <div class="feature-item">
                <img src="https://ext.same-assets.com/493246017/3788522074.png" alt="Secure Payment">
                <h4>100% secure payments</h4>
                <p>Visa, Mastercard, Stripe, PayPal</p>
            </div>
        </div>
    </section>
    <section class="categories">
        <div class="container">
            <?php
            // Placeholder for category links
            $terms = get_terms( array(
                'taxonomy' => 'product_cat',
                'orderby' => 'count',
                'order' => 'DESC',
                'number' => 8,
            ) );
            if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
                echo '<div class="category-grid">';
                foreach ( $terms as $term ) :
                    $thumbnail_id = get_term_meta( $term->term_id, 'thumbnail_id', true );
                    $image_url = wp_get_attachment_url( $thumbnail_id );
                    echo '<a class="category-item" href="' . get_term_link( $term ) . '">';
                    echo '<img src="' . esc_url( $image_url ) . '" alt="' . esc_attr( $term->name ) . '">';
                    echo '<h3>' . esc_html( $term->name ) . '</h3>';
                    echo '<span>' . sprintf( '%d Products', $term->count ) . '</span>';
                    echo '</a>';
                endforeach;
                echo '</div>';
            endif;
            ?>
        </div>
    </section>
    <!-- TODO: Today’s Best Deal and other sections -->
</main>
<?php get_footer(); ?>
