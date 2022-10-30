<?php
/*
Plugin Name:  Bookly2
Description:  A booking app for U-Pick farms
Author:       DNK Design
Version:      1.0
Domain Path:  /languages
*/
// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}
// if admin area
if ( is_admin() ) {

	// include dependencies
	require_once plugin_dir_path( __FILE__ ) . 'admin/admin_menu.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings_page.php';

}
//add stylesheets
add_action('admin_enqueue_scripts', 'calendar_styles');
function calendar_styles() {
	wp_enqueue_style('calendar_stylesheet', 'http://localhost/sbfields/wordpress/wp-content/plugins/Bookly2/admin/sass/style.css');
}
// register plugin settings
function myplugin_register_settings() {
	
	/*
	
	register_setting( 
		string   $option_group, 
		string   $option_name, 
		callable $sanitize_callback
	);
	
	*/
	
	register_setting( 
		'myplugin_options', 
		'myplugin_options', 
		'myplugin_callback_validate_options' 
	); 

	add_settings_section( 
		'myplugin_section_login', //string   $id, 
		'Available Times to Book', //string   $title, 
		'myplugin_callback_section_login', //callable $callback, 
		'myplugin'//string   $page
	);

}
add_action( 'admin_init', 'myplugin_register_settings' );
// validate plugin settings
function myplugin_validate_options($input) {
	
	// todo: add validation functionality..
	
	return $input;
	
}
	// callback: login section
function myplugin_callback_section_login() {
	include ("includes/calendar.php");
	echo getCalender();
	
}
?>

<?php
    function availability() {
		require_once plugin_dir_path( __FILE__ ) . 'includes/dbConfig.php';
        if(isset($_REQUEST)){
			
            $data = $_REQUEST['data'];
            //prepared statment
		$add_date = $db->prepare("INSERT INTO bookings (available) VALUES (?);");
		for ($i = 0; $i < count($data); $i++) {
			//echo $data[$i];
			//insert into database
			$add_date->bind_param('s', $data[$i]);
			$add_date->execute();
			if($add_date-> error) {
				$message = "Error: " . $add_date->error;
			}
			else {
				$message = "<h2>ADDED Dates</h2>";
			}
		}
		echo $message;
        }
        die();
    }
    add_action( 'wp_ajax_availability', 'availability' );
?>























































