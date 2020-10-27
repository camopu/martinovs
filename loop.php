<ul class="products columns-3">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<?php 

		$new = get_field('product-new');
		if ($new) {
		  $productnew = 'product-new';
		}
	?>

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
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2 class="search-noresult"><?php echo ('По запросу '); echo ('«'); echo get_search_query(); echo ('»'); echo sprintf( __( ' ничего не найдено.' ), $wp_query->found_posts);?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
</ul>