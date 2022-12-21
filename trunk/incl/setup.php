<?php

/**
 * @author BAKKBONE Australia
 * @package BakkboneBillingAtRegistration
 * @license GNU General Public License (GPL) 3.0
**/


defined("BBR_EXEC") or die("Silence is golden");

/**
 * BakkboneBillingAtRegistration
**/
class BakkboneBillingAtRegistration{
	
	/**
	 * BakkboneBillingAtRegistration:__construct()
	**/
	function __construct()
	{
		$enqueueStyles = new BbrEnqueueStyles();  
		$admin_notices = new BbrAdminNotices();  
		$WooSettings = new BbrWooSettings();
		$rest_api  = new BbrRestApi();  
		$BbrCore = new BbrCore();
	}
	
	
}

