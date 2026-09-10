<?php
/**
 * Title: From the kitchen — latest recipes
 * Slug: porcelain/latest-recipes
 * Categories: porcelain_home, query, posts
 * Description: A section heading, a large featured-image cover for the newest recipe, and a compact list of the next three posts with circular thumbnails. A bundled placeholder stands in when a post has no featured image.
 * Keywords: recipes, posts, query, grid, blog, feature
 * Block Types: core/query
 * Viewport Width: 1400
 *
 * @package Porcelain
 */

?>
<!-- wp:group {"anchor":"kitchen","align":"full","backgroundColor":"cream-deep","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull has-cream-deep-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"className":"porcelain-eyebrow"} -->
		<p class="porcelain-eyebrow"><?php esc_html_e( 'Latest recipes', 'porcelain' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2} -->
		<h2 class="wp-block-heading"><?php esc_html_e( 'From the kitchen', 'porcelain' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|large"}},"textColor":"ink-soft"} -->
		<p class="has-ink-soft-color has-text-color" style="font-size:var(--wp--preset--font-size--large)"><?php esc_html_e( 'A rotating edit of what is coming out of the oven this week — some classics, a few experiments, always a proper cup of tea alongside.', 'porcelain' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"56%"} -->
		<div class="wp-block-column" style="flex-basis:56%">
			<!-- wp:query {"queryId":0,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"layout":{"type":"default"}} -->
			<div class="wp-block-query">
				<!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
					<!-- wp:cover {"useFeaturedImage":true,"dimRatio":60,"overlayColor":"ink","minHeight":420,"className":"porcelain-recipe-feature","style":{"border":{"radius":"22px"},"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-cover porcelain-recipe-feature" style="border-radius:22px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);min-height:420px">
						<span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-60 has-background-dim"></span>
						<div class="wp-block-cover__inner-container">
							<!-- wp:post-terms {"term":"category","className":"porcelain-tags","textColor":"rose-tint"} /-->

							<!-- wp:post-title {"isLink":true,"level":3,"textColor":"paper","style":{"typography":{"fontStyle":"italic","fontWeight":"500"}}} /-->

							<!-- wp:post-excerpt {"textColor":"rose-tint","excerptLength":16,"style":{"typography":{"fontSize":"var:preset|font-size|small"}}} /-->
						</div>
					</div>
					<!-- /wp:cover -->
				<!-- /wp:post-template -->

				<!-- wp:query-no-results -->
					<!-- wp:paragraph -->
					<p><?php esc_html_e( 'Recipes will appear here as soon as they are published.', 'porcelain' ); ?></p>
					<!-- /wp:paragraph -->
				<!-- /wp:query-no-results -->
			</div>
			<!-- /wp:query -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"44%"} -->
		<div class="wp-block-column" style="flex-basis:44%">
			<!-- wp:query {"queryId":0,"query":{"perPage":3,"pages":0,"offset":1,"postType":"post","order":"desc","orderBy":"date","inherit":false},"layout":{"type":"default"}} -->
			<div class="wp-block-query">
				<!-- wp:post-template {"className":"porcelain-recipe-list","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
					<!-- wp:group {"className":"porcelain-recipe-row","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
					<div class="wp-block-group porcelain-recipe-row">
						<!-- wp:post-featured-image {"isLink":true,"width":"96px","height":"96px","style":{"border":{"radius":"50%"}}} /-->

						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
						<div class="wp-block-group">
							<!-- wp:post-terms {"term":"category","textColor":"sage","className":"porcelain-recipe-row__tag"} /-->

							<!-- wp:post-title {"isLink":true,"level":4,"style":{"typography":{"fontStyle":"italic","fontWeight":"600"}}} /-->

							<!-- wp:post-excerpt {"excerptLength":14} /-->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				<!-- /wp:post-template -->

				<!-- wp:query-no-results -->
					<!-- wp:paragraph -->
					<p><?php esc_html_e( 'More recipes are on the way.', 'porcelain' ); ?></p>
					<!-- /wp:paragraph -->
				<!-- /wp:query-no-results -->
			</div>
			<!-- /wp:query -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'View all recipes', 'porcelain' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
