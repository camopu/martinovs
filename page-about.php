<?php /* Template Name: О нас */ ?>

<?php get_header(); ?>

  <main class="main">
    <section class="section-top">
        <div class="container">
              <h1><?php echo esc_html( get_the_title() ); ?></h1>
        </div>
    </section>
    <section class="section-title">
        <div class="container-min">
            <div class="block-title">
                <h2><?php the_field('title_first'); ?></h2>
            </div>
            <div class="block-photo" style="background-image: url(<?php the_field('image_first'); ?>);"></div>
        </div>
    </section>
    <section class="section section-history">
        <div class="container-min">
            <div class="block-photo-before" >
                <img src="<?php the_field('image_second'); ?>;" alt="cafe">
            </div>
            <div class="block-text">
                <h2><?php the_field('title_second'); ?></h2>
                <?php the_field('text_second'); ?>
            </div>
        </div>
    </section>
    <section class="section-about">
        <div class="container-min">
            <div class="block-text">
                <blockquote>
                    <?php the_field('text_third'); ?>
                </blockquote>
            </div>
            <div class="block-photo-before" >
                <img src="<?php the_field('image_third'); ?>;" alt="cafe">
            </div>
            <div class="block-offer">
               <?php the_field('text_video'); ?>
            </div>
        </div>
    </section>
    <section class="section section-video">
        <div class="container-min">
            <div class="block-video">
                <div class="videoWrapper">
                    <?php the_field('video'); ?>
                </div>
            </div>            
        </div>
    </section>
  </main>
  
<?php get_footer(); ?>