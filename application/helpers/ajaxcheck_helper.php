<?php 
/**
 * Ajax Check Helper
 *
 * determins if request is ajax or not
 *
 * @authors    Daniel Moret
 * @copyright  2013 Daniel Moret
 * @version    Beta 1.0
 */	
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * AJAX check
 */
if(!function_exists('checkAuth')){
	
	function checkAjaxRequest() 
	{
        if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) 
        && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

	        return true;
        }
        return false;
	}
	
}
