<?php
/**
 * Title: Tagline ticker
 * Slug: porcelain/ticker
 * Categories: porcelain_home
 * Description: A dark full-width band with a slow horizontal scroll of taglines. Motion is disabled for visitors who prefer reduced motion.
 * Keywords: ticker, marquee, band, scrolling
 * Block Types: core/group
 * Viewport Width: 1400
 *
 * @package Porcelain
 */

?>
<!-- wp:group {"align":"full","className":"porcelain-ticker","backgroundColor":"ink","textColor":"rose-tint","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull porcelain-ticker has-rose-tint-color has-ink-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:group {"className":"porcelain-ticker__track","fontFamily":"display","style":{"typography":{"fontStyle":"italic","fontSize":"var:preset|font-size|large"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group porcelain-ticker__track has-display-font-family" style="font-style:italic;font-size:var(--wp--preset--font-size--large)">
		<!-- wp:paragraph -->
		<p><?php esc_html_e( 'Recipes  ·  Baking notes  ·  Afternoon tea, properly done  ·  Small kitchen, big kettle  ·  A well-worn recipe box', 'porcelain' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p><?php esc_html_e( 'Recipes  ·  Baking notes  ·  Afternoon tea, properly done  ·  Small kitchen, big kettle  ·  A well-worn recipe box', 'porcelain' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
