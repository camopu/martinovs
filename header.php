<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
        
        <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:400,400i,500,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			  <header id="header" class="header">
    <div class="container">
        <div class="header-in">
            <div class="logo">
                <?php the_custom_logo(); ?>
            </div>
            <button class="header-btn">
                <span class="header-btn-icon"></span>
            </button>
            <div class="menu-wrapper">
                <nav class="navbar">
                    <h4 class="mobile-only">Меню</h4>
                        <?php wp_nav_menu(); ?>
                </nav>
                <div class="block-info">
                    <div class="box-phone">
                        <a href="tel:<?php echo esc_html(get_option('phone','')); ?>">
                            <!-- <span class="icon icon-phone"></span> -->
                            <img src="<?php echo get_template_directory_uri(); ?>/images/content/phone-icon.svg" alt="">
                            <strong><?php echo esc_html(get_option('phone','')); ?></strong>
                        </a>
                    </div>
                    <div class="box-lang">
                            <a href="#"><strong>RU</strong></a>
                            <ul class="submenu">
                                <li><a href="#">UA</a></li>
                            </ul>
                        </div>
                    <div class="box-menu">
                        <button class="btn-confect">КОНДИТЕРСКИЕ ИЗДЕЛИЯ<span class="header-btn-icon"></span></button>
                        <div class="menu-confect">
                            
                            <?php wp_nav_menu( [ 'menu' => 'КОНДИТЕРСКИЕ ИЗДЕЛИЯ' ] ); ?>
                            
                            <a href="/shop/" class="btn">Все изделия<span></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-search">
                <form role="s" method="get" id="searchform" action="/" class="search-form">
                    <input type="submit" id="searchsubmit" value="" class="search-form__submit">
                    <input type="text" value="" name="s" id="search" class="search-form__input" placeholder="Введите ваш запрос">
                    <label class="search-form__label" for="search"></label>
                </form>
                <a href="#" class="btn-search">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/content/search-latte-icon.svg" alt="">
                </a>
            </div>
            <div class="box-cart">
                <?php 
                    if (class_exists('woocommerce' )){
                        global $woocommerce; ?>
                        <a href="<?php echo $woocommerce->cart->get_cart_url() ?>" class="fix_cart_btn fz_an">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/content/cart.svg" alt="cart">
                            <span><?php echo sprintf($woocommerce->cart->cart_contents_count); ?></span>
                        </a>
                    <?php } 
                ?>
            </div>
        </div>
    </div>
  </header>

<section class="section-top">
    <div class="container">
<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>

</div>
</section>

			<!-- /header -->
