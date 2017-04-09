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

/**
*
*   ЖЕЛАЕМОЕ
*
*/


if ( ! function_exists( 'woocommerce_to_wish_list' ) ) {

	/**
	 *     
	 * В желаемое wish list
	 * 
	 */
	function woocommerce_to_wish_list() {
    
        echo '<div class="to-wish-list">'. do_shortcode( "[yith_wcwl_add_to_wishlist]" ) .'</div>';
        
	}
}

/**
*
*   КАТЕГОРИЯ ПРОДУКТА
*
*/

if ( ! function_exists( 'woocommerce_rb_single_category' ) ) {

	/**
	 *     
	 * кнопка категории текущего товара
	 * 
	 */
	function woocommerce_rb_single_category() {
        
        global $post, $product;

        $cat_count = sizeof( get_the_terms( $post->ID, 'product_cat' ) );
        
        echo '<div class="more-product-cat">Больше товаров этой категории</div>';
    
        echo $product->get_categories( ', ', '<span class="posted_in">' . _n( '', 'Categories:', $cat_count, 'woocommerce' ) . ' ', '</span>' );
        
	}
}


if ( ! function_exists( 'woocommerce_rb_single_atributs_info' ) ) {

	/**
	 *     
	 * атрибуты товара
	 * 
	 */
	function woocommerce_rb_single_atributs_info() {
		global $product;
        
        $heading = 'Информация';

        if ( $heading ): 
        echo '<h2>'; 
        echo $heading; 
        echo '</h2>';
        endif; 

        $product->list_attributes();
	}
}



if ( ! function_exists( 'woocommerce_rb_single_description' ) ) {

	/**
	 *     
	 * Описание товара
	 * 
	 */
	function woocommerce_rb_single_description() {
		global $product;
        
        $heading = 'Описание';

        if ( $heading ): 
        echo '<h2>'; 
        echo $heading; 
        echo '</h2>';
        endif; 

        the_content();
	}
}
