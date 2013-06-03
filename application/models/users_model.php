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

       $result = $this->mongo_db->select(array('first_name',
                                              'last_name',
                                              'email',
                                              'title',
                                              'access_id',
                                              'date_created'))
                                ->where(array($column => $value))
                                ->get('users'); 
        
        return $result[0];
        
    }
    
    public function getUsers($data=null)
    {            
      $statment = $this->mongo_db->select(null,array('_id','username','password'));
        if($data){
            $column = key($data);
            $value = $data[$column];
            $result =  $statment->where(array($column => $value))->get('users');
        }else{
            $result = $statment->get('users'); 
        } 
        
        return $result; 
        
    }
    
    public function addUser()
    { 
        if($this->input->post('fname') && $this->input->post('lname') && $this->input->post('email') &&
        $this->input->post('password') && $this->input->post('title') && $this->input->post('access')){ 
        
            $result = $this->mongo_db->insert('users', 
                                            array('first_name' => $this->input->post('fname'),
                                                  'last_name' => $this->input->post('lname'),
                                                  'email' => $this->input->post('email'),
                                                  'password' => crypt($this->input->post('password'),SALT),
                                                  'title' => $this->input->post('title'),
                                                  'access_id' => $this->input->post('access'),
                                                  'date_created' => date('Y-m-d H:i:s'),
                                                  'date_modified' => null));
                                                
            return $result;
        
        }
        
        return MSG_REQUIRED;
        
    }
}