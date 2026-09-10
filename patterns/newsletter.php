<?php
/**
 * Title: Newsletter — join the guest list
 * Slug: porcelain/newsletter
 * Categories: porcelain_home, call-to-action
 * Description: A berry full-width band inviting visitors to subscribe, with a button and a fine-print line.
 * Keywords: newsletter, subscribe, signup, call to action
 * Block Types: core/group
 * Viewport Width: 1200
 *
 * @package Porcelain
 */

?>
<!-- wp:group {"anchor":"newsletter","align":"full","backgroundColor":"berry","textColor":"cream","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-cream-color has-berry-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:paragraph {"align":"center","className":"porcelain-eyebrow","textColor":"rose-tint"} -->
	<p class="porcelain-eyebrow has-text-align-center has-rose-tint-color has-text-color"><?php esc_html_e( 'Stay in touch', 'porcelain' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"textAlign":"center","level":2,"textColor":"paper"} -->
	<h2 class="wp-block-heading has-text-align-center has-paper-color has-text-color"><?php esc_html_e( 'Join the tea room guest list', 'porcelain' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","textColor":"rose-tint","style":{"typography":{"fontSize":"var:preset|font-size|large"}}} -->
	<p class="has-text-align-center has-rose-tint-color has-text-color" style="font-size:var(--wp--preset--font-size--large)"><?php esc_html_e( 'Recipes, baking inspiration, afternoon tea ideas, and a little something lovely delivered to your inbox.', 'porcelain' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)">
		<!-- wp:button {"backgroundColor":"cream","textColor":"ink"} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-ink-color has-cream-background-color has-text-color has-background wp-element-button" href="#"><?php esc_html_e( 'Sign up', 'porcelain' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

	<!-- wp:paragraph {"align":"center","fontFamily":"display","textColor":"rose-tint","style":{"typography":{"fontStyle":"italic","fontSize":"var:preset|font-size|medium"}}} -->
	<p class="has-text-align-center has-rose-tint-color has-text-color has-display-font-family" style="font-size:var(--wp--preset--font-size--medium);font-style:italic"><?php esc_html_e( 'Recipes, stories &amp; sweet things, delivered occasionally.', 'porcelain' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
