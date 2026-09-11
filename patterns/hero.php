<?php
/**
 * Title: Hero — a little taste of tea time
 * Slug: porcelain/hero
 * Categories: porcelain_home, banner, featured
 * Description: A two-column opening section — an italic display headline and lede beside a pair of overlapping arched photos.
 * Keywords: hero, banner, intro, bakery
 * Block Types: core/group
 * Viewport Width: 1400
 *
 * @package Porcelain
 */

?>
<!-- wp:group {"anchor":"top","align":"full","backgroundColor":"cream","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull has-cream-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|70"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"52%","className":"porcelain-hero__copy"} -->
		<div class="wp-block-column is-vertically-aligned-center porcelain-hero__copy" style="flex-basis:52%">
			<!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"italic","fontWeight":"500"}}} -->
			<h1 class="wp-block-heading" style="font-style:italic;font-weight:500"><?php esc_html_e( 'A little taste of English tea time', 'porcelain' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|large"}},"textColor":"ink-soft"} -->
			<p class="has-ink-soft-color has-text-color" style="font-size:var(--wp--preset--font-size--large)"><?php esc_html_e( 'Recipes, baking notes, and the small ceremony of afternoon tea — from a kitchen that believes the kettle should go on more often than not.', 'porcelain' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#kitchen"><?php esc_html_e( 'Explore the recipes', 'porcelain' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"48%","className":"porcelain-hero__art"} -->
		<div class="wp-block-column is-vertically-aligned-center porcelain-hero__art" style="flex-basis:48%">
			<!-- wp:group {"className":"porcelain-arch-duo","layout":{"type":"default"}} -->
			<div class="wp-block-group porcelain-arch-duo">
				<!-- wp:image {"className":"porcelain-arch-duo__main"} -->
				<figure class="wp-block-image porcelain-arch-duo__main"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/arch-bake.svg' ); ?>" alt="<?php esc_attr_e( 'Freshly baked cakes cooling on a rack', 'porcelain' ); ?>"/></figure>
				<!-- /wp:image -->

				<!-- wp:image {"className":"porcelain-arch-duo__accent"} -->
				<figure class="wp-block-image porcelain-arch-duo__accent"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/arch-tea.svg' ); ?>" alt="<?php esc_attr_e( 'A tea table set with linens and pastries', 'porcelain' ); ?>"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
