<?php 

//Create Menus

function gymfitness_menu() {
	//Wordpress Function
	register_nav_menus( array(
		'main-menu' => 'Main Menu'
	) );
}

//Hook
add_action('init', 'gymfitness_menu');

//To enqueue css and js
function gymfitness_scripts() {

	//Noramlize CSS
	wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');
	//SlickNav CSS
	wp_enqueue_style('slicknav', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.10');

	//Google Fonts
	wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:ital,wght@0,400;0,700;1,900&family=Staatliches&display=swap', array(), '1.0.0');

	//Main Stylesheet
	wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googlefont'), '1.0.0');

	//JS
	wp_enqueue_script('jquery');
	wp_enqueue_script('slicknavjs', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.10', true);
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true);

}

add_action('wp_enqueue_scripts', 'gymfitness_scripts');


//function to setup theme to enable image

function gymfitness_setup() {

	//Register new image size
	// add_image_size($name, $width, $height, $crop)

	add_image_size('square', 350,  350, true);
	add_image_size('portrait', 350,  724, true);
	add_image_size('box', 400,  375, true);
	add_image_size('mediumSize', 700,  400, true);
	add_image_size('blog', 966,  644, true);

	//Add featured Image
	add_theme_support('post-thumbnails'); 
}
//When the theme is ready run setup
add_action('after_setup_theme', 'gymfitness_setup');  

//Create a Widget Zone Here
function gymfitness_widgets() {
	register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>', 
		'before_title' => '<h3>', 
		'after_title' => '</h3>'
	));
}
add_action('widgets_init', 'gymfitness_widgets');  
