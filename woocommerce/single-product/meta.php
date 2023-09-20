<?php
/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;
$details = get_field('details');
$shipping = get_field('shipping');
$returns = get_field('returns');
?>
<div class="product_meta">

	<?php do_action( 'woocommerce_product_meta_start' ); ?>
	<p>Free shipping over £100</p>

	<?php if ( $details ) : ?>
		<div class="details">
			<p class="title">Details</p>
			<div class="content d-none"><?php echo $details; ?></div>
		</div>
	<?php endif; ?>


	<?php if ( $shipping ) : ?>
		<div class="shipping">
			<p class="title">Shipping</p>
			<div class="content d-none"><?php echo $details; ?></div>
		</div>
	<?php endif; ?>

	<?php if ( $returns ) : ?>
		<div class="returns">
			<p class="title">Returns</p>
			<div class="content d-none"><?php echo $returns; ?></div>
		</div>
	<?php endif; ?>

	<?php do_action( 'woocommerce_product_meta_end' ); ?>

</div>
