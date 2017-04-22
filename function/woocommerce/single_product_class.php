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
        echo '<div class="col-md-7 single-description__content">';
        the_content();
        echo '</div>';
        echo '<div class="col-md-5 single-description__thrumb">';
            echo '<div class="col-md-12 thrumb__image">';
                echo woocommerce_get_product_thumbnail();
            echo '</div>';
            echo '<div class="col-md-12 thrumb__button">';
                echo '<a href="?arendate=true">Взять в аренду</a>';
            echo '</div>';
        echo '</div>';
	}
}





if ( ! function_exists( 'woocommerce_rb_open_comments' ) ) {

	/**
	 * 
	 *  Вывод самих комментариев
	 * 
	 */
    
	function woocommerce_rb_open_comments( $comment ) {
        
		comments_template('/singl-product/revew.php');
        
	}
}


if ( ! function_exists( 'woocommerce_rb_comments' ) ) {

	/**
	 * 
	 *  Вывод самих комментариев
	 * 
	 */
    
	function woocommerce_rb_comments( $comment, $args, $depth ) {
        
		$GLOBALS['comment'] = $comment;
		wc_get_template( 'single-product/review.php', array( 'comment' => $comment, 'args' => $args, 'depth' => $depth ) );
	}
}

if ( ! function_exists( 'woocommerce_rb_comment_gravatar' ) ) {
	/**
	 *
	 *  вывод аватара автора
	 * 
	 */
	function woocommerce_rb_comment_gravatar( $comment ) {
		echo get_avatar( $comment, apply_filters( 'woocommerce_review_gravatar_size', '60' ), '' );
	}
}

if ( ! function_exists( 'woocommerce_rb_comment_rating' ) ) {
	/**
	 * 
	 * выставленный рейтинг товару в данном коментарии
	 * 
	 */
	function woocommerce_rb_comment_rating() {
		wc_get_template( 'single-product/review-rating.php' );
	}
}

if ( ! function_exists( 'woocommerce_rb_comment_meta' ) ) {
	/**
	 * 
	 * Дата, автор
	 *
	 */
	function woocommerce_rb_comment_meta() {
		wc_get_template( 'single-product/review-meta.php' );
	}
}

if ( ! function_exists( 'woocommerce_rb_comment_text' ) ) {

	/**
	 * текст комментария
	 */
	function woocommerce_rb_comment_text() {
		echo '<div itemprop="description" class="description">';
		comment_text();
		echo '</div>';
	}
}
if ( ! function_exists( 'woocommerce_rb_arend' ) ) {

	/**
	 * текст комментария
	 */
	function woocommerce_rb_arend() {
		
	}
}


