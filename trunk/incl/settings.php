<?php

/**
 * @author BAKKBONE Australia
 * @package SettingsWooSetting
 * @license GNU General Public License (GPL) 3.0
**/


defined("BBR_EXEC") or die("Silence is golden");

class SettingsWooSetting{
	
	
	/**
	 * SettingsWooSetting:__construct()
	**/
	function __construct(){
		add_filter("woocommerce_get_sections_account", array($this, "BbrSettingsaddSection"));
		add_filter("woocommerce_get_settings_account", array($this, "BbrSettingsSetting"), 10, 2);
	}
	
	
	/**
	 * SettingsWooSetting:BbrSettingsaddSection()
	**/
	function BbrSettingsaddSection($sections){
		$sections["bbr_settings"] = __("Billing at Registration", "bakkbone-billing-at-registration");
		return $sections;
	}
	
	
	/**
	 * SettingsWooSetting:BbrSettingsSetting()
	**/
	function BbrSettingsSetting($settings, $current_section){
		if ($current_section == "bbr_settings"){
			$settings = array();
			$settings[] = array("type" => "title", "name" => __("Billing at Registration","bakkbone-billing-at-registration"), "desc" => __("Choose which billing fields to request on the My Account Page registration form. For this plugin to function, you must enable 'Allow customers to create an account on the \"My account\" page'.", "bakkbone-billing-at-registration" ), "id" => "bbr_settings" );
		
			
			// first-name
			$first_name_options = array(
			    "off" => __("Off","bakkbone-billing-at-registration"),
				"required" => __("Required","bakkbone-billing-at-registration"),
				"optional" => __("Optional","bakkbone-billing-at-registration"),
			    );
			$settings[] = array(
				"name" => __("Request First Name", "bakkbone-billing-at-registration"),
				"id" => "bbr_first_name",
				"type" => "radio",
				"css" => "",
				"default" => "Off",
				"options" => $first_name_options,
			);
			
			
			// last-name
			$last_name_options = array(
			    "off" => __("Off","bakkbone-billing-at-registration"),
				"required" => __("Required","bakkbone-billing-at-registration"),
				"optional" => __("Optional","bakkbone-billing-at-registration"),
			    );			
			$settings[] = array(
				"name" => __("Request Last Name", "bakkbone-billing-at-registration"),
				"id" => "bbr_last_name",
				"type" => "radio",
				"css" => "",
				"default" => "",
				"options" => $last_name_options,
			);
			
			
			// company
			$copmany_options = array(
			    "off" => __("Off","bakkbone-billing-at-registration"),
				"required" => __("Required","bakkbone-billing-at-registration"),
				"optional" => __("Optional","bakkbone-billing-at-registration"),
			    );
			$settings[] = array(
				"name" => __("Request Company", "bakkbone-billing-at-registration"),
				"id" => "bbr_company",
				"type" => "radio",
				"css" => "",
				"default" => "",
				"options" => $copmany_options,
			);
			
			
			// address-1
			$address_1_options = array(
			    "off" => __("Off","bakkbone-billing-at-registration"),
				"required" => __("Required","bakkbone-billing-at-registration"),
				"optional" => __("Optional","bakkbone-billing-at-registration"),
			    );
			$settings[] = array(
				"name" => __("Request Address 1", "bakkbone-billing-at-registration"),
				"id" => "bbr_address_1",
				"type" => "radio",
				"css" => "",
				"default" => "",
				"options" => $address_1_options,
			);
			
			
			// address-2
			$address_2_options = array(
			    "off" => __("Off","bakkbone-billing-at-registration"),
				"required" => __("Required","bakkbone-billing-at-registration"),
				"optional" => __("Optional","bakkbone-billing-at-registration"),
			    );
			$settings[] = array(
				"name" => __("Request Address 2", "bakkbone-billing-at-registration"),
				"id" => "bbr_address_2",
				"type" => "radio",
				"css" => "",
				"default" => "",
				"options" => $address_2_options,
			);
			
			
			// city
			$city_options = array(
			    "off" => __("Off","bakkbone-billing-at-registration"),
				"required" => __("Required","bakkbone-billing-at-registration"),
				"optional" => __("Optional","bakkbone-billing-at-registration"),
			    );
			$settings[] = array(
				"name" => __("Request City", "bakkbone-billing-at-registration"),
				"id" => "bbr_city",
				"type" => "checkbox",
				"type" => "radio",
				"css" => "",
				"default" => "",
				"options" => $city_options,
			);
			
			
			// postcode
			$postcode_options = array(
			    "off" => __("Off","bakkbone-billing-at-registration"),
				"required" => __("Required","bakkbone-billing-at-registration"),
				"optional" => __("Optional","bakkbone-billing-at-registration"),
			    );
			$settings[] = array(
				"name" => __("Request Postcode", "bakkbone-billing-at-registration"),
				"id" => "bbr_postcode",
				"type" => "radio",
				"css" => "",
				"default" => "",
				"options" => $postcode_options,
			);
			
			
			// country
			$country_options = array(
			    "off" => __("Off","bakkbone-billing-at-registration"),
				"required" => __("Required","bakkbone-billing-at-registration"),
				"optional" => __("Optional","bakkbone-billing-at-registration"),
			    );
			$settings[] = array(
				"name" => __("Request Country", "bakkbone-billing-at-registration"),
				"id" => "bbr_country",
				"type" => "radio",
				"css" => "",
				"default" => "",
				"options" => $country_options,
			);
			
			
			// state
			$state_options = array(
			    "off" => __("Off","bakkbone-billing-at-registration"),
				"required" => __("Required","bakkbone-billing-at-registration"),
				"optional" => __("Optional","bakkbone-billing-at-registration"),
			    );
			$settings[] = array(
				"name" => __("Request State", "bakkbone-billing-at-registration"),
				"id" => "bbr_state",
				"type" => "radio",
				"css" => "",
				"default" => "",
				"options" => $state_options,
			);
			
			
			// phone
			$phone_options = array(
			    "off" => __("Off","bakkbone-billing-at-registration"),
				"required" => __("Required","bakkbone-billing-at-registration"),
				"optional" => __("Optional","bakkbone-billing-at-registration"),
			    );
			$settings[] = array(
				"name" => __("Request Phone", "bakkbone-billing-at-registration"),
				"id" => "bbr_phone",
				"type" => "radio",
				"css" => "",
				"default" => "",
				"options" => $phone_options,
			);
			
			$settings[] = array("type" => "sectionend", "id" => "bbr_settings");
			return $settings;
		}else{
			return $settings;
		}
	}
	
	
}