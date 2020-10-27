<?php /* Template Name: Книга отзывов */ ?>

<?php get_header(); ?>

  <main class="main">
    <section class="section-top section-review">
    	<div class="container">
              <h1><?php echo esc_html( get_the_title() ); ?></h1>
              <div class="block-wrapper">
              <div class="block-book dots-bg">
                  <ul class="book-list">
                      <li>
                          <h5><?php the_field('author_1'); ?></h5>
                          <p><?php the_field('text_1'); ?></p>
                      </li>
                      <li>
                          <h5><?php the_field('author_2'); ?></h5>
                          <p><?php the_field('text_2'); ?></p>
                      </li>
                      <li>
                          <h5><?php the_field('author_3'); ?></h5>
                          <p><?php the_field('text_3'); ?></p>
                      </li>
                      <li>
                        <h5><?php the_field('author_4'); ?></h5>
                        <p><?php the_field('text_4'); ?></p>
                    </li>
                  </ul>
              </div>
              <div class="block-form">
                  <h2>Оставьте отзыв</h2>
                  <?php echo do_shortcode( "[contact-form-7 id='206']" ); ?>
              </div>
          </div>
        </div>
    </section>
  </main>
  
<?php get_footer(); ?>