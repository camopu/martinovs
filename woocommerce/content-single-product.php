<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
	<section class="section-hero">
		<div class="container">
            <div class="block-wrapper dots-bg">
                <div class="block-title">
					<?php the_title( '<h1 class="product_title entry-title">', '</h1>' ); ?>
                </div>
                <div class="description">
					<?php the_content(); ?>
                    <div class="description-order">
                        <div class="woocommerce-Price-amount">
                        	<?php echo $product->get_price_html(); ?><span> грн/кг</span>
                        </div>
					
						<form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
							<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

							<?php
							do_action( 'woocommerce_before_add_to_cart_quantity' );
							do_action( 'woocommerce_after_add_to_cart_quantity' );
							?>

							<button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="single_add_to_cart_button button alt btn">Заказать<span></span></button>

							<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
						</form>
                        
                    </div>
                    <div class="description-text">
                        <ul class="description-list">
							<?php do_action( 'woocommerce_product_additional_information', $product ); ?>
                        </ul>
                        <?php if ( get_field('banner') == 'yes' ) {  ?>
                            <?php dynamic_sidebar( 'widget-area-1' ); ?>
                        <?php } ?>
                    </div>
                </div>
                <div class="block-slider">
                  <?php
                    /**
                     * Hook: woocommerce_before_single_product_summary.
                     *
                     * @hooked woocommerce_show_product_sale_flash - 10
                     * @hooked woocommerce_show_product_images - 20
                     */
                    do_action( 'woocommerce_before_single_product_summary' );
                    ?>
                </div>
            </div>
        </div>
    </section>

	<section class="section section-newbrand">
        <div class="container">
            <h2>С этим изделием заказывают</h2>

			<?php echo do_shortcode("[products_slider slide_to_scroll='1' slide_to_show='4' dots='false' arrows='false']"); ?>

            <a href="/martinovs/shop/" class="btn">ПОСМОТРЕТЬ ВСЕ ИЗДЕЛИЯ<span></span></a>
        </div>
    </section>

    <section class="section section-newbrand">
        <div class="container">
            <h2>Другие изделия</h2>
            <?php echo do_shortcode("[products_slider slide_to_scroll='1' slide_to_show='4' dots='false' arrows='false']"); ?>
            <a href="/martinovs/shop/" class="btn">ПОСМОТРЕТЬ ВСЕ ИЗДЕЛИЯ<span></span></a>
        </div>
    </section>

</div>

