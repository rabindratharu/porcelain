<?php
/**
 * Title: A few of our favourite things
 * Slug: porcelain/shop-favourites
 * Categories: porcelain_home
 * Description: A short block of copy beside a two-up image grid of shop recommendations.
 * Keywords: shop, favourites, recommendations, grid
 * Block Types: core/group
 * Viewport Width: 1400
 *
 * @package Porcelain
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"className":"porcelain-eyebrow"} -->
		<p class="porcelain-eyebrow"><?php esc_html_e( 'Shop the tea room', 'porcelain' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2} -->
		<h2 class="wp-block-heading"><?php esc_html_e( 'A few of our favourite things', 'porcelain' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|large"}},"textColor":"ink-soft"} -->
		<p class="has-ink-soft-color has-text-color" style="font-size:var(--wp--preset--font-size--large)"><?php esc_html_e( 'The blends, tools and odd bits of china we reach for again and again — a loose-leaf Assam for grey mornings, a rolling pin worn smooth with use, and teacups collected two and three at a time from village markets.', 'porcelain' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Shop the recommendations', 'porcelain' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"14px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/landscape-kitchen.svg' ); ?>" alt="<?php esc_attr_e( 'Kitchen tools and linens', 'porcelain' ); ?>" style="border-radius:14px;aspect-ratio:4/5;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"14px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/square-treat.svg' ); ?>" alt="<?php esc_attr_e( 'Teacups and china', 'porcelain' ); ?>" style="border-radius:14px;aspect-ratio:4/5;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
