<?php
/**
 * Product loop title
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
global $product;
if ( $product->is_in_stock() &&  $product->is_purchasable() ){


    ?>
      <h3 class="product-title"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h3>
    <?php
}