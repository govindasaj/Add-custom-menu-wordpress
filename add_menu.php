<?php 
add_action('admin_menu', 'import_custom_csvs');
function import_custom_csvs() {
	add_menu_page( 
		  'Import Custom Csv', 
		  'Import Custom Csv', 
		  'edit_posts', 
		  'import_custom_csv', 
		  'import_custom_callback_function', 
		  'dashicons-media-spreadsheet' 
		 );
}
function import_custom_callback_function()
{
	// html of page
}
?>