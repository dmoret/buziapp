<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Company extends CI_Controller {
    
    function __construct()
    {
		parent::__construct();
        $this->load->model('users_model');         
	}

	public function index()
	{ 
        $data = array();
        $data['view'] = null;
        
        if(checkAjaxRequest()){
            $template = 'company/view';
        }else{
            $template = 'template/view';
            $data['view'] = 'company/view';  
        }
        
        $users = $this->users_model->getUsers();

        $this->datatables->set_options(array('layout'=>'R<"H"iTCfr>t<"F"lp>','paginate' => true));
        $this->datatables->load_data($users, true); 

        $data['table'] = $this->datatables->generate('users','Company Users',false);                               

    	$this->load->view($template,$data);
	}
    
    public function add()
    {
        if($this->input->post()){
            $result = $this->users_model->addUser();
           // if(is_string($result))
                var_dump($result);
        }
        
        $data['access_options_html'] = '<option value="">Select Access...</option>';
        $access_types = array(1=>'Super Admin',2=>'Admin',3=>'User'); //todo: put in db
        
        foreach($access_types as $value => $name)
        {
            $s = null;
            
            if($this->input->post('access')==$value)
                $s = 'selected="selected"';
                
            $data['access_options_html'] .= '<option value="'.$value.'" '.$s.'>'.$name.'</option>'; 
        }
        
        
        //todo: centralize
        if(checkAjaxRequest()){
            $template = 'company/add';
        }else{
            $template = 'template/view';
            $data['view'] = 'company/add';  
        }
        
        $this->load->view($template,$data);
    }
    
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */