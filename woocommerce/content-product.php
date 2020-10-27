<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

<?php 
if ( get_field('product-new') == 'yes' ) {
	$productnew = 'product-new';
} ?>

<li <?php wc_product_class( '', $product ); ?> id="<?php echo $productnew; ?>">

<?php 

$image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );

$url = get_permalink( $product_id );

?>

	<div class="products-thumbnail">
		<a href="<?php echo get_permalink($product_id); ?>" class="products-overlay"></a>
		<img src="<?php echo $image[0]; ?>" alt="">
		<a href="<?php echo get_permalink($product_id); ?>" class="btn">Подробнее<span></span></a>
	</div>
	<div class="products-content">
		<a href="<?php echo get_permalink($product_id); ?>"><h4><?php echo get_the_title($product_id); ?></h4></a>
		<?php do_action( 'woocommerce_after_shop_loop_item_title' ); ?>
	</div>
	
</li>
