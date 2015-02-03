<?php
	class v_myitem extends CI_controller{
	public function __construct(){
		   parent::__construct();
		   
		   //model
		   
		   $this->load->model("vendor_m");
		}
		public function index(){
			
			$vid = $this->session->userdata('v_id');
			$this->vendor_m->set_vendor_id($vid);
			$this->load->view("v_myitem_v");
		}
		
	}
	
?>