<?php
add_action('template_redirect', 'custom_redirect_screen');
function custom_redirect_screen(){
    if(is_shop())
	{
		wp_redirect(home_url()); // redirect on home page if open woocommerce shop page
		exit();
	}
	return true;
}
?>
