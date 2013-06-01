<?php 
/**
 * Auth Helper
 *
 * checks user id session for user authentication
 *
 * @authors    Daniel Moret
 * @copyright  2013 Daniel Moret
 * @version    Beta 1.0
 */	
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Check User Authentication
 */
if(!function_exists('checkAuth')){
	
	function checkAuth() 
	{
        $ci =& get_instance();
        
        if($ci->session->userdata('user_id'))
            return true;
        
        return false;
	}
	
}
