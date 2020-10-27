<?php get_header(); ?>

<main class="main">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <section class="section-hero">
        <div class="container-min">
            <div class="block-title">
                <h1><?php the_title(); ?></h1>
                <div class="date-news">
                    <p><?php the_date(); ?></p>
                </div>
            </div>
            <div class="block-text">
                <?php the_field('pervyj_abzac'); ?>
            </div>
            <div class="block-img" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
        </div>
        <div class="btn-news btn-news-prev"><?php previous_post_link('%link', 'Предыдущая статья', true); ?></div>
        <div class="btn-news btn-news-next"><?php next_post_link('%link', 'Следующая статья', true); ?></div>
    </section>

    <?php if( get_field("quote") ): ?>
    <section class="section section-blockquote">
        <div class="container-min">
            <blockquote>
                <p><?php the_field('quote'); ?></p>
            </blockquote>   
        </div>
    </section>
    <?php endif; ?>

	<section class="section-social">
        <div class="container-min">
        	<?php if( get_field("foto_1") ): ?>
            <div class="photo-list">
                <ul>
                	<?php
                        $foto_posta = get_field('foto_posta');
						if( $foto_posta ): ?>
							<li><img src="<?php echo ( $foto_posta['foto_1'] ); ?>" alt="cafe"></li>
							<li><img src="<?php echo ( $foto_posta['foto_2'] ); ?>" alt="cafe"></li>
                    <?php endif; ?>
                </ul>
            </div>
    		<?php endif; ?>

        	<?php if( get_field("main_text") ): ?>
            <div class="block-text">
                <?php the_field('main_text'); ?>
            </div>
    		<?php endif; ?>

            <div class="mobile-only">
                <div class="btn-wrapper">
                    <div class="btn-news btn-news-prev"><?php previous_post_link('%link', 'Предыдущая статья', true); ?></div>
        			<div class="btn-news btn-news-next"><?php next_post_link('%link', 'Следующая статья', true); ?></div>
                </div>
            </div>

            <div class="block-share">
                <h5><?php the_field('share_social_title'); ?></h5>
                <ul class="social-list">
					<?php if( get_field("link_facebook") ): ?>
                    	<li><a href="<?php the_field('link_facebook'); ?>"><i class="fab fa-facebook-f"></i></a></li>
                   	<?php endif; ?>
                   	<?php if( get_field("link_google") ): ?>
                    	<li><a href="<?php the_field('link_google'); ?>"><i class="fab fa-google-plus-g"></i></a></li>
                   	<?php endif; ?>
                    <?php if( get_field("link_linkedin") ): ?>
                    	<li><a href="<?php the_field('link_linkedin'); ?>"><i class="fab fa-linkedin-in"></i></a></li>
                   	<?php endif; ?>
                    <?php if( get_field("link_pinterest") ): ?>
	                    <li><a href="<?php the_field('link_pinterest'); ?>"><i class="fab fa-pinterest-p"></i></a></li>
                   	<?php endif; ?>
                    <?php if( get_field("link_instagram") ): ?>
                    	<li><a href="<?php the_field('link_instagram'); ?>"><i class="fab fa-instagram"></i></a></li>
                   	<?php endif; ?>
                    <?php if( get_field("link_twitter") ): ?>
                    	<li><a href="<?php the_field('link_twitter'); ?>"><i class="fab fa-twitter"></i></a></li>
                   	<?php endif; ?>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="block-info">
                <div class="block-info__item block-info__bg"><span class="dots-bg dots-bg__latte"></span></div>
                <div class="block-info__item block-info__text">
                    <div class="block-info__title">
                        <h3><?php the_field('instagram_title'); ?></h3>
                        <p><?php the_field('instagram_text'); ?></p>
                    </div>
                    <a href="<?php the_field('instagram_link'); ?>" class="btn">Подписаться<span></span></a>
                </div>
                <div class="block-info__item block-info__bg"><span class="dots-bg dots-bg__latte"></span></div>
            </div>
        </div>
    </section>

	<section class="section section-news">
        <div class="container">
            <h2><?php the_field('other_news'); ?></h2>
           	<?php echo do_shortcode('[carousel_slide id="259"]'); ?>
        </div>
    </section>


   <?php endwhile; ?>

	<?php else: ?>

	<?php endif; ?>

  </main>

<?php get_footer(); ?>
