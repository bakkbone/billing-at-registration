<?php

/**
 * @author BAKKBONE Australia
 * @package BbrAdminNotices
 * @license GNU General Public License (GPL) 3.0
**/


defined("BBR_EXEC") or die("Silence is golden");

/**
 * BbrAdminNotices
**/
class BbrAdminNotices{


	function __construct()
	{
		if (!in_array("woocommerce/woocommerce.php", apply_filters("active_plugins", get_option("active_plugins")))){
			add_action("admin_notices",array($this,"bbrWooSettingsNotice"));
		}
		if (get_option('woocommerce_enable_myaccount_registration') == 'no') {
			add_action("admin_notices",array($this,"bbrWooCompatibilityNotice"));
		}
	}
	

	function bbrWooSettingsNotice( $admin_notice){
		$plugin_data = get_plugin_data(BBR_FILE);
		echo '<div id="message-woo-settings" class="error notice">
			<p>'. sprintf(__('<strong>%s</strong> requires <a href="https://woocommerce.com/">WooCommerce</a> plugin to be installed and activated on your site.','bakkbone-billing-at-registration'), $plugin_data["Name"]).'</p>
		</div>';
	}
	
	function bbrWooCompatibilityNotice( $admin_notice){
		$plugin_data = get_plugin_data(BBR_FILE);
			$url = esc_url( add_query_arg(
	    array(
		'page'      =>  'wc-settings',
		'tab'       =>  'account'
		),
		get_admin_url() . 'admin.php'
	) );
		echo '<div id="message-woo-compatibility" class="error notice is-dismissable">
			<p>'. sprintf(__('<strong>%s</strong> requires the <strong>Allow customers to create an account on the "My account" page</strong> setting to be checked, to be able to function. <a href="'. $url . '">Please click here to rectify</a>','bakkbone-billing-at-registration'), $plugin_data["Name"]).'</p>
		</div>';
	}
	
	
}
