<?php
/**
 * Porcelain functions and definitions.
 *
 * @package Porcelain
 * @since   1.0.0
 */

defined( 'ABSPATH' ) || exit;

define( 'PORCELAIN_VERSION', '1.0.0' );

if ( ! function_exists( 'porcelain_fonts_url' ) ) {
	/**
	 * Build the webfont request URL for Cormorant Garamond and Work Sans.
	 *
	 * Porcelain loads these from the Google Fonts API so the theme looks right the
	 * moment it is activated. For an offline or privacy-first deployment, host
	 * the two families locally (the "Create Block Theme" plugin can embed them
	 * into the Font Library in a couple of clicks) and drop this enqueue.
	 *
	 * @since 1.0.0
	 *
	 * @return string Fully-formed stylesheet URL.
	 */
	function porcelain_fonts_url() {
		return 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&family=Work+Sans:wght@400;500;600&display=swap';
	}
}

if ( ! function_exists( 'porcelain_setup' ) ) {
	/**
	 * Register theme supports and editor assets.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function porcelain_setup() {
		load_theme_textdomain( 'porcelain', get_template_directory() . '/languages' );

		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'wp-block-styles' );
		add_theme_support(
			'html5',
			[
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			]
		);

		add_editor_style(
			[
				porcelain_fonts_url(),
				'assets/css/porcelain.css',
			]
		);
	}
}
add_action( 'after_setup_theme', 'porcelain_setup' );

if ( ! function_exists( 'porcelain_enqueue_assets' ) ) {
	/**
	 * Enqueue front-end styles.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function porcelain_enqueue_assets() {
		wp_enqueue_style( 'porcelain-fonts', porcelain_fonts_url(), [], PORCELAIN_VERSION );

		wp_enqueue_style(
			'porcelain-style',
			get_stylesheet_uri(),
			[ 'porcelain-fonts' ],
			PORCELAIN_VERSION
		);

		wp_enqueue_style(
			'porcelain-extras',
			get_theme_file_uri( 'assets/css/porcelain.css' ),
			[ 'porcelain-style' ],
			PORCELAIN_VERSION
		);
	}
}
add_action( 'wp_enqueue_scripts', 'porcelain_enqueue_assets' );

if ( ! function_exists( 'porcelain_register_pattern_categories' ) ) {
	/**
	 * Register the block pattern categories used by Porcelain.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function porcelain_register_pattern_categories() {
		register_block_pattern_category(
			'porcelain_home',
			[ 'label' => __( 'Porcelain: Homepage', 'porcelain' ) ]
		);
		register_block_pattern_category(
			'porcelain_recipe',
			[ 'label' => __( 'Porcelain: Recipe', 'porcelain' ) ]
		);
		register_block_pattern_category(
			'porcelain_general',
			[ 'label' => __( 'Porcelain: General', 'porcelain' ) ]
		);
	}
}
add_action( 'init', 'porcelain_register_pattern_categories' );

if ( ! function_exists( 'porcelain_register_block_styles' ) ) {
	/**
	 * Register custom block styles.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function porcelain_register_block_styles() {
		register_block_style(
			'core/image',
			[
				'name'  => 'arched',
				'label' => __( 'Arched frame', 'porcelain' ),
			]
		);
		register_block_style(
			'core/cover',
			[
				'name'  => 'arched',
				'label' => __( 'Arched frame', 'porcelain' ),
			]
		);
		register_block_style(
			'core/post-featured-image',
			[
				'name'  => 'arched',
				'label' => __( 'Arched frame', 'porcelain' ),
			]
		);
		register_block_style(
			'core/group',
			[
				'name'  => 'hairline-top',
				'label' => __( 'Gold hairline (top)', 'porcelain' ),
			]
		);
		register_block_style(
			'core/post-terms',
			[
				'name'  => 'pill',
				'label' => __( 'Pill tags', 'porcelain' ),
			]
		);
	}
}
add_action( 'init', 'porcelain_register_block_styles' );

if ( ! function_exists( 'porcelain_featured_image_placeholder' ) ) {
	/**
	 * Fill an empty Featured Image block with a bundled SVG placeholder.
	 *
	 * The core/post-featured-image block renders nothing when a post has no
	 * thumbnail, which leaves ragged gaps in the homepage "From the kitchen"
	 * list and the related-recipes strip. When the block comes back empty and
	 * the post genuinely has no thumbnail, this swaps in
	 * assets/images/square-treat.svg sized to the block's own width, height,
	 * aspect-ratio and border-radius settings so every card keeps its shape.
	 *
	 * @since 1.0.0
	 *
	 * @param string   $block_content Rendered block HTML.
	 * @param array    $block         Parsed block array (name, attrs, …).
	 * @param WP_Block $instance      Block instance, carries the Query Loop context.
	 * @return string Original HTML, or a placeholder figure when nothing was rendered.
	 */
	function porcelain_featured_image_placeholder( $block_content, $block, $instance ) {
		if ( '' !== trim( (string) $block_content ) ) {
			return $block_content;
		}

		$post_id = isset( $instance->context['postId'] )
			? (int) $instance->context['postId']
			: (int) get_the_ID();

		if ( ! $post_id || has_post_thumbnail( $post_id ) ) {
			return $block_content;
		}

		$attrs = isset( $block['attrs'] ) && is_array( $block['attrs'] ) ? $block['attrs'] : [];
		$rules = [
			'display:block',
			'object-fit:cover',
			'width:' . ( isset( $attrs['width'] ) ? $attrs['width'] : '100%' ),
		];

		if ( ! empty( $attrs['height'] ) ) {
			$rules[] = 'height:' . $attrs['height'];
		}

		if ( ! empty( $attrs['aspectRatio'] ) ) {
			$rules[] = 'aspect-ratio:' . $attrs['aspectRatio'];
		}

		if ( isset( $attrs['style']['border']['radius'] ) ) {
			$radius  = $attrs['style']['border']['radius'];
			$rules[] = 'border-radius:' . ( is_array( $radius ) ? implode( ' ', $radius ) : $radius );
		}

		$image = sprintf(
			'<img src="%1$s" alt="" loading="lazy" decoding="async" style="%2$s" />',
			esc_url( get_theme_file_uri( 'assets/images/square-treat.svg' ) ),
			esc_attr( implode( ';', $rules ) )
		);

		if ( ! empty( $attrs['isLink'] ) ) {
			$image = sprintf(
				'<a href="%1$s" tabindex="-1" aria-hidden="true">%2$s</a>',
				esc_url( (string) get_permalink( $post_id ) ),
				$image
			);
		}

		$class = 'wp-block-post-featured-image porcelain-featured-image--placeholder';

		if ( ! empty( $attrs['className'] ) ) {
			$class .= ' ' . $attrs['className'];
		}

		return sprintf( '<figure class="%1$s">%2$s</figure>', esc_attr( $class ), $image );
	}
}
add_filter( 'render_block_core/post-featured-image', 'porcelain_featured_image_placeholder', 10, 3 );

