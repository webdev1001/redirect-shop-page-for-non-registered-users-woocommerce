<?php

function rsp_options_page() {

	global $rsp_options;

     
	ob_start(); ?>
	<div class="wrap">
		<h2>Woocommerce Redirect</h2>
		
		<form method="post" action="options.php">
		
			<?php settings_fields('rsp_settings_group'); ?>
		
			
			<p>
				<input id="rsp_settings[enable]" name="rsp_settings[enable]" type="checkbox" value="1" <?php checked(1, $rsp_options['enable']); ?> />
				<label class="description" for="rsp_settings[enable]"><?php _e('Enable to redirect shop page to my-account page for non regitered users in Woocommecrce', 'rsp_domain'); ?></label>
			</p>
            <p>
            <label class="description" for="rsp_settings[page]"><?php _e('By default it is redirected to my-account page but if you want to change please type here', 'rsp_domain'); ?></label>
				<input id="rsp_settings[page]" name="rsp_settings[page]" type="text" value= "<?php if(isset($rsp_options[page])) echo $rsp_options[page] ;else echo "my-account"; ?>" />
				
			</p>
           
            
           
            
			<input type="hidden" id="rsp_settings[hidden]" name="rsp_settings[hidden]" class="button-primary" value="1" />
			
			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e('Save Options', 'rsp_domain'); ?>" />
			</p>
		
		</form>
        
        Want more features? <a href="http://codingsuggestion.com/shop/">Then buy Redirect Shop page for non registered users Woocommerce pro now</a><br/>
        Features included in pro plugin:<br/>
        1. Ability to redirect cart, product page like shop page.<br/>
        2. Ability to hide reviews,product description, additional info<br/>
        3. Ability to hide price for non registerd users.<br/>
        4. Premium Support<br/>
		
	</div>
	<?php
	echo  ob_get_clean();
}

function rsp_add_options_link() {
	add_options_page('Redirect shop page', 'Redirect Shop Page', 'manage_options', 'rsp-options', 'rsp_options_page');
}
add_action('admin_menu', 'rsp_add_options_link');

function rsp_register_settings() {
	// creates our settings in the options table
	register_setting('rsp_settings_group', 'rsp_settings');
}
add_action('admin_init', 'rsp_register_settings');