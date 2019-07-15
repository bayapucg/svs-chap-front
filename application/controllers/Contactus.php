<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactus extends CI_Controller
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
			
			if($this->input->post('submit')){
			    $result = $this->Common_module->add_record();
				if($result){
					$this->session->set_flashdata('msg_succ', 'contact form sucees.');
					redirect('contact-us');
				}else{
					$data['msg'] = "Some error occured. Please try again later.";
				}
			}
			
		     $this->load->view('contact-us-view');
			 $this->load->view($this->footer);
	    }
	
	
	
		
}