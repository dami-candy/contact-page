<?php
/**
 * "Order received" message.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.1.0
 *
 * @var WC_Order|false $order
 */

defined( 'ABSPATH' ) || exit;
?>
<div class="order-details">
    <h2 class="mb-5">Order Number #<?php echo $order->get_order_number(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h2>

    <h3 class="mb-4">Thank you</h3>
    <p><strong>To pay for over the phone, please call <span style="color: #0D66DB">0800 069 9269</span></strong></p>
    </br>
    <p class="mb-5"><strong><span>Alternatively,</span></strong> if you are paying by <strong>crypto</strong> or sending <strong>cash</strong>, our payment details can be found in your order confirmation email by way of a off site link or please call us and a SporeBuddy will guide you through the payment process.</p>
</div>
<p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received">
	<?php
	/**
	 * Filter the message shown after a checkout is complete.
	 *
	 * @since 2.2.0
	 *
	 * @param string         $message The message.
	 * @param WC_Order|false $order   The order created during checkout, or false if order data is not available.
	 */
	$message = apply_filters(
		'woocommerce_thankyou_order_received_text',
		__( 'Thank you. Your order has been received.', 'woocommerce' ),
		$order
	);

	echo esc_html( $message );
	?>
</p>
