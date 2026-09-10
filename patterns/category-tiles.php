<?php
/**
 * Title: Browse by category
 * Slug: porcelain/category-tiles
 * Categories: porcelain_home
 * Description: Four arched image tiles that link to the main recipe categories.
 * Keywords: categories, tiles, grid, links
 * Block Types: core/group
 * Viewport Width: 1400
 *
 * @package Porcelain
 */

$porcelain_tiles = [
	[ 'arch-bake.svg', __( 'Cakes &amp; bakes', 'porcelain' ) ],
	[ 'arch-tea.svg', __( 'Afternoon tea', 'porcelain' ) ],
	[ 'square-treat.svg', __( 'The biscuit tin', 'porcelain' ) ],
	[ 'landscape-kitchen.svg', __( 'Breakfast', 'porcelain' ) ],
];
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","className":"porcelain-eyebrow"} -->
		<p class="porcelain-eyebrow has-text-align-center"><?php esc_html_e( 'Browse by category', 'porcelain' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","level":2} -->
		<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Find something lovely', 'porcelain' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns">
		<?php foreach ( $porcelain_tiles as $porcelain_tile ) : ?>
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"large","className":"is-style-arched","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
			<figure class="wp-block-image size-large is-style-arched" style="margin-bottom:var(--wp--preset--spacing--30)"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/' . $porcelain_tile[0] ); ?>" alt="<?php echo esc_attr( $porcelain_tile[1] ); ?>" style="aspect-ratio:3/4;object-fit:cover"/></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"var:preset|font-size|large","fontStyle":"italic","fontWeight":"500"}}} -->
			<h3 class="wp-block-heading has-text-align-center" style="font-size:var(--wp--preset--font-size--large);font-style:italic;font-weight:500"><?php echo esc_html( $porcelain_tile[1] ); ?></h3>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
