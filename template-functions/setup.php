<?php
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @package soapatrickseven
 */

if ( ! function_exists( 'soapatrickseven_setup' ) ) :
	function soapatrickseven_setup() {

		// Make theme available for translation.
		load_theme_textdomain( 'soapatrickseven', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		//Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );

    // Add Theme Support for wide and full-width images.
    add_theme_support( 'align-wide' );

    // Disable all Gutenberg color options.
    add_theme_support( 'editor-color-palette' );
    add_theme_support( 'disable-custom-colors' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'soapatrickseven' ),
		) );

		// Switch default core markup for search form, comment form, and comments.
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
	}
endif;
add_action( 'after_setup_theme', 'soapatrickseven_setup' );
