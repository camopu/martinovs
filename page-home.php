<?php /* Template Name: Главная */ ?>

<?php get_header(); ?>

  <main class="main">
        <section class="section section-hero">
            <div class="container">
                <div class="block-wrapper dots-bg">
                    <div class="block-title">
                        <h1 class="dots-bg"><?php the_field('home_title'); ?></h1>
                        <?php the_field('home_list'); ?>
                    </div>
                    <div class="block-slider">
                        <div class="slider hero-slider">
                            <?php
                                $fotografii_dlja_slajdera = get_field('fotografii_dlja_slajdera');
                                if( $fotografii_dlja_slajdera ): ?>
                                 <div class="item">
                                    <img src="<?php echo esc_url( $fotografii_dlja_slajdera['izobrazhenie'] ); ?>" alt="">
                                </div>
                            <?php endif; ?>
                             <?php
                                $fotografii_dlja_slajdera = get_field('fotografii_dlja_slajdera');
                                if( $fotografii_dlja_slajdera ): ?>
                                 <div class="item">
                                    <img src="<?php echo esc_url( $fotografii_dlja_slajdera['izobrazhenie_2'] ); ?>" alt="">
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="block-info">
                        <div class="block-info__item block-info__item_address">
                            <h5>Адрес:</h5>
                            <?php the_field('home_address'); ?>
                        </div>
                        <div class="block-info__item block-info__item_time">
                            <h5>Режим работы:</h5>
                            <p><?php echo esc_html(get_option('dateday','')); ?></p>
                            <p><?php echo esc_html(get_option('datetime','')); ?></p>
                        </div>
                        <div class="block-info__item block-info__item_phone">
                            <h5>Телефон:</h5>
                            <p><a href="tel:<?php echo esc_html(get_option('phone','')); ?>"><?php echo esc_html(get_option('phone','')); ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="reserve">
                <button id="reserve-btn" class="reserve-btn"><span>ЗАКАЗАТЬ СТОЛИК</span></button>
                <div class="reserve-content">
                    <button class="close"><span></span></button>
                    <h3>Заказ столика</h3>
                    <?php echo do_shortcode("[contact-form-7 id='491']"); ?>
                </div>
            </div>
        </section>
        <section class="section-about-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="block-img">
                            <img src="<?php the_field('o_nas_izobrazhenie'); ?>;" alt="">
                            <div class="block-text block-text_cakes">
                                <p><strong>ca</strong><strong>kes</strong></p>
                            </div>
                            <div class="block-text block-text_coffee">
                                <p><strong>co</strong><strong>ff</strong><strong>ee</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="block-info dots-bg">
                            <h2 class="area-title"><?php the_field('home-about-title'); ?></h2>
                            <p><?php the_field('home-about'); ?></p>
                            <a href="<?php the_field('o_nas_knopka'); ?>" class="btn">ЧИТАТЬ БОЛЬШЕ<span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-social">
            <div class="container">
                <h2><?php the_field('my_v_instagram_zagolovok'); ?></h2>
                <ul class="block-photo block-list">
                    <li>
                        <?php
                            $lenta_instagramm_foto = get_field('lenta_instagramm_foto');
                            if( $lenta_instagramm_foto ): ?>
                            <img src="<?php echo esc_url( $lenta_instagramm_foto['foto_1'] ); ?>" />
                        <?php endif; ?>
                    </li>
                    <li>
                        <?php
                            $lenta_instagramm_foto = get_field('lenta_instagramm_foto');
                            if( $lenta_instagramm_foto ): ?>
                            <img src="<?php echo esc_url( $lenta_instagramm_foto['foto_2'] ); ?>" />
                        <?php endif; ?>
                    </li>
                    <li>
                        <?php
                            $lenta_instagramm_foto = get_field('lenta_instagramm_foto');
                            if( $lenta_instagramm_foto ): ?>
                            <img src="<?php echo esc_url( $lenta_instagramm_foto['foto_3'] ); ?>" />
                        <?php endif; ?>
                    </li>
                    <li>
                        <?php
                            $lenta_instagramm_foto = get_field('lenta_instagramm_foto');
                            if( $lenta_instagramm_foto ): ?>
                            <img src="<?php echo esc_url( $lenta_instagramm_foto['foto_4'] ); ?>" />
                        <?php endif; ?>
                    </li>
                  
                </ul>
                <div class="block-info">
                    <div class="block-info__item block-info__bg"><span class="dots-bg dots-bg__latte"></span></div>
                    <div class="block-info__item block-info__text">
                        <div class="block-info__title">
                            <h3><?php the_field('zagolovok_instagram'); ?></h3>
                            <p><?php the_field('tekst_dlja_instagram'); ?></p>
                        </div>
                        <a href="<?php the_field('podpisatsja_ssylka'); ?>" class="btn" data-modal="subscribe">Подписаться<span></span></a>
                    </div>
                    <div class="block-info__item block-info__bg"><span class="dots-bg dots-bg__latte"></span></div>
                </div>
            </div>
        </section>
        <section class="section section-newbrand">
            <div class="container">
                <h2><?php the_field('nashi_vkusnejshie_novinki_zagolovok'); ?></h2>
                
                <?php echo do_shortcode("[products_slider slide_to_scroll='1' slide_to_show='4' dots='false' arrows='false']"); ?>
                
                <a href="<?php the_field('nashi_vkusnejshie_novinki_ssylka'); ?>" class="btn">ПОСМОТРЕТЬ ВСЕ ИЗДЕЛИЯ<span></span></a>
            </div>
        </section>
        <section class="section section-stock">
            <div class="container d-flex">
                <div class="block-wrapper">
                    <div class="block-img">
                        <img src="<?php the_field('sale_image'); ?>" alt="stock">
                        <span>%</span>
                    </div>
                    <div class="block-text">
                        <h2><?php the_field('sale_title'); ?></h2>
                        <div class="indent">
                            <div class="desctop-only">
                                <p><?php the_field('sale_text'); ?></p>
                            </div>
                            <p><strong><?php the_field('sale_subtitle'); ?></strong></p>
                            <div id="countdown"></div>
                        </div>
                        <a href="<?php the_field('sale_link'); ?>" class="btn">Подробнее<span></span></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-review">
            <div class="container">
                <div class="block-wrapper">
                    <div class="block-book">
                        <h2>Книга отзывов</h2>
                        <ul class="book-list">
                           
                            <li>
                                <?php
                                    $kniga_otzyvov = get_field('kniga_otzyvov');
                                    if( $kniga_otzyvov ): ?>
                                        <h5><?php echo ( $kniga_otzyvov['imja'] ); ?></h5>
                                        <p><?php echo ( $kniga_otzyvov['tekst'] ); ?></p>
                                <?php endif; ?>
                            </li>
                            <li>
                                <?php
                                    $kniga_otzyvov = get_field('kniga_otzyvov');
                                    if( $kniga_otzyvov ): ?>
                                        <h5><?php echo ( $kniga_otzyvov['imja_2'] ); ?></h5>
                                        <p><?php echo ( $kniga_otzyvov['tekst_2'] ); ?></p>
                                <?php endif; ?>
                            </li>
                            <li>
                                <?php
                                    $kniga_otzyvov = get_field('kniga_otzyvov');
                                    if( $kniga_otzyvov ): ?>
                                        <h5><?php echo ( $kniga_otzyvov['imja_3'] ); ?></h5>
                                        <p><?php echo ( $kniga_otzyvov['tekst_3'] ); ?></p>
                                <?php endif; ?>
                            </li>
                        </ul>
                    </div>
                    <div class="block-form dots-bg">
                        <h2>Оставьте отзыв</h2>
                        <?php echo do_shortcode( "[contact-form-7 id='206']" ); ?>
                        
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-news">
            <div class="container">
                <h2>Последние новости</h2>
                <?php the_field('news_feed'); ?>
            </div>
        </section>
        <section class="section section-bottom">
            <div class="container">
                <h3><?php the_field('seo_blok_zagolovok'); ?></h3>
                <ul class="more-text">
                    <?php the_field('seo_blok_tekst'); ?>
                </ul>
                <div class="block-read">
                    <button class="more-link">Больше</button>
                </div>
            </div>
        </section>
        <div id="subscribe" class="modal">
            <div class="modal-content">
                <button class="close"><span></span></button>
                <h3>Следите за нами в Instagram</h3>
                <p>И будьте в курсе акций, розыгрышей и последних новинок меню</p>
                <a href="#" class="btn btn-submit">Подписаться<span></span></a>
            </div>
        </div>
    </main>
  
<?php get_footer(); ?>

