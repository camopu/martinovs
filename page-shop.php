<?php
/* Template Name: Кондитерские изделия */
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

<script type="text/javascript">
  $("#countdown").countdown("<?php echo get_field('obratnyj_otschet', 105); ?>", function(event) {
    $(this).html(event.strftime(''
    + '<div><strong>%D:</strong><span>дней</span></div>'
    + '<div><strong>%H:</strong><span>часов</span></div>'
    + '<div><strong>%M:</strong><span>минут</span></div>'
    + '<div><strong>%S</strong><span>секунд</span></div>'));
});
</script>

<?php

get_footer( 'shop' );
