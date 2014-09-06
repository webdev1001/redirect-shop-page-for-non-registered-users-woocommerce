<?php

function rts_add_content() {
 $rsp_options = get_option('rsp_settings');
	
	
	
	if(is_array($rsp_options)&&$rsp_options['enable']==1)
	{
		

	add_action('template_redirect','rsp_shop_for_login_user');
function rsp_shop_for_login_user(){
 $rsp_options = get_option('rsp_settings');
  if( is_shop() && ! is_user_logged_in() )
    wp_safe_redirect( home_url('/'.$rsp_options["page"]));
}
	}
	

}
 add_action( 'after_setup_theme', 'rts_add_content' ); ?>