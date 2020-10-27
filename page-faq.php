<?php /* Template Name: Вопрос-Ответ */ ?>

<?php get_header(); ?>

  <main class="main">
    <section class="section-top section-review">
    	<div class="container">
            <h1><?php echo esc_html( get_the_title() ); ?></h1>
        <div class="block-wrapper">
                <div class="block-book dots-bg">
                    <ul class="faq-list">
                        <li>
                            <h4><?php the_field('first_title'); ?></h4>
                            <p><?php the_field('first_text'); ?></p>
                        </li>
                        <li>
                            <h4><?php the_field('second_title'); ?></h4>
                            <p><?php the_field('second_text'); ?></p>
                        </li>
                        <li>
                            <h4><?php the_field('third_title'); ?></h4>
                            <p><?php the_field('third_text'); ?></p>
                        </li>
                    </ul>
                </div>
                <div class="block-form">
                    <h2>Задайте вопрос</h2>
                    <?php echo do_shortcode('[contact-form-7 id="359"]'); ?>
                </div>
            </div>
        </div>

    </section>
  </main>
  
<?php get_footer(); ?>