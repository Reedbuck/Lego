<?php
/**
 * Product attributes
 *
 * Used by list_attributes() in the products class.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-attributes.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.3
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$has_row    = false;
$alt        = 1;
$attributes = $product->get_attributes();

ob_start();

?>
<div class="attributes-information">
    <div class="attributes-information__part">
        <p>Год выпуска</p>
    <?php     
    $values = wc_get_product_terms( $product->id, $attributes['pa_years-creation']['name'], array( 'fields' => 'names' ) );
    echo '';
    echo $values[0];
    ?>
    </div>
    <?php 
    $values = wc_get_product_terms( $product->id, $attributes['pa_amount-details']['name'], array( 'fields' => 'names' ) );
    echo $values[0];
    ?>
    
    <?php 
    $values = wc_get_product_terms( $product->id, $attributes['pa_amount-figure']['name'], array( 'fields' => 'names' ) );
    echo $values[0];
    ?>
    
    <?php 
    $values = wc_get_product_terms( $product->id, $attributes['pa_years-user']['name'], array( 'fields' => 'names' ) );
    echo $values[0];
    ?>
    
    <?php 
    $values = wc_get_product_terms( $product->id, $attributes['pa_sex-user']['name'], array( 'fields' => 'names' ) );
    echo $values[0] . ' ';
    ?>
    
    <?php 
    echo 'Артикул';
    do_action( 'woocommerce_shop_article' ); 
    $has_row = true;
    ?>
    
</div>

<?php
if ( $has_row ) {
	echo ob_get_clean();
} else {
	ob_end_clean();
}
