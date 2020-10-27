<?php /* Template Name: Контакты */ ?>

<?php get_header(); ?>

  <main class="main">
    <section class="section-top section-review">
    	<div class="container">
              <h1><?php echo esc_html( get_the_title() ); ?></h1>
        </div>
        <div class="container">
            <div class="address">
                <div class="address-item">
                    <h5>Адрес:</h5>
                    <p><?php echo esc_html(get_option('address','')); ?></p>
                </div>
                <div class="address-item">
                    <h5>Режим работы:</h5>
                    <p><?php echo esc_html(get_option('dateday','')); ?></p>
                    <p><?php echo esc_html(get_option('datetime','')); ?></p>
                </div>
                <div class="address-item">
                    <h5>Телефон:</h5>
                    <p><a href="tel:+<?php echo esc_html(get_option('phone','')); ?>"><?php echo esc_html(get_option('phone','')); ?></a></p>
                </div>
            </div>
              <div class="block-wrapper">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2543.1558888389573!2d30.37974663558202!3d50.40093230648228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cbce28066b09%3A0x772f750a2eebb09d!2zTWlyYSAyNywg0YPQuy4g0JzQuNGA0LAsIDI3LCDQodC-0YTQuNC10LLRgdC60LDRjyDQkdC-0YDRidCw0LPQvtCy0LrQsCwg0JrQuNC10LLRgdC60LDRjyDQvtCx0LvQsNGB0YLRjCwgMDgxMzE!5e0!3m2!1sru!2sua!4v1554995771244!5m2!1sru!2sua" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </div>
                <div class="block-form">
                    <h2>Задайте вопрос</h2>
                    <?php echo do_shortcode('[contact-form-7 id="359"]'); ?>
                    </form>
                </div>
            </div>
        </div>
    </section>
  </main>
  
<?php get_footer(); ?>