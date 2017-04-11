<?php 
// Отключаем стандартные хуки wordpress (карточка товара)

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 ); // кнопка добавить в корзину
//remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 ); // табы


// Добавляем свои хуки (карточка товара)

add_action( 'woocommerce_template_single_title', 'woocommerce_template_single_title', 5 ); // название 
add_action( 'woocommerce_template_single_rating', 'woocommerce_template_single_rating', 10 );
add_action( 'woocommerce_template_single_price', 'woocommerce_template_single_price', 10 );
add_action( 'woocommerce_template_single_excerpt', 'woocommerce_template_single_excerpt', 20 );
add_action( 'woocommerce_template_single_meta', 'woocommerce_template_single_meta', 40 );
add_action( 'woocommerce_rb_single_category', 'woocommerce_rb_single_category', 40 );
add_action( 'woocommerce_template_single_sharing', 'woocommerce_template_single_sharing', 50 );
add_action( 'woocommerce_rb_single_add_to_cart', 'woocommerce_rb_single_add_to_cart', 30 ); // кнопка добавить в корзину
add_action( 'woocommerce_rb_single_availability', 'woocommerce_rb_single_availability', 30 ); // наличие
add_action( 'woocommerce_to_wish_list', 'woocommerce_to_wish_list', 50 ); // кнопка в желаемое
add_action( 'woocommerce_rb_single_atributs_info', 'woocommerce_rb_single_atributs_info', 50 ); // атрибуты-информация о товаре
add_action( 'woocommerce_rb_single_description', 'woocommerce_rb_single_description', 50 ); // Описание товара
add_action( 'woocommerce_rb_open_comments', 'woocommerce_rb_open_comments', 50 ); // Вывод комментариев целиком
add_action( 'woocommerce_rb_comments', 'woocommerce_rb_comments', 50 ); // Вывод комментариев целиком
add_action( 'woocommerce_rb_comment_gravatar', 'woocommerce_rb_comment_gravatar', 50 ); // Вывод аватара автора
add_action( 'woocommerce_rb_comment_rating', 'woocommerce_rb_comment_rating', 50 ); // Вывод рейтинга продукту в комменте
add_action( 'woocommerce_rb_comment_meta', 'woocommerce_rb_comment_meta', 50 ); // Вывод даты и имени автора
add_action( 'woocommerce_rb_comment_text', 'woocommerce_rb_comment_text', 50 ); // Вывод текста комментария
