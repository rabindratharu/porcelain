<?php
/**
 * Title: Recipe stat row
 * Slug: porcelain/recipe-stats
 * Categories: porcelain_recipe
 * Description: A full-width band of recipe facts — servings, prep, cook, calories, skill — with gold hairline dividers. Drop it just below a recipe hero and edit each value.
 * Keywords: recipe, stats, meta, servings, prep time
 * Block Types: core/group
 * Viewport Width: 1000
 *
 * @package Porcelain
 */

$porcelain_stats = [
	[ '10', __( 'Servings', 'porcelain' ) ],
	[ '45m', __( 'Prep time', 'porcelain' ) ],
	[ '40m', __( 'Cook time', 'porcelain' ) ],
	[ '400', __( 'Calories', 'porcelain' ) ],
	[ __( 'Gentle', 'porcelain' ), __( 'Skill level', 'porcelain' ) ],
];
?>
<!-- wp:group {"align":"full","backgroundColor":"cream-deep","className":"porcelain-stats-band","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull porcelain-stats-band has-cream-deep-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:columns {"className":"porcelain-stats","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"0"}}}} -->
	<div class="wp-block-columns porcelain-stats">
		<?php foreach ( $porcelain_stats as $porcelain_stat ) : ?>
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"align":"center","fontFamily":"display","style":{"typography":{"fontSize":"var:preset|font-size|x-large","fontWeight":"600"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"berry"} -->
			<p class="has-text-align-center has-berry-color has-text-color has-display-font-family" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--x-large);font-weight:600"><?php echo esc_html( $porcelain_stat[0] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center","fontFamily":"sans","style":{"typography":{"fontSize":"var:preset|font-size|x-small","letterSpacing":"0.04em"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"ink-soft"} -->
			<p class="has-text-align-center has-ink-soft-color has-text-color has-sans-font-family" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--x-small);letter-spacing:0.04em"><?php echo esc_html( $porcelain_stat[1] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
