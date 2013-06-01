<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct()
    {
		parent::__construct();
	}

	public function index()
	{ 
		$data['view'] = 'dashboard';
        
    	$this->load->view('template/view',$data);
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */