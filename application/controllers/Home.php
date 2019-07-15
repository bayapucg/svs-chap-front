<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	
	 
   public $header = '../views/frantend/main-header.php';
   public $footer = '../views/frantend/main-footer.php';
	
	public function __construct()
	{
		parent::__construct();			
	     $this->load->model('Common_module');
	
	}
	
	    public function index() {
		     $this->load->view($this->header);
			 $data['record'] = $this->Common_module->get_banners();
			 if($this->input->post('submit')){
			    $result = $this->Common_module->add_record();
				if($result){
					$this->session->set_flashdata('msg_succ', 'contact form sucees.');
					redirect('home');
				}else{
					$data['msg'] = "Some error occured. Please try again later.";
				}
			}
		    $this->load->view('home-view',$data);
			$this->load->view($this->footer);
	    }
	
	
	
		
}