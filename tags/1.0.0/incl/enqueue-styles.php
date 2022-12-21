<?php

/**
 * @author BAKKBONE Australia
 * @package BbrEnqueueStyles
 * @license GNU General Public License (GPL) 3.0
**/


defined("BBR_EXEC") or die("Silence is golden");

/**
 * BbrEnqueueStyles
**/
class BbrEnqueueStyles{


	/**
	 * BbrEnqueueStyles:__construct()
	**/
	function __construct()
	{
	
		// front-end
		add_action("wp_enqueue_scripts", array($this, "bbrLoadStyles"));
	
	}
	
	
	/**
	 * BbrEnqueueStyles:bbrLoadStyles
	 * ref: https://developer.wordpress.org/reference/functions/wp_enqueue_style/
	**/
	function bbrLoadStyles()
	{
		wp_enqueue_style("bbr_default", BBR_URL . "assets/css/default.css", array(),"1.0.0","all" );
	}
	
	
}
