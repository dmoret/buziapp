<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct()
    {
		parent::__construct();
	}

	public function index()
	{ 
		$data = null;
        
    	$this->load->view('dashboard',$data);
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */