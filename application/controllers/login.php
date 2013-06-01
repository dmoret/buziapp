<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        echo '<pre>';print_r($this->session->all_userdata());   echo '</pre>';
        $data['view'] = 'login';
        
		$this->load->view('template/view',$data);
	}
    
    public function auth($password=null)
    {
        if(!$password)
            $password = $this->input->post('password');
        
         $this->load->model('users_model');
         $result = $this->users_model->getUser(array('password' => $password));

         if(!empty($result['_id'])){
            $this->session->set_userdata('user_id', $result['_id']);
            exit('1');
         }else{
             exit('0');
         }         
    }
    
    public function check()
    {
        if($this->session->userdata('user_id'))
            exit('1');
            
        exit('0');
    }
    
    public function test($column=null,$value=null)
    {

        
         $this->load->model('users_model');

      
        
        // $result = $this->mongo_db->insert('foo', array('foo'=>'bar'));

/*
        $result = $this->mongo_db->insert('users', array('_id'=>1,'first_name'=>'Daniel',
                                                'last_name'=>'Moret',
                                                'username'=>'dmoret',
                                                'email'=>'dmoret27@gmail.com',
                                                'password'=>crypt('111',SALT),
                                                'title'=>'Creator',
                                                'access_id'=>1,
                                                'date_created'=>'2013-05-19 00:00:00',
                                                'date_modified'=>NULL));
*/
       //$result = $this->users_model->authUser($username,$password);
       //$result = $this->mongo_db->where(array('email'=>'dmoret27@gmail.com'))->update('users');
/*
     $result = $this->mongo_db->insert('access', array('_id'=>3,
                                                'name'=>'User')
                                                );
*/
        //$result = $this->mongo_db->where(array('_id'=>1))->set(array('name'=>'Super Admin'))->update('access');
      // echo '<pre>'; print_r($result); echo '</pre>';
       
       // $this->mongo_db->add_index('users', 
       //  array('password' => 'ASC'));
        
         //$result = $this->mongo_db->remove_all_indexes('users');
         //$result = $this->mongo_db->delete
         // echo '<pre>'; print_r($result); echo '</pre>';
        // $this->mongo_db->remove_all_indexes('users');
        
        // $list_indexes = $this->mongo_db->list_indexes('users');
        //echo '<pre>'; print_r($list_indexes); echo '</pre>';

        
         //$result = $this->mongo_db->pull('users', array('email'=>'dmoret27@gmail.com'))->update('users');
         //$result = $this->mongo_db->where(array('email'=>'dmoret27@gmail.com'))->delete('users');
         // echo '<pre>'; print_r($result); echo '</pre>';
          
        $all_users = $this->users_model->getUsers();
         echo 'all_users<pre>'; print_r($all_users); echo '</pre>';
         //echo 'ci post<pre>'; print_r($this->input->post('password')); echo '</pre>';  
       //  $this->users_model->authUser($this->input->post('password'));
    }
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */