<?php 
// Отключаем стандартные хуки wordpress 

remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 ); // хлебные крошки

// Добавляем свои хуки

add_action( 'woocommerce_rb_breadcrumb', 'woocommerce_rb_breadcrumb', 20 ); // хлебные крошки