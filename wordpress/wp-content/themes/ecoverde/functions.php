<?php

if ( ! defined( 'VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'VERSION', '1.0.0' );
}

add_action('wp_enqueue_scripts', 'ecoverde_style');
add_action( 'after_setup_theme', 'ecoverde_style_settings' );
add_action( 'init', 'register_post_types' );


function ecoverde_style() {
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css', VERSION, '',  );
	wp_enqueue_style( 'carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', '', VERSION );
	wp_enqueue_style( 'owl_theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', '', VERSION );
	wp_enqueue_style( 'popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', '', VERSION );
	wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/assets/css/flaticon.css', '', VERSION );
	wp_enqueue_style( 'ajax', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap' );
	wp_enqueue_style( 'css', get_template_directory_uri() . '/assets/css/style.css', '', VERSION );
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), VERSION, true );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'jquery-migrate', get_template_directory_uri() . '/assets/js/jquery-migrate-3.0.1.min.js', array(), VERSION, true );
	wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), VERSION, true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), VERSION, true );
	wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js', array(), VERSION, true );
	wp_enqueue_script( 'jquery-waypoints', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', array(), VERSION, true );
	wp_enqueue_script( 'jquery-stellar', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js', array(), VERSION, true );
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), VERSION, true );
	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), VERSION, true );
	wp_enqueue_script( 'animateNumber', get_template_directory_uri() . '/assets/js/jquery.animateNumber.min.js', array(), VERSION, true );
	wp_enqueue_script( 'scrollax', get_template_directory_uri() . '/assets/js/scrollax.min.js', array(), VERSION, true );
	wp_enqueue_script( 'googleapis', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false', array(), VERSION, true );
	wp_enqueue_script( 'google-map', get_template_directory_uri() . '/assets/js/google-map.js', array(), VERSION, true );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array(), VERSION, true );

}

function ecoverde_style_settings() {
	add_theme_support( 'title-tag' );
	add_theme_support(
		'custom-logo',
		array(
			'height'               => 50,
			'width'                => 130,
			'flex-width'           => false, // true - чтобы логотип подстраивался под ширину
			'flex-height'          => false, // true - чтобы логотип подстраивался под высоту
			'header-text'          => 'dddddddd',
			'unlink-homepage-logo' => true,
		)
	);
	add_theme_support( 'post-thumbnails' );
}


function register_post_types() {

	register_post_type( 'realestate', [
		'label'         => null,
		'labels'        => [
			'name'               => 'Properties',
			// основное название для типа записи
			'singular_name'      => 'Объект недвижемости',
			// название для одной записи этого типа
			'add_new'            => 'Добавить объект недвижемости',
			// для добавления новой записи
			'add_new_item'       => 'Добавление объекта недвижемости',
			// заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование объекта недвижемости',
			// для редактирования типа записи
			'new_item'           => 'Новый объект недвижемости',
			// текст новой записи
			'view_item'          => 'Смотреть объект недвижемости',
			// для просмотра записи этого типа.
			'search_items'       => 'Искать объект недвижемости',
			// для поиска по этим типам записи
			'not_found'          => 'Не найдено',
			// если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине',
			// если не было найдено в корзине
			'parent_item_colon'  => '',
			// для родителей (у древовидных типов)
			'menu_name'          => 'Объекты недвижемости',
			// название меню
		],
		'description'   => '',
		'public'        => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'  => null,
		// показывать ли в меню админки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'  => null,
		// добавить в REST API. C WP 4.7
		'rest_base'     => null,
		// $post_type. C WP 4.7
		'menu_position' => null,
		'menu_icon'     => 'dashicons-admin-multisite',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'  => false,
		'supports'      => [ 'title', 'excerpt', 'thumbnail', 'editor' ],
		// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'has_archive'   => true,
		'rewrite'       => true,
		'query_var'     => true,
	] );
}

register_nav_menus( [
	'header'       => 'Header Menu'
] );



?>
