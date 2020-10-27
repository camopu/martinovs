			<!-- footer -->
<footer id="footer" class="footer">
    <div class="container">
        <div class="footer-wrapper">
            <div class="logo">
                <?php the_custom_logo(); ?>
                <h6>&copy;Martiniv’s coffee</h6>
            </div>
            <ul class="footer-menu">
                <li>
                    <?php wp_nav_menu( [ 'menu' => '22', 'menu_id' => 'menu-footer-01', 'menu_class' => 'sub-menu'  ]  ); ?>
                </li>
                <li>
                    <?php wp_nav_menu( [ 'menu' => '23', 'menu_id' => 'menu-footer-02', 'menu_class' => 'sub-menu'  ]  ); ?>
                </li>
                <li>
                    <?php wp_nav_menu( [ 'menu' => '24', 'menu_id' => 'menu-footer-03', 'menu_class' => 'sub-menu'  ]  ); ?>
                </li>
            </ul>
            <div class="footer-social">
                <a href="tel:<?php echo esc_html(get_option('phone','')); ?>"><strong><?php echo esc_html(get_option('phone','')); ?></strong></a>
                <div class="block-social">
                    <a href="<?php echo esc_html(get_option('instagram','')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/content/instagram.svg" alt="instagram"></a>
                    <a href="<?php echo esc_html(get_option('facebook','')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/content/facebook.svg" alt="facebook"></a>
                </div>
            </div>
            <div class="footer-address">
                <p><?php echo esc_html(get_option('address','')); ?></p>
                <div class="create">
                    <p>Создание <span>и продвижение</span> сайта</p>
                    <div class="logo">
                        <a href="/"><strong><img src="<?php echo get_template_directory_uri(); ?>/images/content/logo_imaris.svg" alt="imaris"></strong></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

        <script src="<?php echo get_template_directory_uri(); ?>/js/main.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.countdown.min.js"></script>

<script type="text/javascript">
  $("#countdown").countdown("<?php echo get_field('obratnyj_otschet', 105); ?>", function(event) {
    $(this).html(event.strftime(''
    + '<div><strong>%D:</strong><span>дней</span></div>'
    + '<div><strong>%H:</strong><span>часов</span></div>'
    + '<div><strong>%M:</strong><span>минут</span></div>'
    + '<div><strong>%S</strong><span>секунд</span></div>'));
});
</script>

<script type="text/javascript">
    if ($('body').hasClass('term-19')){
        $('h1').text('Торты на заказ'); 
    }
    if ($('.category-list > div:nth-child(1) .btn').text('Выбрать торты')){
        $('.category-list > div:nth-child(1) .btn').html('Выбрать торт<span></span>'); 
    }
    var breadcrumb = $(".breadcrumb").html().replace('Товары','Кондитерские изделия');
    $(".breadcrumb").html(breadcrumb);

</script>
	</body>
</html>
