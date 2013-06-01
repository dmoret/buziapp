<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_Model extends CI_Model {

    function __construct() {
        parent::__construct();
        
    }
    
    public function getUser($data)
    {            
        
        $column = key($data);
        $value = $data[$column];
        
        if($column == 'password')
            $value = crypt($value,SALT);

       $result = $this->mongo_db
                      ->where(array($column => $value))
                      ->get('users'); 
        
        return $result[0];
        
    }
    
    public function getUsers($data=null)
    {            
      
        if($data){
            $column = key($data);
            $value = $data[$column];
            $result =  $this->mongo_db->where(array($column => $value))->get('users');  //testing
        }else{
            $result = $this->mongo_db->get('users'); 
        } 
        
        return $result; 
        
    }
}