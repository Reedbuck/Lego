<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php get_header( 'list' ); ?>
    <?php wp_head(); ?>
    
</head>
    
    
<body <?php body_class(); ?>>
    <header>
        <div class="header__top">
            <div class="container">
                <div class="col-md-12 subject-case">
                    <div class="subject-case__options wish">
                        <a href="#">
                            <span>
                                <img src="<?php bloginfo('template_url'); ?>/images/wishlist.svg">
                            </span>
                            Желания (1)
                        </a>
                    </div>
                    <div class="subject-case__options profile">
                        <a href="#">
                            <span>
                                <img src="<?php bloginfo('template_url'); ?>/images/account.svg">
                            </span>
                            Кабинет
                        </a>
                    </div>
                    <div class="subject-case__options basket">
                            <a href="#">
                            <span>
                                <img src="<?php bloginfo('template_url'); ?>/images/my-bag.svg">
                            </span>
                            Корзина
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__bottom">
            <div class="container vertical-align">
                <div class="col-md-2 logo"><a href="/"><img src="<?php bloginfo('template_url'); ?>/images/logo.png"></a></div>
                <div class="col-md-5 navigation-menu">
                    <?php wp_nav_menu( array( 'container_class' => 'navigation-menu__top', 'theme_location' => 'top_menu' ) ); ?>
                </div>
                <div class="col-md-3">
                    <form role="search" method="get" id="searchform" action="/" class="">
                        <div class="search-form">
                            <input type="text" class="search-form__input" placeholder="слово для поиска" name="s" id="s">
                            <input type="submit" class="search-form__submite" value="">
                        </div>
                    </form>
                </div>
                <div class="col-md-2 contact-info">
                    <div class="contact-info__telephone">+7 499 000 00 00</div>
                    <div class="contact-info__description">Звоните нам круглосуточно!</div>
                </div>
            </div>
        </div>
    </header>