if ( ! function_exists( 'porcelain_single_category_term' ) ) {
	/**
	 * Trim a Post Terms block down to its first (primary) category.
	 *
	 * core/post-terms has no "show one term" option, so a recipe filed under
	 * several categories fills the compact "From the kitchen" list rows with a
	 * comma-separated pile of links. When the block opts in with the
	 * `porcelain-recipe-row__tag` class, keep only the first term link and drop
	 * the rest, leaving the block's own wrapper element untouched.
	 *
	 * @since 1.0.0
	 *
	 * @param string $block_content Rendered block HTML.
	 * @param array  $block         Parsed block array (name, attrs, …).
	 * @return string The block HTML with a single term link.
	 */
	function porcelain_single_category_term( $block_content, $block ) {
		$class_name = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';

		if ( false === strpos( $class_name, 'porcelain-recipe-row__tag' ) ) {
			return $block_content;
		}

		if ( ! preg_match( '#^(?P<open><[a-z0-9]+\b[^>]*>)(?P<inner>.*)(?P<close></[a-z0-9]+>)\s*$#is', $block_content, $wrapper ) ) {
			return $block_content;
		}

		if ( ! preg_match( '#<a\b[^>]*>.*?</a>#is', $wrapper['inner'], $first_link ) ) {
			return $block_content;
		}

		return $wrapper['open'] . $first_link[0] . $wrapper['close'];
	}
}
add_filter( 'render_block_core/post-terms', 'porcelain_single_category_term', 10, 2 );
