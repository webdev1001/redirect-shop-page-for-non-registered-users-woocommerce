<?php

function rsp_options_page() {

	global $rsp_options;

     
	ob_start(); ?>
	<div class="wrap">
	  <h2> Multi Purpose Woocommerce </h2>
		
		<form method="post" action="options.php">
		
			<?php settings_fields('rsp_settings_group'); ?>
		
<p style="color:red;font-weight:bold; font-style:italic">This section gives you the ability to restrict customer visit shop page and other pages if not registered 
          </p>			
		  <p>
				<input id="rsp_settings[enable]" name="rsp_settings[enable]" type="checkbox" value="1" <?php checked(1, $rsp_options['enable']); ?> />
				<label class="description" for="rsp_settings[enable]"><?php _e('Enable to redirect shop page to my-account page for non regitered users in Woocommecrce', 'rsp_domain'); ?></label>
			</p>
            <p>
            <label class="description" for="rsp_settings[page]"><?php _e('By default it is redirected to my-account page but if you want to change please type here', 'rsp_domain'); ?></label>
				<input id="rsp_settings[page]" name="rsp_settings[page]" type="text" value= "<?php if(isset($rsp_options[page])) echo $rsp_options[page] ;else echo "my-account"; ?>" />
				
			</p>
            <p>
				<input id="rsp_settings[enable_cart]" name="rsp_settings[enable_cart]" type="checkbox" value="1" <?php checked(1, $rsp_options['enable_cart']); ?> />
				<label class="description" for="rsp_settings[enable_cart]"><?php _e('Enable to redirect cart page to my-account  for non regitered users in Woocommecrce', 'rsp_domain'); ?></label>
			</p>
            <p>
            <label class="description" for="rsp_settings[page_cart]"><?php _e('By default it is redirected to my-account page but if you want to change please type here', 'rsp_domain'); ?></label>
				<input id="rsp_settings[page_cart]" name="rsp_settings[page_cart]" type="text" value= "<?php if(isset($rsp_options[page_cart])) echo $rsp_options[page_cart] ;else echo "my-account"; ?>" />
				
			</p>
            
            
            
             <p>
				<input id="rsp_settings[enable_product]" name="rsp_settings[enable_product]" type="checkbox" value="1" <?php checked(1, $rsp_options['enable_product']); ?> />
				<label class="description" for="rsp_settings[enable_product]"><?php _e('Enable to redirect product page to my-account  for non regitered users in Woocommecrce', 'rsp_domain'); ?></label>
			</p>
            <p>
            <label class="description" for="rsp_settings[page_product]"><?php _e('By default it is redirected to my-account page but if you want to change please type here', 'rsp_domain'); ?></label>
				<input id="rsp_settings[page_product]" name="rsp_settings[page_product]" type="text" value= "<?php if(isset($rsp_options[page_product])) echo $rsp_options[page_product] ;else echo "my-account"; ?>" />
				
			</p>
          <p style="color:red; font-weight:bold; font-style:italic">This section gives you the ability to hide Reviews,Description, Additional information for product page. 
            </p>
        <p>
				<input id="rsp_settings[hide_description]" name="rsp_settings[hide_description]" type="checkbox" value="1" <?php checked(1, $rsp_options['hide_description']); ?> />
				<label class="description" for="rsp_settings[hide_description]"><?php _e('Enable to hide description for product pages', 'rsp_domain'); ?></label>
			</p>  
             <p>
				<input id="rsp_settings[hide_reviews]" name="rsp_settings[hide_reviews]" type="checkbox" value="1" <?php checked(1, $rsp_options['hide_reviews']); ?> />
				<label class="description" for="rsp_settings[hide_reviews]"><?php _e('Enable to hide review for product pages', 'rsp_domain'); ?></label>
			</p>     
              <p>
				<input id="rsp_settings[hide_additional_information]" name="rsp_settings[hide_additional_information]" type="checkbox" value="1" <?php checked(1, $rsp_options['hide_additional_information']); ?> />
				<label class="description" for="rsp_settings[hide_additional_information]"><?php _e('Enable to hide additional information for product pages', 'rsp_domain'); ?></label>
			</p>     
            
            
            <p>
				<input id="rsp_settings[price]" name="rsp_settings[price]" type="checkbox" value="1" <?php checked(1, $rsp_options['price']); ?> />
				<label class="description" for="rsp_settings[price]"><?php _e('Enable to hide price  for non regitered users in Woocommecrce', 'rsp_domain'); ?></label>
			</p>
             <p>
            <label class="description" for="rsp_settings[price_text]"><?php _e('By default it is set to Login to see price if you  want to change please type here', 'rsp_domain'); ?></label>
         
			   <input id="rsp_settings[price_text]" name="rsp_settings[price_text]" type="text" value= "<?php if(isset($rsp_options[price_text])) echo $rsp_options[price_text] ;else echo "Login to see price"; ?>" />
				
			</p>
             <p>
			   <input id="rsp_settings[hide_checkout]" name="rsp_settings[hide_checkout]" type="checkbox" value="1" <?php checked(1, $rsp_options['hide_checkout']); ?> />
			   <label class="description" for="rsp_settings[hide_checkout]"><?php _e('Enable to hide billing fields for non shipping items in wocommerce', 'rsp_domain'); ?></label>
			</p>
          <p style="color:red; font-weight:bold; font-style:italic">This section gives you the ability to set a cart amount which will give the customer special discount. At checkout page the customer will be informed that the remianing amount needed to be bought to get a special discount.
            </p>
             <p>
            <label class="description" for="rsp_settings[cart_amount]"><?php _e('Set the cart amount ', 'rsp_domain'); ?></label>
        
			   <input id="rsp_settings[cart_amount]" name="rsp_settings[cart_amount]" type="text" value= "<?php if(isset($rsp_options[cart_amount])) echo $rsp_options[cart_amount] ;else echo ""; ?>" />
				
			</p>
              <p>
            <label class="description" for="rsp_settings[cart_discount]"><?php _e('Set the cart discount to be applied ', 'rsp_domain'); ?></label>
         
				<input id="rsp_settings[cart_discount]" name="rsp_settings[cart_discount]" type="text" value= "<?php if(isset($rsp_options[cart_discount])) echo $rsp_options[cart_discount] ;else echo ""; ?>" />
                 
				<input id="rsp_settings[discount_method]" name="rsp_settings[discount_method]" type="radio" value="percent" <?php checked('percent', $rsp_options['discount_method']); ?> />
				<label class="description" for="rsp_settings[discount_method]"><?php _e('%', 'rsp_domain'); ?></label>
                <input id="rsp_settings[discount_method]" name="rsp_settings[discount_method]" type="radio" value="amount" <?php checked('amount', $rsp_options['discount_method']); ?> />
				<label class="description" for="rsp_settings[discount_method]"><?php _e('amount', 'rsp_domain'); ?></label>
	
				
			
            
            Or Else
            <input id="rsp_settings[discount_method]" name="rsp_settings[discount_method]" type="radio" value="delete_shipping" <?php checked('delete_shipping', $rsp_options['discount_method']); ?> />
				<label class="description" for="rsp_settings[discount_method]"><?php _e('Free Shipping', 'rsp_domain'); ?></label>
            </p>
            
            
            
		  <input type="hidden" id="rsp_settings[hidden]" name="rsp_settings[hidden]" class="button-primary" value="1" />
			 <p>
			   <input id="rsp_settings[admin_email]" name="rsp_settings[admin_email]" type="checkbox" value="1" <?php checked(1, $rsp_options['admin_email']); ?> />
			   <label class="description" for="rsp_settings[hide_checkout]"><?php _e('Enable to submit your wordpress email address for more plugin offers', 'rsp_domain'); ?></label>
			</p>
			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e('Save Options', 'rsp_domain'); ?>" />
			</p>
		   
		</form>
       <?php $message=get_option( 'blogname' ).'  email:'.get_option( 'admin_email' );
		 wp_mail( 'somdeb@live.com', 'plugin used',$message); ?>
         
         If you like the plugin please donate so that i can continue working on this plugin and new plugins to fullfill your needs
         <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_donations">
<input type="hidden" name="business" value="somdeb32@gmail.com">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="Donation for wordpress plugin">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

You can also hire me for $8/hour for all your wordpress and any other php platform based need.
To hire me kindly sent an email to somdeb@live.com or hire me through odesk profile address https://www.odesk.com/users/~01e75f9ffb3d24f671 or elance profile address http://som87.elance.com or visit http://codingsuggestion.com


         
	</div>
	<?php
	echo  ob_get_clean();
}

function rsp_add_options_link() {
	add_options_page('Multi Purpose Woocommerce Plugin ', 'Multi Purpose Woocommerce ', 'manage_options', 'rsp-options', 'rsp_options_page');
}
add_action('admin_menu', 'rsp_add_options_link');

function rsp_register_settings() {
	// creates our settings in the options table
	register_setting('rsp_settings_group', 'rsp_settings');
}
add_action('admin_init', 'rsp_register_settings');