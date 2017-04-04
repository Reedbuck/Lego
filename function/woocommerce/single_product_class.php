<?php 

/**
*
*   КНОПКА ДОБАВИТЬ В КОРЗИНУ
*
*/


if ( ! function_exists( 'woocommerce_rb_single_add_to_cart' ) ) {
	function woocommerce_rb_single_add_to_cart() {
		global $product;
		do_action( 'woocommerce_' . $product->product_type . '_add_to_cart' );
	}
}

/**
*
*   НАЛИЧИЕ
*
*/


if ( ! function_exists( 'woocommerce_rb_single_availability' ) ) {
	function woocommerce_rb_single_availability() {
		global $product;
		// наличие
        $availability      = $product->get_availability();
        $availability_html = empty( $availability['availability'] ) ? '' : '<p class="stock ' . esc_attr( $availability['class'] ) . '">' . esc_html( $availability['availability'] ) . '</p>';

        echo apply_filters( 'woocommerce_stock_html', $availability_html, $availability['availability'], $product );
	}
}