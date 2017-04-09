<?php 
// Отключаем стандартные хуки wordpress (каталог товара)

remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );

remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );

remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );

remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 ); // миниатюра товара в каталоге

// Добавляем свои хуки (каталог товара)

add_action( 'woocommerce_rb_before_shop_loop_item', 'woocommerce_rb_template_loop_product_link_open', 10 );

add_action( 'woocommerce_rb_after_shop_loop_item', 'woocommerce_rb_template_loop_product_link_close', 5 );

add_action( 'woocommerce_rb_after_shop_loop_item', 'woocommerce_rb_add_to_cart', 10 );

add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 9;' ), 20 ); // количество выводимых товаров в каталоге

add_action( 'woocommerce_rb_open_product_info', 'woocommerce_rb_open_product_info', 10 ); // открытие блока информации (зачем?)

add_action( 'woocommerce_shop_article', 'woocommerce_shop_article', 10 ); // вывод артикула

add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_catalog_product_thumbnail', 10 ); // миниатюра товара в каталоге