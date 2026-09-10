<?php
/**
 * Title: Afternoon tea band
 * Slug: porcelain/afternoon-tea
 * Categories: porcelain_home, call-to-action
 * Description: A dark full-width band pairing a short invitation with a pair of overlapping arched photos.
 * Keywords: afternoon tea, band, feature, call to action
 * Block Types: core/group
 * Viewport Width: 1400
 *
 * @package Porcelain
 */

?>
<!-- wp:group {"align":"full","backgroundColor":"ink","textColor":"rose-tint","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull has-rose-tint-color has-ink-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:paragraph {"className":"porcelain-eyebrow"} -->
			<p class="porcelain-eyebrow"><?php esc_html_e( 'The heart of the house', 'porcelain' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"textColor":"paper"} -->
			<h2 class="wp-block-heading has-paper-color has-text-color"><?php esc_html_e( 'Afternoon tea', 'porcelain' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"rose-tint","style":{"typography":{"fontSize":"var:preset|font-size|large"}}} -->
			<p class="has-rose-tint-color has-text-color" style="font-size:var(--wp--preset--font-size--large)"><?php esc_html_e( 'China warmed, linen pressed, and three tiers of something sweet — this is where the week slows down. Book a table in the tea room, or bring the ritual home.', 'porcelain' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:button {"backgroundColor":"cream","textColor":"ink"} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-ink-color has-cream-background-color has-text-color has-background wp-element-button" href="#"><?php esc_html_e( 'Explore afternoon tea', 'porcelain' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:group {"className":"porcelain-arch-duo porcelain-arch-duo--mirror","layout":{"type":"default"}} -->
			<div class="wp-block-group porcelain-arch-duo porcelain-arch-duo--mirror">
				<!-- wp:image {"className":"porcelain-arch-duo__main"} -->
				<figure class="wp-block-image porcelain-arch-duo__main"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/arch-tea.svg' ); ?>" alt="<?php esc_attr_e( 'An afternoon tea spread on a tiered stand', 'porcelain' ); ?>"/></figure>
				<!-- /wp:image -->

				<!-- wp:image {"className":"porcelain-arch-duo__accent"} -->
				<figure class="wp-block-image porcelain-arch-duo__accent"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/wide-tearoom.svg' ); ?>" alt="<?php esc_attr_e( 'The tea room, lamps lit', 'porcelain' ); ?>"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
