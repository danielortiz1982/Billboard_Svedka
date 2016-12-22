<?php

	if ( ! function_exists( 'Billboard_Svedka_setup' ) ) :
	function Billboard_Svedka_setup() {
		load_theme_textdomain( 'Billboard_Svedka', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_image_size('video-Img', 1024, 768, true);
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'Billboard_Svedka' ),
			'footer' => esc_html__( 'Footer', 'Billboard_Svedka' ),
		) );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
		) );
		add_theme_support( 'custom-background', apply_filters( 'Billboard_Svedka_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );
	}
	endif;
	add_action( 'after_setup_theme', 'Billboard_Svedka_setup' );
	function Billboard_Svedka_content_width() {
		$GLOBALS['content_width'] = apply_filters( 'Billboard_Svedka_content_width', 640 );
	}
	add_action( 'after_setup_theme', 'Billboard_Svedka_content_width', 0 );
	function Billboard_Svedka_widgets_init() {
		register_sidebar( array(
			'name'          => esc_html__( 'Top Logo', 'Billboard_Svedka' ),
			'id'            => 'top-logo',
			'description'   => esc_html__( 'Header top logo', 'Billboard_Svedka' ),
			'before_widget' => '<a href="http://www.billboard.com/" target="_blank">',
			'after_widget'  => '</a>',
		) );
		register_sidebar( array(
			'name'          => esc_html__( 'Sponsor Logo', 'Billboard_Svedka' ),
			'id'            => 'home-sponsor',
			'description'   => esc_html__( 'Sponsor Logo', 'Billboard_Svedka' ),
			'before_widget' => '<span>',
			'after_widget'  => '</span>',
		) );
		register_sidebar( array(
			'name'          => esc_html__( 'Home Top AD', 'Billboard_Svedka' ),
			'id'            => 'home-ad-top',
			'description'   => esc_html__( 'Sponsor Logo', 'Billboard_Svedka' ),
			'before_widget' => '<span>',
			'after_widget'  => '</span>',
		) );
		register_sidebar( array(
			'name'          => esc_html__( 'Home Middle AD', 'Billboard_Svedka' ),
			'id'            => 'home-ad-middle',
			'description'   => esc_html__( 'Sponsor Logo', 'Billboard_Svedka' ),
			'before_widget' => '<span>',
			'after_widget'  => '</span>',
		) );
		register_sidebar( array(
			'name'          => esc_html__( 'Home Bottom AD', 'Billboard_Svedka' ),
			'id'            => 'home-ad-bottom',
			'description'   => esc_html__( 'Sponsor Logo', 'Billboard_Svedka' ),
			'before_widget' => '<span>',
			'after_widget'  => '</span>',
		) );

	}
	add_action( 'widgets_init', 'Billboard_Svedka_widgets_init' );
	function Billboard_Svedka_scripts() {
		wp_enqueue_style( 'Billboard_Svedka-bootsrap-style', get_template_directory_uri() . '/css/bootstrap.min.css');
		wp_enqueue_style( 'Billboard_Svedka-font-awesome-style', get_template_directory_uri() . '/css/font-awesome.min.css');
		wp_enqueue_style( 'Billboard_Svedka-style', get_stylesheet_uri() );
		wp_enqueue_script('Billboard_Svedka-jQuery', get_template_directory_uri() . '/js/jquery.js');
		wp_enqueue_script('Billboard_Svedka-bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js');
		wp_enqueue_script('Billboard_Svedka-angularjs', get_template_directory_uri() . '/js/angular.min.js');
		wp_enqueue_script('Billboard_Svedka-mainjs', get_template_directory_uri() . '/js/main.js');
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
	add_action( 'wp_enqueue_scripts', 'Billboard_Svedka_scripts' );
	function admin_style() {
	  wp_enqueue_style('admin-styles', get_template_directory_uri().'/css/admin.css');
	}
	add_action('admin_enqueue_scripts', 'admin_style');
	require get_template_directory() . '/inc/custom-header.php';
	require get_template_directory() . '/inc/template-tags.php';
	require get_template_directory() . '/inc/extras.php';
	require get_template_directory() . '/inc/customizer.php';
	require get_template_directory() . '/inc/jetpack.php';
	require get_template_directory() . '/inc/custom_post_type.php';
	require get_template_directory() . '/inc/custom_meta_box.php';
	remove_filter( 'the_content', 'wpautop' );