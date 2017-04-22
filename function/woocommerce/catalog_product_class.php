<?php 
    
function woocommerce_rb_template_loop_product_link_open() {
	echo '<a href="' . get_the_permalink() . '" class="product-cart__link">';
}
/**
 * Insert the opening anchor tag for products in the loop.
 */
function woocommerce_rb_template_loop_product_link_close() {
	echo '</a>';
}


if ( ! function_exists( 'woocommerce_rb_add_to_cart' ) ) {

	/**
	 * Get the add to cart template for the loop.
	 *
	 * @subpackage	Loop
	 */
	function woocommerce_rb_add_to_cart( $args = array() ) {
		global $product;

		if ( $product ) {
			$defaults = array(
				'quantity' => 1,
				'class'    => implode( ' ', array_filter( array(
						'button',
						'product_type_' . $product->product_type,
						$product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
						$product->supports( 'ajax_add_to_cart' ) ? 'ajax_add_to_cart' : ''
				) ) )
			);

			$args = apply_filters( 'woocommerce_loop_add_to_cart_args', wp_parse_args( $args, $defaults ), $product );

			wc_get_template( 'loop/add-to-cart.php', $args );
		}
        echo "</div>";
	}
}

if ( ! function_exists( 'woocommerce_shop_article' ) ) {

	/**
	 * Get the product article for the info.
	 *
	 * @subpackage	info
	 */
	function woocommerce_shop_article() {
        
        global $product;
        echo '<div class="product-cart__article">'. $product->sku .'</div>';
        
	}
}


if ( ! function_exists( 'woocommerce_catalog_product_thumbnail' ) ) {

	/**
	 * Get the product thumbnail for the loop.
	 *
	 * @subpackage	Loop
	 */
	function woocommerce_catalog_product_thumbnail() {
        global $product;
        $attributes = $product->get_attributes();
        $temp_url = get_bloginfo('template_url');
        $current_product = ( isset( $atts['product_id'] ) ) ? wc_get_product( $atts['product_id'] ) : false;
        $current_product = $current_product ? $current_product : $product;
        $product_id = $product->id;
        $exists = YITH_WCWL()->is_product_in_wishlist( $current_product->id, $default_wishlist );
        if( $exists == '' ){
            echo '<div class="product-cart__wish"><a href="'. esc_url( add_query_arg( 'add_to_wishlist', $product_id ) ) .'"><img src="'. $temp_url .'/images/grey-wishlist.svg"></a></div>';
        } else {
            echo '<div class="product-cart__wish"><a href="?remove_from_wishlist='. $product_id .'"><img src="'. $temp_url .'/images/wishlist.svg"></a></div>';
        }
        $values = wc_get_product_terms( $product->id, $attributes['pa_years-creation']['name'], array( 'fields' => 'names' ) );
        
        
        if( $values[0] == date('Y') ){
            echo '<div class="product-cart__new"><a href="/shop?filter_years-creation=2017">NEW</a></div>';
        }
        echo woocommerce_get_product_thumbnail();
	}
}

/**
*
*   Информация о продукте в карточке товара (открытие)
*
*/


if ( ! function_exists( 'woocommerce_rb_open_product_info' ) ) {

	/**
	 * Get the product article for the info.
	 *
	 * @subpackage	info
	 */
	function woocommerce_rb_open_product_info() {
    
        echo '<div class="product-cart__info">';
        
	}
}


// добавить в wishlist

if ( ! function_exists( 'woocommerce_rb_add_wish_catalog' ) ) {

	/**
	 * Output the WooCommerce Breadcrumb.
	 *
	 * @param array $args
	 */
	function woocommerce_rb_add_wish_catalog( ) {
		$wishlist_url = YITH_WCWL()->get_wishlist_url();
        $svg_url = get_template_directory_uri();
        $count = YITH_WCWL()->count_products( $wishlist_id );
        echo '  <a href="'. $wishlist_url . '">
                    <span>
                        <img src="'. $svg_url . '/images/wishlist.svg">
                    </span>
                    Желания ('.$count.')
                </a>';
	}
}