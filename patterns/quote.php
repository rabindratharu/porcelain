<?php
/**
 * Title: House motto quote
 * Slug: porcelain/quote
 * Categories: porcelain_home, text
 * Description: A centred display-serif quotation on a soft ground.
 * Keywords: quote, motto, testimonial
 * Block Types: core/group
 * Viewport Width: 1200
 *
 * @package Porcelain
 */

?>
<!-- wp:group {"align":"full","backgroundColor":"cream-deep","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-cream-deep-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:pullquote {"textAlign":"center"} -->
	<figure class="wp-block-pullquote has-text-align-center"><blockquote><p><?php esc_html_e( 'There is always time for tea and something sweet.', 'porcelain' ); ?></p><cite><?php esc_html_e( 'House motto', 'porcelain' ); ?></cite></blockquote></figure>
	<!-- /wp:pullquote -->
</div>
<!-- /wp:group -->
