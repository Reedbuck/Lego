<?php


function reedbuck_register_wp_sidebars() {
 
	/* первый сайдбар */
	register_sidebar(
		array(
			'id' => 'catalog', // уникальный id
			'name' => 'Магазин', // название сайдбара
			'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.', // описание
			'before_widget' => '<div id="%1$s" class="side widget deplay %2$s">', // по умолчанию виджеты выводятся <li>-списком
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">', // по умолчанию заголовки виджетов в <h2>
			'after_title' => '</h3>',
		)
        
	);   
}

add_action( 'widgets_init', 'reedbuck_register_wp_sidebars' );