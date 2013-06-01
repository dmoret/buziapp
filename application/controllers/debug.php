<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Debug extends CI_Controller {

    function __construct()
    {
		parent::__construct();
	}

	public function index()
	{ 
		//$data['test'] = 'debug';
        $data = null;
        
    	$this->load->view('debug',$data);
	}
    
    public function clear_sessions()
    {
        $this->session->sess_destroy();
        
        if($this->session->userdata('user_id'))
            exit('Error! sessions not cleared');
            
        exit('Sessions successfully cleared');   
        
    }
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */