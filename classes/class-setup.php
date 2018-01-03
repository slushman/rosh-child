<?php

/**
 * Methods for setting up the RoshChild theme.
 *
 * @since 			1.0.0
 * @package 		RoshChild
 * @subpackage 		RoshChild/classes
 */
class RoshChild_Setup {

	/**
	 * Constructor
	 *
	 * @since 		1.0.0
	 */
	public function __construct() {}

	/**
	 * Registers all the WordPress hooks and filters for this class.
	 */
	public function hooks() {

		add_action( 'init', 								array( $this, 'text_domain' ) );
		add_action( 'wp_enqueue_scripts', 					array( $this, 'enqueue_public' ) );

	} // hooks()

	/**
	 * Enqueue scripts and styles for the front end.
	 *
	 * @hooked 		wp_enqueue_scripts
	 * @since 		1.0.0
	 */
	public function enqueue_public() {

		$parent = 'rosh';

		wp_enqueue_style( $parent, get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'rosh-child', get_stylesheet_directory_uri() . '/style.css', array( $parent ), wp_get_theme()->get( 'Version' ) );

	} // enqueue_public()

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /assets/languages/ directory.
	 *
	 * @hooked 		after_setup_theme
	 */
	public function text_domain() {

		load_theme_textdomain( 'rosh', get_stylesheet_directory() . '/languages' );

	} // text_domain()

} // class
