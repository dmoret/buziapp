<?php 
/**
 * Response Messages Helper
 *
 * success,warning, and error messages to be displayed to user
 *
 * @authors    Daniel Moret
 * @copyright  2013 Daniel Moret
 * @version    Beta 1.0
 */	
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Build data table
 *
 * @params  string  $url   URL to get contents from
 */
if(!function_exists('getDbMsg')){
	
	function getAuthMsg($name) 
	{
	    switch($name)
        {
            case 'auth':
                break;
            case '':
                break;
        }
        
		return $data_table;
	}
	
}
