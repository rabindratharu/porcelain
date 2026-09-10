<?php
/**
 * Title: Welcome to the tea room
 * Slug: porcelain/welcome
 * Categories: porcelain_home, about
 * Description: An arched portrait image beside a short welcome story with a drop cap and a button.
 * Keywords: about, welcome, story, intro
 * Block Types: core/group
 * Viewport Width: 1400
 *
 * @package Porcelain
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|70"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"42%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:42%">
			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"large","className":"is-style-arched"} -->
			<figure class="wp-block-image size-large is-style-arched"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/arch-tea.svg' ); ?>" alt="<?php esc_attr_e( 'A tea table set with linens and pastries', 'porcelain' ); ?>" style="aspect-ratio:4/5;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"58%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:58%">
			<!-- wp:paragraph {"className":"porcelain-eyebrow"} -->
			<p class="porcelain-eyebrow"><?php esc_html_e( 'From our kitchen', 'porcelain' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2} -->
			<h2 class="wp-block-heading"><?php esc_html_e( 'Welcome to the tea room', 'porcelain' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"porcelain-dropcap"} -->
			<p class="porcelain-dropcap"><?php esc_html_e( 'Porcelain began with a well-worn recipe box and a habit of putting the kettle on for company. Here you will find scones that ask for real jam, macarons coaxed into English pastel shades, and cakes built for slow afternoons — baking that leans on tradition without ever taking itself too seriously.', 'porcelain' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)">
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Meet the baker', 'porcelain' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
