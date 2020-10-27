<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<h1>Результаты поиска</h1>

			<p class="result-search"><?php echo ('По запросу '); echo ('<b>'); echo get_search_query(); echo ('</b>'); echo sprintf( __( ' найдено %s товаров в категориях' ), $wp_query->found_posts);?></p>

		</section>
		<!-- /section -->
	</main>

	<section class="section section-category">
        <div class="container">
            <div class="mobile-only">
                <div class="d-flex">
                    <a href="#" class="btn-category">
                        <span class="header-btn-icon"></span>
                        <strong>категории изделий</strong>
                    </a>
                </div>
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
                    <div class="products">
                        <?php get_template_part('loop'); ?>
                    </div>
                  <!--   <div class="block-show-more">
                        <a href="#" class="btn">Показать еще<span></span></a>
                    </div> -->
                    
                    <div class="woocommerce">
                    	<nav class="woocommerce-pagination">
							<?php get_template_part('pagination'); ?>
						</nav>
					</div>
                    
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

<?php get_footer(); ?>
