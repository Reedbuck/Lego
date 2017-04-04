<?php 
// Отключаем стандартные хуки wordpress (карточка товара)

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 ); // кнопка добавить в корзину


// Добавляем свои хуки (карточка товара)

add_action( 'woocommerce_template_single_title', 'woocommerce_template_single_title', 5 ); // название 
add_action( 'woocommerce_template_single_rating', 'woocommerce_template_single_rating', 10 );
add_action( 'woocommerce_template_single_price', 'woocommerce_template_single_price', 10 );
add_action( 'woocommerce_template_single_excerpt', 'woocommerce_template_single_excerpt', 20 );
add_action( 'woocommerce_template_single_meta', 'woocommerce_template_single_meta', 40 );
add_action( 'woocommerce_template_single_sharing', 'woocommerce_template_single_sharing', 50 );
add_action( 'woocommerce_rb_single_add_to_cart', 'woocommerce_rb_single_add_to_cart', 30 ); // кнопка добавить в корзину
add_action( 'woocommerce_rb_single_availability', 'woocommerce_rb_single_availability', 30 ); // наличие
add_action( 'woocommerce_to_wish_list', 'woocommerce_to_wish_list', 50 ); // кнопка в желаемое

//remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );
//remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );




//remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
//remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
//remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
//remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
//remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );

//remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
//remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
//remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );