<?php
    // exit if file is called directly
    if ( ! defined( 'ABSPATH' ) ) {

        exit;

    }
?>

<?php
// display the plugin settings page
function myplugin_display_settings_page() {
	
	// check if user is allowed access
	if ( ! current_user_can( 'manage_options' ) ) return;
	
	?>
	
	<div class="wrap">
		<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
		<form action="options.php" method="post">
			
			<?php
			
			// output security fields
			settings_fields( 'myplugin_options' ); //Name of the settings group we want to display
			
			// output setting sections
			do_settings_sections( 'myplugin' );//Displays the plugins settings//Name of the Menu Slug
			
			// submit button
			//submit_button();
			
			?>
			
		</form>
	</div>
	
	<?php
	
}
?>