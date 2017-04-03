<?php

require_once ('/function/style-and-script-connect.php'); // подключение скриптов и стилей

require_once ('/function/position-menu.php'); // меню

require_once ('/function/sidebars.php'); // создание боковых панелей

require_once ('/function/woocommerce/single_product_hooks.php'); // исправление хуков для отдельного товара woocommerce

require_once ('/function/woocommerce/catalog_product_hooks.php'); // исправление хуков для каталога товаров woocommerce

require_once ('/function/woocommerce/catalog_product_class.php'); // исправление классов для каталога товаров woocommerce

require_once ('/function/woocommerce/common_hooks.php'); // исправление общих хуков woocommerce

require_once ('/function/woocommerce/common_class.php'); // исправление общих классов woocommerce


// require_once ('/function/breadcrumbs.php'); // хлебные крошки

// require_once ('/function/front-date.php'); // Вывод даты. уточнить и разобрать

// require_once ('/function/meta.php'); // что-то связанное с мета. Разобрать


// require_once ('/function/loadmore-post.php'); // загрука дополнительных постов через ajax

// require_once ('/function/review-col-post.php'); // Счетчик просмотров. Разбиратьзобрать, откоментить

// require_once ('/function/front-post-filter.php'); // Сортировка постов по числовому параметру

// require_once ('/function/costom-post-page.php'); // Кастомное меню в админке

// require_once ('/function/costom-post-taxiomy.php'); // Кастомные таксономии для меню в админке

// require_once ('/function/post-filter.php'); // фильтры

// require_once ('/function/front-ajax.php'); // фронт ajax

//add_filter( 'woocommerce_enqueue_styles', 'jk_dequeue_styles' );
//function jk_dequeue_styles( $enqueue_styles ) {
//        // \wp-content\plugins\woocommerce\assets\css\woocommerce.css
//        // основные стили плагина  
//        unset( $enqueue_styles['woocommerce-general'] );    // удалить the gloss
//    // \wp-content\plugins\woocommerce\assets\css\woocommerce-layout.css
//        // разметка дизайна по умолчанию
//        unset( $enqueue_styles['woocommerce-layout'] );        // удалить layout
//        // \wp-content\plugins\woocommerce\assets\css\woocommerce-smallscreen.css
//        // оптимизация разметки при просмотре на мобильных устройствах
//    unset( $enqueue_styles['woocommerce-smallscreen'] );    // удалить the smallscreen optimisation
//    return $enqueue_styles;
//}