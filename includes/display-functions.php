<?php
 session_start(); 

function rts_add_content() {
	
 $rsp_options = get_option('rsp_settings');
	
	
	//echo "ssss";
	if(is_array($rsp_options)&&$rsp_options['enable']==1)
	{
		//echo "ssss";

	add_action('template_redirect','rsp_shop_for_login_user');
function rsp_shop_for_login_user(){
 $rsp_options = get_option('rsp_settings');
  if( is_shop() && ! is_user_logged_in() )
    wp_safe_redirect( home_url('/'.$rsp_options["page"]));
}
	}
	
if(is_array($rsp_options)&&$rsp_options['enable_cart']==1)
	{
		//echo "ssss";

	add_action('template_redirect','rsp_cart_for_login_user');
function rsp_cart_for_login_user(){
 $rsp_options = get_option('rsp_settings');
  if( is_cart() && ! is_user_logged_in() )
    wp_safe_redirect( home_url('/'.'/'.$rsp_options["page_cart"]));
}
	}	












	
if(is_array($rsp_options)&&$rsp_options['enable_product']==1)
	{
		//echo "ssss";

	add_action('template_redirect','rsp_product_for_login_user');
function rsp_product_for_login_user(){
 $rsp_options = get_option('rsp_settings');
  if( is_product() && ! is_user_logged_in() )
    wp_safe_redirect( home_url('/'.$rsp_options["page_product"]));
}
	}	
	
	
	
	

if(is_array($rsp_options)&&$rsp_options['hide_checkout']==1)
	{
		function hide_billing_fields( $fields ) {
	global $woocommerce;

	 
	

	
	if ( $woocommerce->cart->needs_shipping() ) {
		return $fields;
	}

 
  unset( $fields['billing_country'] );
  unset( $fields['billing_first_name'] );
  unset( $fields['billing_last_name'] );
  unset( $fields['billing_company'] );
  unset( $fields['billing_address_1'] );
  unset( $fields['billing_address_2'] );
  unset( $fields['billing_city'] );
  unset( $fields['billing_state'] );
  unset( $fields['billing_postcode'] );
  unset( $fields['billing_phone'] );

	return $fields;
}
add_filter( 'woocommerce_billing_fields', 'hide_billing_fields', 20 );




	}	











	
	
if(is_array($rsp_options)&&$rsp_options['hide_description']==1)
	{
	add_filter( 'woocommerce_product_tabs', 'rsp_remove_description_tabs', 98 );
 
function rsp_remove_description_tabs( $tabs ) {
 

unset( $tabs['description'] ); // Remove the description tab*/

 
return $tabs;
}
	}	











	
if(is_array($rsp_options)&&$rsp_options['hide_reviews']==1)
	{
	add_filter( 'woocommerce_product_tabs', 'rsp_remove_reviews_tabs', 98 );
 
function rsp_remove_reviews_tabs( $tabs ) {
 
/*
unset( $tabs['description'] ); // Remove the description tab*/
unset( $tabs['reviews'] ); // Remove the reviews tab


 
return $tabs;
}
	}	
	
	
	
	
if(is_array($rsp_options)&&$rsp_options['hide_additional_information']==1)
	{
	add_filter( 'woocommerce_product_tabs', 'rsp_remove_additional_information_tabs', 98 );
 
function rsp_remove_additional_information_tabs( $tabs ) {
 
unset( $tabs['additional_information'] ); // Remove the additional information tab
 
return $tabs;
}
	}	











	
	if(is_array($rsp_options)&&$rsp_options['price']==1)
	{
	add_filter('woocommerce_get_price_html','rsp_members_only_price');
function rsp_members_only_price($price){
$rsp_options = get_option('rsp_settings');
if(is_user_logged_in() ){
	
    return $price;
}

else return  '<a href="' .get_permalink(woocommerce_get_page_id('myaccount')). '">'.$rsp_options['price_text'].'</a>';
}
function remove_loop_button(){
	if(!is_user_logged_in() ){
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
}
}
add_action('init','remove_loop_button');


	
}


if(is_array($rsp_options)&&$rsp_options['cart_amount']!="")
	{
		

	add_action('woocommerce_after_cart','rsp_product_for_login_user');
function rsp_product_for_login_user(){
 $rsp_options = get_option('rsp_settings');
 global $woocommerce;
 $currency=get_woocommerce_currency_symbol();

 $total=floatval( preg_replace( '#[^\d.]#', '', $woocommerce->cart->get_cart_total() ) );
  if( (is_cart() || is_checkout()) && $rsp_options['cart_amount']> $total)
  
  {
	  
    if($rsp_options['discount_method']=="delete_shipping")
	{
		$diff=$rsp_options['cart_amount']-$total;
		$message= "Shop for amount  ". $diff." more to get shipping free"; 
	}
	 if($rsp_options['discount_method']=="percent")
	{
		$diff=$rsp_options['cart_amount']-$total;
		$message= "Shop for amount ". $diff." more to get ".$rsp_options[cart_discount]."% off in total cart amount"; 
	}
	 if($rsp_options['discount_method']=="amount")
	{
		$diff=$rsp_options['cart_amount']-$total;
		$message= "Shop for amount ".$currency. $diff." more to get ".$currency.$rsp_options[cart_discount]." off in total cart amount"; 
	}
	
	echo '<span style="color:red;">'.$message.'</span>';
	
  }
else
{
	 
     
	
	
	
	
}
	
	
	
	
	
	
  }
}
	}	
	
	function discount()
	{
		$rsp_options = get_option('rsp_settings');
		global $discount;
		global $woocommerce;
$total=floatval( preg_replace( '#[^\d.]#', '', $woocommerce->cart->get_cart_total() ) );

$currency=get_woocommerce_currency_symbol();

 if($rsp_options['cart_amount']< $total)
  
  {
	 if($rsp_options['discount_method']=="delete_shipping")
	{
		
		 $woocommerce->cart->shipping_total =0;
		 
		$diff=$rsp_options['cart_amount']-$total;
		$message= "Free Shipping Applied";
		 
		 // Hide standard shipping option when free shipping is available

	}
	 if($rsp_options['discount_method']=="percent")
	{
		
	  $discount=($total*$rsp_options['cart_discount'])/100;
	  
	  $diff=$rsp_options['cart_amount']-$total;
		$message= $rsp_options[cart_discount]."% off discount applied  in your total cart amount";
	}
	 if($rsp_options['discount_method']=="amount")
	{
		
		$discount=$rsp_options['cart_discount'];
		
		$diff=$rsp_options['cart_amount']-$total;
		$message= $currency.$rsp_options[cart_discount]." off applied in your total cart amount";
	}

		
	  
		$woocommerce->cart->discount_total =$discount;
		echo '<span style="color:red;">'.$message.'</span>';
  }
		
	}
	add_action( 'woocommerce_calculate_totals', 'discount' );

if ($rsp_options['discount_method']=="delete_shipping") {

add_filter( 'woocommerce_available_shipping_methods', 'hide_standard_shipping_when_free_is_available' , 10, 1 );

/**
 *  Hide Standard Shipping option when free shipping is available
 *
 * @param array $available_methods
 */
function hide_standard_shipping_when_free_is_available( $available_methods ) {

    		
    

    return array( $available_methods['free_shipping'] );
	
	}
}	

 add_action( 'after_setup_theme', 'rts_add_content' ); ?>