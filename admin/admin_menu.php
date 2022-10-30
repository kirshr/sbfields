<?php
// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}
?>
<?php
// add top-level administrative menu
function myplugin_add_toplevel_menu() {
	
	/* 
		add_menu_page(
			string   $page_title, 
			string   $menu_title, 
			string   $capability, 
			string   $menu_slug, 
			callable $function = '', 
			string   $icon_url = '', 
			int      $position = null 
		)
	*/
	
	add_menu_page(
		'MyPlugin Settings', //Page Title
		'MyPlugin', //Menu Title
		'manage_options', //Capability 
		'myplugin', //Menu Slug
		'myplugin_display_settings_page', //Callable function
		'dashicons-admin-generic', //Menu Icon
		null
	);
	
}
add_action( 'admin_menu', 'myplugin_add_toplevel_menu' );

?>