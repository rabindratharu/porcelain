<?php
/**
 * Title: Recipe body — story + recipe card
 * Slug: porcelain/recipe-layout
 * Categories: porcelain_recipe
 * Description: A two-column recipe body: the write-up on the left, a sticky recipe card (ingredients and directions) on the right. Build your post inside this.
 * Keywords: recipe, card, ingredients, directions, layout
 * Block Types: core/columns
 * Viewport Width: 1180
 *
 * @package Porcelain
 */

?>
<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns">
	<!-- wp:column {"width":"60%"} -->
	<div class="wp-block-column" style="flex-basis:60%">
		<!-- wp:paragraph {"fontFamily":"display","style":{"typography":{"fontStyle":"italic","fontSize":"var:preset|font-size|large"}},"textColor":"ink"} -->
		<p class="has-ink-color has-text-color has-display-font-family" style="font-size:var(--wp--preset--font-size--large);font-style:italic"><?php esc_html_e( 'Open with a line or two about where this recipe comes from and what makes it worth the afternoon.', 'porcelain' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p><?php esc_html_e( 'Then walk through the method in a few unhurried paragraphs — the step that matters most, the one people usually rush, and how you know it is done. Add photos between paragraphs where they help.', 'porcelain' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:image {"aspectRatio":"3/2","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"14px"}}} -->
		<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/landscape-kitchen.svg' ); ?>" alt="" style="border-radius:14px;aspect-ratio:3/2;object-fit:cover"/></figure>
		<!-- /wp:image -->

		<!-- wp:paragraph -->
		<p><?php esc_html_e( 'Close with storage notes and serving suggestions — how far ahead it can be made, and what to bring it back to room temperature for.', 'porcelain' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"34%","className":"porcelain-recipe-card"} -->
	<div class="wp-block-column porcelain-recipe-card" style="flex-basis:34%">
		<!-- wp:group {"backgroundColor":"paper","style":{"border":{"color":"var:preset|color|gold","width":"1px","radius":"18px"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-border-color has-paper-background-color has-background" style="border-color:var(--wp--preset--color--gold);border-width:1px;border-radius:18px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
			<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"italic","fontWeight":"500"},"spacing":{"margin":{"bottom":"0"}}}} -->
			<h3 class="wp-block-heading" style="margin-bottom:0;font-style:italic;font-weight:500"><?php esc_html_e( 'Recipe title', 'porcelain' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|x-small"}},"textColor":"ink-soft"} -->
			<p class="has-ink-soft-color has-text-color" style="font-size:var(--wp--preset--font-size--x-small)"><?php esc_html_e( 'Recipe by Porcelain', 'porcelain' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":4,"fontFamily":"sans","style":{"typography":{"fontSize":"var:preset|font-size|x-small","fontWeight":"600","letterSpacing":"0.04em","textTransform":"uppercase"}},"textColor":"sage"} -->
			<h4 class="wp-block-heading has-sage-color has-text-color has-sans-font-family" style="font-size:var(--wp--preset--font-size--x-small);font-weight:600;letter-spacing:0.04em;text-transform:uppercase"><?php esc_html_e( 'Ingredients', 'porcelain' ); ?></h4>
			<!-- /wp:heading -->

			<!-- wp:list -->
			<ul class="wp-block-list"><!-- wp:list-item -->
			<li><?php esc_html_e( '1¾ cups confectioners&#8217; sugar', 'porcelain' ); ?></li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li><?php esc_html_e( '1¼ cups almond flour', 'porcelain' ); ?></li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li><?php esc_html_e( '⅔ cup egg whites', 'porcelain' ); ?></li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li><?php esc_html_e( '3 tbsp granulated sugar', 'porcelain' ); ?></li>
			<!-- /wp:list-item --></ul>
			<!-- /wp:list -->

			<!-- wp:heading {"level":4,"fontFamily":"sans","style":{"typography":{"fontSize":"var:preset|font-size|x-small","fontWeight":"600","letterSpacing":"0.04em","textTransform":"uppercase"}},"textColor":"sage"} -->
			<h4 class="wp-block-heading has-sage-color has-text-color has-sans-font-family" style="font-size:var(--wp--preset--font-size--x-small);font-weight:600;letter-spacing:0.04em;text-transform:uppercase"><?php esc_html_e( 'Directions', 'porcelain' ); ?></h4>
			<!-- /wp:heading -->

			<!-- wp:list {"ordered":true} -->
			<ol class="wp-block-list"><!-- wp:list-item -->
			<li><?php esc_html_e( 'Sift the sugar and almond flour together, twice.', 'porcelain' ); ?></li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li><?php esc_html_e( 'Whip the whites to stiff, glossy peaks; fold in the dry ingredients.', 'porcelain' ); ?></li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li><?php esc_html_e( 'Pipe rounds, rest 30 minutes, then bake low and slow.', 'porcelain' ); ?></li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li><?php esc_html_e( 'Fill, sandwich, and chill overnight before serving.', 'porcelain' ); ?></li>
			<!-- /wp:list-item --></ol>
			<!-- /wp:list -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
