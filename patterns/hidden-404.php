<?php
/**
 * Title: 404 content
 * Slug: porcelain/hidden-404
 * Inserter: no
 *
 * @package Porcelain
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:paragraph {"className":"porcelain-eyebrow"} -->
	<p class="porcelain-eyebrow"><?php esc_html_e( 'Error 404', 'porcelain' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"italic","fontWeight":"500"}}} -->
	<h1 class="wp-block-heading" style="font-style:italic;font-weight:500"><?php esc_html_e( 'This page has gone cold', 'porcelain' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|large"}},"textColor":"ink-soft"} -->
	<p class="has-ink-soft-color has-text-color" style="font-size:var(--wp--preset--font-size--large)"><?php esc_html_e( 'We could not find what you were looking for. Try a search, or head back to the kitchen.', 'porcelain' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search the kitchen…","buttonText":"Search","buttonPosition":"button-inside","style":{"border":{"radius":"100px"}}} /-->

	<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--20)">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to home', 'porcelain' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
