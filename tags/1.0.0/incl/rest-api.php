<?php

/**
 * @author BAKKBONE Australia
 * @package BbrRestApi
 * @license GNU General Public License (GPL) 3.0
**/


defined("BBR_EXEC") or die("Silence is golden");

class BbrRestApi{


	/**
	 * BbrRestApi:__construct()
	**/
	function __construct()
	{
		// posts
		add_action("rest_api_init", array($this, "postRestApi"));
		add_action("rest_api_init", array($this, "pageRestApi"));
		// taxonomies
		add_action("rest_api_init", array($this, "categoryRestApi"));
		add_action("rest_api_init", array($this, "postTagRestApi"));
	}
	/**
	 * BbrRestApi:postRestApi()
	 * ref: https://developer.wordpress.org/reference/functions/register_rest_field/
	**/
	function postRestApi(){
	}
	
	/**
	 * BbrRestApi:pageRestApi()
	 * ref: https://developer.wordpress.org/reference/functions/register_rest_field/
	**/
	function pageRestApi(){
	}
	
	/**
	 * BbrRestApi:categoryRestApi()
	 * ref: https://developer.wordpress.org/reference/functions/register_rest_field/
	**/
	function categoryRestApi(){
	}
	
	/**
	 * BbrRestApi:postTagRestApi()
	 * ref: https://developer.wordpress.org/reference/functions/register_rest_field/
	**/
	function postTagRestApi(){
	}
	
	
	
}
