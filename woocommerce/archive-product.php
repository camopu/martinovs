<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<header class="woocommerce-products-header">
    <?php
    /**
     * Hook: woocommerce_archive_description.
     *
     * @hooked woocommerce_taxonomy_archive_description - 10
     * @hooked woocommerce_product_archive_description - 10
     */
    do_action( 'woocommerce_archive_description' );
    ?>
</header>
<main class="main main-category">

<section class="section-top">
        <div class="container">

  

            <h1><?php woocommerce_page_title(); ?></h1>
            <div class="block-desc">
                <div class="block-text">
                    <?php the_field('top_text', 100); ?>
                </div> 
                <div class="block-read">
                    <button class="more-link">Больше</button>
                </div>
            </div>
        </div>
    </section>
<section class="section section-category">
        <div class="container">
            <div class="mobile-only">
                <a href="#" class="btn-category">
                    <span class="header-btn-icon"></span>
                    <strong>категории изделий</strong>
                </a>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="menu-category">
                        <?php wp_nav_menu( [ 'menu' => '17' ] ); ?>

                    </div>
                    <div class="block-stock">
                        <div class="block-img">
                            <img src="<?php the_field('sale_image', 105); ?>" alt="stock">
                            <span>%</span>
                        </div>
                        <div class="block-text">
                            <h3><?php the_field('sale_title', 105); ?></h3>
                            <div class="mobile-only">
                                <p><strong><?php the_field('sale_subtitle', 105); ?></strong></p>
                            </div>
                            <div id="countdown"></div>
                        </div>
                        <a href="<?php the_field('sale_link', 105); ?>" class="btn">Подробнее<span></span></a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="category-list">
                        <?php
      $args = array(
        'taxonomy' => 'product_cat',
      );
      $product_categories = get_terms( $args );

      $count = count($product_categories);

    

      if ( $count > 0 ){
        foreach ( $product_categories as $product_category ) {
            
            $thumbnail_id = get_woocommerce_term_meta( $product_category->term_id, 'thumbnail_id', true );
            $term_id = $product_category->term_id;
            $post_id = 'product_cat_'.$term_id;  

            echo '<div class="category-list-item">';
            echo '<div class="block-photo" style="background-image: url(' . wp_get_attachment_url( $thumbnail_id ) . ' );"> ';
            echo '<div class="title"><span>' . $product_category->name . '</span></div>';
            echo '</div>';
            echo '<div class="block-info">';
            echo '<h3>' . $product_category->name . '</h3>';
            echo '<p>' . $product_category->description . '</p>';
            echo '<ul class="kind-of-category">';
            
            if( $custom_field = get_field('svadebnye', $post_id) ) {
                echo '<li>';
                echo '<span><img src="' . get_template_directory_uri() .'/images/content/dove.svg" alt=""></span>';
                echo 'Свадебные';
                echo '</li>';
            }
          
            if( $custom_field = get_field('detskie', $post_id) ) {
                echo '<li>';
                echo '<span><img src="' . get_template_directory_uri() .'/images/content/kid-teddy-bear.svg" alt=""></span>';
                echo 'Детские';
                echo '</li>';
            }

            if( $custom_field = get_field('dlja_muzhchin', $post_id) ) {            
                echo '<li>';
                echo '<span><img src="' . get_template_directory_uri() .'/images/content/man.svg" alt=""></span>';
                echo 'Для мужчин';
                echo '</li>';
            }

            if( $custom_field = get_field('dlja_zhenshhin', $post_id) ) {            
                echo '<li>';
                echo '<span><img src="' . get_template_directory_uri() .'/images/content/women.svg" alt=""></span>';
                echo 'Для женщин';
                echo '</li>';
            }

            if( $custom_field = get_field('k_jubileju', $post_id) ) {            
                echo '<li>';
                echo '<span><img src="' . get_template_directory_uri() .'/images/content/cake.svg" alt=""></span>';
                echo 'К юбилею';
                echo '</li>';
            }
            
            if( $custom_field = get_field('na_kazhdyj_den', $post_id) ) {            
                echo '<li>';
                echo '<span><img src="' . get_template_directory_uri() .'/images/content/calendar-daily-page-on-day-31.svg" alt=""></span>';
                echo 'На каждый день';
                echo '</li>';
            }

                echo '</ul>';
                echo '<a href="' . get_term_link( $product_category ) .'" class="btn">Выбрать ' . $product_category->name . '<span></span></a>';
                echo '</div>';
                echo '</div>';
            }
        }
    ?>
                </div>

<?php if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );
 ?>


            </div>
        </div>
    </section>

    <section class="section section-bottom">
        <div class="container">
            <h3 class="h3"><?php the_field('title_bottom', 100); ?></h3>
            <div class="more-text">
                <?php the_field('bottom_text', 100); ?>
            </div>
            <div class="block-read">
                <button class="more-link">Больше</button>
            </div>
        </div>
    </section>
</main>

<?php

get_footer( 'shop' );
