<?php 

// хлебные крошки

if ( ! function_exists( 'woocommerce_rb_breadcrumb' ) ) {

	/**
	 * Output the WooCommerce Breadcrumb.
	 *
	 * @param array $args
	 */
	function woocommerce_rb_breadcrumb( $args = array() ) {
		$args = wp_parse_args( $args, apply_filters( 'woocommerce_breadcrumb_defaults', array(
			'delimiter'   => '&nbsp;›&nbsp;',
			'wrap_before' => '<nav class="rb_breadcrumb" ' . ( is_single() ? 'itemprop="breadcrumb"' : '' ) . '>',
			'wrap_after'  => '</nav>',
			'before'      => '',
			'after'       => '',
			'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' )
		) ) );

		$breadcrumbs = new WC_Breadcrumb();

		if ( ! empty( $args['home'] ) ) {
			$breadcrumbs->add_crumb( $args['home'], apply_filters( 'woocommerce_breadcrumb_home_url', home_url() ) );
		}

		$args['breadcrumb'] = $breadcrumbs->generate();

		wc_get_template( 'global/breadcrumb.php', $args );
	}
}


// ссылка на wishlist

if ( ! function_exists( 'woocommerce_rb_wish_view' ) ) {

	/**
	 * Output the WooCommerce Breadcrumb.
	 *
	 * @param array $args
	 */
	function woocommerce_rb_wish_view( ) {
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
